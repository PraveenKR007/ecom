<?php
include_once'../../controller/connectionDb.php';
$obj=new connectionDb();
$page=$_GET['query'];
//echo $query; 
$count="select * from product;";
$res=mysql_query($count);
$count_number=mysql_num_rows($res);
//echo($count_number);
$perPage=10;
if($page=='1'){
	$sql="select * from product limit $perPage;";
//	echo $sql;
}
else if($page=='2'){
	$sql="select * from product limit $perPage offset 10";
}
else if($page=='3'){
	$sql="select * from product limit $perPage offset 20";
}
else if($page=='4'){
	$sql="select * from product limit $perPage offset30";
}
$res=mysql_query($sql);
while($data=mysql_fetch_assoc($res)){
	echo"<tr><td>".$data['product_title']."</td><td>".$data['product_brand']."</td><td>".$data['product_price']."</td><td><img class='product-page-img' src='".$data['product_image']."'></td><td><div class='row'><div class='col-lg-6'><a onclick=delete_prod_alert('".$data['product_id']."') class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></a></div>
	<div class='col-lg-6'><a href='' class='btn btn-warning btn-xs'><i class='fa fa-pencil'></i></a></div></div></td></tr>";
}
?>