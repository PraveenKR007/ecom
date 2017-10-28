<?php
require_once '../controller/connectionDb.php'; 
$obj =new connectionDb();
// select category
$sql_cat="select * from categories where categories_title='shoes';";
//echo $sql_cat;
$res_cat=mysql_query($sql_cat);
//$count=mysql_num_rows($res_cat);
//echo $count;
	$data=mysql_fetch_assoc($res_cat);
    $cat= $data['categories_id'];
	/*
	now select jens only jeans from table
	*/
	$sql_pro="select * from product  where product_cat='$cat'";
	//echo($sql_pro);
	$res_pro=mysql_query($sql_pro);
		while($data_pro=mysql_fetch_array($res_pro)){
		$pro_id=$data_pro['product_id'];
		$pro_image=$data_pro['product_image'];
		echo"
		<a href='?view=viewProduct_details&product_id=".$pro_id."'><div class='card-1 w3-white col-lg-3 ' >
		<img src='admin/".$pro_image."' class='product_disp_home'>
		<div class='w3-container w3-center w3-margin-top'>
      <p>".$data_pro['product_title']."
      </p>
    </div>
		</div></a>
		";
		}
	?>