/*
	Wait until the page finishes loading, and then start action
*/

document.addEventListener("DOMContentLoaded", function(event) { 
  //do work

	var imageHover = document.getElementById('event-div').getElementsByClassName("event-box");

	var num_images = imageHover.length - 1; // remove the last element because it does not have an img

	for (var i = 0; i < num_images; i ++) {

		eventListener(imageHover[i], "mouseover", mouseOverCallback);
		eventListener(imageHover[i], "mouseleave", mouseOutCallback);
	} 

	// show image-bottom when hover over image-box

});

function mouseOverCallback(target) {

	var bottom = target.getElementsByClassName("image-bottom")[0];
	bottom.style.visibility = "visible";
}


function mouseOutCallback(target) {
	
	var bottom = target.getElementsByClassName("image-bottom")[0];
	bottom.style.visibility = "hidden";
}

function eventListener(element, event, callback) {

	element.addEventListener(event, function () {
		callback(element)
	});
}