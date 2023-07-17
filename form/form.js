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
      // Get the radio buttons for science fair selection
  const scienceFairYes = document.getElementById('science_fair');
  const scienceFairNo = document.getElementById('science_fair_sfn');

  // Get the project name input field
  const projectNameInput = document.getElementById('project_name');

  // Add event listeners to the radio buttons
  scienceFairYes.addEventListener('change', enableProjectName);
  scienceFairNo.addEventListener('change', disableProjectName);

  // Function to enable the project name input field
  function enableProjectName() {
    projectNameInput.disabled = false;
    projectNameInput.classList.remove('dable');
  }

  // Function to disable the project name input field
  function disableProjectName() {
    projectNameInput.disabled = true;
    projectNameInput.value = ''; // Clear the input value when disabled
    projectNameInput.classList.add('dable');
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

    /* Text Area */
    const hypothesisTextarea = document.getElementById('hypothesis');
  const hypothesisCount = document.getElementById('hypothesis-count');
  const descriptionTextarea = document.getElementById('description');
  const descriptionCount = document.getElementById('description-count');

  hypothesisTextarea.addEventListener('input', updateCharacterCount);
  descriptionTextarea.addEventListener('input', updateCharacterCount);

  function updateCharacterCount() {
    const hypothesisMaxLength = hypothesisTextarea.getAttribute('maxlength');
    const hypothesisCurrentLength = hypothesisTextarea.value.length;
    const hypothesisCharactersLeft = hypothesisMaxLength - hypothesisCurrentLength;

    hypothesisCount.textContent = hypothesisCharactersLeft;

    const descriptionMaxLength = descriptionTextarea.getAttribute('maxlength');
    const descriptionCurrentLength = descriptionTextarea.value.length;
    const descriptionCharactersLeft = descriptionMaxLength - descriptionCurrentLength;

    descriptionCount.textContent = descriptionCharactersLeft;

    updateTextColor(hypothesisCharactersLeft, hypothesisCount);
    updateTextColor(descriptionCharactersLeft, descriptionCount);
  }

  function updateTextColor(charactersLeft, countElement) {
    if (charactersLeft <= 0) {
      countElement.style.color = 'rgb(255, 0, 0)';
    } else if (charactersLeft < 6) {
      const redness = 128 + ((6 - charactersLeft) * 26);
      countElement.style.color = `rgb(${redness}, 128, 128)`;
    } else {
      countElement.style.color = 'rgb(128, 128, 128)';
    }
  }

  const otherRadio = document.getElementById('timing_dives');
  const otherTextInput = document.getElementById('other-text');

  otherTextInput.addEventListener('input', function () {
    otherRadio.value = otherTextInput.value;
  });

});

