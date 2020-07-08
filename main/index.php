<?php include 'header.php'; ?>
<?php include('navfixed.php');?>
    <div class="container-fluid">
      <div class="row-fluid">
	
<!-- 	
	<div class="contentheader">
			<i class    ="icon-dashboard"></i> Dashboard
			</div> 
			<ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul>
			<font style=" font:bold 25px 'Aleo'; color:#0489bd;"><center>Welcome Admin</center></font>-->
<div id="mainmain">
	<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='Cashier') {
?>
 <a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class=""></i><br> Sales</a>
<!--<a href="categori.php"><i class="icon-group icon-2x"></i><br> Categories</a>--> 
<a href="products.php"><i class=""></i><br> Add Product</a>  

<a href="add/index.php"><i class=""></i><br> Show Product</a>
<a href="../index.php"><i class=""></i><br>Logout</a>   
<?php
}
if($position=='admin') {
?>

<a href="products.php"><i class=""></i><br>Add Products</a>

<a href="cat.php"><i class=""></i><br>Add Categories</a>   
<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class=""></i><br> Sales</a>               
                
  
<!--<a href="customer.php"><i class="icon-group icon-2x"></i><br> Customers</a>-->     
 <a href="allproduct.php"><i class=""></i><br> Show all Product</a>     
<a href="salesreport.php?d1=0&d2=0"><i class=""></i><br> Sales Report</a>     
<a href="admin-settings.php"><i class=""></i><br> User Manager</a>  
<?php 
    }                   
    ?>


<div class="clearfix"></div>
</div>
</div>
</div>
</body>
	<!-- <div class="container">
		<div class="row">
			<div class="span3">
				<div class="thumbnails">
					<form method="post" action="/">
					  	<img src="images/images.jpg" name="lakmeimg" style="width: 200px; height: 150px;">
					    <h5 class="thumbnails-title" align="center">Lakme sunscreen lotion</h5>
					    <div align="center">
					    	<button type="submit" class="btn btn-primary">Add to cart</button>
					    </div>
					</form>
				</div>
			</div>
			<div class="span3">
				<div class="thumbnails">
					<form method="post" action="addToCartInsert.php">
					  	<img src="images/images.jpg" name="lakme" style="width: 200px; height: 150px;">
					    <h5 class="thumbnails-title" align="center">Lakme sunscreen lotion</h5>
					    <div align="center">
					    	<button type="submit" class="btn btn-primary">Add to cart</button>
					    </div>
					</form>
				</div>
			</div>
			<div class="span3">
				<div class="card">
					<form method="post" action="addToCartInsert.php">
					  	<img src="images/images.jpg" name="lakme" style="width: 200px; height: 150px;">
					    <h5 class="card-title" align="center">Lakme sunscreen lotion</h5>
					    <div align="center">
					    	<button type="submit" class="btn btn-primary">Add to cart</button>
					    </div>
					</form>
				</div>
			</div>
			<div class="span3">
				<div class="card">
					<form method="post" action="addToCartInsert.php">
					  	<img src="images/images.jpg" name="lakme" style="width: 200px; height: 150px;">
					    <h5 class="card-title" align="center">Lakme sunscreen lotion</h5>
					    <div align="center">
					    	<button type="submit" class="btn btn-primary">Add to cart</button>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div> -->



</html>
