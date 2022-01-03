<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';

$uid=$_GET['id'];


$db = new db($dbHost, $dbUser, $dbPass, $dbName);



    $sql="DELETE  FROM users WHERE id=?";
    $result=$db->query($sql,$uid);
    echo 'کاربر حذف شد';




    $db->close();


?>
