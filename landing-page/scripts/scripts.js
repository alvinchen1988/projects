// JavaScript Document

//replaing the banner image when hovering over the nav links

$('.avatar').mouseover(function(){
	$('#default-head').attr("src", "images/head2.png");
})


$('.html').mouseover(function(){

	$('#default-head').attr("src", "images/head3.png");
})

$('.java').mouseover(function(){

	$('#default-head').attr("src", "images/head4.png");
})

$('.php').mouseover(function(){

	$('#default-head').attr("src", "images/head5.png");
})

$('.wordpress').mouseover(function(){

	$('#default-head').attr("src", "images/head6.png");
})

$('.css').mouseover(function(){

	$('#default-head').attr("src", "images/head7.png");
})

//returning back to default image when not hovering over the nav links
$('.primary-nav li').mouseout(function(){
	$('#default-head').attr("src", "images/head.png");
})

$('.avatar').mouseout(function(){
	$('#default-head').attr("src", "images/head.png");
})
