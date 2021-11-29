<?php
    
include 'settings.php';
include 'db.php';
$db = new db($dbHost, $dbUser, $dbPass, $dbName);
            $sql="INSERT INTO message(name,title,email,textbody) VALUES('{$_POST['name']}', '{$_POST['title']}',
            '{$_POST['email']}','{$_POST['textbody']}' )";
                
        $result=$db->query($sql);
        $db ->close();
        ?>
