$(function () {


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
		dots: false,
		arrows: true,
		prevArrow: '<i class="fas fa-chevron-left b_left_arrow"></i>',
		nextArrow: '<i class="fas fa-chevron-right b_right_arrow"></i>',
	});

	$('.venobox').venobox({
		framewidth: '800px',
		frameheight: '500px',
		border: '5px',
		bgcolor: '#0984e3',
	});
	
	$('.venobox2').venobox({
		framewidth: '500px',
		frameheight: '800px',
		border: '5px',
		bgcolor: '#0984e3',
	});
	
	$('.venobox3').venobox({
		framewidth: '800px',
		frameheight: '500px',
		border: '5px',
		bgcolor: '#0984e3',
	});

})
