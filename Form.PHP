<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./Form.CSS" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima&family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>The Ghostly Coder Survey</title>
</head>
<body>
<?php
/*Error Variables*/ 
$FirstnameErr = $MiddlenameErr = $LastnameErr = $UsernameErr = $emailErr = $genderErr = $otherErr = $dateErr = $CountriesErr = $passwordErr = $confirm_passwordErr = $fav_demonErr = $fav_gameErr = $fav_ghostErr = $fav_horrormovieErr = $fav_characterErr = $fav_musicartistErr = $AboutmeErr = $HobbiesErr= $discordErr = $facebookErr = $githubErr = $instagramErr = $linkedinErr = $twitterErr = "";

/*Variables*/ 
$Firstname = $Middlename = $Lastname = $Username =  $email = $gender = $other = $date = $Countries = $password = $confirm_password = $fav_demon = $fav_game = $fav_ghost = $fav_horrormovie = $fav_character = $fav_musicartist = $Aboutme = $Hobbies = $discord = $facebook = $github = $instagram = $linkedin = $twitter = ""; 

//PHP Submit Validation

//PHP Form Validation
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["Firstname"])) {
      $FirstnameErr = "First Name is required";
    }else{
      $Firstname = test_input($_POST["Firstname"]);
    //Checks if First Name only contains letter and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Firstname)) {
        $FirstnameErr = "Only letters and white space allowed";
      }    
    }
    if (empty($_POST["Middlename"])) {
      $$MiddlenameErr = "";
    }else{
      $Middlename = test_input($_POST["Middlename"]);
    //Checks if Middle Name only contains letter and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Middlename)) {
        $MiddlenameErr = "Only letters and white space allowed";
      } 
    }
    if (empty($_POST["Lastname"])) {
      $LastnameErr = "Last Name is required";
    }else{
      $Lastname = test_input($_POST["Lastname"]);
    //Checks if Last Name only contains letter and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $Lastname)) {
        $LastnameErr = "Only letters and white space allowed";
      } 
    }
    if (empty($_POST["Username"])) {
      $UsernameErr = "Username is required";
    }else{
      $Username = test_input($_POST["Username"]);
    //Checks if the Username is in the correct format
    if(!preg_match("/^[a-zA-Z0-9]+$/",$username)) {
        $UsernameErr="Username Invalid";
      }
    }
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    }else{
      $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    }else{
      $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["other"])) {
      $otherErr = "";
    }else{
      $other = test_input($_POST["other"]);
    }
    if (empty($_POST["date"])) {
      $dateErr = "Date is required";
    }else{
      $date = test_input($_POST["date"]);
    //This checks if the date is formated correctly
    if(!preg_match("/^(?:\\d{4})-(?:\\d{2})-(?:\\d{2})T(?:\\d{2}):(?:\\d{2}):(?:\\d{2}(?:\\.\\d*)?)(?:(?:-(?:\\d{2}):(?:\\d{2})|Z)?)$/", $date)){
      $dateErr="Date is inputted incorrectly";
      }
    }
    if (empty($_POST["Countries"])) {
      $CountriesErr = "Place of Birth is required";
    }else{
      $Countries = test_input($_POST["Countries"]);
    }
    if (empty($_POST["Password"])) {
      $passwordErr = "Password is required";
    }else{
      $password = test_input($_POST["password"]);
    // This checks the password 
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
        $passwordErr = 'the password does not meet the requirements!';
      }
      if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
     }else{
       echo 'Strong password.';
     }
    }
    if (empty($_POST["confirm_password"])) {
      $confirm_passwordErr= "Password is required";
    }else{
      $confirm_password = test_input($_POST["confirm_password"]);
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
        echo 'the password does not meet the requirements!';
      }
      if ($_POST["password"] === $_POST["confirm_password"]){
        echo "Password correct";
      }else{ 
        echo "Password Incorrect";
    }
  }
    if (empty($_POST["fav_demon"])) {
      $fav_demonErr = "";
    }else{
      $fav_demon = test_input($_POST["fav_demon"]);
    }
    if (empty($_POST["fav_game"])) {
      $fav_gameErr = "";
    }else{
      $fav_game = test_input($_POST["fav_game"]);
    }
    if (empty($_POST["fav_ghost"])) {
      $fav_ghostErr = "";
    }else{
      $fav_ghost = test_input($_POST["fav_ghost"]);
    }
    if (empty($_POST["fav_horrormovie"])) {
      $fav_horrormovieErr = "";
    }else{
      $fav_horrormovie = test_input($_POST["fav_horrormovie"]);
    }
    if (empty($_POST["fav_character"])) {
      $fav_characterErr = "";
    }else{
      $fav_character = test_input($_POST["fav_character"]);
    }
    if (empty($_POST["fav_musicartist"])) {
      $fav_musicartistErr = "";
    }else{
      $fav_musicartist = test_input($_POST["fav_musicartist"]);
    }
    if (empty($_POST["Aboutme"])) {
      $AboutmeErr = "";
    }else{
      $Aboutme = test_input($_POST["Aboutme"]);
    }
    if (empty($_POST["Hobbies"])) {
      $HobbiesErr = "";
    }else{
      $Hobbies = test_input($_POST["Hobbies"]);
    }
    if (empty($_POST["discord"])) {
      $discordErr = "";
    }else{
      $discord = test_input($_POST["discord"]);
    }
    if (empty($_POST["facebook"])) {
      $facebookErr = "";
    }else{
      $facebook = test_input($_POST["facebook"]);
    }
    if (empty($_POST["github"])) {
      $githubErr = "";
    }else{
      $github = test_input($_POST["github"]);
    }
    if (empty($_POST["instagram"])) {
      $instagramErr = "";
    }else{
      $instagram = test_input($_POST["instagram"]);
    }
    if (empty($_POST["linkedin"])) {
      $linkedinErr = "";
    }else{
      $linkedin= test_input($_POST["linkedin"]);
    } 
    if (empty($_POST["twitter"])) {
      $twitterErr = "";
    }else{
      $twitter = test_input($_POST["instagram"]);
    } 
    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

   /*if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
      $ 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }else{
      echo 'Strong password.';
    }
    */

    /*if ($_POST["password"] === $_POST["confirm_password"]){
      echo "Password correct";
    }else{ 
      echo "Password Incorrect";
    }*/

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    } 

  }
  ?>

  <!--Header-->
    <header>
      <div>
        <img class="ghost" src="/Resources/PngItem_6377826.png" alt="Cartoon Ghosts" width="80px" height="80px"/>
        <h1>The Ghostly Coder</h1>
      </div>
    </header>

    <ul>
        <li><a class="Home" href="/Home.Html">Home</a></li>
        <li><a class="active" class="Form" href="/Form.PHP">Form</a>
        <li><a class="About" href="/About.HTML">About Me</a></li>
    </ul>

    <p class="required"><span class="error"><label class="key">Key :  </label>* required field</span></p>
  <!--Personal Information-->
  <form action="/Thanks.PHP" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <div class="row">
      <div class="column">
        <fieldset class= "personal">
          <legend>Personal Information</legend>

          <div class="labels" title="Only allows to contain letters and whitespace">
            <label class="marker">First Name :</label>
            <input type="text" name="Firstname" value="<?php echo $Firstname;?>">
            <span class="error">* <?php echo $FirstnameErr;?></span>
          </div>

          <div class="labels" title="Only allows to contain letters and whitespace">
            <label>Middle Name :</label>
            <input type="text" placeholder="Optional" name="Middlename" value="<?php echo $Middlename;?>">
            <span class="error"><?php echo $MiddlenameErr;?></span>
          </div>
            
          <div class="labels" title="Only allows to contain letters and whitespace">
            <label>Last Name :</label>
            <input type="text" name="Lastname" value="<?php echo $Lastname;?>">
             <span class="error">*<?php echo $LastnameErr;?></span>
          </div>

          <div class="labels">
            <label>Username :</label>
            <input type="text" name="Username" value="<?php echo $Username;?>">
            <span class="error">*<?php echo $UsernameErr;?></span>
          </div>

          <div class="labels">
            <label>Email :</label>
            <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">*<?php echo $emailErr;?></span>
          </div>

          <div class="checks" title="Must have one checked">
            <label>Gender : </label>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male 
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female 
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other :
            <input type="text" name="other" value="<?php echo $other;?>">
            <span class="error">*<?php echo $otherErr;?></span>
            <span class="error"><?php echo $genderErr;?></span>
          </div>  
          
          <div class="labels" title="Must select a date">
            <label class="color">Date of Birth :</label>
            <input class="color" type="date" name="date" value="<?php echo $date;?>">
            <span class="error">*<?php echo $dateErr;?></span>
          </div>

          <div class="labels" title="Must select at least one option">    
            <label for="Countries">Place of Birth :</label>
            <select name="Countries" id="Countries" value="<?php echo $Countries;?>">
            <option value=""></option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Brazil">Brazil</option>
            <option value="Brunei">Brunei</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
            <option value="Cabo Verde">Cabo Verde</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Canada">Canada</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="	Czechia (Czech Republic)">Czechia (Czech Republic)</option>
            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Eswatini (fmr. Swaziland)">Eswatini (fmr. "Swaziland")</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Greece">Greece</option>
            <option value="Grenada">Grenada</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-Bissau">Guinea-Bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Holy See">Holy See</option>
            <option value="Honduras">Honduras</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Laos">Laos</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libya">Libya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mexico">Mexico</option>
            <option value="Micronesia">Micronesia</option>
            <option value="Moldova">Moldova</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar (formerly Burma)">Myanmar (formerly Burma)</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="North Korea">North Korea</option>
            <option value="North Macedonia">North Macedonia</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Palestine State">Palestine State</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Qatar">Qatar</option>
            <option value="Romania">Romania</option>
            <option value="Russia">Russia</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Serbia">Serbia</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Korea">South Korea</option>
            <option value="South Sudan">South Sudan</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syria">Syria</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Thailand">Thailand</option>
            <option value="Timor-Leste">Timor-Leste</option>
            <option value="Togo">Togo</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States of America">United States of America</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Vietnam">Vietnam</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
            </select><span class="error">*<?php echo $CountriesErr?></span>
          </div>

          <div title="Should contain at least one Uppercase, one Number, one Special Character and be at least 8 characters long" class="labels">
            <label>Password :</label>
            <input  type="password" name="password" id="password" maxlength="50">
            <span class="error">*<?php echo $passwordErr;?></span>
          </div>

          <div class="labels" class="hovertext" data-hover="">
            <label>Confirm Password :</label>
            <input type="password" name="confirm_password" id="confirm_password" maxlength="50">
            <span class="error">*<?php echo $confirm_passwordErr;?></span> 
          </div>
      </fieldset> 
    </div>
   <!--About Yourself-->
    <div class="column">
      <fieldset class="aboutYou">
        <Legend>About Yourself</Legend>
        
        <div class="labels">
          <label>Favourite :</label>    
          <input type ="text" placeholder="Demon" name="fav_demon" size="22" value="<?php echo $fav_demon;?>">
          <span class="error"><?php echo $fav_demonErr;?></span>
        </div>  
        
        <div class="labels">
          <label>Favourite :</label>
          <input type ="text" placeholder="Game" name="fav_game" size="22" value="<?php echo $fav_game;?>">
          <span class="error"><?php echo $fav_gameErr;?></span>
        </div>

        <div class="labels">
          <label>Favourite :</label>
          <input type ="text" placeholder="Ghost" name="fav_ghost" size="22" value="<?php echo $fav_ghost;?>">
          <span class="error"><?php echo $fav_ghostErr;?></span>
        </div>
        
        <div class="labels">
          <label>Favourite :</label>
          <input type ="text" placeholder="Horror Movie" name="fav_horrormovie" size="22" value="<?php echo $fav_horrormovie;?>">
          <span class="error"><?php echo $fav_horrormovieErr;?></span>
        </div>

        <div class="labels">
          <label>Favourite :</label>
          <input type ="text" placeholder="Horror Movie Character" name="fav_character" size="22" value="<?php echo $fav_character;?>">
          <span class="error"><?php echo $fav_characterErr;?></span>
        </div>
        
        <div class="labels">
          <label>Favourite :</label>
          <input type ="text" placeholder="Music Artist" name="fav_musicartist" size="22" value="<?php echo $fav_musicartist;?>">
          <span class="error"><?php echo $fav_musicartistErr;?></span>
        </div>
        
        <div class="labels">
          <label>About Me :</label>
          <textarea type ="Comment" rows="4" cols="20" name="Aboutme" value="<?php echo $Aboutme;?>"></textarea><br>
          <span class="error"><?php echo $AboutmeErr;?></span>
        </div>

        <div class="labels">
          <label>Hobbies :</label>
          <textarea type ="Comment" rows= "4" cols="20" name="Hobbies" value="<?php echo $Hobbies;?>"></textarea>
          <span class="error"><?php echo $HobbiesErr;?></span>
        </div>    
      </fieldset>
    </div>

   <!--Social Media-->
    <div class="column">
      <fieldset class="socialMedia">
        <legend>Social Media</legend>

        <div class="labels">
          <label>Discord :</label>
          <input type ="text" placeholder="Username" name="discord" value="<?php echo $discord;?>">
          <span class="error"><?php echo $discordErr;?></span>
        </div>
        
        <div class="labels">
          <label>Facebook :</label>
          <input type ="text" placeholder="Username" name="facebook" value="<?php echo $facebook;?>">
          <span class="error"><?php echo $facebookErr;?></span>
        </div>
        
        <div class="labels">
          <label>GitHub :</label>
          <input type ="text" placeholder="Username" name="github" value="<?php echo $github;?>">
          <span class="error"><?php echo $githubErr;?></span>
        </div>

        <div class="labels">
          <label>Instagram :</label>
          <input type ="text" placeholder="Username" name="instagram" value="<?php echo $instagram;?>">
          <span class="error"><?php echo $instagramErr;?></span>
        </div>
        
        <div class="labels">
          <label>Linkedin :</label>
          <input type ="text" placeholder="Username" name="linkedin" value="<?php echo $linkedin;?>">
          <span class="error"><?php echo $linkedinErr;?></span>
        </div>
        
        <div class="labels">
          <label>Twitter :</label>
          <input type ="text" placeholder="Username" name="twitter" value="<?php echo $twitter;?>">
          <span class="error"><?php echo $twitterErr;?></span>
        </div>
      </fieldset>
    </div>
  </div>
    <div>
      <input class="submit" type="submit" value="Submit">
    </div>          
</form>

  <footer>
    <div class="name">
      <p>The Ghostly Coder / SurveyForm</p>
    </div>
    
    <div class="copyright">
      <p>@copyright 2022 The Ghostly Coder</p>
    </div>
  </footer>
</body>
</html>