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

    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    /* project_type = individual, lock number of people to 1 */
    // Add event listener to project type radio buttons
    const projectTypeRadios = document.getElementsByName('project_type');
    projectTypeRadios.forEach(function(radio) {
    radio.addEventListener('change', function() {
        if (radio.value === 'Individual') {
        document.getElementById('num_people').value = 1;
        document.getElementById('num_people').setAttribute('disabled', 'disabled');
        } else {
        document.getElementById('num_people').removeAttribute('disabled');
        }
    });
    });


    /* Science Fair */
    // Get the science fair radio buttons
    var scienceFairYes = document.getElementById('science_fair');
    var scienceFairNo = document.getElementById('science_fair_sfn');

    // Add change event listener to the science fair radio buttons
    scienceFairYes.addEventListener('change', toggleScienceFairQuestions);
    scienceFairNo.addEventListener('change', toggleScienceFairQuestions);

    // Function to toggle the visibility of the science fair questions
    function toggleScienceFairQuestions() {
        var scienceFairQuestions = document.querySelectorAll('.question.sfd');
        var pinfo = document.getElementById('pinfo');

        // If "Yes" is selected, display the questions; otherwise, hide them
        if (scienceFairYes.checked) {
            scienceFairQuestions.forEach(function (question) {
                question.classList.add('show');
            });
            pinfo.classList.add('show');
        } else {
            scienceFairQuestions.forEach(function (question) {
                question.classList.remove('show');
            });
            pinfo.classList.remove('show');
        }
    }

    /* Map */
    // Get the general location select element
    var generalLocationSelect = document.getElementById('general_location');

    // Get the map elements
    var mamap = document.getElementById('mamap');
    var rpmap = document.getElementById('rpmap');

    // Add change event listener to the general location select element
    generalLocationSelect.addEventListener('change', toggleSpecificMap);

    // Function to toggle the visibility of the specific map based on the general location
    function toggleSpecificMap() {
        // Hide all map elements
        hideMapElements();

        // Show the specific map based on the selected general location
        var selectedLocation = generalLocationSelect.value;
        if (selectedLocation === 'location1') {
            mamap.classList.add('show');
        } else if (selectedLocation === 'location2') {
            rpmap.classList.add('show');
        }
    }

    // Function to hide all map elements
    function hideMapElements() {
        var mapElements = document.getElementsByClassName('map');
        for (var i = 0; i < mapElements.length; i++) {
            mapElements[i].classList.remove('show');
        }
    }      
});

