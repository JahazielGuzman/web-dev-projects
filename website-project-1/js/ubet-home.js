document.addEventListener("DOMContentLoaded", function(event) { 
  //do work

	var imageHover = document.getElementsByClassName("event-box");

	var num_images = imageHover.length;

	 for (var i = 0; i < num_images; i ++) {

	 	eventListener(imageHover[i], "mouseover", mouseOverCallback);
	 } 

	 // show image-bottom when hover over image-box

});

function mouseOverCallback(e) {


	var image_box = e.target.parentNode;
	var bottom = image_box.getElementsByClassName("image-bottom")[0];
	bottom.style.visibility = "visible";
	eventListener(image_box, "mouseleave", mouseOutCallback)
}

function eventListener(element, event, callback) {

	element.addEventListener(event, callback);
}

function mouseOutCallback(e) {
	
	var image_box = e.target.parentNode;
	var bottom = image_box.getElementsByClassName("image-bottom")[0];
	bottom.style.visibility = "hidden";
}