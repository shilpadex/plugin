<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style type="text/css">
  body{
   font-family: 'Montserrat', sans-serif;
 }
 .intro{
    border:1px solid red;
}
.error-text-red {
    color: red;
}

  </style>
</head>
<body>

</body>
</html>
 <script type="text/javascript">
// document.addEventListener("DOMContentLoaded", function () {
//     var form = document.getElementById("myForm");
//     var submitButton = document.querySelector(".final");
//     var checkboxes = document.querySelectorAll(".checkbox");
//     var groupSizes = [5, 4, 4]; // Define the number of checkboxes in each group

//     // Define the disableSubmitButton function
//     function disableSubmitButton() {
//         submitButton.disabled = true;
//     }

//     // Define the enableSubmitButton function
//     function enableSubmitButton() {
//         submitButton.disabled = false;
//     }

//     if (form) {
//         checkboxes.forEach(function (checkbox, index) {
//             checkbox.addEventListener("change", function () {
//                 var groupIndex = 0;
//                 var groupStartIndex = 0;

//                 // Determine the group index and start index based on the checkbox's position
//                 for (var i = 0; i < groupSizes.length; i++) {
//                     if (index >= groupStartIndex && index < groupStartIndex + groupSizes[i]) {
//                         groupIndex = i;
//                         break;
//                     }
//                     groupStartIndex += groupSizes[i];
//                 }

//                 // Find the active parent group
//                 var activeParentGroup = checkbox.closest('.checkbox-group');

//                 if (activeParentGroup) {
//                     // Find the error message element within the active parent group
//                     var errorMessageElement = activeParentGroup.querySelector(".checkbox-error");

//                     // Check if at least one checkbox in the group is checked
//                     var isChecked = Array.from(checkboxes).slice(groupStartIndex, groupStartIndex + groupSizes[groupIndex]).some(checkbox => checkbox.checked);

//                     if (!isChecked) {
//                         // Display an error message specific to the active parent group
//                         errorMessageElement.textContent = "Please select at least one option";
//                         errorMessageElement.style.color = "red"; // Set text color of the error message to red
//                         disableSubmitButton(); // Disable the submit button
//                     } else {
//                         // Clear any previous error messages and reset the text color
//                         errorMessageElement.textContent = "";
//                         enableSubmitButton(); // Enable the submit button
//                     }
//                 }
//             });
//         });

//         // Add a submit event listener to the form for final validation
//         form.addEventListener("submit", function (event) {
//             var allGroupsValid = true;

//             // Validate each checkbox group
//             for (var groupIndex = 0; groupIndex < groupSizes.length; groupIndex++) {
//                 var groupStartIndex = groupIndex > 0 ? groupSizes.slice(0, groupIndex).reduce((a, b) => a + b, 0) : 0;
//                 var groupEndIndex = groupStartIndex + groupSizes[groupIndex] - 1;

//                 // Find the active parent group
//                 var activeParentGroup = checkboxes[groupStartIndex].closest('.checkbox-group');

//                 if (activeParentGroup) {
//                     // Find the error message element within the active parent group
//                     var errorMessageElement = activeParentGroup.querySelector(".checkbox-error");

//                     // Check if at least one checkbox in the group is checked
//                     var isChecked = Array.from(checkboxes).slice(groupStartIndex, groupStartIndex + groupSizes[groupIndex]).some(checkbox => checkbox.checked);

//                     if (!isChecked) {
//                         // Display an error message specific to the active parent group
//                         errorMessageElement.textContent = "Please select at least one option";
//                         errorMessageElement.style.color = "red"; // Set text color of the error message to red
//                         disableSubmitButton(); // Disable the submit button
//                         allGroupsValid = false; // Mark the group as invalid
//                     } else {
//                         // Clear any previous error messages and reset the text color
//                         errorMessageElement.textContent = "";
//                     }
//                 }
//             }

//             // If at least one group is not valid, prevent form submission and display an error message
//             if (!allGroupsValid) {
//                 event.preventDefault();
//             }
//         });
//     }
// });

document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var submitButton = document.querySelector(".final");
    var checkboxes = document.querySelectorAll(".checkbox");

    // Define the disableSubmitButton function
    function disableSubmitButton() {
        submitButton.disabled = true;
    }

    // Define the enableSubmitButton function
    function enableSubmitButton() {
        submitButton.disabled = false;
    }

    if (form) {
        checkboxes.forEach(function (checkbox, index) {
            checkbox.addEventListener("change", function () {
                // Find the active parent group
                var activeParentGroup = checkbox.closest('.checkbox-group');

                if (activeParentGroup) {
                    // Find all checkboxes within the active parent group
                    var groupCheckboxes = activeParentGroup.querySelectorAll(".checkbox");

                    // Find the error message element within the active parent group
                    var errorMessageElement = activeParentGroup.querySelector(".checkbox-error");

                    // Check if at least one checkbox in the group is checked
                    var isChecked = Array.from(groupCheckboxes).some(checkbox => checkbox.checked);

                    if (!isChecked) {
                        // Display an error message specific to the active parent group
                        errorMessageElement.textContent = "Please select at least one option";
                        errorMessageElement.style.color = "red"; // Set text color of the error message to red
                        disableSubmitButton(); // Disable the submit button
                    } else {
                        // Clear any previous error messages and reset the text color
                        errorMessageElement.textContent = "";
                        enableSubmitButton(); // Enable the submit button
                    }
                }
            });
        });

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            var allGroupsValid = true;

            // Validate each checkbox group dynamically
            var groups = form.querySelectorAll('.checkbox-group');

            groups.forEach(function (group) {
                var groupCheckboxes = group.querySelectorAll(".checkbox");

                // Find the error message element within the group
                var errorMessageElement = group.querySelector(".checkbox-error");

                // Check if at least one checkbox in the group is checked
                var isChecked = Array.from(groupCheckboxes).some(checkbox => checkbox.checked);

                if (!isChecked) {
                    // Display an error message specific to the group
                    errorMessageElement.textContent = "Please select at least one option";
                    errorMessageElement.style.color = "red"; // Set text color of the error message to red
                    disableSubmitButton(); // Disable the submit button
                    allGroupsValid = false; // Mark the group as invalid
                } else {
                    // Clear any previous error messages and reset the text color
                    errorMessageElement.textContent = "";
                }
            });

            // If at least one group is not valid, prevent form submission and display an error message
            if (!allGroupsValid) {
                event.preventDefault();
            }
        });
    }
});



document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var emailInputField = document.querySelectorAll(".forminputs")[0];

    if (form) {
        var errorDisplayed = false; // Track if error message is displayed

        function validateEmailAddress() {
            var emailErrorMsg = emailInputField.parentNode.querySelector('.error-message');            

            // Check if the input is empty or contains only spaces
            if (emailInputField.value.trim() === "") {
                if (!errorDisplayed) {
                    emailErrorMsg = document.createElement('div'); // Create a div for the error message
                    emailErrorMsg.classList.add('error-message'); // Add a class to style the error message

                    emailErrorMsg.textContent = "Field is required";
                    emailErrorMsg.classList.add('error-text-red'); // Add a class for red color
                    emailInputField.style.borderColor = "red";
                    emailInputField.parentNode.appendChild(emailErrorMsg); // Append error message to the parent

                    errorDisplayed = true; // Set errorDisplayed to true
                }
                return false;
            } else {
                if (errorDisplayed) {
                    emailErrorMsg.textContent = ""; // Clear any previous error messages
                    emailInputField.style.borderColor = "";
                    var existingErrorMsg = emailInputField.parentNode.querySelector('.error-message');
                    if (existingErrorMsg) {
                        emailInputField.parentNode.removeChild(existingErrorMsg); // Remove previous error message
                    }
                    errorDisplayed = false; // Set errorDisplayed to false
                }
                return true;
            }
        }

        // Add an input event listener to the email field for real-time validation
        emailInputField.addEventListener("input", validateEmailAddress);

        // Function to disable the submit button
        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        // Function to enable the submit button
        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateEmailAddress()) {
                event.preventDefault(); // Prevent form submission if validation fails
                disableSubmitButton(); // Disable the submit button
            } else {
                enableSubmitButton(); // Enable the submit button if validation passes
            }
        });
    }
});



document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var emailInputField = document.querySelectorAll(".forminputs")[1];

    if (form) {
        function validateEmailField() {
            var emailErrorMsg = emailInputField.parentNode.querySelector('.error-message');

            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                emailInputField.parentNode.appendChild(emailErrorMsg);
            }

            var emailValue = emailInputField.value.trim();
            if (emailValue === "") {
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                emailInputField.style.borderColor = "red";
                return false;
            } else {
                var regex = /[0-9]/;
                if (regex.test(emailValue)) {
                    emailErrorMsg.textContent = "Field cannot contain numbers";
                    emailErrorMsg.classList.add('error-text-red');
                    emailInputField.style.borderColor = "red";
                    return false;
                } else {
                    emailErrorMsg.textContent = "";
                    emailErrorMsg.classList.remove('error-text-red');
                    emailInputField.style.borderColor = "";
                    return true;
                }
            }
        }

        emailInputField.addEventListener("input", validateEmailField);

        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        form.addEventListener("submit", function (event) {
            if (!validateEmailField()) {
                event.preventDefault();
                disableSubmitButton();
            } else {
                enableSubmitButton();
            }
        });
    }
});



document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var emailInputField = document.querySelectorAll(".forminputs")[2];

    if (form) {
        // Function to validate the second text field
        function validateSecondTextField() {
            var emailErrorMsg = emailInputField.parentNode.querySelector('.error-message');

            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                emailInputField.parentNode.appendChild(emailErrorMsg);
            }

            var emailValue = emailInputField.value.trim();
            if (emailValue === "") {
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                emailInputField.style.borderColor = "red";
                return false;
            } else {
                var regex = /[0-9]/;
                if (regex.test(emailValue)) {
                    emailErrorMsg.textContent = "Field cannot contain numbers";
                    emailErrorMsg.classList.add('error-text-red');
                    emailInputField.style.borderColor = "red";
                    return false;
                } else {
                    emailErrorMsg.textContent = "";
                    emailErrorMsg.classList.remove('error-text-red');
                    emailInputField.style.borderColor = "";
                    return true;
                }
            }
        }

        emailInputField.addEventListener("input", validateSecondTextField);

        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        form.addEventListener("submit", function (event) {
            if (!validateSecondTextField()) {
                event.preventDefault();
                disableSubmitButton();
            } else {
                enableSubmitButton();
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var emailInputField = document.querySelectorAll(".forminputs")[3];

    if (form) {
        // Function to validate the third address field
        function validateThirdAddress() {
            var emailErrorMsg = emailInputField.parentNode.querySelector('.error-message');

            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                emailInputField.parentNode.appendChild(emailErrorMsg);
            }

            if (emailInputField.value.trim() === "") {
                // Display an error message
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                emailInputField.style.borderColor = "red";
                return false;
            } else {
                // Clear any previous error messages and reset the border color
                emailErrorMsg.textContent = "";
                emailErrorMsg.classList.remove('error-text-red');
                emailInputField.style.borderColor = "";
                return true;
            }
        }

        // Add an input event listener to the third address field for real-time validation
        emailInputField.addEventListener("input", validateThirdAddress);

        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateThirdAddress()) {
                event.preventDefault(); // Prevent form submission if validation fails
                disableSubmitButton(); // Disable the submit button
            } else {
                enableSubmitButton(); // Enable the submit button if validation passes
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var emailInputField = document.querySelectorAll(".forminputs")[4];

    if (form) {
        // Function to validate the fifth address field
        function validateFifthAddress() {
            var emailErrorMsg = emailInputField.parentNode.querySelector('.error-message');

            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                emailInputField.parentNode.appendChild(emailErrorMsg);
            }

            if (emailInputField.value.trim() === "") {
                // Display an error message
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                emailInputField.style.borderColor = "red";
                return false;
            } else {
                // Clear any previous error messages and reset the border color
                emailErrorMsg.textContent = "";
                emailErrorMsg.classList.remove('error-text-red');
                emailInputField.style.borderColor = "";
                return true;
            }
        }

        // Add an input event listener to the fifth address field for real-time validation
        emailInputField.addEventListener("input", validateFifthAddress);

        // Function to disable the submit button
        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        // Function to enable the submit button
        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateFifthAddress()) {
                event.preventDefault(); // Prevent form submission if validation fails
                disableSubmitButton(); // Disable the submit button
            } else {
                enableSubmitButton(); // Enable the submit button if validation passes
            }
        });
    }
});


document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var emailInputField = document.querySelectorAll(".forminputs")[5];

    if (form) {
        // Function to validate the sixth address field
        function validateSixthAddress() {
            var emailErrorMsg = emailInputField.parentNode.querySelector('.error-message');

            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                emailInputField.parentNode.appendChild(emailErrorMsg);
            }

            if (emailInputField.value.trim() === "") {
                // Display an error message
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                emailInputField.style.borderColor = "red";
                return false;
            } else {
                // Clear any previous error messages and reset the border color
                emailErrorMsg.textContent = "";
                emailErrorMsg.classList.remove('error-text-red');
                emailInputField.style.borderColor = "";
                return true;
            }
        }

        // Add an input event listener to the sixth address field for real-time validation
        emailInputField.addEventListener("input", validateSixthAddress);

        // Function to disable the submit button
        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        // Function to enable the submit button
        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateSixthAddress()) {
                event.preventDefault(); // Prevent form submission if validation fails
                disableSubmitButton(); // Disable the submit button
            } else {
                enableSubmitButton(); // Enable the submit button if validation passes
            }
        });
    }
});



document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var emailInputField = document.querySelectorAll(".forminputs")[6];

    if (form) {
        // Function to validate the seventh address field
        function validateSeventhAddress() {
            var emailErrorMsg = emailInputField.parentNode.querySelector('.error-message');

            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                emailInputField.parentNode.appendChild(emailErrorMsg);
            }

            if (emailInputField.value.trim() === "") {
                // Display an error message
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                emailInputField.style.borderColor = "red";
                return false;
            } else {
                // Clear any previous error messages and reset the border color
                emailErrorMsg.textContent = "";
                emailErrorMsg.classList.remove('error-text-red');
                emailInputField.style.borderColor = "";
                return true;
            }
        }

        // Add an input event listener to the seventh address field for real-time validation
        emailInputField.addEventListener("input", validateSeventhAddress);

        // Function to disable the submit button
        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        // Function to enable the submit button
        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateSeventhAddress()) {
                event.preventDefault(); // Prevent form submission if validation fails
                disableSubmitButton(); // Disable the submit button
            } else {
                enableSubmitButton(); // Enable the submit button if validation passes
            }
        });
    }
});


document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var emailInputField = document.querySelectorAll(".forminputs")[8];

    if (form) {
        // Function to validate the ninth address field
        function validateNinthAddress() {
            var emailErrorMsg = emailInputField.parentNode.querySelector('.error-message');

            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                emailInputField.parentNode.appendChild(emailErrorMsg);
            }

            if (emailInputField.value.trim() === "") {
                // Display an error message
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                emailInputField.style.borderColor = "red";
                return false;
            } else {
                // Clear any previous error messages and reset the border color
                emailErrorMsg.textContent = "";
                emailErrorMsg.classList.remove('error-text-red');
                emailInputField.style.borderColor = "";
                return true;
            }
        }

        // Add an input event listener to the ninth address field for real-time validation
        emailInputField.addEventListener("input", validateNinthAddress);

        // Function to disable the submit button
        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        // Function to enable the submit button
        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateNinthAddress()) {
                event.preventDefault(); // Prevent form submission if validation fails
                disableSubmitButton(); // Disable the submit button
            } else {
                enableSubmitButton(); // Enable the submit button if validation passes
            }
        });
    }
});


document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var emailInputField = document.querySelectorAll(".forminputs")[9];

    if (form) {
        // Function to validate the tenth address field
        function validateTenthAddress() {
            var emailErrorMsg = emailInputField.parentNode.querySelector('.error-message');

            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                emailInputField.parentNode.appendChild(emailErrorMsg);
            }

            if (emailInputField.value.trim() === "") {
                // Display an error message
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                emailInputField.style.borderColor = "red";
                return false;
            } else {
                // Clear any previous error messages and reset the border color
                emailErrorMsg.textContent = "";
                emailErrorMsg.classList.remove('error-text-red');
                emailInputField.style.borderColor = "";
                return true;
            }
        }

        // Add an input event listener to the tenth address field for real-time validation
        emailInputField.addEventListener("input", validateTenthAddress);

        // Function to disable the submit button
        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        // Function to enable the submit button
        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateTenthAddress()) {
                event.preventDefault(); // Prevent form submission if validation fails
                disableSubmitButton(); // Disable the submit button
            } else {
                enableSubmitButton(); // Enable the submit button if validation passes
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var inputField = document.querySelectorAll(".formnum")[0];
    var emailErrorMsg = inputField.parentNode.querySelector('.error-message');

    if (form) {
        // Function to validate the first input field
        function validateFirstNumberField() {
            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                inputField.parentNode.appendChild(emailErrorMsg);
            }

            if (inputField.value.trim() === "") {
                // Display an error message
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                inputField.style.borderColor = "red";
                return false;
            } else {
                // Clear any previous error messages and reset the border color
                emailErrorMsg.textContent = "";
                emailErrorMsg.classList.remove('error-text-red');
                inputField.style.borderColor = "";
                return true;
            }
        }

        // Add an input event listener to the first input field for real-time validation
        inputField.addEventListener("input", validateFirstNumberField);

        // Function to disable the submit button
        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        // Function to enable the submit button
        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateFirstNumberField()) {
                event.preventDefault(); // Prevent form submission if validation fails
                disableSubmitButton(); // Disable the submit button
            } else {
                enableSubmitButton(); // Enable the submit button if validation passes
            }
        });
    }
});


document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var inputField = document.querySelectorAll(".formnum")[1];
    var emailErrorMsg = inputField.parentNode.querySelector('.error-message');

    if (form) {
        // Function to validate the second input field
        function validateSecondNumberField() {
            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                inputField.parentNode.appendChild(emailErrorMsg);
            }

            if (inputField.value.trim() === "") {
                // Display an error message
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                inputField.style.borderColor = "red";
                return false;
            } else {
                // Clear any previous error messages and reset the border color
                emailErrorMsg.textContent = "";
                emailErrorMsg.classList.remove('error-text-red');
                inputField.style.borderColor = "";
                return true;
            }
        }

        // Add an input event listener to the second input field for real-time validation
        inputField.addEventListener("input", validateSecondNumberField);

        // Function to disable the submit button
        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        // Function to enable the submit button
        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateSecondNumberField()) {
                event.preventDefault(); // Prevent form submission if validation fails
                disableSubmitButton(); // Disable the submit button
            } else {
                enableSubmitButton(); // Enable the submit button if validation passes
            }
        });
    }
});


document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var inputField = document.querySelectorAll(".formnum")[2];
    var emailErrorMsg = inputField.parentNode.querySelector('.error-message');

    if (form) {
        // Function to validate the third input field
        function validateThirdNumberField() {
            if (!emailErrorMsg) {
                emailErrorMsg = document.createElement('div');
                emailErrorMsg.classList.add('error-message');
                inputField.parentNode.appendChild(emailErrorMsg);
            }

            if (inputField.value.trim() === "") {
                // Display an error message
                emailErrorMsg.textContent = "Field is required";
                emailErrorMsg.classList.add('error-text-red');
                inputField.style.borderColor = "red";
                return false;
            } else {
                // Clear any previous error messages and reset the border color
                emailErrorMsg.textContent = "";
                emailErrorMsg.classList.remove('error-text-red');
                inputField.style.borderColor = "";
                return true;
            }
        }

        // Add an input event listener to the third input field for real-time validation
        inputField.addEventListener("input", validateThirdNumberField);

        // Function to disable the submit button
        function disableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = true;
        }

        // Function to enable the submit button
        function enableSubmitButton() {
            var submitButton = document.querySelector(".final");
            submitButton.disabled = false;
        }

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateThirdNumberField()) {
                event.preventDefault(); // Prevent form submission if validation fails
                disableSubmitButton(); // Disable the submit button
            } else {
                enableSubmitButton(); // Enable the submit button if validation passes
            }
        });
    }
});


document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var emailInputField = document.getElementById("formemail");
    var submitButton = document.querySelector(".final");

    function validateEmail() {
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var emailErrorMsg = document.getElementById("emailInput-error");

        if (!emailInputField || !emailErrorMsg) {
            console.error("Email input field or error message element not found.");
            return false;
        }

        if (emailInputField.value.trim() === "") {
            emailErrorMsg.textContent = "Field is required";
            emailInputField.style.borderColor = "red";
            submitButton.disabled = true;
            return false;
        }

        if (!emailRegex.test(emailInputField.value)) {
            emailErrorMsg.textContent = "Invalid email format";
            emailInputField.style.borderColor = "red";
            submitButton.disabled = true;
            return false;
        } else {
            emailErrorMsg.textContent = "";
            emailInputField.style.borderColor = "";
            submitButton.disabled = false;
            return true;
        }
    }

    emailInputField.addEventListener("input", validateEmail);

    form.addEventListener("submit", function (event) {
        if (!validateEmail()) {
            event.preventDefault();
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");

    if (form) {
        var formEmailFields = document.querySelectorAll(".formemail");

        function validateConfirmEmail() {
            var emailErrorMsg = formEmailFields[1].parentNode.querySelector('.email-error-msg');
            var emailRequiredMsg = formEmailFields[1].parentNode.querySelector('.email-required-msg'); // New div for "Field is required" message

            // Clear the "Email does not match" error message and reset the border color for the confirm email field
            emailErrorMsg.textContent = "";
            formEmailFields[1].style.borderColor = "";

            // Check if the confirm email is blank
            if (formEmailFields[1].value.trim() === "") {
                // Display the "Field is required" error message
                emailErrorMsg.textContent = "";
                emailRequiredMsg.textContent = "Field is required";
                formEmailFields[1].style.borderColor = "red";
                return false;
            }

            // Clear the "Field is required" message when there's content in the field
            emailRequiredMsg.textContent = "";

            // Check if there's a mismatch between the email fields
            if (formEmailFields[0].value !== formEmailFields[1].value) {
                emailErrorMsg.textContent = "Emails do not match";
                formEmailFields[1].style.borderColor = "red";
                return false;
            }

            return true;
        }

        // Add input event listener to the confirm email field for real-time validation
        formEmailFields[1].addEventListener("input", validateConfirmEmail);

        // Add a submit event listener to the form for final validation
        form.addEventListener("submit", function (event) {
            if (!validateConfirmEmail()) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
        });
    }
});



</script>
<script type="text/javascript">

$(document).ready(function() {
    var indexToConvert = 7; // Index 8 (0-based)
    var targetClass = "forminputs";

    var $form = $("#myForm"); // Replace "yourFormId" with the actual ID of your form
    var $elements = $(".forminputs"); // Get all elements with class "forminputs"
    
    // Check if the element at the specified index exists
    if (indexToConvert < $elements.length) {
        if ($elements.eq(indexToConvert).hasClass(targetClass)) {
            // Create a select dropdown
            var selectHTML = '<select id="user_7" class="forminputs" name="selectedOptions[]" style="width: 72%; padding: 10px; margin-top: 10px;">';
            selectHTML += '<option value="Select">Select</option>';
                        selectHTML += '<option value="Afghanistan">Afghanistan</option>';
selectHTML += '<option value="Albania">Albania</option>';
selectHTML += '<option value="Algeria">Algeria</option>';
selectHTML += '<option value="Andorra">Andorra</option>';
selectHTML += '<option value="Angola">Angola</option>';
selectHTML += '<option value="Antigua and Barbuda">Antigua and Barbuda</option>';
selectHTML += '<option value="Argentina">Argentina</option>';
selectHTML += '<option value="Armenia">Armenia</option>';
selectHTML += '<option value="Australia">Australia</option>';
selectHTML += '<option value="Austria">Austria</option>';
selectHTML += '<option value="Azerbaijan">Azerbaijan</option>';
selectHTML += '<option value="Bahamas">Bahamas</option>';
selectHTML += '<option value="Bahrain">Bahrain</option>';
selectHTML += '<option value="Bangladesh">Bangladesh</option>';
selectHTML += '<option value="Barbados">Barbados</option>';
selectHTML += '<option value="Belarus">Belarus</option>';
selectHTML += '<option value="Belgium">Belgium</option>';
selectHTML += '<option value="Belize">Belize</option>';
selectHTML += '<option value="Benin">Benin</option>';
selectHTML += '<option value="Bhutan">Bhutan</option>';
selectHTML += '<option value="Bolivia">Bolivia</option>';
selectHTML += '<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>';
selectHTML += '<option value="Botswana">Botswana</option>';
selectHTML += '<option value="Brazil">Brazil</option>';
selectHTML += '<option value="Brunei">Brunei</option>';
selectHTML += '<option value="Bulgaria">Bulgaria</option>';
selectHTML += '<option value="Burkina Faso">Burkina Faso</option>';
selectHTML += '<option value="Burundi">Burundi</option>';
selectHTML += '<option value="Cabo Verde">Cabo Verde</option>';
selectHTML += '<option value="Cambodia">Cambodia</option>';
selectHTML += '<option value="Cameroon">Cameroon</option>';
selectHTML += '<option value="Canada">Canada</option>';
selectHTML += '<option value="Central African Republic">Central African Republic</option>';
selectHTML += '<option value="Chad">Chad</option>';
selectHTML += '<option value="Chile">Chile</option>';
selectHTML += '<option value="China">China</option>';
selectHTML += '<option value="Colombia">Colombia</option>';
selectHTML += '<option value="Comoros">Comoros</option>';
selectHTML += '<option value="Congo (Brazzaville)">Congo (Brazzaville)</option>';
selectHTML += '<option value="Congo (Kinshasa)">Congo (Kinshasa)</option>';
selectHTML += '<option value="Costa Rica">Costa Rica</option>';
selectHTML += '<option value="Croatia">Croatia</option>';
selectHTML += '<option value="Cuba">Cuba</option>';
selectHTML += '<option value="Cyprus">Cyprus</option>';
selectHTML += '<option value="Czechia">Czechia</option>';
selectHTML += '<option value="Denmark">Denmark</option>';
selectHTML += '<option value="Djibouti">Djibouti</option>';
selectHTML += '<option value="Dominica">Dominica</option>';
selectHTML += '<option value="Dominican Republic">Dominican Republic</option>';
selectHTML += '<option value="East Timor">East Timor</option>';
selectHTML += '<option value="Ecuador">Ecuador</option>';
selectHTML += '<option value="Egypt">Egypt</option>';
selectHTML += '<option value="El Salvador">El Salvador</option>';
selectHTML += '<option value="Equatorial Guinea">Equatorial Guinea</option>';
selectHTML += '<option value="Eritrea">Eritrea</option>';
selectHTML += '<option value="Estonia">Estonia</option>';
selectHTML += '<option value="Eswatini">Eswatini</option>';
selectHTML += '<option value="Ethiopia">Ethiopia</option>';
selectHTML += '<option value="Fiji">Fiji</option>';
selectHTML += '<option value="Finland">Finland</option>';
selectHTML += '<option value="France">France</option>';
selectHTML += '<option value="Gabon">Gabon</option>';
selectHTML += '<option value="Gambia">Gambia</option>';
selectHTML += '<option value="Georgia">Georgia</option>';
selectHTML += '<option value="Germany">Germany</option>';
selectHTML += '<option value="Ghana">Ghana</option>';
selectHTML += '<option value="Greece">Greece</option>';
selectHTML += '<option value="Grenada">Grenada</option>';
selectHTML += '<option value="Guatemala">Guatemala</option>';
selectHTML += '<option value="Guinea">Guinea</option>';
selectHTML += '<option value="Guinea-Bissau">Guinea-Bissau</option>';
selectHTML += '<option value="Guyana">Guyana</option>';
selectHTML += '<option value="Haiti">Haiti</option>';
selectHTML += '<option value="Honduras">Honduras</option>';
selectHTML += '<option value="Hungary">Hungary</option>';
selectHTML += '<option value="Iceland">Iceland</option>';
selectHTML += '<option value="India">India</option>';
selectHTML += '<option value="Indonesia">Indonesia</option>';
selectHTML += '<option value="Iran">Iran</option>';
selectHTML += '<option value="USA">USA</option>';

            // Replace the input element at index 7 with the select dropdown
            $elements.eq(indexToConvert).replaceWith(selectHTML);

            // Add a change event listener to the dropdown within the active parent
            var $selectElement = $("#user_7");
            $selectElement.on("change", function() {
                // Check if the selected option is "Select"
                var selectedValue = $(this).val();
                var $errorMsg = $(this).closest(".textinputs").find(".error-message");
                if (selectedValue === "Select") {
                    // Display an error message within the active parent element
                    $errorMsg.text("Please select a country from the dropdown.");
                } else {
                    // Clear the error message if a valid selection is made
                    $errorMsg.text("");
                }
            });

            // Add a submit event listener to the form
            $form.on("submit", function(event) {
                // Check if the selected option is "Select" before form submission
                var selectedValue = $selectElement.val();
                var $errorMsg = $selectElement.closest(".textinputs").find(".error-message");
                if (selectedValue === "Select") {
                    // Display an error message within the active parent element
                    $errorMsg.text("Please select a country from the dropdown.");

                    event.preventDefault(); // Prevent form submission
                }
            });
        }
    }
});


</script>

