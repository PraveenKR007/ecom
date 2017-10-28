<?php
	require_once 'view/head.php';
@$get_gender=$_GET['gender'];
//echo $get_gender;
@$product_cat='';
$err="";
	$sql_prod_type="select * from product_type where product_type_title='$get_gender'";

	$data=mysql_fetch_array(mysql_query($sql_prod_type));
		$type_id= $data['product_type_id'];
		$sql_select_pro="select * from product where product_type='$type_id'";
		$res=mysql_query($sql_select_pro);
        $count=mysql_num_rows($res);
        if($count==0){
            $err.='No Record Found';
        }
	?>
	<div class="container">
    <div id='snackbar'></div>
    <div class="row">
	 <?php
	   if(!empty($err)){
           ?>
           <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Sorry !!!</strong> <?php echo($err); ?>
</div>
           <?php 
       }
       else{
        while($data=mysql_fetch_assoc($res)){
            $add='add';
            $i=1;
        echo"
         <div class='col-md-4'>
         <div class='thumbnail w3-card-2'>
         <img src='admin/".$data['product_image']."' class='img-responsive'>
         <div class='caption'>
         <h5 class='pull-right'>".$data['product_price']."</h5>
         <a href='?view=viewProduct_details&product_id=".$data['product_id']."'><h5>".$data['product_title']."</h5></a>
         
         </div>"
         ?>
         <div class='btn-ground text-center'><button class='btn btn-info' onclick="cart_event_add('add','<?php echo $data['product_id']; ?>')"><i class='fa fa-shopping-cart'></i> Add to cart</button>
         <?php echo "
         <button class='btn btn-primary' data-toggle='modal' data-target='#product_view".$data['product_id']."'><i class='fa fa-eye'></i> Quick View</button>
         </div>
         </div>
         </div>   
            
        ";
        echo"
        <div class='modal fade ' id='product_view".$data['product_id']."'>
        <div class='modal-dialog'>
        <div class='modal-content'>
        <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                <h4>".$data['product_title']."</h4>
        </div>
        <div class='modal-body' >
            <div class='row'>
            <div class='col-md-6'>
            <img src='admin/".$data['product_image']."' class='img-responsive'>
            </div>
            <div class='col-md-6'>
            <p class='lead'>Product Id : ".$data['product_id']." </p>
            <div class='ratings'>
            <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i>
            (10 reviews)
            </div>
            <div class=''>".$data['product_desc']."</div>
            <div class='Price'>Rs. ".$data['product_price']."</div>
            <hr>
              <div class='row'>
              <div class='col-md-6'>";?><button class='btn-info btn btn-block' onclick="cart_event_add('add','<?php echo $data['product_id']; ?>')"><i class='fa fa-shopping-cart'></i> Add to cart</button><?php echo"</div>
              <div class='col-md-6'>   <button class='btn-danger btn btn-block'><i class='fa fa-heart'></i> wishlist</button></div>
              </div>
               
            
              
                </div>
            </div>
            </div>       </div>
        </div>
        </div>
        ";
     }
       }
	 ?>
    </div>
</div>

<?php
require_once 'view/footer.php'; 
?>