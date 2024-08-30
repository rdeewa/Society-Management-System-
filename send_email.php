<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $notes = $_POST['message'];

    // Validate email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Your SMTP server address (for Gmail, use smtp.gmail.com)
            $mail->SMTPAuth = true; 
            $mail->Username = 'yadavdeewanshu@gmail.com'; 
            $mail->Password = 'bqry faaz nisc yvnd'; 
            $mail->SMTPSecure = 'tls'; 
            $mail->Port = 587; // TCP port to connect to (587 for TLS, 465 for SSL)

            // Set sender and recipient
            $mail->setFrom($email, $name);
            $mail->addAddress('yadavdeewanshu@gmail.com'); 
            // Email subject and body
            $mail->Subject = 'New Demo Booking';
            $mail->isHTML(true);
            $mail->Body = "
            <html>
            <head><title>New Demo Booking</title></head>
            <body>
            <b><p><strong>Name:</strong> $name</p></b>
            <b><p><strong>Email:</strong> $email</p></b>
            <b><p><strong>Phone:</strong> $phone</p></b>
            <b><p><strong>message:</strong> $notes</p></b>
            </body>
            </html>";

            // Send email
            $mail->send();
            echo "Email sent successfully!";
        } catch (Exception $e) {
            echo "Error sending email: {$mail->ErrorInfo}";
        }
    } else {
        echo "Invalid email address.";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.php");
    exit;
}
?>
