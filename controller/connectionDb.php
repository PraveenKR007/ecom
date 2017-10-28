<?php 
	define('user', 'root');
	define('server', 'localhost');
	define('password', '');
	define('dbName', 'ecom');
	
	
	class  connectionDb
	{
	function __construct(){
	$conn=mysql_connect(server,user,password);
	mysql_select_db(dbName,$conn);
	if(!$conn){
  			echo "connectivity Error".mysql_error();
			}
				}
	}
?>