/*
	Wait until the page finishes loading, and then start action
*/

var blurBox = document.getElementById("blur-box");

document.addEventListener("DOMContentLoaded", function(event) { 
  //do work

	var imageHover = document.getElementById('event-div').getElementsByClassName("event-box");

	var menuButton = document.getElementById("mobile-menu-button");

	var featuredBoxes = document.getElementsByClassName("featured-event-box");

	var mobileMenu = document.getElementsByClassName("subheader")[0];

	if (menuButton.style.display == "block")
		mobileMenu.style.display = "none";

	document.getElementById("featured-box").getElementsByClassName("featured-column")[3].style.margin = "0px";

	// show image-bottom when hover over image-box
	mouseEventAllElementsIn(imageHover);
	removeAllImages(featuredBoxes);
	if (menuButton)
		eventListener(menuButton, "click", showMenuOnMobile);


});

function mouseOverCallback(target) {

	var bottom = target.getElementsByClassName("image-bottom")[0];
	bottom.style.visibility = "visible";
}


function mouseOutCallback(target) {
	
	var bottom = target.getElementsByClassName("image-bottom")[0];
	bottom.style.visibility = "hidden";
}

function showMenuOnMobile() {

	var mobileMenu = document.getElementsByClassName("subheader")[0];
	var topBar = document.getElementsByClassName("header")[0];
	var menuDisplacement = 0;
	
	if (mobileMenu) {

		mobileMenu.style.display = (mobileMenu.style.display === "none") ? "block" : "none";
		menuDisplacement = topBar.clientHeight - mobileMenu.clientHeight;
		mobileMenu.style.top =  menuDisplacement + "px";

		var tops = menuDisplacement;

		function dropDown() {

			tops += 20;

			mobileMenu.style.top = tops + "px";
			console.log(tops);

			if (tops >= 85)
				clearInterval(drops);
		}

		function moveUp() {

			tops += 20;

			mobileMenu.style.top = tops + "px";
			console.log(tops);

			if (tops >= 85)
				clearInterval(drops);			
		}

		var drops = setInterval(dropDown, 0.01); 
	}
}

function eventListener(element, event, callback) {

	element.addEventListener(event, function () {
		callback(element)
	});
}

function mouseEventAllElementsIn(arr) {

	var num_images = arr.length - 1;

	for (var i = 0; i < num_images; i ++) {

		eventListener(arr[i], "mouseover", mouseOverCallback);
		eventListener(arr[i], "mouseleave", mouseOutCallback);
	}
}

function removeAllImages(featuredBoxes) {

	for (var i = 0; i < featuredBoxes.length; i ++) {

		if (featuredBoxes[i].getElementsByClassName("featured-event-image")[0].getElementsByTagName("img")[0].src == "") {

			featuredBoxes[i].getElementsByClassName("featured-event-image")[0].style.width = "0px";
			featuredBoxes[i].getElementsByClassName("featured-event-text")[0].style.width = "100%";
		}
	}
}


function enlargeEvent(toShow) {

	blurBox.className = "overlay";
	toShow.classlist.add("expanded-box");
}