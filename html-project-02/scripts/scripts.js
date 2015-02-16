// JavaScript Document

//hero image slider on the homepage

$('#slider').fotorama({

 	autoplay: 4000,
 	stopautoplayontouch: false,
 	loop: true,
 	arrows: true,
 	transition: 'crossfade'

});


//replaing the social-icon images in footer on hovering

$('.facebook').mouseover(function(){
	$('.facebook').attr("src", "images/facebook-thumbnail-color.png");
})

$('.instagram').mouseover(function(){
	$('.instagram').attr("src", "images/instagram-thumbnail-color.png");
})

$('.pinterest').mouseover(function(){
	$('.pinterest').attr("src", "images/pinterest-thumbnail-color.png");
})

$('.youtube').mouseover(function(){
	$('.youtube').attr("src", "images/youtube-thumbnail-color.png");
})


//returning back to default social-icon images when not hovering
$('.facebook').mouseout(function(){
	$('.facebook').attr("src", "images/facebook-thumbnail-grey.png");
})

$('.instagram').mouseout(function(){
	$('.instagram').attr("src", "images/instagram-thumbnail-grey.png");
})

$('.pinterest').mouseout(function(){
	$('.pinterest').attr("src", "images/pinterest-thumbnail-grey.png");
})

$('.youtube').mouseout(function(){
	$('.youtube').attr("src", "images/youtube-thumbnail-grey.png");
})
