<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Replace 'your-email@example.com' with your desired email address
  $to = 'gkrishnasameer7@gmail.com';
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
  
  // Send the email
  $success = mail($to, $subject, $body);
  
  // Check if the email was sent successfully
  if ($success) {
    echo 'Message sent successfully.';
  } else {
    echo 'Failed to send message. Please try again later.';
  }
}
?>
