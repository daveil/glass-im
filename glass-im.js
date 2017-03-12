$(document).ready(function(){
	 $('.nav>li').click(function(){
		 console.log('ckasufsdf');
		$('.nav>li.active').removeClass('active'); 
		$(this).addClass('active'); 
	 });
	 $(window).bind('hashchange',function(e) {
		e.preventDefault();
		var hash = location.hash;
		$('.media-item.active').fadeOut();
		$(hash).addClass('active').fadeIn();
	 });
});