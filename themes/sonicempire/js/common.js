$(function(){
	/*картинки од лого*/
	$('.manuf-description-dropdown img').each(function () {
		var parId = $(this).parents('li').attr('id');
		var imgDesc = $(this).attr('alt');
		var imgPath = $(this).attr('src');
		$("<a class='gallery no-loader' rel="+ parId +" title='"+ imgDesc +"' href='"+ imgPath +"'><img src='"+ imgPath +"' /></a><p>" + imgDesc + "</p>").appendTo('#'+ parId +' .manuf-logo-dropdown .under-logo');
		$('img[alt="'+ imgDesc +'"]').remove();
	});
	$(".gallery").fancybox();
	$('.manuf-description-dropdown a.more').on("click", function () {
		$('.under-logo').toggleClass('under-logo-active');
	});
	/*END картинки од лого*/
	/*картинки для категорий*/
	$('#category_description_full img:not(.normal), .small_description img:not(.normal)').each(function () {
		var catId = 'category-gallery';
		var imgDesc = $(this).attr('alt');
		var imgPath = $(this).attr('src');
		$("<a class='cat-gallery no-loader' rel="+ catId +" title='"+ imgDesc +"' href='"+ imgPath +"'><img src='"+ imgPath +"' /><p>" + imgDesc + "</p></a>").appendTo('#'+ catId);
		$('img[alt="'+ imgDesc +'"]').remove();
	});
	$('#category_description_full img.normal, .small_description img.normal').each(function () {
		var catId = 'category-gallery-big';
		var imgDesc = $(this).attr('alt');
		var imgPath = $(this).attr('src');
		$("<a class='cat-gallery normal-img no-loader' rel="+ catId +" title='"+ imgDesc +"' href='"+ imgPath +"'><img class='normal' src='"+ imgPath +"' /><p>" + imgDesc + "</p></a>").appendTo('#'+ catId);
		$('img[alt="'+ imgDesc +'"]').remove();
	});
	$(".cat-gallery").fancybox();
	/*END картинки  для категорий*/

	$('.manuf li a').on('click', function (e) {
		var $a = $(this);
		$('#columns').animate({opacity: 0}, 500);
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

	$('#columns').animate({opacity: 1}, 2000);
	$('.manuf-light img').fadeIn(2000);

	$('.manuf-light').css("height", "auto");

	console.info('current pathname: ', location.pathname);
	//var current_manufacturer_id = location.pathname.split('_')[0].substr(1);
	var current_manufacturer_id = parseInt(location.pathname.split('/')[1]);
	if(current_manufacturer_id){
		console.info('current manufacturer id: ', current_manufacturer_id);
		setTimeout(function () {
			$manufacturerElement = $('.owl-item a[data-id=' + current_manufacturer_id + ']');
			if($manufacturerElement.hasClass('active')){
				$('.r-tab-data').slideUp('1000');
				$manufacturerElement.removeClass('active');
				e.preventDefault();
				return false;
			};

			/*
			 var dataId = $(this).attr('data-id');
			 $('a[data-id=' + dataId + ']').parent().hide();
			 */
			$manufacturerElement.parent().hide();

			var idTab = $manufacturerElement.attr('data-tab');
			$('.r-tab').removeClass('active');
			$manufacturerElement.addClass('active');

			$('.r-tab-data').slideUp('1000');
			$(idTab).delay('500').slideDown('1000');
		}, 1000)
	}

/*
	$('.manuf-light li a').on('click', function (e) {
		var $a = $(this);
		$('.manuf-light ul.dropdown-manuf-list').fadeOut(500);
		e.preventDefault();
	});
*/
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

/* END filters open adaptive*/


});