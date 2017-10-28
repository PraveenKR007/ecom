<?php
include_once 'view/header.php';
include_once'view/nav.php'; 
include_once 'module/insertNewProduct.php';
?>
<section class="container">
<div class="row">
<div class="col-lg-9">
	<div class="panel panel-info"><div class="panel-heading">Insert Product</div><div class="panel-body"><?php
if(!(empty($err))){
	echo '<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  '.$err.'
</div> ';
} 
if(!empty($success)){
	//echo $success;
	echo '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  '.$success.'
</div> ';
	}
?><form method="POST" name="insertProdForm" enctype="multipart/form-data">
		<div class="row"><div class="col-lg-6"><div class="form-group"><label for="productName">Product Name</label><input type="text" name="productName" id="productName" class="form-control" placeholder="Product Name"></div></div><div class="col-lg-6"><div class="form-group"><label>Product Price</label><input type="text" id="productPrice" name="productPrice" class="form-control"></div></div></div><div class="row"><div class="col-lg-6"><div class="form-group"><label>Product Category</label><select class="form-control" name="productCat" id="productCat"><?php $sql_fetch_cat="select * from categories";
		$res=mysql_query($sql_fetch_cat);
		while($data=mysql_fetch_array($res))
		{ echo "<option value='".$data['categories_id']."'>".$data['categories_title']."</option>";	}
		 ?></select></div></div><div class="col-lg-6"><div class="form-group"><label for="productBrand">Product Brand</label><select class="form-control" name="productBrand"><?php $sql_fetch_brand="select * from brands";
		 $res_brands=mysql_query($sql_fetch_brand);
		 while ($data_brand=mysql_fetch_assoc($res_brands)) {
		 	# code...
		 	echo "<option value='".$data_brand	['brands_id']."'>".$data_brand['brands_title']."</option>";
		 }
		  ?></select></div></div></div><div class="row"><div class="col-lg-6"><div class="form-group"><label>Product Image</label><input type="file" class="form-control" name="productFile"></div></div><div class="col-lg-6"><label>Product Type</label><select name="productType" class="form-control"><?php $sql_fetch_type="select * from product_type;";
		  	$res_fetch_type=mysql_query($sql_fetch_type);
		  	while ($data_type=mysql_fetch_assoc($res_fetch_type)) {
		  		echo "<option value='".$data_type['product_type_id']."'>".$data_type['product_type_title']."</option>";
		  	
		  	}
		   ?></select></div></div><div class="form-group"><label for="	productDesc">Product Description</label><textarea class="form-control" name="productDesc"></textarea></div><div class="form-group"><label>Product Keyword</label><input type="text" class="form-control" name="productKey"></div>
		<div class="form-group"><button type="submit" name="insertAddProd" class="btn btn-default btn-block">Submit</button></div>
	</form></div></div>
</div>
<div class="col-lg-3">
	<?php include_once 'view/side_menu.php'; ?>
</div>
	</div>
</section>
<?php
	include_once'view/footer.php';
?>