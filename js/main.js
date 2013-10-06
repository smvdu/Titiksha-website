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
        }, dataslide * 700);
    }


    //When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
    links.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });



   //changes in side menu using waypoints

   $(".page").waypoint(function(direction) {
   		
       //cache the variable of the data-slide attribute associated with each slide
        var slide = $(this).attr('data-slide');
       
        //If the user scrolls up change the navigation link that has the same data-slide attribute as the slide to active and
        //remove the active class from the previous navigation link
        if (direction === 'down') {
            $('#main_nav li[data-slide="' + slide + '"]').addClass('active').prev().removeClass('active');
        }
        // else If the user scrolls down change the navigation link that has the same data-slide attribute as the slide to active and
        //remove the active class from the next navigation link
        else {
            $('#main_nav li[data-slide="' + (slide - 1) + '"]').addClass('active').next().removeClass('active');
        }
    });

    //waypoints doesnt detect the first slide when user scrolls back up to the top so we add this little bit of code, that removes the class
    //from navigation link slide 2 and adds it to navigation link slide 1.
    $(window).scroll(function () {
        if ($(window).scrollTop() == 0) {
            $('#main_nav li[data-slide="1"]').addClass('active');
            $('#main_nav li[data-slide="2"]').removeClass('active');
        }
    });



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
		$("."+thisClass[1]+">.event_content").css("display","block");
		
		
	});
});

