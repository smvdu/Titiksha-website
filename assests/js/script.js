/* Author: 
	Saurabh Kumar
	twitter: @saurabh_world
	web: http://saurabhworld.in
	
*/

/* countdown timer */

$(function () {
	"use strict";
	var liftoffTime = new Date("March 25, 2012 9:00:00")

	$('#countdown-header').countdown({until: liftoffTime,
		description: 'to titiksha 2012!! hurry up!!'});
});


