<?php
session_start();
	function checkFile($urlPath){
		if(file_exists($urlPath)){
			require_once $urlPath;
		}
		else{
			require_once 'view/login.php';
		}
	} 
if(isset($_REQUEST['view'])){
	$url=$_REQUEST['view'];
	$filepath="view/".$url.".php";
	checkFile($filepath);
} 
else{
	require_once 'view/home.php';
}
?>