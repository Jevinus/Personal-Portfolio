<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send email using PHP's mail() function or a library like PHPMailer
  // Example using mail() function:
  $to = "privysinner@proton.me";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo "Message sent successfully!";
  } else {
    echo "Message failed to send.";
  }
}
?>
