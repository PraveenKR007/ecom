<?php
include_once 'view/header.php';
include_once'view/nav.php'; 
?>
<section class="container">
<div class="row">
<div class="col-lg-9">

<div class="panel panel-warning">

<div class="panel-heading">Insert New Category</div>
<div class="panel-body">
<div id="alert"></div>
	<form id="brandAddForm">
		<div class="form-group">
			<label>New category</label>
			<input type="text" name="newCat" id="newCat" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default btn-block">add</button>
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