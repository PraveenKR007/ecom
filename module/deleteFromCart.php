<?php
require_once '../controller/connectionDb.php';
$obj=new connectionDb();
$ip_add=$_GET['ip_add']; 
//echo $ip_add;
$product_id=$_GET['product_id'];
//echo $product_id;
$delete_from_cart="delete from cart where cart_id='$product_id' && cart_ip_add='$ip_add'";
$res=mysql_query($delete_from_cart);
if($res){
	echo "1";
}
else{
	echo("-1");
}
?>