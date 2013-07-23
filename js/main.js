$(window).load(function() {
	// add js class to body if javascript enabled
	//$('body').addClass('js');

	// Flexslider
	$('.flexslider').flexslider({
		slideshow: false
	});

	// /* FitVids */
	// $(".module .media").fitVids();

	// Fancybox
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});

	// Curatin.js
	$('.curtains').curtain();

});
