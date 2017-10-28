<?php
include_once 'view/header.php';
include_once'view/nav.php';
include_once'module/addBrand.php';
?>
<section class="container">
<div class="row">
<div class="col-lg-9">
<div class="panel panel-warning">
<div class="panel-heading">Insert New Brand</div>
<div class="panel-body">
<?php
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
?>
	<form id="brandForm" action="#" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>New Brand</label>
			<input type="text" name="newBrand" class="form-control">
		</div>
		<div class="form-group"><label>BrandImage</label><input type="file" class="form-control" name="brandImage"></div>
		<div class="form-group">
			<button class="btn btn-default btn-block" type="submit" name="brandFormBtn">add</button>
		</div>
	</form>
</div>	
</div>
</div>
<div class="col-lg-3">
	<?php include_once 'view/side_menu.php'; ?>
</div>
	</div>
</section>
<?php
	include_once'view/footer.php';
?>