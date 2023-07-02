window.addEventListener('DOMContentLoaded', function() {
    // Get the form element
    var form = document.getElementById('application-form');
    
    // Add submit event listener to the form
    form.addEventListener('submit', function(event) {
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;

        // Check if either email or phone is provided
        if (!email && !phone) {
            event.preventDefault(); // Prevent form submission
            // alert('Please provide either an email or phone number.');

            // if email and phone are empty, add red border to both
            document.getElementById('email').style.border = "1px solid red";
            document.getElementById('phone').style.border = "1px solid red";
        } else {
            // if email and phone are not empty, remove red border from both
            document.getElementById('email').style.border = "1px solid #ced4da";
            document.getElementById('phone').style.border = "1px solid #ced4da";

        }
    });

    /* Phone number */

    // Get the phone number input element
    var phoneNumberInput = document.getElementById('phone');

    // Add input event listener to format the phone number as the user types
    phoneNumberInput.addEventListener('input', function() {
        var phoneNumber = phoneNumberInput.value;

        // Remove any non-digit characters from the input value
        phoneNumber = phoneNumber.replace(/\D/g, '');

        // Apply the phone number format
        var formattedPhoneNumber = formatPhoneNumber(phoneNumber);

        // Update the input value with the formatted phone number
        phoneNumberInput.value = formattedPhoneNumber;
    });

    // Function to format the phone number
    function formatPhoneNumber(phoneNumber) {
        // Remove any leading 1's (country code)
        phoneNumber = phoneNumber.replace(/^1/, '');

        // Split the phone number into groups of 3 digits
        var areaCode = phoneNumber.slice(0, 3);
        var firstPart = phoneNumber.slice(3, 6);
        var secondPart = phoneNumber.slice(6, 10);

        // Build the formatted phone number with parentheses
        var formattedNumber = '';
        if (areaCode.length > 0) {
            formattedNumber += '(' + areaCode + ')';
        }
        if (firstPart.length > 0) {
            formattedNumber += ' ' + firstPart;
        }
        if (secondPart.length > 0) {
            formattedNumber += '-' + secondPart;
        }
        return formattedNumber;
    }

    /* Email address */


    /* Required */

});