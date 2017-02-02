$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });

    var signUpForm = document.getElementById("sign-up-form");

    var inputs = signUpForm.getElementsByTagName("input");

    for (var i = 0; i < inputs.length; i ++) {

    	inputs[i].addEventListener("blur", function () {
    		console.log("hello");
    	});
    }











});