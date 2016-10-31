document.addEventListener("DOMContentLoaded", function(event) { 
  //do work

	var imageHover = document.getElementsByClassName("image-box");

	var num_images = imageHover.length;

	 for (var i = 0; i < num_images; i ++) {

	 	imageHover[i].addEventListener("onmouseover", clicked);

	 }


	function clicked(e) {

		var bottom = e.target.parentNode.getElementsByClassName("image-bottom")[0];
		console.log(bottom);
		bottom.style.visibility = "visible";
	}
});