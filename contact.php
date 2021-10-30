
<?php
$dbc = new mysqli('localhost', 'root', '', 'mobtani');
$sql = "INSERT INTO massage (name, title, email, textbody)
VALUES('{$_POST['name']}', '{$_POST['title']}', '{$_POST['email']}', '{$_POST['textbody']}')";
$result = $dbc -> query($sql);
$dbc -> close();
?>