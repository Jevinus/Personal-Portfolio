<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Example: Sending an email
  $to = "privysinner@proton.me";
  $subject = "New Message from Contact Form";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  mail($to, $subject, $body);
}
?>