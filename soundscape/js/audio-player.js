// set up variable necessary to operate music player
var cursorX = -1;
var playerElem  = null; 
var duration = null;
var seekAnimation = null;
var title = "";
var artistName = "";
var currPos = 0;
var songList = [];
var playerElem = document.getElementById("main-player");
	playerElem.src = "";
var seekerElem = document.getElementById("seeker");
var slideBarElem = document.getElementById("slide-bar");
var slideBarElemWidth = document.getElementById("slide-bar").getBoundingClientRect().width;
var artistName = document.getElementById("playlist-name");
var songName = document.getElementById("song-name");
var main_play_button = document.getElementById("main-play-button");

activatePlayButtons();
playerElem.addEventListener('play', startAnimation)
playerElem.addEventListener('loadedmetadata', startAnimation);
main_play_button.addEventListener("click", pauseOrPlay);
seekAudio();

/*
	take the HTML audio element as playerElem and attach an element to the
	play button so that we either play the selected song, or play/pause the current song
*/
function activatePlayButtons() {
	
	var playButtons = document.getElementsByClassName("play-button");
	console.log(playButtons);
	for (var i = 0; i < playButtons.length; i ++) {

		playButtons[i].addEventListener("click", playSong);
	}
}

/*
	pressPlayCallback takes the playerElem to set the song
	and play/pause the song. toPlay is the song that will be played
	on the playerElem audio element.
*/
function playSong(event) {

	var songInfo = event.currentTarget.dataset;
	var audio = songInfo.audio;
	var artist = songInfo.artist;
	var title = songInfo.title;
	var btImg = event.target;
	btImg.src = "images/pause.png";

	// if the song toPlay is not the one already on the player then set it and reset the seeker
	if(title != audio) {
		playerElem.src = audio;
		duration = playerElem.duration;
		playerElem.play();

		//songCoverElem.src = songInfoElems[0].innerText;
		artistName.innerText = artist;
		songName.innerText = title;
		
		// if the seeker is not currently at the beginning
		if (seekerElem.style.left != "0px" || seekerElem.style.left != "")
			seekerElem.style.left = "0px";
	}

	else {
		playerElem.play();
	}
}

// when the player presses the seekers play button, 
// this function will either pause or play the current track
function pauseOrPlay() {

	if (!playerElem.paused) {
		playerElem.pause();
		buttonImage.src = "images/pause.png";
		clearInterval(seekAnimation);
	}
	else {
		playerElem.play();
		buttonImage.src = "images/play.png";
	}
}

// begin moving the slider to show song progress
function startAnimation() {

	if (playerElem.duration)
		seekAnimation = setInterval(moveSeekOverTime, (playerElem.duration * 1000) / slideBarElemWidth);	
}

// this is the animation that will be executed to move
// the seeker
function moveSeekOverTime() {

	var parsed = parseInt(seekerElem.style.left.substr(0, seekerElem.style.left.length - 2))

	seekerElem.style.left = (parsed + 1) + "px";

	if (playerElem.currentTime == playerElem.duration || playerElem.paused) {

		clearInterval(seekAnimation);
		seekerElem.style.left = "0px";
	}
		
}

// this function responds to user input when user wants to drag the seeker
function setSeekPos (cursor) {

	var xMin = slideBarElem.getBoundingClientRect().left;
	var xMax = xMin + slideBarElem.getBoundingClientRect().width;

	if (cursor.x < xMin)
		cursorX = xMin;
	else if (cursor.x > xMax)
		cursorX = xMax;
	else
		cursorX = cursor.x;

	seekerElem.style.left = (cursorX - xMin) + "px";

	if (playerElem.duration) {

		var timeDistance = cursorX - xMin;
		var sliderWidth = slideBarElem.getBoundingClientRect().width;
		var songDuration = playerElem.duration;
		var timeTakenUp = timeDistance/sliderWidth;
		var timeToSeek = timeTakenUp * songDuration;

		playerElem.currentTime = timeToSeek;
	}
}

function startSeek  () {

	document.addEventListener("mousemove", setSeekPos);

	document.addEventListener("mouseup", deregister);
}

function deregister  () {

	console.log("deregister")
	document.removeEventListener("mousemove", setSeekPos);
	document.removeEventListener("mouseup", deregister);
}

function seekAudio   () {

	seekerElem.addEventListener("mousedown", startSeek);
}







