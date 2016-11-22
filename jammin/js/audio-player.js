$(document).ready(function () {

	playerElem = document.getElementById("main-player");

	playing = false;
	songName = "";
	coverArt = "";
	artistName = "";
	currPos = 0;
	songList = [];
	currTime = null;
	currDuration = null;

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

	console.log("cursor.x +  + cursor.y");
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

	var drag = document.getElementById("seeker");

	drag.addEventListener("mousedown", startSeek);
}












