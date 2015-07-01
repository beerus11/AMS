<?php
/**
 * Created by PhpStorm.
 * User: Anurag
 * Date: 7/1/2015
 * Time: 10:48 AM
 */
include_once('php_includes/check_login_status.php');
$sql = "SELECT * FROM users_personal_details WHERE id='$log_id' AND username='$log_username'LIMIT 1";
$query = mysqli_query($con, $sql);
$numrows = mysqli_num_rows($query);
if (isset($_GET['type'])) {
    if ($_GET['type'] == "ajax") {
        if ($numrows < 1) {
            header('Content-type: application/json');
            echo json_encode('{"rows":"0"}');
        } else {
            header('Content-type: application/json');
            echo json_encode('{"rows":"1"}');
        }
    }
} else {
    if ($numrows < 1) {
        header("location: profile.php?u=" . $log_username);
    }
}
?>