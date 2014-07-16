$(function(){
	$(window).on("load resize", function () {
		if ($(window).innerWidth() < 768) {
			$('.sidebar-collapse').addClass('collapse');
		} else {
			$('.sidebar-collapse').removeClass('collapse');
		}
	})
});