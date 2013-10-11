$(document).ready(function(){

	$(".login").click(function(){
		if(validateForm()){
			sendLoginDetails();
		}else{
			resetFields();
			$(".msg").html("* Please fill all the fields .")
		}	
	});

	$(".reset").click(function(){
		resetFields();
	});

	$("#logout").click(function(){
		logoutAdmin();
	});

	$(".submit").click(function(){
		sendQuery();
	});
});