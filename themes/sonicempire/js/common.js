$(function(){
	$('.manuf li a').on('click', function (e) {
		var $a = $(this);
		$('#columns').animate({opacity: 0}, 1500);
		$('.manuf').animate({
			height: '100px',
			'min-height': '100px'
		}, 1500);
		$('.manuf ul').fadeOut(500);
		setTimeout(function () {
			//window.location = $a.attr('href') + '#noloader';
			window.location = $a.attr('href');
		}, 1500);
		e.preventDefault();
	});

	$('#columns').animate({opacity: 1}, 5500);
	$('.manuf-light img').fadeIn(2000);

	$('.manuf-light').css("height", "auto");

	console.info('current pathname: ', location.pathname);
	//var current_manufacturer_id = location.pathname.split('_')[0].substr(1);
	var current_manufacturer_id = parseInt(location.pathname.split('/')[1]);
	if(current_manufacturer_id){
		console.info('current manufacturer id: ', current_manufacturer_id);
		setTimeout(function () {
			$('.owl-item a[data-id=' + current_manufacturer_id + ']').trigger('click');
		}, 1000)
	}

	$('#r-catalog-open').click(function () {
		$('#raund-categories-hide').toggleClass('r-categories-show');
	});
	
});