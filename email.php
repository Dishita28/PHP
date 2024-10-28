<?php
$to = "example@example.com";
$subject = "Test Email";
$message = "Hello, this is a test email.";
$headers = "From: sender@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
