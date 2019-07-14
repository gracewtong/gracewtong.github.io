//// JavaScript Document

// html elements
var $body = $('body');
var $btnMenu = $('.btnMenu');


// show mobile nav
$body.removeClass('mobileNav');

$btnMenu.click(function(){	
	$body.toggleClass('mobileNav');
});

