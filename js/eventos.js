$(document).ready(function(){
	$(".btn-contacto").click(function(){
		$('#contacto').addClass('add-contacto');
	});

	$(".btn-cerrar").click(function(){
		$('#contacto').removeClass('add-contacto');
	});
});

$(document).ready(function(){
   
   (function(a){a.expr[":"].onScreen=function(b){var c=a(window),d=c.scrollTop(),e=c.height(),f=d+e,g=a(b),h=g.offset().top,i=g.height(),j=h+i;return h>=d&&h<f||j>d&&j<=f||i>e&&h<=d&&j>=f}})(jQuery);

	// Check if an element is on sceen every 2 seconds. Add and remove "visbile" class as applicable.
	setInterval(function() {
	  $('.progress-bar').removeClass('visible')
	    .filter(":onScreen").addClass('visible');
	}, 2000)
});

$(document).ready(function ($) {
		function animateElements() {
			$('.progressbar').each(function () {
				var elementPos = $(this).offset().top;
				var topOfWindow = $(window).scrollTop();
				var percent = $(this).find('.circle').attr('data-percent');
				var percentage = parseInt(percent, 10) / parseInt(100, 10);
				var animate = $(this).data('animate');
				if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
					$(this).data('animate', true);
					$(this).find('.circle').circleProgress({
						startAngle: -Math.PI / 2,
						value: percent / 100,
						size: 200,
						thickness: 10,
						emptyFill: "rgba(0,0,0, .05)",
						fill: {
							color: '#1ABC9C'
						}
					}).on('circle-animation-progress', function (event, progress, stepValue) {
						$(this).find('div').text((stepValue*100).toFixed(0) + "%");
					}).stop();
				}
			});
		}

		// Show animated elements
		animateElements();
		$(window).scroll(animateElements);
		
		
		

	}); //end document ready function


// Trigger CSS animations on scroll.
// Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

// Looking for a version that also reverses the animation when
// elements scroll below the fold again?
// --> Check https://codepen.io/bramus/pen/vKpjNP

jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.size() == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
		$animatables.each(function(i) {
       var $animatable = $(this);
			if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
			}
    });

	};
  
  // Hook doAnimations on scroll, and trigger a scroll
	$(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});

$(function() {
		var selectedClass = "";
		$(".fil-cat").click(function(){ 
		selectedClass = $(this).attr("data-rel"); 
     $("#portfolio").fadeTo(100, 0.1);
		$("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('scale-anm');
      $("#portfolio").fadeTo(300, 1);
    }, 300); 
		
	});
});

// MENU RESPONSIVE
var accion ="dentro";
	$(".container-menu").click(function(){
		if (accion == "dentro"){
			$("#menu").addClass("add-menu");
			$("body").addClass("add-body");
			accion = "fuera";
			}
		else{
			$("#menu").removeClass("add-menu");
			$("body").removeClass("add-body");
			accion = "dentro";
		}
	});
// MENU RESPONSIVE FIN

// ANIMACION MENU
var button = $(".burger-menu-wrapper");

	button.click(function() {
		button.toggleClass("closing", button.hasClass("open"));
		button.toggleClass("open");
});
// ANIMACION MENU



