<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];
   
   
    $to = "abarnadevi.jorimts@gmail.com"; 
    $subject = "Contact Form from $name";
    $body = "Name: $name\n <br>";
    $body.= "Email: $email\n<br>";
    $body.= "Contact: $number\n<br>";
    $body.= "Message: $message\n<br>";
    

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test.jorim@gmail.com';
        $mail->Password = 'lzgqvrublhfdjmfx'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('test.jorim@gmail.com', 'Jawahar Hospital'); 
        $mail->addAddress($to);
        $mail->addAddress('abarnadevi.jorimts@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();
        
        // Redirect to thank-you.php after successful email send
        header('Location: thank-you.php');
        exit; // Always use exit after a redirect to stop further execution
    } catch (Exception $e) {
        echo 'Error sending email: ' . $e->getMessage();
    }
}
?>