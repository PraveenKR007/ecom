<?php
include_once"controller/connectionDb.php";
$obj=new connectionDb(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eccoerce</title>
	<meta name="author" content="Mr.xyz">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
</head><body>
<!--navbar-->
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
      	<i class="fa "></i> droidKart
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./">Home</a></li>
        
        <!--li><a href="?v=reportAccident">Report Accident</a></li-->
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <!--ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul-->
      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li  class="active"><a href="?user=login_register"><span class="glyphicon glyphicon-user"></span> User Account</a></li> 
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-shopping-cart"></i> Cart</a>
            <ul class="dropdown-menu" id="cart_item_list" style="width:480px;">
            
        </ul>
        </li>     
      </ul>
    </div>
  </div>
</nav><!--navbar-->