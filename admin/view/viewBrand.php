<?php
include_once 'view/header.php';
include_once'view/nav.php'; 
include_once 'module/insertNewProduct.php';
?>
<section class="container">
<div class="row">
<div class="col-lg-9">
<div class="panel panel-success">
	<div class="panel-heading">
		All Brand
	</div>
	<div class="panel-body" style="background: #ddd;">
		<table class="table center" >
			<tbody><?php $sql_get_list="select * from brands";
			$res=mysql_query($sql_get_list);
			while ($data=mysql_fetch_assoc($res)) {
				# code...
				echo("<tr><td>".$data['brands_title']."</td><td><img class='brand_listimg' src='".$data['brands_image']."'></td><td><div class='row'><div class='col-lg-6'><a onclick=delete_brand_alert('".$data['brands_id']."') class='btn btn-block btn-danger btn-xs'><i class='fa fa-trash'></i></a></div>
	<div class='col-lg-6'><a href='' class='btn btn-block btn-warning btn-xs'><i class='fa fa-pencil'></i></a></div></div></td></tr>");
			}
			?></tbody>
		</table>	
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