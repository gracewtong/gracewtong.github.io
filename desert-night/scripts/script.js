// JavaScript Document


// HTML elements
const $yesBtn = $('#yesBtn');
const $noBtn = $('#noBtn');
const $modal = $('.modal');
const $credits = $('.credits');
const $creditsModal = $('.creditsModal');
const $closeBtn = $('.close');
const $soundtrack = $('#soundtrack');


$modal.hide();
$creditsModal.hide();



// play sound when tiles are flipped
function playFlipSound(){

	const flipSound = document.getElementById('flipSound');
	flipSound.volume = 0.3;

	// overlap flip sounds when tiles are clicked quickly
	if (flipSound.paused) {
	    flipSound.play();
	}else{
	    flipSound.currentTime = 0
	}
}



// generate random stars in background

function generateStars(){
    
    const $galaxy = $('.galaxy');
    let counter = 0;
    
    while (counter <= 50){
        const xPosition = Math.random();
        const yPosition = Math.random();
        const starType = Math.floor((Math.random() * 3) + 1);
        const position = {
            'x' : $galaxy.width() * xPosition,
            'y' : $galaxy.height() * yPosition,
        };
        
        $('<div class="star star-type' + starType + '"></div>').appendTo($galaxy).css({
            'top' : position.y,
            'left' : position.x
        });
        
        counter++;

    } // end while loop
    
}; // end generateStars function

generateStars();




// main game
class MatchGame {

	// Game Constructor
	constructor(gameBoard, tiles, numTiles, turnsOut, matchedOut, btnPlay, picFilename){
		
		// HTML elements
		this.gameBoard = gameBoard;
		this.tiles = tiles;
		this.firstFlippedTile = null;
		this.secondFlippedTile = null;
		this.turnsOut = turnsOut;
		this.matchedOut = matchedOut;
		this.btnPlay = btnPlay;

		// game variables
		this.numTiles = numTiles;
		this.halfNumTiles = numTiles / 2;
		this.turns = 0;
		this.matches = 0;
		this.clickCounter = 0;
		this.picFilename = picFilename;
		this.pictures = [];
		this.firstFlippedPicture = null;
		this.secondFlippedPicture = null;
		
	}
	

	// game functions
	gameStart(){

		this.btnPlay.text('End Game');
		this.btnPlay.css('background-color', "#e81f38");
		this.btnPlay.css('border-bottom', '5px solid #a8172a')
		this.btnPlay.css('width', "115px");
		this.createPictures();
		this.shufflePictures();
		this.addPictures(this.pictures);	
		this.gameBoard.removeClass('no-game-board');
		$soundtrack.get(0).play();
		

	} // end gameStart
	

	gameEnd(isGameWon){

		this.gameBoard.addClass('no-game-board');
		this.btnPlay.text('Click to Play');
		this.btnPlay.css('background-color', "#3ebeb3");
		this.btnPlay.css('border-bottom', '5px solid #2c928a')
		this.btnPlay.css('width', "145px");
		$soundtrack.get(0).pause();


		if(isGameWon === false){

			this.tiles.removeClass('flipped')
					  .removeClass('matched');
		}

		this.clickCounter = 0;
		this.turns = 0;
		this.matches = 0;
		this.matchedOut.text(0);
		this.turnsOut.text(0);
		this.destroyPictures();

	} // end gameEnd
	

	createPictures(){

		for(let i = 1; i <= this.halfNumTiles; i++){
			if(i < 10){			
				// for images 01 - 09
				this.pictures.push(this.picFilename + '0' + i + '.png');
				this.pictures.push(this.picFilename + '0' + i + '.png');

			}else{
				// for images 10 - 12
				this.pictures.push(this.picFilename + i + '.png');
				this.pictures.push(this.picFilename + i + '.png');
			} // end if (i < 10)	
		} // end for loop

	} // end createPictures
	

	shufflePictures(){

		let counter = this.pictures.length;
		let temp; 
		let i;

		// While there are elements in the array
		while (counter > 0) {

			// Pick a random index
			i = Math.floor(Math.random() * counter);

			// Decrease counter by 1
			counter--;

			// And swap the last element with it
			temp = this.pictures[counter];
			this.pictures[counter] = this.pictures[i];
			this.pictures[i] = temp;

		} // end while loop

	} // end shufflePictures

	

	addPictures(thePictures){

		this.tiles.each(function(i){

			// create image
			const $theImg = $('<img>').attr('src', thePictures[i]);

			// get the tile that we will add the image to		  
			const $theTile = $(this).find('.tile-back');	
			// add image to the tile	
			$theImg.appendTo($theTile);

		}); // end .each()

	} // end addPictures

	

	destroyPictures(){

		this.pictures.length = 0;
		$('.tile-back img').remove();

	} 


	
	gameTurn(tile){

		const that = this;


		if(tile.hasClass('flipped')){
			return;
		} // end if tile has class flipped or matched

		this.clickCounter++;

		if(this.clickCounter === 1){

			tile.addClass('flipped');
			this.firstFlippedTile = tile;
			this.firstFlippedPicture = tile.find('.tile-back img').attr('src');
			playFlipSound();

			return;

		} // end if statement - clickCounter === 1


		// CounterClicks equals 2 -> look for match
		if(this.clickCounter === 2){

			tile.addClass('flipped');
			this.secondFlippedTile = tile;
			this.secondFlippedPicture = tile.find('.tile-back img').attr('src');
			playFlipSound();

		}	


		if(this.firstFlippedPicture === this.secondFlippedPicture){
			this.firstFlippedTile.addClass('matched');
			this.secondFlippedTile.addClass('matched');
			this.clickCounter = 0;
			this.updateTurns();
			this.updateMatch();

			tile.one('transitionend', function(){

				if(that.matches === that.halfNumTiles){
					that.gameWon();
					return;
				}

			});		

		}else{
			setTimeout(function(){
				that.updateTurns();
				that.firstFlippedTile.removeClass('flipped');
				that.secondFlippedTile.removeClass('flipped');
				that.clickCounter = 0;
			}, 650);
			
		} // end if images match or not...	

	} // end gameTurn



	updateTurns(){

		this.turns++;
		this.turnsOut.text(this.turns);

	} 
	

	updateMatch(){

		this.matches++;
		this.matchedOut.text(this.matches);

	} 
	



	gameWon(){

		const foo = this;

		$modal.show();


		$yesBtn.click(function(){
			$modal.hide();
			
			foo.tiles.removeClass('flipped')
					  .removeClass('matched')
					  .one('transitionend', function(){
						  foo.gameEnd(true);
						  foo.gameStart();
						  foo.tiles.off('transitionend');
					   });
		})

		$noBtn.click(function(){
			$modal.hide();
		})


	} // end gameWon 

} // end MatchGame class



// open & close credits modal
$credits.click(function(){
	
	$creditsModal.show();
	
})

$closeBtn.click(function(){

	$creditsModal.hide();
})




// game functions
const mg = new MatchGame($('.game-board'), 
	                     $('.col'), 
	                     $('.col').length, 
	                     $('.output-turns p'), 
	                     $('.output-matched p'),
	                     $('.btn-play'),
	                     'images/desert-');



// Cheat code
// mg.matches = mg.halfNumTiles - 1;


// event handlers
mg.btnPlay.click(function(){

	if($(this).text() === 'Click to Play'){
		mg.gameStart();
	}else{
		mg.gameEnd(false);
	}

});

mg.tiles.click(function(){

	mg.gameTurn( $(this) );

});


