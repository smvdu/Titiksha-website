$(document).ready(function(){

	$(".login").click(function(){
		if(validateForm()){
			sendLoginDetails();
		}else{
			$(".msg").html("* Please fill all the fields .");
			setTimeout(function(){
				$(".msg").html("");
			},2000);
		}	
	});

	$(".reset").click(function(){
		resetFields();
	});

	$("#logout").click(function(){
		logoutAdmin();
	});

	$(".submit").click(function(){
		$(".queryResult").hide();
		sendQuery();
	});

	$("#reset-query").click(function(){
		$(".query_content input").val("");
	});
});