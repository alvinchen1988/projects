var $nav = $ ('.primary-nav');


// get the nav position from the
// top of the page using the jQuery
// offset() method...

var navPosFromTopOfPage = $nav.offset().top;

$(window).scroll(function(){

	if($(window).scrollTop() >= navPosFromTopOfPage){

		// the "sticky" class is a class
		// in our css file with the
		// following properties
		// 1. position: fixed
		// 2. width: 100%;
		// 3. top: 0;
		// 4. left: 0;

		$nav.addClass('sticky');
		$('.logo').attr('href', '#top');
		$('#content').css('top', $('header').outerHeight() + $nav.outerHeight());

	}else{
		$nav.removeClass('sticky');
		$('.logo').attr('href', '#content');
		$('#content').css('top', $('header').outerHeight())
	}

});


//scroll animation when logo is clicked
$('.primary-nav .scroll').on('click', scrollTo);


function scrollTo(event) {
	event.preventDefault();

	var link = $(this).attr('href');

	if (typeof window.orientation === 'undefined') {
		$('html, body').animate({
			scrollTop: $(link).offset().top - $nav.outerHeight()
		}, 650);
	} else {
		$('html, body').animate({
			scrollTop: $(link).offset().top
		}, 650);
	}
}


//demo 1 - pep.js image inspector

var $result    = $('.image.result');
var $viewer    = $('.image.viewer');
var $magnifier = $viewer.find('.magnifier');

$magnifier.pep({
  constrainTo: 'parent',
  shouldEase: false,
  drag: function(ev, obj){

    var pos = $magnifier.position();

    var x = ( (pos.left + $magnifier.outerWidth()/2 )/$viewer.width()  )*100 + "%";
    var y = ( (pos.top + $magnifier.outerHeight()/2 )/$viewer.height() )*100 + "%";

    $result.css('background-position', [x, y].join(' '));

  }
})


// demo2 - alertify

function reset () {
$("#toggleCSS").attr("href", "../styles/alertify.default.css");
alertify.set({
labels : {
ok     : "OK",
cancel : "Cancel"
},
delay : 5000,
buttonReverse : false,
// buttonFocus   : "ok"
});
}

$("#confirm").on( 'click', function () {
reset();
alertify.set({ labels: { ok: "Yes, indeed!", cancel: "Piece of cake.." } });
alertify.confirm("Do you find coding javascript challenging?", function (e) {
if (e) {
alertify.success("Don't be discouraged! Follow along and you will be just fine.");
} else {
alertify.error("I'm impressed by your coding skill.");
}
});
return false;
});

$("#prompt").on( 'click', function () {
reset();
alertify.prompt("Hello! Thank you for dropping by my JS tutorial page. May i have your name please?", function (e, str) {
if (e) {
alertify.success("How are you doing today? " + str);
} else {
alertify.error("I am sorry to see you go.");
}
}, "Enter your name");
return false;
});

$("#forever").on( 'click', function () {
reset();
alertify.set({ labels: { ok: "It is helpful", cancel: "Not so much" }, delay: 10000, });
alertify.confirm("Is this JS toturial helpful to you?", function (e) {
if (e) {
alertify.success("I'm glad to hear. Please share this website with your friends so more people can learn coding.");
} else {
alertify.error("I'm sorry it did't help you. Please help me improve this website by filling out the form below.");
}
});
return false;
});



// demo - 3 gridster

    var gridster;

    $(function(){

      gridster = $(".gridster ul").gridster({
          widget_margins: [40, 40],
          widget_base_dimensions: [100, 100],

          max_cols: 3,
      }).data('gridster');

      var widgets = [
          ['<li></li>', 1, 1],
          ['<li></li>', 1, 1],
          ['<li></li>', 1, 1],
          ['<li></li>', 1, 1],
          ['<li></li>', 1, 1],
          ['<li></li>', 1, 1],
          ['<li></li>', 1, 1],
          ['<li></li>', 1, 1],
          ['<li></li>', 1, 1],
      ];

      $.each(widgets, function(i, widget){
          gridster.add_widget.apply(gridster, widget)
      });

    });














