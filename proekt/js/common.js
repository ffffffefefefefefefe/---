$(function() {

	new WOW().init();

	$(".header__burger").click(function(){
		$(this).toggleClass("is-active");

		if($(this).hasClass('is-active')){
			$('.header__menu').slideDown(500);
		}else{
			$('.header__menu').slideUp(500);
		}
	});

});