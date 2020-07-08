<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['price'];
$c = $_POST['quantity'];

// query
$sql = "INSERT INTO category (name,price,quantity) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c));
header("location: categori.php");


?>