$(document).ready(function(){
	//creates a stellar object
	$.stellar();

	jQuery.easing.def = "easeInOutQuint";
	var htmlbody = $('html,body');
	var links = $(".ca-menu").find('li');


	//Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
    //easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
    function goToByScroll(dataslide) {
        htmlbody.animate({
            scrollTop: $('.page[data-slide="' + dataslide + '"]').offset().top
        }, dataslide * 1300);
    }


    //When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
    links.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });


    //When the user clicks on the button, get the get the data-slide attribute value of the button and pass that variable to the goToByScroll function
    /*button.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });*/




	// events squeeze and expand effect

	$("#event").on("click","div",function(event) {
		// Reset all properties
		$(".event_heading").css("top","0px");
		$(".event_content").css("display","none");
		$("#event div").removeClass("expand squeeze current_heading");
		
		// set new properties
		$(this).addClass("expand");
		$('#event>div').not(this).addClass("squeeze");
		var className=$(this).attr("class");
		var thisClass=className.split(' ');

		$("."+thisClass[1]+">.event_heading").removeClass("expand").css("top","-230px",function(){
			$("."+thisClass[1]+">.event_heading").addClass("current_heading");
		});
		$("."+thisClass[1]+">.event_content").fadeIn(3000).css("display","block");
		
		
	});
});

