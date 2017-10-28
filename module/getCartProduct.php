<?php
require_once '../controller/connectionDb.php';
$obj=new connectionDb();
session_start();
@$session_for_cart=$_SESSION['cart_date'];
$ip_add=$_SERVER['REMOTE_ADDR'];
if(isset($_SESSION['user_login_exist'])){
$cart_user=$_SESSION['user_login_exist'];
	$sql="select * from cart where cart_ip_add ='$ip_add'&& cart_user='$cart_user';";
}
else{
	$sql="select * from cart where cart_ip_add ='$ip_add';";
}
	$res=mysql_query($sql);
	while($data=mysql_fetch_assoc($res)){
		//echo "<li>".$data['cart_prod_id']."</li>";
		$id=$data['cart_prod_id'];
		$sql_pro="select * from product where product_id='$id';";
		$res_data=mysql_query($sql_pro);
		$data_pro=mysql_fetch_assoc($res_data);
		echo "<li>
		<a class='link'><div class='row'><div class='col-md-2'><img src='admin/".$data_pro['product_image']."' class='img-sx'></div><div class='col-md-10 w3-small'>".$data_pro['product_title']."</div></div></a>
		</li>"
		;

	}
	echo"<div class='btn-ground w3-margin-top pull-right w3-margin-right'><a class='btn btn-danger' href='?view=cartPage'><i class='fa fa-shopping-basket'></i> Your cart</a>
		<button class='btn btn-warning'><i class='fa fa-shopping-cart'></i> checkout</button>
	</div>";

?>