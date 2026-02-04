<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "your-email@example.com";  // <-- Replace this
  $subject = "New Contact from $name";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully.";
  } else {
    echo "Message failed to send.";
  }
}
?>
