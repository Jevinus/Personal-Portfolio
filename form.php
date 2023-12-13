<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set up the email
  $to = "privysinner@proton.me"; // Replace with your email address
  $subject = "New Message from Contact Form";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send the email
  if (mail($to, $subject, $body)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>