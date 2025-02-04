<?php
// Replace with your real receiving email address
$to = 'maira.andraddee@gmail.com'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, "Name: $name\nEmail: $email\nMessage: $message", $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message!";
    }
} else {
    echo "Invalid request!";
}
?>
