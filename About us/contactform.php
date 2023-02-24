<?php

// define variables and set to empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";

// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // validate name field
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  // validate email field
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if email address is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  // validate message field
  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }
}

// function to sanitize input data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
<!DOCTYPE html>
<html>
<head>
  
    <title>About us/Contact us</title>
    
    <link rel="stylesheet" href="cssau.css?v=<?php echo time(); ?>">
</head>

<body style="background-color:blueviolet">


<div style="justify-content: center;
    width: 600px;
    height: 500px;
    padding: auto;
    margin-top: 1cm;
    border-style: solid;
    margin: auto;
    position: absolute;
    right: auto;
    border: none;
    border-radius: 23px;
    text-align: center;
    position: absolute;
    right: 0px;
    left: 0px;
    background-color: rgb(24,24,24);
    margin-top: 1cm;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Message: <textarea name="message" rows="5" cols="40"><?php echo $message;?></textarea>
  <span class="error">* <?php echo $messageErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
</div>

<?php
// if form is submitted and all fields are valid
if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "" && $messageErr == "") {
  // send email
  $to = "youremail@example.com";
  $subject = "New message from " . $name;
  $body = $message;
  $headers = "From: " . $email;

  if (mail($to, $subject, $body, $headers)) {
    echo "<p>Forma juaj pranohet.</p>";
  } else {
    echo "<p>Ju nuk i keni plotesuar te gjitha kushtet.</p>";
  }
}
?>

</html> 