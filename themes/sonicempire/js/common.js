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

/* catalog open adaptive*/

	$('#r-catalog-open').on('click', function (e) {
		if($('#raund-categories-hide').hasClass('show')) {
			$('#raund-categories-hide').fadeOut();
			/*toggleClass('r-categories-show')*/
			$('#raund-categories-hide').toggleClass('show');
		}
		else {
			$('#raund-categories-hide').fadeIn();
			/*toggleClass('r-categories-show')*/
			$('#raund-categories-hide').toggleClass('show');
		}
		$('#r-catalog-open .grower').toggleClass('r-rotate');
		e.preventDefault();
	});

/* END catalog open adaptive*/

/* filters open adaptive*/

	$('#r-filters-open').on('click', function (e) {
		$('.r-filter-adaptive').animate({right:0}, 1500);
		e.preventDefault();
	});
	$('#filter-close').on('click', function () {
		$('.r-filter-adaptive').animate({right:-330}, 1500);
	});

	/* парсим списки и таблицу в описании номера */
	$('#manufacturer-category-filter').appendTo('r-filter-adaptive');
	/* END парсим списки и таблицу в описании номера */

/* END filters open adaptive*/


});