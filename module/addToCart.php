<?php
include_once '../controller/connectionDb.php';
$obj=new connectionDb();
$action=$_POST['action'];
//echo $action;
$product_id=$_POST['code'];
//echo $product_id; 
$sql_insert_into_cart="";
$date_format= date("Y/m/d");
$_SESSION['cart_date']=$date_format;
@$session_for_cart=$_SESSION['cart_date'];
$ip_add=$_SERVER['REMOTE_ADDR'];
//echo $session_for_cart .$ip_add;

	function check_cart($product_id,$ip_add){
		$sql="select * from cart where cart_prod_id='$product_id' && cart_ip_add='$ip_add';";
		//echo $sql;
		$res=mysql_query($sql);
		$count=mysql_num_rows($res);
		if($count>0){
			$data=mysql_fetch_array($res);
			$number=$data['cart_qty'];
		}else{
			$number=0;
		}
		return $number;
	}

//
		if(!empty($_SESSION['user_login_exist'])){
	$cart_user=$_SESSION['user_login_exist'];
	$exist=check_cart($product_id,$ip_add);
	if($exit>0){
		$sql_insert_into_cart="update cart set cart_qty='$exist+1' where cart_prod_id='$product_id' && $cart_user='$cart_user';";
	}else{
		$sql_insert_into_cart="insert into cart (cart_prod_id,cart_ip_add,cart_qty,cart_session,cart_user) values('$product_id','$ip_add','1','$session_for_cart','$cart_user')";
	}
}
else{
	$exist=check_cart($product_id,$ip_add);
	if($exist>0){
		$exist+=1;
		$sql_insert_into_cart="update cart set cart_qty='$exist' where cart_prod_id='$product_id'&& cart_ip_add='$ip_add';";
	}
	else{
		$sql_insert_into_cart="insert into cart (cart_prod_id,cart_ip_add,cart_qty,cart_session) values('$product_id','$ip_add','1','$session_for_cart')";
	}
}

if(!empty($action) && !empty($product_id)){
	switch ($action) {
		case 'add':
//			$sql_insert_into_cart="";
		//echo($sql_insert_into_cart);
		$res=mysql_query($sql_insert_into_cart);
		if($res){
			echo "1";
		}
		else{
			echo "0";
		}
			break;
		
		
		
		default:
			# code...
			break;
	}
}
?>