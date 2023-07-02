<!DOCTYPE html>
<html>
<head>
    <title>Dive Award Application Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="form.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 </head>
<body>
    <h1>Dive Application</h1>
    <p>Fill out the form below to apply for a Dive.</p>

    <div id="wrapper">
            <div id="water"></div>

            <div id="bubbles"></div>

            
        </div>

    <div id="form-wrapper">
        <form id="application-form" method="GET" action="submit_form.php"> <!-- turn method="POST" for final -->

            <div id="cinfo" class="info">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                
                <!-- require either email or phone -->
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br><br>
    
                OR <br><br>
            
                <label for="phone">Phone Number:</label><br>
                <input type="tel" id="phone" name="phone" placeholder="(###) ###-####"><br><br>
                <p id="cont" class="notice">*We require a point of contact in order to alert those who have been awarded dives.</p>
            </div>

            <!-- -=-=-= not done below this line -=-=-= -->
            <div id="sinfo" class="info">
                <label for="school">School:</label><br>
                <input type="text" id="school" name="school" required><br><br>

                <label for="grade">What Grade / Year:</label><br>
                <select id="grade" name="grade" required>
                    <option value="" disabled selected>Select a grade/year</option>
                    <option value="1">1st Grade</option>
                    <option value="2">2nd Grade</option>
                    <!-- Add more options for other grades/years -->
                </select><br><br>

                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" required><br><br>

                <label for="city">City:</label><br>
                <input type="text" id="city" name="city" required><br><br>


                <label for="country">Country:</label><br>
                <select name="country" class="form-control" id="country">
       

Country: <select class="gds-cr" country-data-region-id="gds-cr-three" data-language="en" country-data-default-value="US"></select>

Region: <select id="gds-cr-three" region-data-default-value="California"></select>


<br><br>

                <!-- If country has states; -->
                <label for="state">State:</label><br>
                <select id="state" name="state" required>
                    <option value="" disabled selected>Select a state</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select><br><br>

                <label for="zip">Zip Code:</label><br>
                <input type="text" id="zip" name="zip" required><br><br>

                <!-- If country has provindences; -->
                <label for="province">Province:</label><br>
                <select id="province" name="province" required>
                    <option value="" disabled selected>Select a province</option>
                    <option value="AB">Alberta</option>
                    <option value="BC">British Columbia</option>
                    <!-- Add more options for other provinces -->
                </select><br><br>

                <label for="postal_code">Postal Code:</label><br>
                <input type="text" id="postal_code" name="postal_code" required><br><br>
            </div>


            <div id="pinfo" class="info">
                <!-- dropdown selection -->
                <label>Project Type:</label><br>
                <input type="radio" id="class" name="project_type" value="Class" required>
                <label for="class">Class</label><br>
                <input type="radio" id="group" name="project_type" value="Group" required>
                <label for="group">Group</label><br>
                <input type="radio" id="individual" name="project_type" value="Individual" required>
                <label for="individual">Individual</label><br><br>

                <!-- number scrolly thingy with the up and down arrows or you can type the ammount, defaults to 1 if individual -->
                <label for="people_involved">Number of people involved:</label><br>
                <select id="people_involved" name="people_involved" required>
                    <option value="" disabled selected>Select a number</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <!-- Add more options for other numbers -->
                </select><br><br>

                <label for="science_fair">Part of a Science Fair Project (Y/N):</label><br>
                <input type="radio" id="science_fair_yes" name="science_fair" value="Yes" required>
                <label for="science_fair_yes">Yes</label><br>
                <input type="radio" id="science_fair_no" name="science_fair" value="No" required>
                <label for="science_fair_no">No</label><br><br>

                <!-- If part of a science project display -->
                <label for="project_name">Project Name:</label><br>
                <input type="text" id="project_name" name="project_name" required><br><br>

                <label for="hypothesis">Hypothesis:</label><br>
                <textarea id="hypothesis" name="hypothesis" rows="4" cols="50" required></textarea><br><br>

                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

                <label for="operation_requirements">Operation Requirements:</label><br>
                <textarea id="operation_requirements" name="operation_requirements" rows="4" cols="50" required></textarea><br><br>
            </div>

            <div id="linfo" class="info">
                <label for="general_location">General Location:</label><br>
                <select id="general_location" name="general_location" required>
                    <option value="" disabled selected>Select a location</option>
                    <option value="location1">Location 1</option>
                    <option value="location2">Location 2</option>
                    <!-- Add more options for other locations -->
                </select><br><br>

                <!-- display specific locations based on general location answer -->
                <label for="specific_location">Specific Location:</label><br>
                <select id="specific_location" name="specific_location" required>
                    <option value="" disabled selected>Select a location</option>
                    <option value="location1">Specific Location 1</option>
                    <option value="location2">Specific Location 2</option>
                    <!-- Add more options for other locations -->
                </select><br><br>
            </div>

            <div id="tinfo" class="info">
                <!-- number scrolly thingy -->
                <label for="num_dives">Number of Dives:</label><br>
                <input type="number" id="num_dives" name="num_dives" required><br><br>

                <!-- dropdown -->
                <label>Timing of dives:</label><br>
                <input type="radio" id="daily" name="timing_dives" value="Daily" required>
                <label for="daily">Daily</label><br>
                <input type="radio" id="weekly" name="timing_dives" value="Weekly" required>
                <label for="weekly">Weekly</label><br>
                <input type="radio" id="monthly" name="timing_dives" value="Monthly" required>
                <label for="monthly">Monthly</label><br><br>

                <!-- dropdown w/ fill in blank option -->
                <label for="time_in_water">Required time in water:</label><br>
                <select id="time_in_water" name="time_in_water" required>
                    <option value="" disabled selected>Select a time</option>
                    <option value="1">1 hour</option>
                    <option value="2">2 hours</option>
                    <!-- Add more options for other times -->
                    <option value="other">Other</option>
                    <!-- if other, provide a fill in blank -->
                </select><br><br>

                <label>Other Requirements:</label><br>
                <input type="checkbox" id="quadrates" name="requirements[]" value="Quadrates">
                <label for="quadrates">Quadrates</label><br>
                <input type="checkbox" id="sensors" name="requirements[]" value="Sensors">
                <label for="sensors">Sensors</label><br>
                <input type="checkbox" id="objects" name="requirements[]" value="Objects">
                <label for="objects">Objects</label><br>
                <!-- Add more checkboxes for other requirements -->

                <label for="anticipated_outcome">Anticipated Outcome:</label><br>
                <textarea id="anticipated_outcome" name="anticipated_outcome" rows="4" cols="50" required></textarea><br><br>

                <!-- <label for="project_result">Result of Project afterward:</label><br>
                <textarea id="project_result" name="project_result" rows="4" cols="50" required></textarea><br><br> -->
            </div>

            <!-- review button -->
            <input type="button" id="review" value="Review" onclick="review()">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>

</html>
