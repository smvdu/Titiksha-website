$(document).ready(function(){

	jQuery.easing.def = "easeOutCubic";

	
        
        // CSS 3D is not supported, use the scroll up effect instead
        $('.thumb').hover(
            function () {
                $(this).find('.thumb-detail').stop().animate({bottom:0}, 500);
            },
            function () {
                $(this).find('.thumb-detail').stop().animate({bottom: ($(this).height() * -1) }, 500);            
            }
        );
    
	
});