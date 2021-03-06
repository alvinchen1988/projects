// JavaScript Document

// Select all the game boxes
var $btnPlayAndReset = $('.btn_play_and_reset');
var $gameBoard = $('.game_board');
var $gameBoxes = $('.col');
var $outputTurnsP = $('.output_turns p');
var $outputMatchedP = $('.output_matched p');
var $footer = $('footer');
var counterTurn = 0;
var counterClick = 0;
var counterMatched = 0;
var currentImage;
var previousImage;
var $gameOverBox = $('.game_over');
var $backToTop = $('.totop');
var $toContinue = $('.tocontinue');
var $btnGameInfo = $('.btn_game_information');
var $gameInfo = $('.aboutgame');
var $gameStart = $('.gamestart');
var $gameNotStart = $('.gamenotstart');

// Click Handler for initializing Game
$btnPlayAndReset.click(function(){

	var $this = $(this);

	if($gameBoard.hasClass('no_game_board')){
		$gameBoard.removeClass('no_game_board');
		$footer.removeClass('no_footer');
		MatchGame.init();
		/* get the position of the game board
		   from the top of the screen... */
		var gbFromTop = $gameBoard.offset().top;

		/* jump the window down to the game board... */
		$(window).scrollTop(gbFromTop);

		$this.text('Click to End Game');
	}else{
		$gameBoard.addClass('no_game_board');
		$footer.addClass('no_footer');
		$this.text('Let Me Play');
	}

});

//Click Handler for Game Information
 $btnGameInfo.click(function(){
 	$gameInfo.show();
 });

//Click Handler for gameStart
$gameStart.click(function(){
	$gameInfo.hide();
	$gameBoard.removeClass('no_game_board');
	MatchGame.init();
		/* get the position of the game board
		   from the top of the screen... */
		var gbFromTop = $gameBoard.offset().top;

		/* jump the window down to the game board... */
		$(window).scrollTop(gbFromTop);
});

//Click Handler for gameNotStart{
	$gameNotStart.click(function(){
		$gameInfo.hide();
	});

//Click Handler for going back to the top page after game finish when user Clicks No
$backToTop.click(function(){
	$gameOverBox.hide();
	$(window).scrollTop(0);
});

//Click handler for repeating the game

$toContinue.click(function(){
	$gameOverBox.hide();
	MatchGame.init();
});

// Click  handler for game boxes
$gameBoxes.click(function(){

	var $this = $(this);

	MatchGame.gameTurn($this);

});


// MatchGame object
var MatchGame = {

	init: function(){

		// Reset Counters
		counterTurn = 0;
		counterClick = 0;
		counterMatched = 0;

		// Reset output text
		$outputTurnsP.text(0);
		$outputMatchedP.text(0);

		$gameOverBox.hide();

		// Clear gameBox styles added by MatchGame.gameTurn()
		$gameBoxes.removeAttr('style');

		// Clear out images from game boxes
		$gameBoxes.children('img').remove();

		// Create Animal Images Array
		var animalImages = [];

		for(var i = 1; i <= 18; i++){
			if(i < 10){
				animalImages.push('img/nintendo_image_0' + i + '.jpg' );
				animalImages.push('img/nintendo_image_0' + i + '.jpg' );
			}else{
				animalImages.push('img/nintendo_image_' + i + '.jpg' );
				animalImages.push('img/nintendo_image_' + i + '.jpg' );
			}
		}

		/* Randomize  animalImages array */
		shuffleArray(animalImages);

		/*
		 * Randomize array element order in-place.
		 * Using Fisher-Yates shuffle algorithm.
		 */
		function shuffleArray(array) {
			for (var i = array.length - 1; i > 0; i--) {
				var j = Math.floor(Math.random() * (i + 1));
				var temp = array[i];
				array[i] = array[j];
				array[j] = temp;
			}
			return array;
		};

		// Place Images Randomly in the game boxes
		$gameBoxes.each(function(index, element) {

		var $this = $(this);

		$('<img>').attr('src', animalImages[index]).appendTo($this).hide();;

		});

	},// end MatchGame.init()

	gameTurn: function(theClickedOnGameBox){

		var $this = theClickedOnGameBox;
		counterClick++;
		currentImage = $this.children('img').attr('src');
		if(!$this.children('img').hasClass('selected')){
		  if(!$this.children('img').hasClass('matched')){
			if(counterClick < 2){
				$this.css('background-color' , 'transparent');
				$this.children('img').show().addClass('selected');
				previousImage = currentImage;
				//alert(previousImage);
			}else if(counterClick === 2){
			  if(currentImage === previousImage){
				$('img[src="' + currentImage + '"]').removeClass('selected')
													.addClass('matched');
				$this.css('background-color' , 'transparent');
				$this.children('img').show()
				counterTurn++;
				$outputTurnsP.text(counterTurn);
				counterMatched++;
				$outputMatchedP.text(counterMatched);
				if(counterMatched === 18){
					$gameOverBox.show();
					return;
				}
				counterClick = 0;
			  }else {
				$this.css('background-color' , 'transparent');
				$this.children('img').show().addClass('selected');
				setTimeout(function(){
					$gameBoxes.children('.selected')
							  .removeClass('selected')
							  .hide()
							  .parent()
							  .removeAttr('style');
					previousImage = currentImage;
					counterTurn++;
					$outputTurnsP.text(counterTurn);
					counterClick = 0;
				}, 750);
			  };
			};
		  }else{
			  counterClick = 0;
		  };
		}else{
			counterClick = 1;
		};

	}// end MatchGame.gameTurn()

};// End MatchGame object

