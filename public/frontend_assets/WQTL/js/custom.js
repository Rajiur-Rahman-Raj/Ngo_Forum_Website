$(function () {
	
	
	$('.wqtl_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		infinite: true,
		speed: 800,
		fade: true,
		cssEase: 'linear',
		dots: false,
		arrows: true,
		prevArrow: '<i class="fas fa-chevron-left b_left_arrow"></i>',
		nextArrow: '<i class="fas fa-chevron-right b_right_arrow"></i>',
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

	//accordian part start
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function () {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
			} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			}
		});
	}

})
