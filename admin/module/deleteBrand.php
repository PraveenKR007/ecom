<?php
include_once'../../controller/connectionDb.php';
$obj=new connectionDb();
$brandId=$_GET['id'];
//echo $brandId; 
$sql_delete="delete from brands where brands_id='$brandId';";
$res=mysql_query($sql_delete);
	if($res){
		echo '1';
	}
	else{
		echo '0';
	}
?>