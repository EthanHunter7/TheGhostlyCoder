<?php
session_start();
?>
<html>
<body>
  <head>
    <link href="./Thanks.CSS" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima&family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>The Ghostly Coder Survey</title>
  </head>
    <!--Header-->
    <header>
      <div>
        <img class="ghost" src="/Resources/PngItem_6377826.png" alt="Cartoon Ghosts" width="80px" height="80px"/>
        <h1>The Ghostly Coder</h1>
      </div>
    </header>
      <ul>
          <li><a class="active" class="Home" href="#">Home</a></li>
          <li><a class="Form" href="/Form.PHP">Form</a>
          <li><a class="About" href="/About.HTML">About Me</a></li>

      </ul>

    <div class="headings">
      <h1>Thank you for submitting this form!!</h1>
      <h2>Here is the details you entered.</h2>
    </div>

    <div>
      <fieldset>
        <legend>Personal Information</legend>
        <div class="labels"><label>First name : </label> <?php echo $_SESSION["Firstname"] ?>.</div>
        <div class="labels"><label>Middle name : </label> <?php echo $_SESSION["Middlename"] ?>.</div>
        <div class="labels"><label>Last Name : </label> <?php echo $_SESSION["Lastname"] ?>.</div>
        <div class="labels"><label>Username : </label> <?php echo $_SESSION["Username"] ?>.</div>
        <div class="labels"><label>Email : </label> <?php echo $_SESSION["email"] ?>.</div>
        <div class="labels"><label>Gender : </label> <?php echo $_SESSION["gender"] ?>.</div>
        <div class="labels"><label>Date Of Birth : </label> <?php echo $_SESSION["date"] ?>.</div>
        <div class="labels"><label>Place Of Birth : </label> <?php echo $_SESSION["Countries"] ?>.</div>
      </fieldset>
    </div>

    <div>
      <fieldset>
      <legend>About Yourself</legend>
      <div class="labels"><label>Favourite Demon : </label> <?php echo $_SESSION["fav_demon"] ?>.</div>
      <div class="labels"><label>Favourite Game : </label> <?php echo $_SESSION["fav_game"] ?>.</div>
      <div class="labels"><label>Favourite Ghost : </label> <?php echo $_SESSION["fav_ghost"] ?>.</div>
      <div class="labels"><label>Favourite Horror Movie : </label> <?php echo $_SESSION["fav_horrormovie"] ?>.</div>
      <div class="labels"><label>Favourite Horror Movie Character : </label> <?php echo $_SESSION["fav_character"] ?>.</div>
      <div class="labels"><label>Favourite Music Artist : </label> <?php echo $_SESSION["fav_musicartist"] ?>.</div>
      <div class="labels"><label>About Yourself : </label> <?php echo $_SESSION["Aboutme"] ?>.</div>
      <div class="labels"><label>Hobbies</label> <?php echo $_SESSION["Hobbies"] ?>.</div>
      </fieldset>
    </div>


    <div>
      <fieldset>
        <legend>Social Media</legend>
        <div class="labels"><label>Discord : </label> <?php  echo $_SESSION["discord"] ?>.</div>
        <div class="labels"><label>Facebook : </label> <?php echo $_SESSION["facebook"] ?>.</div>
        <div class="labels"><label>GitHub : </label> <?php echo $_SESSION["github"] ?>.</div>
        <div class="labels"><label>Instagram : </label> <?php echo $_SESSION["instagram"] ?>.</div>
        <div class="labels"><label>Linkedin : </label> <?php echo $_SESSION["linkedin"] ?>.</div>
        <div class="labels"><label>Twitter</label> <?php echo $_SESSION["twitter"] ?>.</div>
      </fieldset>
    </div>
















    <!--<div>
      <fieldset>
        <legend>Personal Information</legend>
        <div class="labels"><label>First Name : </label> <?php //echo $_POST["Firstname"]; ?></div>
        <div class="labels"><label>Middle Name : </label><?php //echo $_POST["Middlename"]; ?></div>
        <div class="labels"><label>Last Name : </label><?php //echo $_POST["Lastname"]; ?></div>
        <div class="labels"><label>Username : </label><?php //echo $_POST["Username"]; ?></div>
        <div class="labels"><label>Email : </label><?php //echo $_POST["email"]; ?></div>
        <div class="labels"><label>Gender : </label><?php //echo $_POST["gender"]; echo $_POST["other"] ?></div>
        <div class="labels"><label>Date Of Birth : </label><?php //echo $_POST["date"]; ?></div>
        <div class="labels"><label>Place Of Birth : </label><?php //echo $_POST["Countries"]; ?><div>
        <div class="labels"><label>Pasword : </label><?php //echo $_POST["password"]; ?></div>
      </fieldset> 
    </div>

    <div>
      <fieldset>
        <legend>About Yourself</legend>
        <div class="labels"><label>Favourite Demon : </label><?php //echo $_POST["fav_demon"]; ?></div>
        <div class="labels"><label>Favourite Game : </label><?php //echo $_POST["fav_game"]; ?></div>
        <div class="labels"><label>Favourite Ghost : </label><?php //echo $_POST["fav_ghost"]; ?></div>
        <div class="labels"><label>Favourite Horror Movie : </label><?php //echo $_POST["fav_horrormovie"]; ?></div>
        <div class="labels"><label>Favourite Horror Movie Character : </label><?php //echo $_POST["fav_character"]; ?></div>
        <div class="labels"><label>Favourite Music Artist : </label><?php //echo $_POST["fav_musicartist"]; ?></div>
        <div class="labels"><label>About Your : </label><?php //echo $_POST["Aboutme"]; ?></div>
        <div class="labels"><label>Hobbies : </label><?php //echo $_POST["Hobbies"]; ?></div>
      </fieldset>
    </div>

    <div>
      <fieldset>
        <legend>Social Media</legend>
        <div><label>Discord Username : </label><?php //echo $_POST["discord"]; ?></div>
        <div><label>Facebook Username : </label><?php //echo $_POST["facebook"]; ?></div>
        <div><label>GitHub Username : </label><?php //echo $_POST["github"]; ?></div>
        <div><label>Instagram Username : </label><?php //echo $_POST["instagram"]; ?></div>
        <div><label>Linkedin Username : </label><?php //echo $_POST["linkedin"]; ?></div>
        <div><label>Twitter Username : </label><?php //echo $_POST["twitter"]; ?></div>
      </fieldset>
    </div>-->
    <footer>
      <p>The Ghostly Coder/SurveyForm</p>
      <p>@copyright 2022 The Ghostly Coder</p>
    </footer>
</body>
</html>
<?php
/*session_unset();
session_destroy();*/
?>