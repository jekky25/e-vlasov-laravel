$(document).ready(function () {
	var doc_w = $(document).width();
	var minus_off = 100;
	var minus_off2 = 30;
	var destination = $('.block-over4').offset().top;
	var dest_pos = destination - minus_off;
     
	/*sertificates-slider*/
	if (doc_w <= 600) {
		$(".owl-serts").owlCarousel({
			loop: true,
			margin: 10,
			navigation: true,
			responsive:{
				0:{
					items:1
				},
				768:{
					items:5
				},
				1000:{
					items:6
				}
			}
		});
	}

	/*mob-menu*/     
		$(".icon-menu").click(function(e){
			$('.mobile-menu-main-item').fadeIn();
	});

	$(".close-menu").click(function(e){
		$('.mobile-menu-main-item').fadeOut();
	});
  
	$(".but-order-over .but-order").click(function(e){
		destination = $('.block-over4').offset().top;
		dest_pos = destination - minus_off;
		$("html").animate({scrollTop: dest_pos}, 1000);
	});

	$(".but-price-block .but-order").click(function(e){
		destination = $('.block-over4').offset().top;
		dest_pos = destination - minus_off;
		$("html").animate({scrollTop: dest_pos}, 1000);
	});

	$(".but-order-sert .but-order").click(function(e){
		destination = $('.block-over4').offset().top;
		dest_pos = destination - minus_off;
		$("html").animate({scrollTop: dest_pos}, 1000);
	});

	/**
	* Do scrolling to the choose blocks
	* @param {String} $target
	* @returns {Boolean}
	*/
	scroll = function ($target)
	{
		$('.mobile-menu-main-item').fadeOut();
		destination = $($target).offset().top;
		destinationPosition = destination - minus_off2;
		$("html").animate({scrollTop: destinationPosition}, 1000);
		return false;
	};

	/**
	* check variable isset or no isset
	* @param {mix} $val
	* @returns {Boolean}
	*/
	isset = function ($val)
	{
		return typeof $val !== "undefined";
	}

	/**
	* make text with errors from the object
	* @param {object} $val
	* @returns {string}
	*/
	prepareError = function ($val)
	{
		console.log ($val);
		$txt = '';
		$.each($val, function(i,n)
		{
			$txt += '<p>' + n + '</p>';
		});
		return $txt;
	}

	$('.head-menu-list a[href=#about]').click(function(e){return scroll('.block-over2')});
	$('.foot-menu-list a[href=#about]').click(function(e){return scroll('.block-over2')});
	$('.head-menu-list-mob a[href=#about]').click(function(e){return scroll('.block-over2')});
	$('.head-menu-list a[href=#service]').click(function(e){return scroll('.block-over3')});
	$('.foot-menu-list a[href=#service]').click(function(e){return scroll('.block-over3')});
	$('.head-menu-list-mob a[href=#service]').click(function(e){return scroll('.block-over3')});
	$('.head-menu-list a[href=#price]').click(function(e){return scroll('.block-over5')});
	$('.foot-menu-list a[href=#price]').click(function(e){return scroll('.block-over5')});
	$('.head-menu-list-mob a[href=#price]').click(function(e){return scroll('.block-over5')});
	$('.head-menu-list a[href=#contact]').click(function(e){return scroll('.block-over6')});
	$('.foot-menu-list a[href=#contact]').click(function(e){return scroll('.block-over6')});
});