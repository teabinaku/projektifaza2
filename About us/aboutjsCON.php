<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$country = $_POST['country'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$submit = $_POST['submit'];

// Validate the form data
if (empty($name) || empty($email) || empty($submit) || empty($surname) || empty($country) || empty($email) || empty($subject)) {

  header('Location: aboutus.php?error=1');
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

  header('Location: aboutus.php?error=2');
  exit;
}


header('Location: aboutus.php?success=1');
exit;

?>