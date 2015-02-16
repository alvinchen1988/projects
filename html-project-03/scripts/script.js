// JavaScript Document

var $thumbnails = $ ('.gallery');

var $header = $('.header');

// get the .sunshine-thumbnails' position from the
// top of the page using the jQuery
// offset() method...
var thumbPosFromTopOfPage = $thumbnails.offset().top;

$(window).scroll(function(){

	if($(window).scrollTop() > thumbPosFromTopOfPage){
		$header.addClass('header-is-shrunk');
	}else{
		$header.removeClass('header-is-shrunk');
	}

});

//scrollto code that make the smooth scrolling effect

var navLinks = $('nav li');

navLinks.localScroll({duration:1000, offsetTop : '50'});


//scrollto code that highlight the a element when scrolled to the corresponding section
//This JavaScript tutorial is from link: http://callmenick.com/2013/04/22/single-page-site-with-smooth-scrolling-highlighted-link-and-fixed-navigation/#target */
 var aChildren = $("nav li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        if (ahref !== undefined) {
        aArray.push(ahref);
        }
    } // this for loop fills the aArray with attribute href values


 $(window).scroll(function(){
        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

        for (var i=0; i < aArray.length; i++) {
            var navHeight = $("#nav").height();
            var theID = aArray[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").addClass("nav-is-highlighted");
            } else {
                $("a[href='" + theID + "']").removeClass("nav-is-highlighted");
            }
        }

        if(windowPos + windowHeight == docHeight) {
            if (!$("nav li:last-child a").hasClass("nav-is-highlighted")) {
                var navActiveCurrent = $(".nav-is-highlighted").attr("href");
                $("a[href='" + navActiveCurrent + "']").removeClass("nav-is-highlighted");
                $("nav li:last-child a").addClass("nav-is-highlighted");
            }
        }
    });



// colorbox js that makes the form show and hide on click

    var $hideForm = $('#the-form');

$('.subscribe').colorbox({

    width:"700px",
    height:"750px",
    inline:true,
    onOpen: function(){
        $('#the-form').toggleClass("hide");
    },
    onClosed: function(){
        $('#the-form').toggleClass("hide");
    }
});


$('.xbutton').click(function(){
    $(window).colorbox.close();
});
