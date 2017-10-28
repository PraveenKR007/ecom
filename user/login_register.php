<?php
require_once 'view/head.php'; 
?>
<div class="container">

	<div class="login_container">
<span id="Error-Alert"></span>	
<ul class="nav nav-pills nav-justified">
  <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
  <li><a data-toggle="tab" href="#register">Register</a></li>
  <li><a data-toggle="tab" href="#help">Recover Account</a></li>
</ul>

<div class="tab-content">
  <div id="login" class="tab-pane fade in active">
   		<form class="w3-margin">
   			<div class="form-group">
   			<label>User Email or Mobile</label>
   			<input type="text" name="" class="form-control" placeholder="mobile number or Email">
   			</div>
   			<div class="form-group">
   			<label>Password</label>
   				<input type="password" name="" class="form-control" placeholder="password">
   			</div>
   			<div id="login_btn_container">
   				<button class="btn btn-success btn-block" >Login</button>
   			</div>
   		</form>
  </div>
  <div id="register" class="tab-pane fade">
   <form class="w3-margin" id="registerForm" method="post">
   	<div class="row">
   		<div class="col-md-6">
   			<div class="form-group">
   			<label><i class='fa fa-id-card'></i> First Name</label>
   		<input type="text" required="true" name="f_name" placeholder="First name" class="form-control">
   	</div>
   		</div>
   		<div class="col-md-6">
   			<div class="form-group">
   			<label><i class='fa fa-id-card'></i> Last Name</label>
   		<input type="text" required="true" name="l_name" placeholder="Last name" class="form-control">
   	</div>
   		</div>
   	</div><!--row-->
   	<div class="row">
   		<div class="col-md-6">
   			<div class="form-group">
   				<label><i class='fa fa-envelope'></i> Email</label>
   				<input type="email" required="true" placeholder="email" name="email" class="form-control">
   			</div>
   		</div>
   		<div class="col-md-6"><div class="form-group">
   				<label><i class='fa fa-phone'></i> Mobile</label>
   				<input type="tel" required="true" placeholder="Mobile number without +91" name="mobile" id="mobile_reg" class="form-control">
   			</div></div>
   	</div><!--row-->
   	<div class="row">
   		<div class="col-md-6">
   			<div class="form-group">
   				<label><i class="fa fa-key" aria-hidden="true"></i> Password</label>
   				<input type="password" required="true" name="password" placeholder="Password" class='form-control'>
   			</div>
   		</div>
   		<div class="col-md-6">
   			<div class="form-group">
   				<label><i class="fa fa-key" aria-hidden="true"></i> Confirm Password</label>
   				<input type="password" required="true" name="confirm_password" placeholder="Confirm password" class='form-control'>
   			</div>
   		</div>
   	</div>
   	<div class="form-group" >
    <span id="register_btn_container"></span>
   		<button class="btn btn-info btn-block" type="submit"><i class='fa fa-paper-plane'></i> Regsiter</button>
   	</div>
   </form>
  </div>
  <div id="help" class="tab-pane fade">
     <span id="errorAlert" class="w3-margin">
        <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Recover Your Account <i class='fa fa-id-card'></i>&nbsp;</strong>Please enter your registered mobile 
</div></span>
         
        <form id="verifyMobile" method="post" action="#"  >
            <div class="form-group">
            <input type="tel" minlength="10" class="form-control" placeholder="enter your mobile" id="loginMobile" name="loginMobile">
            </div>
       <span id="loader"></span>
    <div class="w3-margin-top"><button type="submit" class="btn btn-block btn-warning" style="width:100% !important;" id="forgetBtn">Recover</button>
            </div>
            

        </form>

  </div>
</div>
	</div>
</div>
<button type="button" id="otp_btn" class="btn btn-info btn-lg hide" data-toggle="modal" data-target="#myModal">open OTP</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Verify Your Mobile Number</h4>
      </div>
      <div class="modal-body">
      <form id='otpForm' method="post">
      <p id="mobile-hint"></p>
       <div class="form-group">
         <input type="tel" name="otp" class='form-control' id="otpField">
       </div>
       <div class="form-group">
         <button type="submit" class="btn btn-default"><i class='fa fa-paper-plane'></i> Submit</button>
       </div>
      </div></form>
      
    </div>

  </div>
</div>
<?php
require_once 'view/footer.php'; 
?>