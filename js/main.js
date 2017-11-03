$(document).ready(function() {
	
	

	// Offerings Slider
	$('#offerings-slider').bxSlider({
		// Options can be referenced at http://bxslider.com/options
		pagerCustom: '#offerings-pager',
		easing: 'cubic-bezier(.35,.01,.54,.93)',
		controls: false,
		speed: 700,
		infiniteLoop: false,
		onSlideBefore: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
			$('#offerings-slider > li').addClass('transition');
			setTimeout(function() {
				$('#offerings-slider > li').removeClass('transition')
			}, 500);
		}
	});


	// Scroll to anchor
	$(".scroll").click(function() {
		var anchor = $(this).attr("href");
		$('html, body').animate({			
			scrollTop: $( anchor ).offset().top - 50
		}, 500);
		return false;
	});


	// Form cards
	$("#cards .card").click(function() {
		$(".card").removeClass('active');
		$(this).toggleClass('active');
	});


	// Form options
	$(".quantity-options .option").click(function() {
		$(this).parent().find(".option").removeClass('active');
		$(this).toggleClass('active');
	});


	// Form Continue
	$("a.continue").click(function() {
		var nextPanel = $(this).data('panel');
		$("#panel-"+nextPanel).addClass('active');

		$('html, body').animate({
	        scrollTop: ($("#panel-"+nextPanel).offset().top - 150)
	    }, 500);

		return false;
	});


	// Custom select menu
	$(".dropdown-button").click(function() {
		$(this).toggleClass('active');
		$(this).parent().find('.dropdown-options').fadeToggle();
	});



	// Input form animations
	$(".text-input input").focus(function(){
		$(this).parent().addClass("active");

	}).blur(function(){
		$(this).parent().addClass("active");
	})



	$("#contractor-portal .dropdown-options a").click(function() {
		var id = $(this).data('location');
		$(".neighborhood-"+id).slideDown();
		$('.dropdown-options').fadeToggle();
		$(".dropdown-button").toggleClass('active');
		return false;
	});




	// Slide Out Menu
	$("#menu-button").click(function() {
		$("#slide-out").toggleClass("expanded")
		return false;
	});

	$(".close-button").click(function() {
		$("#slide-out").toggleClass("expanded")
		return false;
	});

	$('#slide-out ul li.menu-item-has-children > a').click(function() {

		$(this).find('.sub-menu').slideUp();

		if ( $(this).hasClass( "active" ) ) {
			$(this).parent().find('.sub-menu').first().slideUp();
			$(this).removeClass('active');
		} else {
			$(this).parent().find('.sub-menu').first().slideDown();
			$(this).addClass('active');
		}

		return false;
	});


	// End slide out menu

});