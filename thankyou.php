<!DOCTYPE html>
<html>
  <head>
    <title>Thank You!</title>
    <link rel="stylesheet" href="feedback.css">
  </head>
  <body>
    <?php
      // check if form is submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $complete_name = $_POST["complete_name"];
        $email = $_POST["email"];
        $type = $_POST["type"];
        $satisfaction_level = $_POST["satisfaction_level"];
        $message = $_POST["message"];
        
        // display user data
        echo "<h1>Thank You!</h1>";
        echo "<p>Received " . $type . " message from " . $complete_name . " (" . $email . ")</p>";
        echo "<p>" . $message . "</p>";
        echo "<p>Satisfaction Level: " . $satisfaction_level . "</p>";
      }
      else {
        echo "<h1>Error: Form not submitted.</h1>";
      }
    ?>
  </body>
</html>
