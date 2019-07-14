// Javascript Document

// tabs for 'learn how' section
$('.tabs .tab-links a').on('click', function(e)  {
    var currentAttrValue = $(this).attr('href');

    $('.tabs ' + currentAttrValue).show().siblings().hide();

    $(this).parent('li').addClass('active').siblings().removeClass('active');

    e.preventDefault();
});	


// back to top button (2 versions, since height of tutorial 3 scroll is much longer)
var $backToTop = $(".back-to-top");
var $backToTop2 = $(".back-to-top2");
$backToTop.hide();
$backToTop2.hide();


$(window).on('scroll', function() {
  if ($(this).scrollTop() > 200) {
    $backToTop.fadeIn();
  } else {
    $backToTop.fadeOut();
  }

  if ($(this).scrollTop() > 3200) {
    $backToTop2.fadeIn();
  } else {
    $backToTop2.fadeOut();
  }
});


$backToTop.add($backToTop2).on('click', function(e) {
  $("html, body").animate({scrollTop: 0}, 500);
});



// Tutorial 02 Scripts

// drag/drop seeds function
$(function(){
	$(".drag img").draggable();
   	$('.potted-plant').droppable({
    drop: function(event, ui) {
        var droppedObject = ui.draggable.data('drag'); 
        $(this).prepend(droppedObject);
        ui.draggable.remove();
        $('.clickable').show();
    }
    });
});


// show water droplets when watering can is clicked
$('body').removeClass('clicked');

$('#clickCan').click(function(){	
	$('body').toggleClass('clicked');
});



// Tutorial 03 Scripts

// initialize skrollr
$(document).ready(function () {
    const s = skrollr.init();

    $(window).scroll(function(){});

});


// This code modified from code found at:
// http://stackoverflow.com/questions/5902822/stopping-fixed-position-scrolling-at-a-certain-point

$.fn.followTo = function (pos, offset) {
    var $this = this,
        $window = $(window);

    $window.scroll(function (e) {
        if ($window.scrollTop() > pos) {
            $this.css({
                position: 'absolute',
                top: pos + offset
            });
        } else {
            $this.css({
                position: 'fixed',
                top: 0
            });
        }
    });
};

const $container = $('.scrollWrapper');

$container.followTo(2900, 0);




