$(function () {


	//Animation Start
	new WOW().init();
	//Animation End

	//Banner JS start
	$('.banner_part').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		infinite: true,
		speed: 800,
		fade: true,
		cssEase: 'linear',
		dots: true,
		arrows: true,
		prevArrow: '<i class="fas fa-chevron-left b_left_arrow"></i>',
		nextArrow: '<i class="fas fa-chevron-right b_right_arrow"></i>',

	});

	//Video Part start
	$(document).ready(function () {
		$('.videobox').venobox({
			spinColor: '#42B8D4',
			spinner: 'cube-grid',
		});
	});
	//Video Part End


	$('.counter').counterUp({
		delay: 20,
		time: 2000
	});


	//ongoing slider start
	$('.ongoing_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		//		autoplay: true,
		autoplaySpeed: 3000,
		infinite: true,
		speed: 800,
		fade: true,
		cssEase: 'linear',
		arrows: true,
		prevArrow: '<i class="fas fa-chevron-left b_left_arrow"></i>',
		nextArrow: '<i class="fas fa-chevron-right b_right_arrow"></i>',
	});
	//ongoing slider end



	//Gallery start
	$(document).ready(function () {
		$('.venobox').venobox({
			framewidth: '500px',
			frameheight: '400px',
		});
	});
	//Gallery end


	//MixIt Up Start
	var mixer = mixitup('.filter_cls');
	//MixIt Up End


	//News Js Start
	$('.news_slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		speed: 800,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
    },
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
    },
			{
				breakpoint: 576,
				settings: {
					autoplay: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
    }
  ]
	});



	//publication Js Start
	$('.publication_slider').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 1,
		arrows: false,
		speed: 800,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
    },
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
    },
			{
				breakpoint: 576,
				settings: {
					autoplay: false,
					slidesToShow: 3,
					slidesToScroll: 1
				}
    }
  ]
	});



	$('.events_slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		speed: 800,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
    },
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
    },
			{
				breakpoint: 576,
				settings: {
					autoplay: false,
					slidesToShow: 2,
					slidesToScroll: 1
				}
    }
  ]
	});





	//Partner Slider
	$('.partners_slider').slick({
		infinite: true,
		slidesToShow: 9,
		slidesToScroll: 1,
		arrows: false,
		speed: 800,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: false,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
    },
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
    },
			{
				breakpoint: 576,
				settings: {
					autoplay: false,
					slidesToShow: 3,
					slidesToScroll: 1
				}
    }
  ]
	});


	//Menu Fixed start
	$('.top_btn').click(function () {

		$('html,body').animate({

			scrollTop: 0

		}, 1000);

	});

	var $nav = $('.header').offset().top;

	$(window).scroll(function () {

		$scrolling = $(this).scrollTop();

		if ($scrolling >= $nav) {

			$('.header').addClass('fixedmenu');

		} else {
			$('.header').removeClass('fixedmenu');

		}

		//Top Button
		if ($scrolling >= 500) {

			$('.top_btn').fadeIn();

		} else {

			$('.top_btn').fadeOut();

		}

	});
	//Menu Fixed End


	//Smooth Scroll start
	$('.header a[href*="#"]')
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function (event) {
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
				location.hostname == this.hostname
			) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000, function () {
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) {
							return false;
						} else {
							$target.attr('tabindex', '-1');
							$target.focus();
						};
					});
				}
			}
		});
	//Smooth SCroll End





})
