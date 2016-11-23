var cursorX = -1;
var playerElem  = null; 
var drag = null;
var duration = null;

$(document).ready(function () {

	

	playing = false;
	songName = "";
	coverArt = "";
	artistName = "";
	currPos = 0;
	songList = [];
	currTime = null;
	currDuration = null;
	playerElem = document.getElementById("main-player");
	drag = document.getElementById("seeker");
	duration = playerElem.duration;
	
	pressPlay(playerElem, playing);
	seekAudio();
});


function pressPlay(playerElem, playing) {
	
	var butt = document.getElementById("play-button");
	
	butt.addEventListener("click", function () {
	
		pressPlayCallback(playerElem, playing);
	});
}

function pressPlayCallback(playerElem, playing) {

	var songName = playerElem.src.split("/");
	songName = songName[songName.length - 1];
	
	if (!playerElem.paused) {
		playerElem.pause();
	}
	else {
		playerElem.play();
	}


}

function moveSeek (cursor) {

	cursorX = cursor.x;

	drag.style.left = cursorX + "px"; 

}

function startSeek  () {

	document.addEventListener("mousemove", moveSeek);

	document.addEventListener("mouseup", deregister);
}

function deregister  () {

	console.log("deregister")
	document.removeEventListener("mousemove", moveSeek);
	document.removeEventListener("mouseup", deregister);
	cursorX = -1;	
}



function seekAudio   () {

	drag.addEventListener("mousedown", startSeek);
}












