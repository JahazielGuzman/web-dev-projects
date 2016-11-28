// set up variable necessary to operate music player
var cursorX = -1;
var playerElem  = null; 
var drag = null;
var duration = null;

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
	drag = document.getElementById("seeker");
	
	pressPlay(playerElem);
	seekAudio();
});

/*
	take the HTML audio element as playerElem and attach an element to the
	play button
*/
function pressPlay(playerElem) {
	
	var butt = document.getElementById("play-button");
	var song = butt.name;
	
	butt.addEventListener("click", function () {
	
		pressPlayCallback(playerElem, song);
	});
}

function pressPlayCallback(playerElem, toPlay) {

	var songName = playerElem.src.split("/");
	songName = "music/" + songName[songName.length - 1];

	if(songName != toPlay) {
		 playerElem.src = toPlay;
		 duration = playerElem.duration;
	}

	songName = playerElem.src.split("/");
	songName = songName[songName.length - 1];

	if (!playerElem.paused) {
		playerElem.pause();
	}
	else {
		
		playerElem.play();
	}


}

function moveSeek (cursor) {

	var slideBarElem = document.getElementById("slide-bar");
	var seekerElem = document.getElementById("seeker");
	var xMin = slideBarElem.getBoundingClientRect().left;
	var xMax = xMin + slideBarElem.getBoundingClientRect().width;

	if (cursor.x < xMin)
		cursorX = xMin;
	else if (cursor.x > xMax)
		cursorX = xMax;
	else
		cursorX = cursor.x;

	drag.style.left = cursorX + "px"; 

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

	document.addEventListener("mousemove", moveSeek);

	document.addEventListener("mouseup", deregister);
}

function deregister  () {

	console.log("deregister")
	document.removeEventListener("mousemove", moveSeek);
	document.removeEventListener("mouseup", deregister);
}



function seekAudio   () {

	drag.addEventListener("mousedown", startSeek);
}












