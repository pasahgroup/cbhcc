<?php

if (isset($_POST['email'])) {
    $user_email = $_POST['email'];

    // HTML content for the user's confirmation email
    $user_html = "<p>Thank you for subscribing to our newsletter!</p>";
    $user_html .= "<p>You will receive updates at: <strong>$user_email</strong></p>";

    // HTML content for the notification email to the website owner
    $owner_html = "<p>New subscriber email: <strong>$user_email</strong></p>";

    // Include PHPMailer autoload file
    require 'smtp/PHPMailerAutoload.php';
    $mail = new PHPMailer(true); // Passing `true` enables exceptions

    try { 
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->Port = 587;  // TCP port to connect to
        $mail->SMTPSecure = 'tls';  // Enable TLS encryption
        $mail->SMTPAuth = true;  // Enable SMTP authentication
        $mail->Username="your_email@gmail.com";  // Your Mail
        $mail->Password="Your App Password"; // Your app password
    
        // Send confirmation email to the user
        $mail->setFrom("your_email@gmail.com", "your name");  // Sender's email and name
        $mail->addAddress($user_email);   // User's email address
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Newsletter Subscription Confirmation';  // Email subject
        $mail->Body = $user_html;  // Email body
        $mail->send();

        // Send notification email to the website owner
        $mail->clearAddresses();  // Clear previous recipients
        $mail->addAddress("your_email@gmail.com", "your name");   // Recipient's email and name
        $mail->Subject = 'New Newsletter Subscriber';  // Email subject
        $mail->Body = $owner_html;  // Email body
        $mail->send();

        $msg = "Thank you for subscribing!";
    } catch (Exception $e) {
        $msg = "Error occurred while sending email. Please try again later.";
    }

    echo $msg;  // Output the result message
}
?>