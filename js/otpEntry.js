$(document).ready(function (){
$('#otpForm').submit(function(e){
  e.preventDefault();
 // var data=$('#otpForm').serailize();
 var otp=$('#otpField').val();
 var mobile=localStorage.getItem('NewUserRegisterMobile');
var data="otp="+otp+"&mobile="+mobile;
  $.ajax({
    type:'GET',
    url:'./module/otp_submit.php',
    data:data,
    beforeSend:function(){
      $('#myModal .btn').text('loading...');
    },
    success:function(server_response){
      if(server_response=='1'){
        $('#myModal .close').click();
      }
    }
  });//ajax
});//submit function
});