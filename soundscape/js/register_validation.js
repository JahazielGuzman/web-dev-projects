(function () {

     var inputsToTest = document.getElementById('sign-up-form');
     var errorBox = document.getElementById("error-box");
     inputsToTest = inputsToTest.getElementsByTagName("input");

     for (var i = 0; i < inputsToTest.length; i ++) {
       
          inputsToTest[i].addEventListener("blur", validate);
     }

     errorBox.addEventListener("click", function(event) {

          event.currentTarget.style.display = "none";
     });

     function validate (event) {

          var errorBox = document.getElementById("error-box");
          var curr_input = event.currentTarget;
          var curr_input_bounding = null;

          var formIsValid = true;

          if (curr_input.value == "" ) {
           
               formIsValid = false;
          }

          else if (curr_input.id === "email" && !(/[A-Za-z1-9\.\-]*@[A-Za-z1-9\-]*\.[a-z]{3}/.test(curr_input.value))){

               formIsValid = false;
          }

          else if (curr_input.id === "password" && curr_input.value.length > 6) {
               
               formIsValid = false;
          }

          if (!formIsValid) {
               

               curr_input_bounding = curr_input.getBoundingClientRect();
               errorBox.style.display = "block";
               errorBox.getElementsByTagName('p')[0].innerText = "You didn't enter your " + 
                                                                 curr_input.name + " correctly";
               errorBox.style.left = curr_input_bounding.left + "px";
               errorBox.style.top = (curr_input_bounding.top + curr_input_bounding.height) + window.scrollY + "px";
               console.log(curr_input_bounding.top);
          }

          else {
           
               //curr_input.className = "valid-input";
               errorBox.style.display = "none";
          }
     }
})()