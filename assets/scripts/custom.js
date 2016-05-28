/* animation how to use page */
$(window).scroll(function() {

	$('#animation-step-3').each(function() {
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow + 350) {
			$(this).addClass("slideRight");
		}
	});

	$('#animation-arrow-2').each(function() {
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow + 450) {
			$(this).addClass("slideLeft");
		}
	});

	$('#animation-arrow-3').each(function() {
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow + 500) {
			$(this).addClass("slideRight");
		}
	});

	$('#animation-step-4').each(function() {
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow + 400) {
			$(this).addClass("slideLeft");
		}
	});

	$('#animation-arrow-4').each(function() {
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow + 500) {
			$(this).addClass("slideLeft");
		}
	});

	$('#animation-step-5').each(function() {
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow + 300) {
			$(this).addClass("slideRight");
		}
	});

	$('#animation-arrow-5').each(function() {
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow + 600) {
			$(this).addClass("slideRight");
		}
	});

	$('#animation-step-6').each(function() {
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow + 580) {
			$(this).addClass("slideLeft");
		}
	});

});

/* slide clicking out of from right */
/* 1 */
$('.click-slide-right').click(function() {
	$('#slider-right').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide1').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide1').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right').click(function() {
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});

/* 2 */
$('.click-slide-right-two').click(function() {
	$('#slider-right-two').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right-two').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide2').click(function() {
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide2').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right-two').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});

/* 3 */
$('.click-slide-right-three').click(function() {
	$('#slider-right-three').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right-three').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide3').click(function() {
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide3').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right-three').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});

/* 4 */
$('.click-slide-right-four').click(function() {
	$('#slider-right-four').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right-four').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide4').click(function() {
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide4').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right-four').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});

/* 5 */
$('.click-slide-right-five').click(function() {
	$('#slider-right-five').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right-five').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide5').click(function() {
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide5').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right-five').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});

/* 6 */
$('.click-slide-right-six').click(function() {
	$('#slider-right-six').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right-six').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide6').click(function() {
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide6').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right-six').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});

/* 7 */
$('.click-slide-right-seven').click(function() {
	$('#slider-right-seven').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right-seven').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide7').click(function() {
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide7').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right-seven').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});

/* 8 */
$('.click-slide-right-eight').click(function() {
	$('#slider-right-eight').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right-eight').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide8').click(function() {
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide8').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right-eight').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});

/* 9 */
$('.click-slide-right-nine').click(function() {
	$('#slider-right-nine').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right-nine').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide9').click(function() {
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide9').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right-nine').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});

/* 10 */
$('.click-slide-right-ten').click(function() {
	$('#slider-right-ten').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right-ten').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide10').click(function() {
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide10').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right-ten').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});

/* 11 */
$('.click-slide-right-eleven').click(function() {
	$('#slider-right-eleven').animate({
		'right' : '0'
	}, 600);
	$('.click-slide-right-eleven').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide11').click(function() {
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide10').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.click-slide-right-eleven').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
});


// FAQ Accordion
//uses classList, setAttribute, and querySelectorAll
//if you want this to work in IE8/9 youll need to polyfill these
(function() {
	var d = document,
	    accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
	    setAria,
	    setAccordionAria,
	    switchAccordion,
	    touchSupported = ('ontouchstart' in window),
	    pointerSupported = ('pointerdown' in window);

	skipClickDelay = function(e) {
		e.preventDefault();
		e.target.click();
	}
	setAriaAttr = function(el, ariaType, newProperty) {
		el.setAttribute(ariaType, newProperty);
	};
	setAccordionAria = function(el1, el2, expanded) {
		switch(expanded) {
		case "true":
			setAriaAttr(el1, 'aria-expanded', 'true');
			setAriaAttr(el2, 'aria-hidden', 'false');
			break;
		case "false":
			setAriaAttr(el1, 'aria-expanded', 'false');
			setAriaAttr(el2, 'aria-hidden', 'true');
			break;
		default:
			break;
		}
	};
	//function
	switchAccordion = function(e) {
		e.preventDefault();
		var thisAnswer = e.target.parentNode.nextElementSibling;
		var thisQuestion = e.target;
		if (thisAnswer.classList.contains('is-collapsed')) {
			setAccordionAria(thisQuestion, thisAnswer, 'true');
		} else {
			setAccordionAria(thisQuestion, thisAnswer, 'false');
		}
		thisQuestion.classList.toggle('is-collapsed');
		thisQuestion.classList.toggle('is-expanded');
		thisAnswer.classList.toggle('is-collapsed');
		thisAnswer.classList.toggle('is-expanded');

		thisAnswer.classList.toggle('animateIn');
	};
	for (var i = 0,
	    len = accordionToggles.length; i < len; i++) {
		if (touchSupported) {
			accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
		}
		if (pointerSupported) {
			accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
		}
		accordionToggles[i].addEventListener('click', switchAccordion, false);
	}
})();

// alter menu foot behaviour
( function($) {
		$.fn.navSize = function() {
			var nav = $(this);
			var drawer = $('#drawer', nav);
			var wh = $(window).height();
			var dd = $('#nav #drawer div');
			var bm = $('#nav #bar div.main');
			var dm = $('#nav #drawer div.main');
			var dh = 0;
			dh = $('#nav #drawer .head').height() + $('#nav #drawer .main ul#nav-titles').outerHeight() + $('#nav #drawer .foot').height();
			if (wh > dh) {
				nav.addClass('sticky');
				// set height of drawer content
				if (dm.length) {
					// bm.drawerHeight();
					// dm.drawerHeight();
				};
			} else {
				nav.removeClass('sticky');
				if (dm.length) {
					//  bm.height('auto');
					//  dm.height('auto');
				};
			}
		}
	}(jQuery)); ( function($) {
		$.fn.drawerHeight = function() {
			var wh = $(window).height();
			var sb = this.siblings('div');
			var sh = 0;
			sb.each(function() {
				sh += $(this).outerHeight();
			});
			var dh = wh - sh;
			this.height(dh);
		}
	}(jQuery));

$(document).ready(function() {
	$('#bar li:last').addClass('last');

	$('.intro .content h1').css('opacity', '0');
	$('.intro .content p').css('opacity', '0');
	$('.intro .content span.breaker').css({
		'width' : '1%',
		'opacity' : '0'
	});
	$('.intro .content span.scroll-icon').css('opacity', '0');

});

$(window).load(function() {

	// ******** nav control ******** //

	var update_on_scroll = true;
	var hover_id;
	var current_submenu_item_id = -1;
	var t;

	// show and hide nav
	$('#nav').mouseenter(function() {
		clearTimeout(t);
		t = setTimeout(show_nav, 200);
	});

	$('#nav').mouseleave(function() {
		clearTimeout(t);
		t = setTimeout(hide_nav, 200);
	});

	function show_nav() {
		$('#nav #drawer').animate({
			'left' : '0px'
		}, 400);
		$('#nav').css('width', '190px');
	}

	function hide_nav() {
		$('#nav #drawer').animate({
			'left' : '-190px'
		}, 400);
		$('#nav').css('width', '190px');
	}

	// set nav sizing/sticky foot
	var nav = $('#nav');
	if (nav.length) {
		nav.navSize();
		$(window).resize(function() {
			nav.navSize();
		})
	};

	// when hovering over an item, we need to also set the hover state for it's partner element (number / text)

	$('#nav-numbers, #nav-titles').find('a').hover(function() {
		hover_id = $(this).closest('ul').find('a').index($(this));
		title_elem = $('#nav-titles a').eq(hover_id);
		number_elem = $('#nav-numbers a').eq(hover_id);
		title_parent_elem = $('#nav-titles a#' + title_elem.attr('data-parent-id'));
		number_parent_elem = $('#nav-numbers a#' + number_elem.attr('data-parent-id'));
		title_elem.addClass('hover');
		number_elem.addClass('hover');
		//title_parent_elem.addClass('hover');
		//number_parent_elem.addClass('hover');
	}, function() {
		title_elem.removeClass('hover');
		number_elem.removeClass('hover');
		//title_parent_elem.removeClass('hover');
		//number_parent_elem.removeClass('hover');
	});

	$('.current_page a').click(function(e) {
		e.preventDefault();
		// remove active class from all li's
		$('#nav-titles li').removeClass('active');
		$('#nav-numbers li').removeClass('active');

		// add active class to clicked li
		var active_title_li = $('#nav-titles li').eq(hover_id);
		var active_number_li = $('#nav-numbers li').eq(hover_id);
		active_title_li.addClass('active');
		active_number_li.addClass('active');
		
		// add active class to parent elements of clicked element  
		$('#nav-numbers a#' + active_number_li.find('a').attr('data-parent-id')).parent().addClass('active');
		$('#nav-titles a#' + active_title_li.find('a').attr('data-parent-id')).parent().addClass('active');
		
	
		var hashPosition = $(this).attr('href');
		hashPosition--;
		goToPosition($('.hotspot').eq(hashPosition).attr('data-position'));
		current_submenu_item_id = hashPosition;

		update_on_scroll = false;
		setTimeout(function() {
			update_on_scroll = true;
		}, 1000);
	});

	// deep linking - if we have a 'hotspot' query string then set our initial position to that hotspot's vertical position
	var hashPosition = null;

	if (hashPosition) {

		hashPosition--;
		// remove active class from all sub li's
		$('#nav-titles li.sub').removeClass('active');
		$('#nav-numbers li.sub').removeClass('active');

		// add active class to clicked li
		$('#nav-titles li.current_page').eq(hashPosition).addClass('active');
		$('#nav-numbers li.current_page').eq(hashPosition).addClass('active');

		goToPosition($('.hotspot').eq(hashPosition).attr('data-position'));
		$('.intro').css('z-index', '-10000');
		current_submenu_item_id = hashPosition;

		update_on_scroll = false;
		setTimeout(function() {
			update_on_scroll = true;
		}, 1000);
		//  ctaActive = false;
	}

	// highlight sub items on scroll
	// first we store all the positions of the hotspots
	var positions_to_match = [];
	$('.hotspot').each(function() {
		positions_to_match.push(parseFloat($(this).attr('data-position')));
	});

	// when we scroll through, compare current scroll position to hotspot positions
	// if they match then set the relevant nav link (id) to active
	function updateHotspotsOnScroll() {
		if (update_on_scroll) {
			if (getCurrentPosition() < 0.05 || getCurrentPosition() > 0.95) {
				$('#nav-titles li.sub').removeClass('active');
				$('#nav-numbers li.sub').removeClass('active');
				current_submenu_item_id = -1;
			} else {
				for (var i = 0; i < positions_to_match.length; i++) {
					if (getCurrentPosition().toFixed(1) == positions_to_match[i].toFixed(1) && current_submenu_item_id != i) {
						current_submenu_item_id = i;
						$('#nav-titles li.sub').removeClass('active');
						$('#nav-numbers li.sub').removeClass('active');

						$('#nav-titles li.sub.current_page').eq(i).addClass('active');
						$('#nav-numbers li.sub.current_page').eq(i).addClass('active');
					}
				}
			}
		}
	}

});

// slider products
$(function() {
	$(".flipster").flipster();
});

// initial page load
//$('#content').load('content/main.php');

// handle menu click

/*** LOAD PAGES ***/
$('.vision-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/vision/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.mission-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/mission/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.dream-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/dream/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.gambling-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/gambling/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.policies-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/policies/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.steps-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/steps/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.faq-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/faq/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.10resons-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/resons/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.contact-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/contact/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.calendar-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/calendar/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.category-men-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/categorymen/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.category-women-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/categorywomen/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.category-kids-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/categorykids/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.category-electronics-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/categoryelectronics/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.category-jewelry-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/categoryjewelry/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.category-home-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/categoryhome/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.category-gift-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/categorygift/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.category-miscellaneous-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/categorymiscellaneous/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});


$('.header-register a,.header-login a').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : page,
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.login-button').click(function(event) {
	event.preventDefault()
	$('#id').click();
	alert('asdf');

});

$("#login, #register").on("submit", function(event) {
	event.preventDefault();
	alert('b');
	if ($("#register").exists()) {
		var action = "/auth/register"
	} else if ($("#login").exists()) {
		var action = "/auth/login"
	}
	$.ajax({
		url : action,
		type : "post",
		data : $(this).serialize(),
		dataType : "json",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		}
	});
});

$('.product-link').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/product/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.buy-now-link').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/buynow/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});

$('.bid-now-link').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/bidnow/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});

});


// Countdown
$('document').ready(function() {
	'use strict';
	
	$('.countdown').final_countdown({
		'start': 1362139200,
		'end': 1388461320,
		'now': 1387461319        
	});
});

//Scrollbar
(function($){
	$(window).load(function(){
		
		$(".content-sidebar").mCustomScrollbar({

		});
		
	});
})(jQuery);

//Img slider
$(document).ready(function(){
	$('#promotion').bxSlider({
		auto: true,
		autoStart: true,
		pause: 3000,
		pager: false,
		mode: 'fade'
	});
});

$(document).ready(function(){
	$('#promotion2').bxSlider({
		auto: true,
		autoStart: true,
		pause: 3000,
		pager: false,
		mode: 'fade'
	});
});

$(document).ready(function(){
	$('#recent-bid').bxSlider({
		slideWidth: 210,
		minSlides: 3,
		maxSlides: 3,
		slideMargin: 1,
		pager: false
	});
});

$(document).ready(function(){
	$('#recent-won').bxSlider({
		slideWidth: 210,
		minSlides: 3,
		maxSlides: 3,
		slideMargin: 1,
		pager: false
	});
});

 $(document).ready(function () {
        setInterval(function () {
            $(".click-slide-right-three").addClass("click-slide-right-three-hover");
        }, 3000);
    });

	 $(document).ready(function () {
        setInterval(function () {
            $(".click-slide-right-three").removeClass("click-slide-right-three-hover");
        }, 6000);
    });