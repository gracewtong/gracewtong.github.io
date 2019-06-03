// Javascript Document

/* HTML elements 
------------------------------------------------------------------*/
const $body = $('body');
const $btnMenu = $('.btnMenu');
const $navWrapper = $('.nav-wrapper');
const $nav = $('.main-nav');
const $grid = $('.grid');


/* Page transitions
------------------------------------------------------------------*/
window.addEventListener('beforeunload', function () {
  document.body.classList.add('animate-out');
});


/* Mobile Nav
------------------------------------------------------------------*/
// Show mobile dropdown nav on button click
$body.removeClass('show-mobile-nav');

$btnMenu.click(function(){	
	$body.toggleClass('show-mobile-nav');
	$btnMenu.toggleClass('animate');
	// $navWrapper.toggleClass('opaque');
	if ($btnMenu.attr('aria-expanded') == 'false') { 
	    $btnMenu.attr('aria-expanded', 'true');
	   // $btnMenu.focus();
	}
	else { 
		$btnMenu.attr('aria-expanded', 'false');
	}

});

// Auto close dropdown nav when window is resized larger
$(window).resize(function() {
    myWinWidth();
});

function myWinWidth() {
	var winWidth = $(window).width();  
    if(winWidth >= 600){
             $body.removeClass('show-mobile-nav');  
             $btnMenu.removeClass('animate');
             // $navWrapper.removeClass('opaque');  
             $btnMenu.attr('aria-expanded', 'false');      
    }
	return false;
};

// Hide nav menu after clicking a link
$('#mainNav a').click(function() {
	if($body.hasClass('show-mobile-nav')){
		$body.removeClass('show-mobile-nav');
		$btnMenu.removeClass('animate');
		// $navWrapper.removeClass('opaque'); 
		$btnMenu.attr('aria-expanded', 'false');
	};
});

// Change nav opacity on scroll
// $(window).scroll(function() {
//     let scrollPos = $(window).scrollTop();

//     if(scrollPos >= 350) {
//       $navWrapper.addClass('opaque');
//     } 

//     if(scrollPos < 350 && !$body.hasClass('show-mobile-nav')) {
//     	$navWrapper.removeClass('opaque');
//     }
// });


/* Smooth Scroll
------------------------------------------------------------------*/
$('a[href^="#"]').on('click',function (e) {
	e.preventDefault();

	const target = this.hash;
	const $target = $(target);
	
	$('html, body').stop().animate({
		'scrollTop': $target.offset().top
	}, 900,'swing');

	// version with added URL hash...

	// $('html, body').stop().animate({
	//   'scrollTop': $target.offset().top - 70
	// }, 900, 'swing', function () {
	//   window.location.hash = 1+ target;
	// });
});


/* Masonry
------------------------------------------------------------------*/
// Initialize masonry
$grid.masonry({
	// options
	itemSelector: '.grid-item',
	columnWidth: '.grid-sizer',
	gutter: '.gutter-sizer',
	percentPosition: true
});

// Layout masonry after each image loads
$grid.imagesLoaded().progress( function() {
	$grid.masonry('layout');
});



/* Parallax header
------------------------------------------------------------------*/
let currentX = '';
let currentY = '';
const movementConstant = .015;

$(document).mousemove(function(e) {
	if(currentX == '') currentX = e.pageX;
	const xdiff = e.pageX - currentX;
	currentX = e.pageX;
	if(currentY == '') currentY = e.pageY;
	const ydiff = e.pageY - currentY;
	currentY = e.pageY; 

	$('.parallax div').each(function(i, el) {
		const movement = (i + 1) * (xdiff * movementConstant);
		const movementy = (i + 1) * (ydiff * movementConstant);
		const newX = $(el).position().left + movement;
		const newY = $(el).position().top + movementy;
		$(el).css('left', newX + 'px');
		$(el).css('top', newY + 'px');
	});
});



/* Scroll to top
------------------------------------------------------------------*/
$(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {
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



// Show focus outline when tabbing, but not on click
document.addEventListener('keydown', function(e) {
  if (e.keyCode === 9) {
    $('body').addClass('show-focus-outlines');
  }
});

document.addEventListener('click', function(e) {
  $('body').removeClass('show-focus-outlines');
});
