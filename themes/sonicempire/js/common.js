$(function(){
	
	/*$("#menu ul").hide();
	$("#menu li span").click(function() {
		$("#menu ul:visible").slideUp("normal");
		if (($(this).next().is("ul")) && (!$(this).next().is(":visible"))) {
			$(this).next().slideDown("normal");
		}
	});*/

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
				window.location = $a.attr('href') + '#noloader';
			}, 2000);
			e.preventDefault();
		});

		$('#columns').animate({opacity: 1}, 5500);
		$('.manuf-light img').fadeIn(2000);
	});



});