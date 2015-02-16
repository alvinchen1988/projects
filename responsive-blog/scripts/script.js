//remove the no-js backup styles when js is enabled and loaded

$('html').removeClass('no-js');

var $body = $('body');
var $nav = $('.primary-nav');
var $mobileMenu = $('.button--mobile');

$mobileMenu.one('click', function(){
	$body.removeClass('preload');
})

//toggle the mobile menu when mobile button is tapped
$mobileMenu.click(function(){
	$nav.toggleClass('nav-is-active');
});