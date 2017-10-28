<?php

if(isset($_POST['brandFormBtn']))
{
	$err="";
	$success="";
	//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	//echo "button clicked";
	$brandName=$_POST['newBrand'];
	//getting the image
	$brandImage=$_FILES['brandImage']['name'];
	$brandImage_tmp=$_FILES['brandImage']['tmp_name'];
	if(empty($brandName)){
		$err.="Brand Name can't be empty";
	}
	//uploading file
	$target_dir="./brandImage/";
	$target_file=$target_dir.basename($brandImage);
	//checcking file extension
	$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
	//echo $imageFileType;
	$target_file_to_upload=$target_dir.str_replace(' ','_',$brandName).".".$imageFileType;
	if(empty($err)){
		if($imageFileType=='jpg' || $imageFileType=='JPG' || $imageFileType=='png' ||$imageFileType=='PNG' || $imageFileType=='jpeg' || $imageFileType=='JPEG'){
	$upload_succ=move_uploaded_file($brandImage_tmp,$target_file_to_upload);
	if($upload_succ){
		$insertBrand="insert into brands (brands_title,brands_image) values('$brandName','$target_file_to_upload');";
		$query=mysql_query($insertBrand);
		if($query){
			$err="";
			$success="File has been uploaded";
		}
	}
	}
	else{
		$err="File Type is not supported";
	}
	}
	
}  
?>