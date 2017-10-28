<?php
include_once'../../controller/connectionDb.php';
$obj=new connectionDb();
if(isset($_POST)){
	$newCat=$_POST['newCat'];
	//echo $newCat;
	$newCat=mysql_real_escape_string($newCat);
	if(!empty($newCat)){
		$sql_insert="insert into categories (categories_title) values ('$newCat');";
//echo $sql_insert;
	$res=mysql_query($sql_insert);
	if($res){
		echo '1';
	}
	else{
		echo '0';
	}
	}
	else {
		echo '0';
	}
	
	} 
?>