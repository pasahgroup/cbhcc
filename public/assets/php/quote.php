<?php

if (
    isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) 
    && isset($_POST['service']) && isset($_POST['address']) 
    && isset($_POST['budget']) && isset($_POST['date']) && isset($_POST['comment'])
) {
    // Sanitize user inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $number = htmlspecialchars(trim($_POST['number']));
    $service = htmlspecialchars(trim($_POST['service']));
    $address = htmlspecialchars(trim($_POST['address']));
    $budget = htmlspecialchars(trim($_POST['budget']));
    $date = htmlspecialchars(trim($_POST['date']));
    $comment = htmlspecialchars(trim($_POST['comment']));

    // Compose HTML content for the email
    $html = "<table>";
    $html .= "<tr><td>Name:</td><td>$name</td></tr>";
    $html .= "<tr><td>Email:</td><td>$email</td></tr>";
    $html .= "<tr><td>Phone Number:</td><td>$number</td></tr>";
    $html .= "<tr><td>Service:</td><td>$service</td></tr>";
    $html .= "<tr><td>Address:</td><td>$address</td></tr>";
    $html .= "<tr><td>Budget:</td><td>$budget</td></tr>";
    $html .= "<tr><td>Date:</td><td>$date</td></tr>";
    $html .= "<tr><td>Comment:</td><td>$comment</td></tr>";
    $html .= "</table>";

    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);

    // SMTP Settings
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->Port = 587; // Specify SMTP Port
    $mail->SMTPSecure = "tls"; // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username="your_email@gmail.com";  // Your Mail
    $mail->Password="Your App Password"; // Your app password

    $mail->setFrom($email, $name);
    $mail->addAddress("your_email@gmail.com", "your name");

    $mail->IsHTML(true); // Set email format to HTML

    $mail->Subject = "(TimberCraft) Quote Request";
    $mail->Body = $html;

    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));

    $msg = "";

    if ($mail->send()) {
        $msg = "Form submitted successfully!";
    } else {
        $msg = "Error Occur";
    }
    echo $msg;
}

?>