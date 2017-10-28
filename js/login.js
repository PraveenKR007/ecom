function otp_mobile(){
var mobile=localStorage.getItem('NewUserRegisterMobile');
//alert(mobile);
$('#mobile-hint').html(`
    <center><div class='w3-text-orange'><i class='fa fa-mobile fa-3x'></i>
    <div class='w3-padding'>We have Just Sent You One time Password on `+mobile+`please enter Below</div>
    </div></center>
  `);
};
$(document).ready(function(){
$('#loginForm').submit(function(e){
e.preventDefault();
});
$('#registerForm').submit(function(e){
e.preventDefault();
var data=$('#registerForm').serialize();
//alert(data);
var mobile=$('#mobile_reg').val();
localStorage.setItem('NewUserRegisterMobile',mobile);//=mobile;
$.ajax({
type:'POST',
url:'./module/RegsiterNewAccount.php',
data:data,
beforeSend:function(){
//$('#Error-Alert').html('jdj');
$('#register_btn_container').show();
$('#register_btn_container').html(`
  <center><img src='./image/loader.gif' class='img-responsive small-size w3-margin-bottom'></center>
  `);
},
success:function(response){
if(response=='1'){
  $('#register_btn_container').hide();
  $('#otp_btn').click();
  otp_mobile();
}else if(response=='-1'){
  $('#register_btn_container').hide();
  $('#Error-Alert').html(`
    <div class='alert alert-warning'>
    <p>Password doesn't Match</p>
    </div>     
    `);
}
}
});
});
});
/*$(document).ready(function() {
  $('#loginForm').submit(function(e){
    e.preventDefault();
    var data=$('#loginForm').serialize();
  //  alert(data);
  $.ajax({
    type:'POST',
    url:"./pages/loginScript.php",
    data:data,
    beforeSend:function(){
      $('#loginBtn').addClass('hide');
      $('#loginBtnSection').html('<center><img src="./images/loader.gif" class="loader-login"></center>');
    },
    success:function(response){
      if(response=='ok'){
        setTimeout(' window.location.href = "?view=home"; ',2000);
      }else{
        $('#loginBtn').removeClass('hide');
        $('.loader-login').addClass('hide');
    //    alert('loginFailed');
    $('#alertError').html(`
    <div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Login failed !</strong>
</div>
    `);
      }
    }

  });//ajax finished here
  });

});
*/