<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['quantity'];
$c = $_POST['price'];
// query
$sql = "INSERT INTO category(name,quantity,price) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c));
header("location: cat.php");


?>