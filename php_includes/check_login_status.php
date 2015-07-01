<?php
/**
 * Created by PhpStorm.
 * User: Anurag
 * Date: 6/29/2015
 * Time: 8:49 AM
 */
session_start();
include_once("dbconnect.php");
// Files that include this file at the very top would NOT require
// connection to database or session_start(), be careful.
// Initialize some vars
$user_ok = false;
$log_id = "";
$log_username = "";
$log_password = "";
// User Verify function
function evalLoggedUser($con, $id, $u, $p)
{
    $sql = "SELECT ip FROM users WHERE id='$id' AND username='$u' AND password='$p' AND activated='1' LIMIT 1";
    $query = mysqli_query($con, $sql);
    $numrows = mysqli_num_rows($query);

    if ($numrows > 0) {
        return true;
    }
}

if (isset($_SESSION["userid"]) && isset($_SESSION["username"]) && isset($_SESSION["password"])) {
    $log_id = preg_replace('#[^0-9]#', '', $_SESSION['userid']);
    $log_username = preg_replace('#[^a-z0-9]#i', '', $_SESSION['username']);
    $log_password = $_SESSION['password'];

    // Verify the user
    $user_ok = evalLoggedUser($con, $log_id, $log_username, $log_password);
    //echo $user_ok;
} else if (isset($_COOKIE["id"]) && isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) {

    $_SESSION['userid'] = preg_replace('#[^0-9]#', '', $_COOKIE['id']);
    $_SESSION['username'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['user']);
    $_SESSION['password'] = $_COOKIE['pass'];
    $log_id = $_SESSION['userid'];
    $log_username = $_SESSION['username'];
    $log_password = $_SESSION['password'];

    // Verify the user
    $user_ok = evalLoggedUser($con, $log_id, $log_username, $log_password);
   // echo $user_ok;
    if ($user_ok == true) {
        // Update their lastlogin datetime field
        $sql = "UPDATE users SET lastlogin=now() WHERE id='$log_id' LIMIT 1";
        $query = mysqli_query($con, $sql);
    }
}
?>