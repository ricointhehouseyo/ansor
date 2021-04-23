$(window).scroll(function() {
	$(".slideanim").each(function(){
		var pos = $(this).offset().top;
		var winTop = $(window).scrollTop();
		if (pos < winTop + 600) {
			$(this).addClass("slider");
		}
	});
	if ($(window).scrollTop() > 100) {
		$("#nav-home").addClass("show");
	}
	else {
		$("#nav-home").removeClass("show");
	}
	if ($(window).width() < 993) {
		$("#nav-home").addClass("show");
	}
	$(".title").css({
		"background-position-y" : -$(window).scrollTop()/2.2
	});
});
$(document).ready(function() {
	if ($(window).width() < 993) {
		$("#nav-home").addClass("show");
		$(".carousel").addClass("mt-5");
	}
});