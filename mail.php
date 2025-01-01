<!--?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']); // "Your Name"
    $phone = htmlspecialchars($_POST['phone']); // "Phone Number"
    $email = htmlspecialchars($_POST['email']); // "Email"
    $subject = htmlspecialchars($_POST['subject']); // "Subject"
    $message = htmlspecialchars($_POST['message']); // "Your Message"

    $to = "chandu57465@example.com"; // Replace with your email address
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $full_message = "Your Name: $name\nPhone Number: $phone\nEmail: $email\nYour Message:\n$message";

    if (mail($to, $subject, $full_message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs and sanitize them
    $name = htmlspecialchars($_POST['name']);       // Your Name
    $phone = htmlspecialchars($_POST['phone']);     // Phone Number
    $email = htmlspecialchars($_POST['email']);     // Email
    $subject = htmlspecialchars($_POST['subject']); // Subject
    $message = htmlspecialchars($_POST['message']); // Your Message

    // Set the email address where you want to receive the form data
    $to = "chandu57465@example.com";  // Replace with your email address

    // Prepare the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Construct the full message content
    $full_message = "Your Name: $name\n";
    $full_message .= "Phone Number: $phone\n";
    $full_message .= "Email: $email\n";
    $full_message .= "Your Message:\n$message";

    // Send the email using the mail() function
    if (mail($to, $subject, $full_message, $headers)) {
        // Success message
        echo "Email sent successfully!";
    } else {
        // Error message
        echo "Failed to send email.";
    }
}
?>

