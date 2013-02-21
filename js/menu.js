$(document).ready(function(){
	 $('div#sidebar ul li ul').hide();
      $('div#sidebar li').mouseenter(function() {
            if ($(this).children('ul').is(':hidden')) {
                  $(this).children('ul').slideDown(300);
            } else {
                  $(this).children('ul').slideUp(300);
            }
      });
	  $('div#sidebar li').mouseleave(function() {
	  $('div#sidebar ul li ul').hide("slow");
	  });
});