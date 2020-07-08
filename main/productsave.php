<?php
session_start();
include('../connect.php');

error_reporting(0);
if(isset($_POST['submit']))
{
  $product_name = $_POST['produt_name'];
  $gen_name =$_POST['gen_name'];
  $o_price =$_POST['o_price'];
  $price =$_POST['price'];
  $profit =$_POST['profit'];
  $qty =$_POST['qty'];
  $qty_sold =$_POST['qty_sold'];
  $filename = $_FILES ["upload"]["name"];
$tempname = $_FILES ["upload"]["tmp_name"];
$folder = "image/".$filename;
//print_r($_FILES["upload"]);//to display to function and details of the file
move_uploaded_file($tempname, $folder);

  $qry = "INSERT INTO `products`(`produt_name`, `gen_name`,`o_price`,`price`,`profit`,`qty`,`qty_sold`,`pic`) VALUES ('$name','$password','$folder')";
 
     $query= mysqli_query($con,$qry);
}
?>


    
    


