<?php
/**
 * Created by PhpStorm.
 * User: Anurag
 * Date: 6/28/2015
 * Time: 7:56 PM
 */
session_start();
if ($_POST['username']) {
    include_once("php_includes/dbconnect.php");
    // GATHER THE POSTED DATA INTO LOCAL VARIABLES
    $username = preg_replace('#[^a-z0-9]#i', '', $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = $_POST['password'];
    $userlevel = $_POST['userlevel'];
    // GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
    // DUPLICATE DATA CHECKS FOR USERNAME AND EMAIL
    $sql = "SELECT id FROM users WHERE username='$username' LIMIT 1";
    $query = mysqli_query($con, $sql);
    $username_check = mysqli_num_rows($query);
    $sql = "SELECT id FROM users WHERE email='$email' LIMIT 1";
    $query = mysqli_query($con, $sql);
    $email_check = mysqli_num_rows($query);
    // FORM DATA ERROR HANDLING
    if ($username == "" || $email == "" || $password == "" || $userlevel == "") {
        echo "The form submission is missing values.";
        exit();
    } else if ($username_check > 0) {
        echo "The username you entered is alreay taken";
        exit();
    } else if ($email_check > 0) {
        echo "That email address is already in use in the system";
        exit();
    } else if (strlen($username) < 3 || strlen($username) > 16) {
        echo "Username must be between 3 and 16 characters";
        exit();
    } else if (is_numeric($username[0])) {
        echo 'Username cannot begin with a number';
        exit();
    } else if (!in_array($userlevel, array("g", "s", "t", "xs"))) {
        echo 'Wrong User Type';
        exit();
    } else {
        $cryptpass = md5($password);
        include_once("php_includes/randStrGen.php");
        $p_hash = randStrGen(20) . "$cryptpass";
        // Add user info into the database table for the main site table
        $sql = "INSERT INTO users (username, email, password,userlevel,ip,signup)
		        VALUES('$username','$email','$p_hash','$userlevel','$ip',now())";
        $query = mysqli_query($con, $sql);
        $uid = mysqli_insert_id($con);
        // Create directory(folder) to hold each user's files(pics, MP3s, etc.)
        if (!file_exists("user/$username")) {
            mkdir("user/$username", 0755);
        }
        require_once "php_includes/Mail.php";
        $from = "no-reply@shubhamagarwal.co";
        $to = $email;
        $subject = 'AMS Account Activation';
        $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>www.shubhamagarwal.co</title></head><body>';
        $message .= '<h1>Click the Link To Activate Your Account </h1>';
        $message .= '<a href="http://www.shubhamagarwal.co/activation.php?id=' . $uid . '&u=' . $username . '&e=' . $email . '&p=' . $p_hash . '">
        Click here to activate your account now</a><br /><br />Login after successful activation using your:<br />
         E-mail Address: <b>' . $email . '</b></a>';
        $message .= '</body></html>';
        $host = "mail.shubhamagarwal.co";
        $username = "no-reply@shubhamagarwal.co";
        $password = "amspopcorn";
        $headers = array('From' => $from,
            'To' => $to,
            'Subject' => $subject,
            'MIME-Version' => "1.0",
            'Content-Type' => "text/html; charset=ISO-8859-1"
        );
        $smtp = Mail::factory('smtp',
            array('host' => $host,
                'auth' => true,
                'username' => $username,
                'password' => $password));

        $mail = $smtp->send($to, $headers, $message);

        if (PEAR::isError($mail)) {
            echo("<p>" . $mail->getMessage() . "</p>");
        } else {
            echo("<p>Message successfully sent!</p>");
        }
        echo "signup_success";
        exit();
    }
    exit();
}
?>