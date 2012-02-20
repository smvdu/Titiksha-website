/* Author: Saurabh Kumar
   Last Modified: Feb 20, 2012
****************************/

var debug = true;

$(document).ready(function(){

	log("App started");
	var frame = $('#containter-frame');

	//hide document default scroll-bar
	document.body.style.overflow = 'hidden';

		
	frame.load(resizeIframe);	
	$(window).resize(resizeIframe); 

	function resizeIframe() {
    	var h = $(window).height();
    	var w = $(window).width();
    	frame.height(h);
    	frame.width(w);
	}
});

function log (str) {
		// debug log event...
	if (debug) {console.log(str);};	
}