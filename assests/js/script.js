/* Author: 
	Saurabh Kumar
	twitter: @saurabh_world
	web: http://saurabhworld.in
	
*/

/* countdown timer */

$(function() {
	"use strict";
	var liftoffTime = new Date("March 25, 2012 9:00:00")

	$('#countdown-header').countdown({
		until: liftoffTime,
		description: 'to titiksha 2012!! hurry up!!'
	});
});


/* Latest updates */
(function() {
	var count = 0,

		list = [{
			service: 'facebook_page',
			user: '174073632706614'
		}, {
			service: 'github',
			user: 'smvdu'
		}, {
			service: 'rss',
			user: 'http://2012.titiksha.smvdu.net.in/feed/'
		}, {
			service: 'twitter',
			user: 'titikshasmvdu'
		}];

	Date.prototype.toISO8601 = function(date) {
		var pad = function(amount, width) {
				var padding = "";
				while (padding.length < width - 1 && amount < Math.pow(10, width - padding.length - 1))
				padding += "0";
				return padding + amount.toString();
			}
		date = date ? date : new Date();
		var offset = date.getTimezoneOffset();
		return pad(date.getFullYear(), 4) + "-" + pad(date.getMonth() + 1, 2) + "-" + pad(date.getDate(), 2) + "T" + pad(date.getHours(), 2) + ":" + pad(date.getMinutes(), 2) + ":" + pad(date.getUTCSeconds(), 2) + (offset > 0 ? "-" : "+") + pad(Math.floor(Math.abs(offset) / 60), 2) + ":" + pad(Math.abs(offset) % 60, 2);
	};

	$("#lifestream").lifestream({
		limit: 400,
		list: list,
		feedloaded: function() {
			count++;
			// Check if all the feeds have been loaded
			if (count === list.length) {
				$("#lifestream li").each(function() {
					var element = $(this),
						date = new Date(element.data("time"));
					element.append(' <abbr class="timeago" title="' + date.toISO8601(date) + '">' + date + "</abbr>");
				})
				$("#lifestream .timeago").timeago();
			}
		}
	});

})();
