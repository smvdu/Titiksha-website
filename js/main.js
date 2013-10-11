$(document).ready(function(){
	//creates a stellar object
	$.stellar();

	jQuery.easing.def = "easeInOutQuint";
	var htmlbody = $('html,body');
	var links = $(".ca-menu").find('li');
	var sideLinks = $("#main_nav li");

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
    $('#main_nav li[data-slide="1"]').addClass('active');
    $('#main_nav li').last().removeClass('active');
    $(window).scroll(function () {
    	if ($(window).scrollTop() == 0) {
            $('#main_nav li[data-slide="1"]').addClass('active');
            $('#main_nav li[data-slide="2"]').removeClass('active');            
           
        }
    });

	//Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
    //easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
    function goToByScroll(dataslide) {
        htmlbody.animate({
            scrollTop: $('.page[data-slide="' + dataslide + '"]').offset().top
        },1500);
    }


    //When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
    links.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });

    sideLinks.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });

    $(".event_close").click(function(){
        $(".event_content").hide();        
        setTimeout(function(){
            $("#event > div").removeClass("squeeze expand");
            $(".event_heading").css("top","0px"); 
            $(".event_close").hide();           
        },100);
        
    })

	// events squeeze and expand effect
	$("#event > div").click(function(event) {
 
        if(!($(this).hasClass("expand"))) {
    		// Reset all properties
    		$(".event_heading").css("top","0px");
            $(".event_content").css("display","none");
            $("#event div").removeClass("expand squeeze ");
            var th = $(this);
            $(".event_close").fadeOut(500, function(){
                th.find(".event_close").fadeIn(90);
            });

    		// set new properties
    		$(this).addClass("expand");
    		$('#event > div').not(this).addClass("squeeze");
    		$(".expand > .event_heading").css("top","-230px");
            $(".expand > .event_content").fadeIn(3000);
            
    	}
       		
	});

    /****    Form related js -  Don't dare to touch it otherwise sky fall on you.  *****/

    $("#submit_form").click(function(event){
        var flag=( validateForm()&&checkEmail() );
        if(flag==1){
            sendFormDetails();
        }else{
            var warningMessage="Please check and fill all the fields.";
            $(".msg-Box").addClass("md-show warning").css("display","block");
            $(".msg-Box > .msg-content").html(warningMessage);
            $(".msg-Box > .msg-close").css("display","block");
        }
    });

    $(".msg-close").click(function() {
        $(".msg-Box > .msg-content").html("");
        $(".msg-Box").css("display","none").removeClass("md-show warning confirmation");
    });

    $("#reg_form input[type='email']").bind("keyup", function() {
       // $("#complexity").css("display","block");
        if( checkEmail() ){
            checkEmailRegistered() ;
        }
    });

    $("#password").bind("keyup", function() {
        $("#complexity").css("display","block");
        checkPasswordStrength();
    });  
    $("#repassword").bind("keyup", function() {
        matchPassword();
    }); 



    ////////////////////////////////////////////////////////////////////////////////////
    // Titiksha Event user Dashboard 

    $('#My_detail').click(function(){
        $('#My_detail').addClass('change_dash_menu');
        $('#Reg_Eve').removeClass('change_dash_menu');
       $('#user_detail ').css('display','block');
       $('.dash_h').fadeOut('fast');
        $('.reg_event ').fadeOut('fast');
    });

    $('#Reg_Eve').click(function(){    
        $('#Reg_Eve').addClass('change_dash_menu');   
        $('#My_detail').removeClass('change_dash_menu');
        $('.reg_event ').css('display','block');
        $('.dash_h').css('display','block');
         $('#user_detail').fadeOut('fast');
    });

});

