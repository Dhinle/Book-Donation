<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform input validation and/or sanitization

    // Store the information in a database or send an email confirmation, etc.

    echo "Welcome, $username! Your account has been created.";
  }
?>
