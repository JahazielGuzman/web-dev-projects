// set up variable necessary to operate music player
var cursorX = -1;
var playerElem  = null; 
var drag = null;
var duration = null;
var seekAnimation = null;
var seekerElem = null;
var slideBarElem = null;

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

		

		if (seekerElem.style.left != "0px" || seekerElem.style.left != "")
			seekerElem.style.left = slideBarElem.getBoundingClientRect().left + "px";;
	}

	songName = playerElem.src.split("/");
	songName = songName[songName.length - 1];

	console.log(songName);

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
		seekerElem.style.left = slideBarElem.getBoundingClientRect().left + "px";
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

	seekerElem.style.left = cursorX + "px";

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












