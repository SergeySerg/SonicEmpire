$(function(){

	setTimeout(function(){
		$('.cat_expand span').trigger('click');
	}, 0);

	$('#r-catalog-open').click(function () {
		$('#raund-categories-hide').toggleClass('r-categories-show');
	});


})