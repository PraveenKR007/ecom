<?php
if(isset($_POST['insertAddProd'])){
	$err="";
	$success="";
	//echo('arg1');
	$productName=$_POST['productName'];
	$productPrice=$_POST['productPrice'];
	$productDesc=$_POST['productDesc'];
	$productCat=$_POST['productCat'];
	$productKey=$_POST['productKey'];
	$productType=$_POST['productType'];
	$productBrand=$_POST['productBrand'];
	if(empty($productName)){
		$err="Product Name Required";
	}else if(empty($productPrice)){
		$err="Product Price Required";
	}
	//else if(empty($productImage)){}
	//echo $productCat.$productDesc.$productName.$productPrice.$productKey;
	//echo $productBrand.$productType;
	//fetching file
	$productImage=$_FILES['productFile']['name'];
	$productImage_temp=$_FILES['productFile']['tmp_name'];
	$target_dir="./productImage/";
	$target_file=$target_dir.basename($productImage);

	//check file extension
	$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
	$target_file_to_upload=$target_dir.str_replace(' ', '_', $productName).".".$imageFileType;
//	echo $imageFileType;
	if(empty($err)){
		if($imageFileType=='jpg'||$imageFileType=='JPG'||$imageFileType=='PNG'||$imageFileType=='png'||$imageFileType=='jpeg'||$imageFileType=='JPEG'){
		$upload=move_uploaded_file($productImage_temp, $target_file_to_upload);
		if($upload){
		$sql_insert_product="insert into product(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords,product_type)values('$productCat','$productBrand','$productName','$productPrice','$productDesc','$target_file_to_upload','$productKey','$productType');";
		//echo $sql_insert_product;
		$res_insert=mysql_query($sql_insert_product);
		if($res_insert){
			$success="Product has been Added";
			$err="";
		}
		else{
			$err.="Fialed to Add";
		}
		}
		else{
			$err.="Failed to upload Image";
		}
	}
	else{
		$err.="Image Type not permitted";
	}
	}
} 
?>