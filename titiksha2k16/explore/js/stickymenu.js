$(document).ready(function() {

  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 50) {
      $('#navigation').addClass('fixed-nav-bar');
    }
    if ($(window).scrollTop() < 51) {
      $('#navigation').removeClass('fixed-nav-bar');
    }
     if ($(window).scrollTop() > 50) {
      $('#footer').addClass('fixed-nav-bar');
    }
    if ($(window).scrollTop() < 51) {
      $('#footer').removeClass('fixed-nav-bar');
    }
  });
});