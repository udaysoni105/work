<?php
$to = "recipient@example.com";
$subject = "Test email";
$message = "This is a test email sent from PHP.";
$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "Content-Type: text/html\r\n";

if (mail($to, $subject, $message, $headers)) {
  echo "Email sent successfully!";
} else {
  echo "Email sending failed.";
}
?>
