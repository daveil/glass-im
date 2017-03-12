$(document).ready(function(){
	 $(window).bind('hashchange',function(e) {
		e.preventDefault();
		var hash = location.hash;
		$('.media-item.active').fadeOut();
		$(hash).addClass('active').fadeIn();
	 });
});