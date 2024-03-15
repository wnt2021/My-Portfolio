<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'wintopadedokun@gmail.com';

  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

  $email_content = "
  <html>
  <head>
  <title>New Message from Contact Form</title>
  </head>
  <body>
  <h2>New Message from Contact Form</h2>
  <p><strong>Name:</strong> $name</p>
  <p><strong>Email:</strong> $email</p>
  <p><strong>Subject:</strong> $subject</p>
  <p><strong>Message:</strong> $message</p>
  </body>
  </html>
  ";

  if (mail($to, $subject, $email_content, $headers)) {
    // Email sent successfully
    echo "success";
  } else {
    // Email sending failed
    echo "error";
  }
}
