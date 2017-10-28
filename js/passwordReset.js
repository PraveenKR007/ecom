$(document).ready(function(){
$('#passwordResetForm').submit(function(e){
	e.preventDefault();
	var data=$('#passwordResetForm').serialize();
	alert(data);
});
});