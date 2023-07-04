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
    <!-- Style this title area -->
    <h1>Dive Application</h1>
    <p>Fill out the form below to apply for a Dive.</p>

    <div id="wrapper">
            <div id="water"></div>

            <div id="bubbles"></div>
            
        </div>

    <div id="form-wrapper">
        <form id="application-form" method="GET" action="submit_form.php" autocomplete="on"> <!-- turn method="POST" for final -->

            <div id="cinfo" class="info">
                <div class="question" id="q1">
                    <label for="fname" >First Name:</label><br>
                    <input type="text" id="fname" name="fname" placeholder="First Name" required enterkeyhint="next">
                </div>
                <div class="question" id="q2">
                    <label for="lname">Last Name:</label><br>
                    <input type="text" id="lname" name="lname" placeholder="Last Name (Optional)" enterkeyhint="next">
                </div>
                
                <!-- require either email or phone -->
                <div class="question" id="q3">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="Email" enterkeyhint="next">
                </div>
    
                <div class="question" id="q4">
                    <label for="phone">Phone Number:</label><br>
                    <input type="tel" id="phone" name="phone" placeholder="(###) ###-####" enterkeyhint="next">
                </div>
                <p id="cont" class="notice">*We require a point of contact in order to alert those who have been awarded dives.</p>
            </div>

            <!-- -=-=-= not done below this line -=-=-= -->
            <div id="sinfo" class="info">
                <div class="question" id="q5">
                    <label for="school">School:</label><br>
                    <input type="text" id="school" name="school" placeholder="School Name" required>
                </div>

                <div class="question" id="q6">
                    <!-- student or teacher -->
                    <label for="role">Role:</label><br>
                    <select id="role" name="role" required>
                        <option value="" disabled selected>Select a role</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                    </select>
                </div>

                <div class="question" id="q7">
                    <!-- Grade / Year -->
                    <label for="grade">Grade / Year:</label><br>
                    <select id="grade" name="grade" required>
                        <option value="" disabled selected>Select a grade</option>
                        <optgroup label="Elementary School">
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                        </optgroup>
                        <optgroup label="Middle School">
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                        </optgroup>
                        <optgroup label="High School">
                            <option value="9">9th</option>
                            <option value="10">10th</option>
                            <option value="11">11th</option>
                            <option value="12">12th</option>
                        </optgroup>
                        <optgroup label="College">
                            <option value="13">Freshman</option>
                            <option value="14">Sophomore</option>
                            <option value="15">Junior</option>
                            <option value="16">Senior</option>
                        </optgroup>
                    </select>
                </div>

                <div class="question" id="q8">
                    <label for="street-address">Address:</label><br>
                    <input type="text" id="street-address" name="street-address" autocomplete="street-address" placeholder="School Address" required enterkeyhint="next">
                </div>

                <div class="question" id="q9">
                    <label for="country">Country or Region:</label><br>
                    <select id="country" name="country" autocomplete="country" enterkeyhint="next" required>
                        <option></option>
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua &amp; Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AC">Ascension Island</option>
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
                        <option value="BA">Bosnia &amp; Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="VG">British Virgin Islands</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="BQ">Caribbean Netherlands</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo - Brazzaville</option>
                        <option value="CD">Congo - Kinshasa</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Côte d’Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CW">Curaçao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czechia</option>
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
                        <option value="SZ">Eswatini</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Islas Malvinas)</option>
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
                        <option value="HM">Heard &amp; McDonald Islands</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran</option>
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
                        <option value="XK">Kosovo</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
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
                        <option value="FM">Micronesia</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar (Burma)</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="KP">North Korea</option>
                        <option value="MK">North Macedonia</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestine</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn Islands</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Réunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">São Tomé &amp; Príncipe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SX">Sint Maarten</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <!-- <option value="GS">South Georgia &amp; South Sandwich Islands</option> -->
                        <!-- Nobody lives here, there's no permanent residence what -->
                        <option value="KR">South Korea</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="BL">St Barthélemy</option>
                        <option value="SH">St Helena</option>
                        <option value="KN">St Kitts &amp; Nevis</option>
                        <option value="LC">St Lucia</option>
                        <option value="MF">St Martin</option>
                        <option value="PM">St Pierre &amp; Miquelon</option>
                        <option value="VC">St Vincent &amp; Grenadines</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard &amp; Jan Mayen</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad &amp; Tobago</option>
                        <option value="TA">Tristan da Cunha</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks &amp; Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UY">Uruguay</option>
                        <option value="UM">US Outlying Islands</option>
                        <option value="VI">US Virgin Islands</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatican City</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="WF">Wallis &amp; Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select> 
                </div>

                <div class="question" id="q10">
                    <label for="city">City:</label><br>
                    <input required type="text" id="city" name="city" autocomplete="address-level2" enterkeyhint="next">
                </div>

                <div class="question" id="q11">
                    <label for="state">State or Providence:</label><br>
                    <input required type="text" id="state" name="state" autocomplete="address-level3" enterkeyhint="next">
                </div>

                <div class="question" id="q12">
                    <label for="postal-code">ZIP or postal code:</label><br>
                    <input class="postal-code" id="postal-code" name="postal-code" autocomplete="postal-code" required enterkeyhint="next">
                </div>
            </div>

            <div id="pinfo" class="info">
                <div class="question" id="q12">
                    <label>Project Type:</label><br>
                        <div class="lefted">
                            <input type="radio" id="class" name="project_type" value="Class" required>
                            <label for="class">Class</label><br>
                            <input type="radio" id="group" name="project_type" value="Group" required>
                            <label for="group">Group</label><br>
                            <input type="radio" id="individual" name="project_type" value="Individual" required>
                            <label for="individual">Individual</label>
                        </div>
                </div>
                
                <div class="question" id="q13">
                    <label for="people_involved">Number of people involved:</label><br>
                        <input type="number" id="quantity" name="quantity" min="1" max="999" placeholder="1" value="1" required enterkeyhint="next">
                    </select>
                </div>

                <div class="question" id="q14">
                    <label for="science_fair">Part of a Science Fair Project (Y/N):</label>
                        <div class="lefted">
                            <input type="radio" id="science_fair_yes" name="science_fair" value="Yes" required>
                            <label for="science_fair_yes">Yes</label><br>
                            <input type="radio" id="science_fair_no" name="science_fair" value="No" required>
                            <label for="science_fair_no">No</label>
                        </div>
                </div>

                <div class="question sfd" id="q15">
                    <label for="science_fair_name">Project Name:</label><br>
                    <input type="text" id="science_fair_name" name="science_fair_name" autocomplete="organization" enterkeyhint="next">
                </div>

                <div class="question sfd" id="q16">
                    <label for="hypothesis">Hypothesis:</label><br>
                    <textarea id="hypothesis" name="hypothesis" rows="4" cols="50" placeholder="A hypothesis is an educated guess that can be tested in an experiment." required></textarea>
                </div>

                <div class="question sfd" id="q17">
                    <label for="description">Description:</label><br>
                    <textarea id="description" name="description" rows="4" cols="50" placeholder="What is your project about?" required></textarea>
                </div>
            </div>

<!-- -=-=-= not done below this line -=-=-= -->
            <div id="linfo" class="info">
                <div class="question" id="q18">
                    <label for="general_location">General Location:</label><br>
                    <select id="general_location" name="general_location" required>
                        <option value="" disabled selected>Select a location</option>
                        <option value="location1">Location 1</option>
                        <option value="location2">Location 2</option>
                        <!-- Add more options for other locations -->
                    </select>
                </div>

                <!-- display specific locations based on general location answer -->
                <div class="question" id="q19">
                    <label for="specific_location">Specific Location:</label><br>
                    <select id="specific_location" name="specific_location" required>
                        <option value="" disabled selected>Select a location</option>
                        <option value="location1">Specific Location 1</option>
                        <option value="location2">Specific Location 2</option>
                        <!-- Add more options for other locations -->
                    </select>
                </div>
            </div>
<!-- -=-=-= not done above or below this line -=-=-= -->

            <div id="tinfo" class="info">
                <!-- number scrolly thingy -->
                <div class="question" id="q20">
                    <label for="num_dives">Number of Dives:</label><br>
                    <input type="number" id="num_dives" name="num_dives" required>
                </div>

                <!-- dropdown -->
                <div class="question" id="q21">
                    <label>Timing of dives:</label><br>
                    <div class="lefted">
                        <input type="radio" id="daily" name="timing_dives" value="Daily" required>
                        <label for="daily">Daily</label><br>
                        <input type="radio" id="weekly" name="timing_dives" value="Weekly" required>
                        <label for="weekly">Weekly</label><br>
                        <input type="radio" id="monthly" name="timing_dives" value="Monthly" required>
                        <label for="monthly">Monthly</label>
                    </div>
                </div>

                <!-- dropdown w/ fill in blank option -->
                <div class="question" id="q22">
                    <label for="time_in_water">Required time in water:</label><br>
                        <input type="number" id="time_in_water" name="time_in_water" min="1" max="5" placeholder="1" value="1"><br>
                        <span class="note">in Hours</span>
                    </select>
                </div>

                <div class="question" id="q23">
                    <label>Operation Requirements:</label><br>
                    <div class="lefted">
                        <input type="checkbox" id="quadrates" name="requirements[]" value="Quadrates">
                        <label for="quadrates">Quadrates</label><br>
                        <input type="checkbox" id="sensors" name="requirements[]" value="Sensors">
                        <label for="sensors">Sensors</label><br>
                        <input type="checkbox" id="objects" name="requirements[]" value="Objects">
                        <label for="objects">Objects</label><br>
                    </div>
                </div>
                <!-- Add more checkboxes for other requirements -->

                <div class="question" id="q24">
                    <label for="operation_requirements">Other Requirements:</label><br>
                    <textarea id="operation_requirements" name="operation_requirements" rows="4" cols="50" required></textarea>
                </div>

                <div class="question" id="q25">
                    <label for="anticipated_outcome">Anticipated Outcome:</label><br>
                    <textarea id="anticipated_outcome" name="anticipated_outcome" rows="4" cols="50" required></textarea>
                </div>

                <!-- <label for="project_result">Result of Project afterward:</label><br>
                <textarea id="project_result" name="project_result" rows="4" cols="50" required></textarea><br><br> -->
            </div>

            <!-- review button -->
            <input type="button" id="review" value="Review" onclick="review()">

            <!-- Is all this information correct? -->
            <!-- Make sure all required fields are filled out -->
            <!-- Get all the info, two buttons Back or Submit -->

            <!-- <input type="submit" value="Submit"> -->
        </form>

        <!-- footer -->
        <footer>
            <div class="footer">
                <img src="images/OAR.png" alt="Oceans and Robotics Logo" width="125px">
                    <div class="contact">
                        <p>Oceans and Robotics, Inc 501(c)(3)</p>
                        <span><i class="fas fa-phone"></i> &nbsp; +1 (831) 633-7033</span><br>
                        <span><i class="fas fa-envelope"></i> &nbsp; oceansandrobotics@gmail.com</span>
                    </div>
                <img src="images/nsf.png" alt="NSF Logo" width="125px">
            </div>
        </footer>
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
