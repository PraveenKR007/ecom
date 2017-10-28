	$(document).ready(function(){
		fetch_total();
		get_cart();
		cart_detail_product();
	});
	function get_cart(){
		$.ajax({
			type:'GET',
			url:'./module/getCartProduct.php',
			beforeSend:function(){

			},
			success:function(dataResponse){
				$('#cart_item_list').html(dataResponse);
			}
		});
	}
	function cart_event_add(action,product_id){
		//alert(action);
			var query_string="";
			if(action!=""){
				switch(action){
					case "add":
					query_string='action='+action+'&code='+product_id;
					break;
					}
			}
			$.ajax({
				type:'POST',
				data:query_string,
				url:'./module/addToCart.php',
				beforeSend:function(){
					
				},
				success:function(data){
					if(data=='1'){
						//alert('product_id added');
						$('#snackbar').addClass('show');
						$('#snackbar').html(`
								<div class="">
  <strong>Success!! &nbsp;</strong>Product has been added to cart.
</div>
							`);
						 setTimeout(function(){
						 	$('#snackbar').removeClass('show');
						 },2000);
						 get_cart();
						//$('#alert_auto_dis').fadeOut(1000);
					}
				},
				error:function (){}
			});//ajax end here
	}
	function cart_detail_product(){
		$.ajax({
			type:'GET',
			url:'./module/cartDetail.php',
			beforeSend:function(){

			},
			success:function(response){
				$('#cart_table_data').html(response);
			}
		});
	}
	function edit_enable(){
		$('#')
	}
	function deleteFromCart(ipadd,product_id){
		//alert(ipadd);
		var data="ip_add="+ipadd+"&product_id="+product_id;
		$.ajax({
			type:'GET',
			url:'./module/deleteFromCart.php',
			data:data,
			beforeSend:function(){
				$('#cart_table_data_loader').show();
				$('#cart_table_data_loader').html(`
						<center><i class="fa fa-spinner fa-4x"></i></center>
					`);
			},
			success:function(dataResponse){
				cart_detail_product();
				fetch_total();
				get_cart();
				if(dataResponse=='1'){
					$('#cart_table_data_loader').hide();
					$('#snackbar').addClass('show');
						$('#snackbar').html(`
								<div class="">
  <strong>Success!! &nbsp;</strong>Product has been Removed cart.
</div>
							`);
						 setTimeout(function(){
						 	$('#snackbar').removeClass('show');
						 },2000);
				}
				else{
					alert('errro0');
				}
			}
		});	
	}
	function fetch_total(){
		$.ajax({
			type:'GET',
			url:'./module/getTotalPrice.php',
			beforeSend:function(){

			},
			success:function(data){
				if(data==''){
					$('#price_fetch').text(0);
				}
				else{
					$('#price_fetch').text(data);
				}
			}
		});
	}
	function increse_qty(ipadd,product_id){
		var data="ip_add="+ipadd+"&product_id="+product_id;
		$.ajax({
			type:'GET',
			url:'./module/increase_qty.php',
			data:data,
			beforeSend:function(){

			},
			success:function(server_Response){
				cart_detail_product();
				fetch_total();
				if(server_Response=='1'){
				
				}
				else{

				}
			}
		});
	}
	function decrease_qty(ipadd,product_id){
		var data="ip_add="+ipadd+"&product_id="+product_id;
		$.ajax({
			type:'GET',
			url:'./module/decrease_qty.php',
			data:data,
			beforeSend:function(){

			},
			success:function(server_Response){
				cart_detail_product();
				fetch_total();
				if(server_Response=='1'){
					
				}
				else if (server_Response=="2") {
				//$('#minus_btn').hide();
					//document.getElementByID('minus_btn').setAttribute('disabled', 'disabled');
				}
				else{

				}
			}
		});
	}