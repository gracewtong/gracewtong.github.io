//// JavaScript Document

// html elements
var $body = $('body');
var $btnMenu = $('.btnMenu');


// show mobile nav
$body.removeClass('mobileNav');

$btnMenu.click(function(){	
	$body.toggleClass('mobileNav');
});


// scroll to top button
$(window).scroll(function() {
    if ($(this).scrollTop() >= 100 && $(this).scrollTop() < $(document).height() - $(window).height() - $('footer').height()) {
        $('#top').fadeIn('fast');
    } 
    else {
        $('#top').fadeOut('fast');
    }
});



$('#top').click(function() {           
    $('body,html').animate({
        scrollTop : 0                   
    }, 500);
});