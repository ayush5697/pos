<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
//$b = $_POST['cashier'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount'];
//$z = $_POST['profit'];
$name = $_POST['name'];
if($d=='credit') {
$f = $_POST['due'];
$sql = "INSERT INTO sales (invoice_number,date,type,amount,due_date,name) VALUES (:a,:c,:d,:e,:f,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$name));
header("location: preview.php?invoice=$a");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$sql = "INSERT INTO sales (invoice_number,date,type,amount,due_date,name) VALUES (:a,:c,:d,:e,:f,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$name));
header("location: preview.php?invoice=$a");
exit();
}
// query



?>