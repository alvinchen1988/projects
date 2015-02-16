// JavaScript Document

// Accordian Script

// Hide the sidebar secondary menu on load
$('.brand-list__item ul').hide();


 //select all the sidebar primary menu links
var $sidebarLinks = $('.brand-list__item > a');


$sidebarLinks.click(function(){

	var $this = $(this);
	var $thisDiv = $this.next();

	if($thisDiv.is(':visible')){
		$this.removeClass('minus');
	}else{
		$this.addClass('minus');
	}

	$thisDiv.slideToggle();

});

//-------------------------------------------------------

//hover on image Script


var slideImage = $('.shoe-large img');
var thumbs = $('.shoe-gallery__item a');

thumbs.on('mouseenter click focus', function(e){

	newImageSrc = $(this).attr('href');
	slideImage.attr('src', newImageSrc);
	// prevent default click behaviour
	e.preventDefault();
});


//--------------------------------------------------------


// Tabs Script

// Select tab links
$tabs = $('.tab-nav a');

// Select active tab link
$tabActive = $('.tab-nav .active');

// Select the tab content boxes
$tabContent = $('.tab-content');

// Run the display active tab function
displayActiveTabContent($tabActive);

// Click event for tab links
$tabs.click(function(e){
	e.preventDefault();
	var $this = $(this);
	$tabs.removeClass('active');
	$this.addClass('active');
	displayActiveTabContent($this)
});

// Function for displaying the active tab
function displayActiveTabContent(activeTab){
	$tabContent.hide();
	var activeID = activeTab.attr('href');
	$(activeID).show();
}


// fullscroll

$(document).ready(function() {
    $('#fullpage').fullpage();
});
