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
$total=0;
$_SESSION['total_price']=0;
$err="";
	$res=mysql_query($sql);
	$count=mysql_num_rows($res);
	if($count=='0'){
		$err="Cart is Empty";
		$_SESSION['total_price']='0';
		echo($_SESSION['total_price']);
	}
	if(empty($err)){
			while($data=mysql_fetch_assoc($res)){

		//echo "<li>".$data['cart_prod_id']."</li>";
		$id=$data['cart_prod_id'];
		$sql_pro="select * from product where product_id='$id';";
		$res_data=mysql_query($sql_pro);
		$data_pro=mysql_fetch_assoc($res_data);
		$total=$total+$data_pro['product_price']*$data['cart_qty'];
		
	}
	$_SESSION['total_price']=$total;
		echo $_SESSION['total_price'];
}
?>		
 