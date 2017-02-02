(
	var songs = new XMLHtttpRequest();
	songs.open("POST", "");
	songs.onload = function (response) {
		
		var songList = JSON.parse(respone.responseText);

		var songListBody = document.getElementById("song-list-body");

		/* var songListHtml = create html to hold json data */

		songListBody.innerHTML += songListHtml
	}
)();