<?php

include 'settings.php';
include 'db.php';
$db = new db($dbHost, $dbUser, $dbPass, $dbName);

$sql="INSERT INTO products (p_name,price,p_count,p_image,body_text)
VALUES (?,?,?,?,?,?,?,?,?,?)";

$result=$db->query($sql,$_POST['p_name'],$_POST['price'],$_POST['p_count'],$_POST['p_image'],$_POST['body_text']);

    echo"محصول با موفقیت افزوده شد";
    $db->close();


?>
