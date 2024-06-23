<?php
// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'razamaan101@gmail.com';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from the contact form on your website.\n\n".
                  "Here are the details:\n\n".
                  "Name: $name\n".
                  "Email: $email\n\n".
                  "Message:\n$message";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    if (mail($receiving_email_address, $email_subject, $email_body, $headers)) {
        echo 'Your message has been sent. Thank you!';
    } else {
        echo 'There was an error sending your message. Please try again later.';
    }
} else {
    echo 'Invalid request method';
}
?>
