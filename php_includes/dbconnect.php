<?php
/**
 * Created by PhpStorm.
 * User: Anurag
 * Date: 6/28/2015
 * Time: 3:38 PM
 */
$con = mysqli_connect('localhost', 'shubham7_user', 'amspopcorn', 'shubham7_user');
if (!$con) {
    die("Database Connection Failed" . mysql_error());
    exit();
}

?>