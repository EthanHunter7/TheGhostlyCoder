<!DOCTYPE html>
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

    <div class="headings">
      <h1>Thank you for submitting this form!!</h1>
      <h2>Here is the details you entered.</h2>
    </div>

    <div>
      <fieldset>
        <legend>Personal Information</legend>
        <div><label>First Name : </label><?php echo $_POST["Firstname"]; ?></div>
        <div><label>Middle Name : </label><?php echo $_POST["Middlename"]; ?></div>
        <div><label>Last Name : </label><?php echo $_POST["Lastname"]; ?></div>
        <div><label>Username : </label><?php echo $_POST["Username"]; ?></div>
        <div><label>Email : </label><?php echo $_POST["email"]; ?></div>
        <div><label>Gender : </label><?php echo $_POST["gender"]; echo $_POST["other"] ?></div>
        <div><label>Date Of Birth : </label><?php echo $_POST["date"]; ?></div>
        <div><label>Place Of Birth : </label><?php echo $_POST["Countries"]; ?><div>
        <div><label>Pasword : </label><?php echo $_POST["Password"]; ?></div>
      </fieldset> 
    </div>

    <div>
      <fieldset>
        <legend>About Yourself</legend>
        <div><label>Favourite Demon : </label><?php echo $_POST["fav_demon"]; ?></div>
        <div><label>Favourite Game : </label><?php echo $_POST["fav_game"]; ?></div>
        <div><label>Favourite Ghost : </label><?php echo $_POST["fav_ghost"]; ?></div>
        <div><label>Favourite Horror Movie : </label><?php echo $_POST["fav_horrormovie"]; ?></div>
        <div><label>Favourite Horror Movie Character : </label><?php echo $_POST["fav_character"]; ?></div>
        <div><label>Favourite Music Artist : </label><?php echo $_POST["fav_musicartist"]; ?></div>
        <div><label>About Your : </label><?php echo $_POST["Aboutme"]; ?></div>
        <div><label>Hobbies : </label><?php echo $_POST["Hobbies"]; ?>,</div>
      </fieldset>
    </div>

    <div>
      <fieldset>
        <legend>Social Media</legend>
        <div><label>Discord Username : </label><?php echo $_POST["discord"]; ?></div>
        <div><label>Facebook Username : </label><?php echo $_POST["facebook"]; ?></div>
        <div><label>GitHub Username : </label><?php echo $_POST["github"]; ?></div>
        <div><label>Instagram Username : </label><?php echo $_POST["instagram"]; ?></div>
        <div><label>Linkedin Username : </label><?php echo $_POST["linkedin"]; ?></div>
        <div><label>Twitter Username : </label><?php echo $_POST["twitter"]; ?></div>
      </fieldset>
    </div>
    <footer>
      <p>The Ghostly Coder/SurveyForm</p>
      <p>@copyright 2022 The Ghostly Coder</p>
    </footer>
</body>
</html>