// set up variable necessary to operate music player
var cursorX = -1;
var playerElem  = null; 
var drag = null;
var duration = null;
var seekAnimation = null;
var seekerElem = null;
var slideBarElem = null;
var artistName;
var coverArt;
var songName;

$(document).ready(function () {

	songName = "";
	coverArt = "";
	artistName = "";
	currPos = 0;
	songList = [];
	currTime = null;
	currDuration = null;
	playerElem = document.getElementById("main-player");
	playerElem.src = "";
	seekerElem = document.getElementById("seeker");
	slideBarElem = document.getElementById("slide-bar");
	
	pressPlay(playerElem);
	seekAudio();
});

/*
	take the HTML audio element as playerElem and attach an element to the
	play button so that we either play the selected song, or play/pause the current song
*/
function pressPlay(playerElem) {
	
	var playButtons = document.getElementsByClassName("play-button");
	console.log(playButtons);
	for (var i = 0; i < playButtons.length; i ++) {


		playButtons[i].addEventListener("click", function (event) {
		
			var song = event.currentTarget.name;
			pressPlayCallback(playerElem, song);
		});
	}
}

/*
	pressPlayCallback takes the playerElem to set the song
	and play/pause the song. toPlay is the song that will be played
	on the playerElem audio element.
*/
function pressPlayCallback(playerElem, toPlay) {

	// get the name of the song with all extensions removed
	var songName = playerElem.src.split("/");
	songName = "music/" + songName[songName.length - 1];

	// if the song toPlay is not the one already on the player then set it and reset the seeker
	if(songName != toPlay) {
		playerElem.src = toPlay;
		duration = playerElem.duration;
		
		/* get the event to which the click event was attached to, and obtain the 3 elements with the song-info class within it.
		The 3 sequantial song-info elements will hold the songCover, songName, and songArtist values. */

		var songInfoElems = event.currentTarget.parentNode.getElementsByClassName("song-info");
		artistName = document.getElementById("playlist-name");
		songName = document.getElementById("song-name");

		//songCoverElem.src = songInfoElems[0].innerText;
		artistName.innerText = songInfoElems[1].innerText;
		songName.innerText = songInfoElems[2].innerText;

		

		if (seekerElem.style.left != "0px" || seekerElem.style.left != "")
			seekerElem.style.left = "0px";
	}

	songName = playerElem.src.split("/")
	songName = songName[songName.length - 1];
	songName = songName.split(".")[0];

	var slideBarElemWidth = document.getElementById("slide-bar").getBoundingClientRect().width;

	if (!playerElem.paused) {
		playerElem.pause();
		clearInterval(seekAnimation);
	}
	else {
		playerElem.play();

		if (playerElem.duration)
			seekAnimation = setInterval(moveSeekOverTime, (playerElem.duration * 1000) / slideBarElemWidth);

		else {	
		
			playerElem.addEventListener('loadedmetadata', function() {
			    seekAnimation = setInterval(moveSeekOverTime, (playerElem.duration * 1000) / slideBarElemWidth);
			});
		}
											
	}
}

function moveSeekOverTime() {

	var parsed = parseInt(seekerElem.style.left.substr(0, seekerElem.style.left.length - 2))

	seekerElem.style.left = (parsed + 1) + "px";

	if (playerElem.currentTime == playerElem.duration) {

		clearInterval(seekAnimation);
		seekerElem.style.left = "0px";
	}
		
}

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







