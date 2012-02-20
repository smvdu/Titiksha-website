/* Author: Saurabh Kumar
   Last Modified: Feb 20, 2012
****************************/

var debug = false;

$(document).ready(function(){

	log("App started");
	var frame = $('#containter-frame');

	//hide document default scroll-bar
	document.body.style.overflow = 'hidden';

		
	frame.load(resizeIframe);	
	$(window).resize(resizeIframe); 

	function resizeIframe() {
    	var w, h;   	
    	
 		if($.browser.mozilla){
  			h = $(window).height();
    		w = $(window).width();
  			log("firefox");	
  		}else{
  			h = $(document).height();
    		w = $(document).width();
    		log("non-firefox");
  		}

    	frame.height(h);
    	frame.width(w);
	}
});

function log (str) {
		// debug log event...
	if (debug) {console.log(str);};	
}