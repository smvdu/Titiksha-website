$(document).ready(function(){

	$(".login").click(function(){
		if(validateForm()){
			sendLoginDetails();
		}else{
			resetFields();
			$(".msg").html("* Please fill all the fields .");
			setTimeout(function(){
           			$(".msg").html("");
           		},3000);
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

	$("#reset-query").click(function(){
		$(".query_content input").val("");
	});
});