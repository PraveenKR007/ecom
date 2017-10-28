<?php
require_once '../controller/connectionDb.php';
$obj=new connectionDb();
session_start();
@$session_for_cart=$_SESSION['cart_date'];
$ip_add=$_SERVER['REMOTE_ADDR'];
if(isset($_SESSION['user_login_exist'])){
$cart_user=$_SESSION['user_login_exist'];
	$sql="select * from cart where cart_ip_add ='$ip_add'&& cart_user='$cart_user';";
}
else{
	$sql="select * from cart where cart_ip_add ='$ip_add';";
}
$total=0;
$_SESSION['total_price']=0;
$err="";
	$res=mysql_query($sql);
	$count=mysql_num_rows($res);
	if($count=='0'){
		$err="Cart is Empty";
		echo"<tr><td colspan='5'><div class='alert alert-warning'>
		<p>".$err."</p>
		</div></td></tr>";
		//document.getElementById('btn1').setAttribute("disabled","disabled");
		echo"<script>document.getElementById('Checkout').setAttribute('disabled','disabled');</script>";
	}
	if(empty($err)){
			while($data=mysql_fetch_assoc($res)){

		//echo "<li>".$data['cart_prod_id']."</li>";
		$id=$data['cart_prod_id'];
		$sql_pro="select * from product where product_id='$id';";
		$res_data=mysql_query($sql_pro);
		$data_pro=mysql_fetch_assoc($res_data);
		$total=$total+$data_pro['product_price']*$data['cart_qty'];
		$_SESSION['total_price']=$total;
		echo "<tr><td data-th='Product'><div class='row'>
		<div class='col-sm-2'><img src='admin/".$data_pro['product_image']."' class='img-responsive'></div>
		<div class='col-sm-10'><h4 class='nomargin'>".$data_pro['product_title']."</h4>".$data_pro['product_desc']."</div>
		</div></td><td data-th='Price'>".$data_pro['product_price']."</td><td data-th='Quantity'>";?><input type="number" class="form-control text-center" value="<?php echo $data['cart_qty']; ?>" disabled="" id="qty_"><?php echo"</td><td data-th='Subtotal' class='text-center'>".$data_pro['product_price']*$data['cart_qty']."</td>"?>
		<td class="actions" data-th="actions">
			<div class="row"><div class="col-md-4"><button class="btn btn-info btn-sm" id="minus_btn" name="minus_btn" onclick="decrease_qty('<?php echo $_SERVER['REMOTE_ADDR'];?>','<?php echo($data_pro['product_id']) ?>')"><i class="fa fa-minus"></i></button>
								</div>
	<div class="col-md-4"><button class="btn btn-primary btn-sm" onclick="increse_qty('<?php echo $_SERVER['REMOTE_ADDR'];?>','<?php echo($data_pro['product_id']) ?>')"><i class="fa fa-plus"></i></button>
								</div>
	<div class="col-md-4"><button class="btn btn-danger btn-sm" onclick="deleteFromCart('<?php  echo $_SERVER['REMOTE_ADDR'] ?>','<?php echo($data['cart_id']) ?>')" ><i class="fa fa-trash"></i></button>
								</div></div>								
							</td>
		<?php 

		;

	}
	}
	
/*
	<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Product 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price">$1.99</td>
							<td data-th="Quantity">
								
							</td>
							<td data-th="Subtotal" class="text-center">1.99</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
*/
?>