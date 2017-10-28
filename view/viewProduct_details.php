<?php
require_once 'view/head.php';
@$getProduct_id=$_GET['product_id'];
//echo $getProduct_id;
$select="select * from product where product_id=$getProduct_id";
$res=mysql_query($select);
$data=mysql_fetch_assoc($res);

?>
<div class="container product-detail-online">
    <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <img src='<?php echo "admin/".$data['product_image']; ?>' class='img-responsive'>
        
        </div>
    </div>
    <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <h1><?php  echo $data['product_title']?></h1>
                   </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="original-price">Rs. <?php echo $data['product_price']; ?></div>
          
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
            <button type="button" class="btn btn-lg btn-success btn-lg" onclick="cart_event_add('add','<?php echo $data['product_id']; ?>')">buy now</button>
        </div>
    </div>
    <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <p> 
            <?php echo $data['product_desc']; ?>
            </p>    
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
                     <select name="choose"><option>S</option><option>M</option></select>
            
        </div>
    </div>
</div>
<?php
require_once 'view/footer.php';
?>