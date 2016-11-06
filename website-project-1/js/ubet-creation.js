document.addEventListener("DOMContentLoaded", function(event) {
  //do work

	var menuButton = document.getElementById("mobile-menu-button");

	if (menuButton)
		eventListener(menuButton, "click", showMenuOnMobile);

});

function eventListener(element, event, callback) {

	element.addEventListener(event, function () {
		callback(element)
	});
}

function showMenuOnMobile() {

	var mobileMenu = document.getElementsByClassName("subheader")[0];

	if (mobileMenu) {

		mobileMenu.style.display = (mobileMenu.style.display === "none") ? "block" : "none";
	}
}
