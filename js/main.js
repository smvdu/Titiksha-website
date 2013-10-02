$(document).ready(function(){
	//creates a stellar object
	$.stellar();

	// events squeeze and expand effect

	$("#event").on("click","div",function(event) {
		// Reset all properties
		$(".event_content").css("display","none");
		$("#event div").removeClass("expand squeeze current_heading");
		
		// set new properties
		$(this).addClass("expand");
		var className=$(this).attr("class");
		var thisClass=className.split(' ');
		$("."+thisClass[1]+">.event_heading").removeClass("expand").addClass("current_heading");
		$("."+thisClass[1]+">.event_content").css("display","block");
		$('#event>div').not(this).addClass("squeeze");
	})

	
});

