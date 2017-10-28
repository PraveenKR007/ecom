<?php
require_once '../controller/connectionDb.php';
$obj=new connectionDb();

	$val=-1;
$otp=$_GET['otp'];
$mobile=$_GET['mobile'];
$sql="select * from user_reg_temp where user_reg_temp_mobile='$mobile'&& user_reg_temp_mobile_otp='$otp';";
//echo $sql;
$res=mysql_query($sql);
$count=mysql_num_rows($res);
if($count==1){
	//copy the content to next step
	$data=mysql_fetch_assoc($res);
	$user_f_name=$data['user_reg_temp_f_name'];
	$user_l_name=$data['user_reg_temp_l_name'];
	$user_email=$data['user_reg_temp_email'];
	$user_mobile=$data['user_reg_temp_mobile'];
	//$user_image=$data['user_reg_temp_image'];
	$user_pass=$data['user_reg_temp_password'];
	$user_id=$data['user_reg_temp_id'];
	$sql="insert into user(user_id,user_f_name,user_l_name,user_email,user_mobile ,user_pass)values('$user_id','$user_f_name','$user_l_name','$user_email','$user_mobile','$user_pass')";
	//echo $sql;
	$res=mysql_query($sql);
	if($res){
		$val=1;
		$del="delete from user_reg_temp where user_reg_temp_mobile='$user_mobile';";
		mysql_query($del);
	}
	else{
		$val=3;
	}
}	
else{
	$val=0;
}
	echo $val;
 
?>