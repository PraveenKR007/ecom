<?php
include_once 'view/header.php';
include_once'view/nav.php'; 
include_once 'module/insertNewProduct.php';
?>
<section class="container">
<div class="row">
<div class="col-lg-9">
<div class="panel panel-info">
	<div class="panel-heading">Product</div>
	<div class="panel-body">
	<table class="table table-striped">
		<thead>
			<tr><th>Product Name</th><th>Product Brand<th>Product Price</th><th>Product Image</th><th>Action</th></tr>
		</thead>
		<tbody id="table-content"></tbody>
	</table>
		<div class="pull-right">
			<ul class="pagination">
				<?php
				//count total number of product and devide by 10
				$sql_count="select count(product_id) as max_count from product;";
				$res_count=mysql_query($sql_count);
				//echo $sql_count;
				$data=mysql_fetch_assoc($res_count);
				$count=$data['max_count'];
				//echo $count; 
				$count=(int)($count/10);
				$count=$count+1;
				for($i=1;$i<=$count;$i++){
					echo "
				<li class=''><a onclick=pagination('".$i."')>".$i."</a></li>
				";
				}
				?>
			</ul>
		</div>
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