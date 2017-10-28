<?php
require_once '../controller/connectionDb.php';
$obj=new connectionDb();
date_default_timezone_set('Asia/Kolkata');
$date = date('y-m-d');
$time=date("y-m-d h:i:sa");
//echo $date;
$val=0;
if(isset($_POST)){
	$err='';
	$ip=$_SERVER['REMOTE_ADDR'];
	//echo "hello";
	$firstName=$_POST['f_name'];
	$lastName=$_POST['l_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=md5($_POST['password']);
	$confirmPassword=md5($_POST['confirm_password']);
	if($password!=$confirmPassword){
		$err.="Password Doesn't Match";
		
	}
	function check_email_exist($email){

	}
	function check_mobile_exist($mobile){
		
	}
	if(!empty($err)){
		$val=-1;
	}
	if(empty($err)){
		$otp=mt_rand(10000,99999);
		//$tb='user_reg_temp_';
		$sql="insert into user_reg_temp(user_reg_temp_f_name,user_reg_temp_l_name,user_reg_temp_email,user_reg_temp_mobile,user_reg_temp_password,user_reg_temp_ip_add,user_reg_temp_date,user_reg_temp_time,user_reg_temp_mobile_otp)values('$firstName','$lastName','$email','$mobile','$password','$ip','$date','$time','$otp');";
		//echo $sql;
		$res=mysql_query($sql);
		if($res){
			//$_SESSION['user_mobile_registed']=$mobile;
			$val=1;
		}
		else{
			$val=0;
		}

	}
	echo $val;
	
}
	

?>