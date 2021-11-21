<?php

$link=new mysqli('localhost','root','','register');
$link ->set_charset("utf8");

if($link-> connect_errno){
    echo "مشکلی در اتصال به پایگاه داده به وجود آمده".$link-> connect_error;
    exit();
}
$sql="INSERT INTO products (p_name,p_material,p_count,body_text)
VALUES ('{$_POST['p_name']}','{$_POST['p_material']}','{$_POST['p_count']}',
'{$_POST['body_text']}')";

if($result=$link->query($sql))
{
    echo"محصول با موفقیت افزوده شد";
    $link->close();
}





?>