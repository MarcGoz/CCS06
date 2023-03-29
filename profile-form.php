<!DOCTYPE html> 
<html>
    <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  padding: 20px;
}

h1 {
  color: #333333;
  text-align: center;
  margin-top: 0;
}

form {
  background-color: #ffffff;
  border: 2px solid #cccccc;
  padding: 20px;
  width: 70%;
  margin: 0 auto;
  max-width: 600px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
select,
input[type="color"],
input[type="range"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  font-size: 16px;
  border: 1px solid #cccccc;
  border-radius: 4px;
}

input[type="date"]::-webkit-inner-spin-button {
  display: none;
}

input[type="date"]::-webkit-calendar-picker-indicator {
  color: #333333;
  font-size: 16px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

.user-data {
  background-color: #ffffff;
  border: 2px solid #cccccc;
  padding: 20px;
  margin-top: 20px;
}
</style>
    
     <head>
         <title>User Profile Form</title> </head> <body> 
    <?php // initialize variables $complete_name = ""; $birthdate = ""; $email = ""; $program = ""; $favorite_color = ""; $superpower_level = "";
// check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $complete_name = $_POST["complete_name"];
    $birthdate = $_POST["birthdate"];
    $email = $_POST["email"];
    $program = $_POST["program"];
    $favorite_color = $_POST["favorite_color"];
    $superpower_level = $_POST["superpower_level"];
  }
?>
<h1>User Profile Form</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="complete_name">Complete Name:</label>
  <input type="text" id="complete_name" name="complete_name" required value="<?php echo $complete_name;?>"><br>
  <label for="birthdate">Birthdate:</label>
  <input type="date" id="birthdate" name="birthdate" value="<?php echo $birthdate;?>"><br>
  <label for="email">Email Address:</label>
  <input type="email" id="email" name="email" required value="<?php echo $email;?>"><br>
  <label for="program">Program:</label>
  <select id="program" name="program" required>
    <option value="">--Select program--</option>
    <option value="BSCS" <?php if ($program == "BSCS") echo "selected";?>>BSCS</option>
    <option value="BSIT" <?php if ($program == "BSIT") echo "selected";?>>BSIT</option>
  </select><br>
  <label for="favorite_color">Favorite Color:</label>
  <input type="color" id="favorite_color" name="favorite_color" value="<?php echo $favorite_color;?>"><br>
  <label for="superpower_level">Superpower Level:</label>
  <input type="range" id="superpower_level" name="superpower_level" min="1" max="100" value="<?php echo $superpower_level;?>"><br>
  <input type="submit" value="Submit">
</form>

<?php
  // display user data
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>User Data:</h2>";
    echo "Complete Name: " . $complete_name . "<br>";
    echo "Birthdate: " . $birthdate . "<br>";
    echo "Email Address: " . $email . "<br>";
    echo "Program: " . $program . "<br>";
    echo "Favorite Color: " . $favorite_color . "<br>";
    echo "Superpower Level: " . $superpower_level . "<br>";
  }
?>
