<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM categories WHERE category_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditcategory.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Category</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Category Name : </span><input type="text" style="width:265px; height:30px;"  name="name" value="<?php echo $row['name']; ?>" Required/><br>
<span>Quantity : </span><input type="text" style="width:265px; height:30px;"  name="quantity" value="<?php echo $row['quantity']; ?>" /><br>

<span>Price : </span><input type="text" style="width:265px; height:30px;" id="txt1" name="price" value="<?php echo $row['price']; ?>" onkeyup="sum();" Required/><br>



<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>