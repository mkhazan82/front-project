<?php
include 'adminPanel-view.php';
include 'settings.php';
include 'db.php';
$db = new db($dbHost, $dbUser, $dbPass, $dbName);
            $sql="INSERT INTO message(fulname,email,title,bigtext) VALUES('{$_POST['fulname']}', '{$_POST['email']}',
            '{$_POST['title']}','{$_POST['bigtext']}' )";
                echo "پیام با موفقیت ثبت شد";
        $result=$db->query($sql);
        $db ->close();
        ?>
