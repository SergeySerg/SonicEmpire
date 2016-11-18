$(function(){
	
	/*$('.catalog li a').on('click', function(){
		$('.catalog li a i').toggleClass('fa-angle-down');
		$('.catalog li a i').toggleClass('fa-angle-up');
		$('.sub_menu').toggle(400);
	});*/

	$("#menu ul").hide();
	$("#menu li span").click(function() {
    $("#menu ul:visible").slideUp("normal");
    if (($(this).next().is("ul")) && (!$(this).next().is(":visible"))) {
        $(this).next().slideDown("normal");
    }
});

})