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
    <h1>Dive Award Application Form</h1>

    <div id="wrapper">
            <div id="water"></div>

            <div id="bubbles"></div>

            
        </div>

    <div id="form-wrapper">
        <form id="application-form" method="GET" action="submit_form.php"> <!-- turn method="POST" for final -->

            <p id="cinfo" class="info">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                
                <!-- require either email or phone -->
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br><br>
    
                <label for="phone">Phone Number:</label><br>
                <input type="tel" id="phone" name="phone" placeholder="(###) ###-####" required><br><br>

        
    
                <p>*We require a point of contact in order to alert those who have been awarded dives.</p>
            </p>

            <p id="sinfo" class="info">
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
                <select id="country" name="country" required>
                    <option value="" disabled selected>Select a country</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Cote D'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curacao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and Mcdonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="XK">Kosovo</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyan Arab Jamahiriya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthelemy</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="CS">Serbia and Montenegro</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.s.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select><br><br>

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
            </p>


            <p id="pinfo" class="info">
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
            </p>

            <p id="linfo" class="info">
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
            </p>

            <p id="tinfo" class="info">
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
            </p>

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
