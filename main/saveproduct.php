<?php
session_start();
include('../connect.php');

$a = $_POST['product_name'];
$b= $_POST['gen_name'];
 $filename = $_FILES["upload"]["name"];
$tempname = $_FILES["upload"]["tmp_name"];
$folder = "image/".$filename;
move_uploaded_file($tempname, $folder);

$c = $_POST['o_price'];

$d= $_POST['price'];
$e = $_POST['profit'];

$f = $_POST['qty'];
$g=$_POST['qty_sold'];
// query
$sql = "INSERT INTO products (product_name,gen_name,pic,o_price,price,profit,qty,qty_sold) VALUES (:a,:b,$folder,:c,:d,:e,:f,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,'pic'=>$folder,':c'=>$c,':d'=>$d,':e'=>$e, ':f'=>$f,':g'=>$g));
header("location: products.php");


?>