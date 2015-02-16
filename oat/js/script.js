
//1. fullscreen overlay menu in mobile environment for index.html

/*remove the no_js class from older browsers
  that do not support the native
  JavaScript .classList.remove()
  method  */
$('html').removeClass('no-js');
$('html').addClass('js');


var $body = $('.index');
var $nav = $('.home-mobile-nav');
var $overlay = $('<div class="overlay"></div>');
var $mobileButton  = $('.mobile-button');

$body.prepend($overlay);
$overlay.append($nav.clone());

var $homeMobileButton = $('.home-mobile-button');

$homeMobileButton.click(function(){
	$overlay.toggleClass('open');
});


//2. fullscreen overlay menu in mobile environment for subpages .php
var $subBody = $('.subbody');
var $subpageMobileNav = $('.subpage-mobile-nav');
var $subpageOverlay = $('<div class="overlay"></div>');

$subBody.prepend($subpageOverlay);
$subpageOverlay.append($subpageMobileNav.clone());

var $subMobileButton = $('.subpage-mobile-button');

$subMobileButton.click(function(){
	$subpageOverlay.toggleClass('open');
});


$('.mobile-button').click(function(){
	if($('html').css('overflow-y') == 'auto'){
		$('html').css('overflow-y', 'hidden');
	}else{
		$('html').css('overflow-y', 'auto');
}
	});


$mobileButton.click(function(){
if($(this).text() == 'Menu'){
		$(this).text('X');
		$(this).addClass('trigger')

	}else{
		$(this).text('Menu');
		$(this).removeClass('trigger')
	}
});


// live search for student names

$("#quick-search").keyup(function() {
    var value = this.value.toLowerCase().trim();

    $("table").find("tr").each(function(index) {
        if (index === 0) return;
        var id = $(this).find("td").first().text().toLowerCase().trim();

        $(this).toggle(id.indexOf(value) !== -1);

    });
});



if($(".desktop-schedule tbody tr:last-child .course").text().length > 0 ){
	$(".desktop-schedule tbody tr:last-child").show();
}else{
	$(".desktop-schedule tbody tr:last-child").hide();
}


if($(".desktop-schedule tbody tr:first-child .course").text().length > 0 ){
	$(".desktop-schedule tbody tr:first-child").show();
}else{
	$(".desktop-schedule tbody tr:first-child").hide();
}
