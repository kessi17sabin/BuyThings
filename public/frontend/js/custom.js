/* animation wow */

$(function(){
	new WOW().init();	
});

/*==========================================
		Navigation
==========================================*/

$(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop()<50) {
			$("nav").addClass("navbar-transparent");
			$("nav").removeClass("navbar-modified");
		}
		else{
			$("nav").addClass("navbar-modified");
		}
	});
});

/*==========================================
		smooth scroll
==========================================*/

$(function(){
	$("a.smooth-scroll").click(function(event){
		event.preventDefault();

		//get id like home,services,about etc
		var section = $(this).attr("href");

		$('html,body').animate({
			scrollTop: $(section).offset().top - 64 
		},1250, "easeInOutExpo");
	});
});