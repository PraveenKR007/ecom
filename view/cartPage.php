<?php
require_once 'view/head.php'; 
?>
<div class="container">
<div id="snackbar"></div>
<div id="cart_table_data_loader"></div>
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody id="cart_table_data">
						
					</tbody>
					
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="./" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total Rs.<span id="price_fetch"></span></strong></td>
							<td><a href="?view=check-out" class="btn btn-success btn-block" id="Checkout">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					
				</table>
</div>
<?php
require 'view/footer.php'; 
?>