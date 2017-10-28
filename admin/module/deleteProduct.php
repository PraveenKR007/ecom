<?php
include_once'../../controller/connectionDb.php';
$obj=new connectionDb();
$product_id=$_GET['id'];
//echo $brandId; 
$sql_delete="delete from product where product_id='$product_id';";
$res=mysql_query($sql_delete);
	if($res){
		echo '1';
	}
	else{
		echo '0';
	} 
?>