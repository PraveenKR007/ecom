<?php
require_once '../controller/connectionDb.php';
$obj=new connectionDb();
$ip=$_GET['ip_add'] ;
$product_id=$_GET['product_id'];
//echo $product_id.$ip;
	$get_qty="select * from cart where cart_prod_id='$product_id' && cart_ip_add='$ip'";
	$res=mysql_query($get_qty);
	$qty=mysql_fetch_assoc($res);
	$qty_n=$qty['cart_qty']+1;
	$sql_update="update cart set cart_qty='$qty_n' where cart_ip_add='$ip' && cart_prod_id='$product_id';";
$res=mysql_query($sql_update);
	if($res){
		echo "1";
	}
	else{
		echo "0";
	}
?>