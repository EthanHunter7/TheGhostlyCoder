|<!DOCTYPE html>
<html>
 <body>
    <header>
        <h1>The Ghostly Coder</h1>
    </header>

    <h1>Thank you for submitting this form!!</h1>

    <h2>Here is the details you entered.</h2>

    <label>First Name: </label><?php echo $_POST["Firstname"]; ?><br>
    <label>Middle Name: </label><?php echo $_POST["Middlename"]; ?><br>
    <label>Last Name: </label><?php echo $_POST["Lastname"]; ?><br>
    <label>Username: </label><?php echo $_POST["Username"]; ?><br>
    <label>Email: </label><?php echo $_POST["email"]; ?><br>
    <label>Gender: </label><?php echo $_POST["gender"]; echo $_POST["other"] ?><br>
    <label>Date Of Birth: </label><?php echo $_POST["date"]; ?><br>
    <label>Place Of Birth: </label><?php echo $_POST["Countries"]; ?><br>
    <label>Pasword: </label><?php echo $_POST["Password"]; ?><br>
    <label>Favourite Demon: </label><?php echo $_POST["fav_demon"]; ?><br>
    <label>Favourite Game: </label><?php echo $_POST["fav_game"]; ?><br>
    <label>Favourite Ghost: </label><?php echo $_POST["fav_ghost"]; ?><br>
    <label>Favourite Horror Movie: </label><?php echo $_POST["fav_horrormovie"]; ?><br>
    <label>Favourite Horror Movie Character: </label><?php echo $_POST["fav_character"]; ?><br>
    <label>Favourite Music Artist: </label><?php echo $_POST["fav_musicartist"]; ?><br>
    <label>Discord Username: </label><?php echo $_POST["discord"]; ?><br>
    <label>Facebook Username: </label><?php echo $_POST["facebook"]; ?><br>
    <label>GitHub Username: </label><?php echo $_POST["github"]; ?><br>
    <label>Instagram Username: </label><?php echo $_POST["instagram"]; ?><br>
    <label>Linkedin Username: </label><?php echo $_POST["linkedin"]; ?><br>
    <label>Twitter Username: </label><?php echo $_POST["twitter"]; ?><br>
    
    <footer>
      <p>The Ghostly Coder/SurveyForm</p>
      <p>@copyright 2022 The Ghostly Coder</p>
    </footer>
 </body>
</html>