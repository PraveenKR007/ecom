<?php
session_start();
function checkFile($urlPath){
		if(file_exists($urlPath)){
			require_once $urlPath;
		}
		else{
			require_once 'user/home.php';
		}
	} 
if(isset($_REQUEST['view']))
{
	$url=$_REQUEST['view'];
	//echo $url;
	$filePath="view/".$url.".php";
	//echo $filePath;
	checkFile($filePath);
	//include_once"view/".$url.".php";
}
else if(isset($_REQUEST['user'])){
	$url=$_REQUEST['user'];
	$filePath="user/".$url.".php";
	checkFile($filePath);
//		include_once 'user/'.$url.'.php';
}
else
{
	include_once"view/home.php";
}
?>