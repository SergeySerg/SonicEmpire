$(function(){
	$('.catalog li a').on('click', function(){
		$('.catalog li a i').toggleClass('fa-angle-down');
		$('.catalog li a i').toggleClass('fa-angle-up');
		$('.sub_menu').toggle(400);
	});
})