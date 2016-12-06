$(document).ready(function () {

	$('#submit').on("click", function (event) {

		event.preventDefault();
		var form = $('#sign-up-form')
		var formData = form.serialize();

		$.ajax({
	        type:"POST",
	        url:form.attr("action"),
	        data:formData,
	        success: function(response){
	            console.log(response);
	        }
		});

	});
});
