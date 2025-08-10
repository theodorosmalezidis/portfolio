<?php
// Set your receiving email address
$to_email = "tmalezidis@gmail.com";

// Get form data
$name = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

// Build email content
$body = "Name: $name\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message";

// Set headers
$headers = "From: $name <$email>";

// Send the email
if (mail($to_email, $subject, $body, $headers)) {
    echo "OK";
} else {
    echo "There was a problem sending the message.";
}
?>