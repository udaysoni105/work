<?php
$to = "us300350@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: sender@gmail.com\r\n";
$headers .= "Reply-To: sender@gmail.com\r\n";
$headers .= "CC: cc@gmail.com\r\n";
$headers .= "BCC: bcc@gmail.com\r\n";

if(mail($to, $subject, $message, $headers)){
  echo "Email sent successfully!";
} else{
  echo "Email sending failed.";
}
?>
