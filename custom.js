/* NAV */
$(document).ready(function() {
    $(window).scroll(function(event) {
        var y = $(this).scrollTop();
        if(y >= 50) {
            $('.navbar').addClass('navbar-fixed-top');
            $('.navbar').addClass('effect');
        }
        if (y == 0) {
        	$('.navbar').removeClass('navbar-fixed-top');
        	$('.navbar').removeClass('effect');
        }
    });
});

/*PARALLAX*/
$(function() {

	// Cache the window object
	var $window = $(window);

	// Parallax background effect
	$('div[data-type="background"]').each(function() {

		var $bgobj = $(this); // Assigning the object

		$window.scroll(function() {

			// Scroll the background at var speed
			// The yPos is a negative value because we're scrolling it UP!

			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

			// Put together our final background position

			var coords = '50% '+ yPos + 'px';

			// Move the background

			$bgobj.css({ backgroundPosition: coords });

		}); // End window scroll
	});

});