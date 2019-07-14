// Javascript Document


// HTML elements
const $closeBtn = $('.close');
const $formModal = $('#formModal');
const $fixedBubble = $('#fixedBubble');
const $creditsModal = $('#creditsModal');
const $credits = $('#credits');

$fixedBubble.hide();



// form validation
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-72506643-1', 'auto');
ga('send', 'pageview');



// start skrollr plugin

$(document).ready(function () {
    const s = skrollr.init();
});



// nav smooth scroll 

$('a[href^="#"]').on('click',function (e) {
    e.preventDefault();

    const target = this.hash;
    const $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top - 110
    }, 900, 'swing', function () {
        window.location.hash = 1+ target;
    });
});


// fade in/out booking bubble

$(window).scroll(function(e) {

    const pos = $('body').scrollTop();

    if(pos > 620 && pos < 4800) {
        $('#fixedBubble').fadeIn(500);
        // $('#navBar').css('background-color','#313131');
    } else {
    	$('#fixedBubble').fadeOut();
    }
});



// open close modals - booking confirmation & credits

$("form").on('submit', function(e){
	e.preventDefault();
    $formModal.show();
});


$credits.click(function(){	
	$creditsModal.show();
});

$closeBtn.click(function(){
	$formModal.hide();
	$creditsModal.hide();
});




