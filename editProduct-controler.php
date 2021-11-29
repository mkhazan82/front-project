<?php
include 'settings.php';
include 'db.php';
$id = $_GET['id'];

$db = new db($dbHost, $dbUser, $dbPass, $dbName);

if(isset($_POST['submit']))
{
    $product_name=$_POST['p_name'];
    $product_material=$_POST['p_material'];
   $product_count=$_POST['p_count'];
  $product_detail=$_POST['body_text'];
    $sql="UPDATE products
    SET p_name=?,p_material=?,p_count=?,body_text=?
    WHERE id=?";
$result=$db->query($sql,$product_name,$product_material,$product_count,$product_detail,$id);


echo "محصول با موفقیت ویرایش شد";
}
else{

$sql="SELECT* FROM products WHERE id=? ";

$result = $db->query($sql,$id);

$product=$result ->fetchArray();

$product_name=$_POST['p_name'];
$product_material=$_POST['p_material'];
$product_count=$_POST['p_count'];
$product_detail=$_POST['body_text'];

include 'editProduct.php';
}
$db->close();
?>