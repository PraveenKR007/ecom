function load_alert(msg){
	//swal(msg);
	swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
},
function(){
  swal("Deleted!", msg, "success");
});
}
function delete_prod_alert(product_id){
	swal({
  title: "Are you sure?",
  text: "You will not be able to recover this brand",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel ",
  showLoaderOnConfirm: true,
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    //swal("Deleted!", "Your imaginary file has been deleted.", "success");
  	delete_product(product_id);
  	pagination(1)
  	//delete_brand(brand_id);
  } else {
    swal("Cancelled", "Your have not deleted this Product", "error");
  }
});
}
function delete_product(product_id){
	$.ajax({
		type:'GET',
		url:'./module/deleteProduct.php?id='+product_id,
		beforeSend:function(){

		},
		success:function(response){
			if(response=='1'){
			swal("Deleted!", "Brand has been deleted.", "success");
		}
		else{
			swal("Error !!", "Error occured in deleting Brand!", "error");
		}	
		}
	});
}
function delete_brand_alert(brand_id){
//	alert(brand_id);
swal({
  title: "Are you sure?",
  text: "You will not be able to recover this brand",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel !!",
  showLoaderOnConfirm: true,
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    //swal("Deleted!", "Your imaginary file has been deleted.", "success");
  	//alert('hello');
  	delete_brand(brand_id);
  } else {
    swal("Cancelled", "Your have not deleted this brand", "error");
  }
});
}
function delete_brand(id){
	alert(id);
	$.ajax({
		type:'GET',
		url:'./module/deleteBrand.php?id='+id,
		beforeSend:function(){
			//swal('deleting..');
		},
		success:function(response){
		if(response=='1'){
			swal("Deleted!", "Brand has been deleted.", "success");
		}
		else{
			swal("Error !!", "Error occured in deleting Brand!", "error");
		}	
		}
	});
}
function pagination(page){
	//alert('clicked');
$.ajax({
		type:'GET',
		url:'./module/pagination.php?query='+page,
		beforeSend:function(){
		$('#table-content').html('<tr id="loader"><td colspan="5"><i class="fa fa-spinner"></i> loading...</td></tr>');				
			//$('#loader').fadeOut(1000);
		},
		success:function(resultSet){
			console.log(resultSet);
	$('#table-content').html(resultSet);		
		}

	});
}
$(document).ready(function(){
	
	$('#sideMenu').hover(function(){
		//alert('hello');
		$('#sideMenuContent').removeClass('hide');
	});
	$('#brandAddForm').submit(function(e){
		// brandAddForm->adding category by mistake
		e.preventDefault();
		//alert('hello');
		var data=$('#brandAddForm').serialize();
		//alert(data);
		$.ajax({
			type:'POST',
			url:'./module/insertNewCat.php',
			data:data,
			beforeSend:function(){
				$("#brandAddForm button").html('<i class="fa fa-spinner"></i> Loading...');
			},
			success:function(response){
				$("#brandAddForm button").text('add');
				$("#brandAddForm #newCat").val('');
				if(response=='1'){
					$('#alert').html(`
						<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  added
</div> 
						`);
				}
				else if (response=='0') {
					$('#alert').html(`
						<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 Error !!!!
</div> 
						`);
				}
			}
		});
	});
//on windows load fetch product

	$.ajax({
		type:'GET',
		url:'./module/pagination.php?query=1',
		beforeSend:function(){
		$('#table-content').html('<tr id="loader"><td colspan="5"><i class="fa fa-spinner"></i> loading...</td></tr>');				
			//$('#loader').fadeOut(1000);
		},
		success:function(resultSet){
			console.log(resultSet);
	$('#table-content').html(resultSet);		
		}

	});


	
});
