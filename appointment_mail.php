<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $post_code = $_POST["post_code"];
   
   
    $to = "abarnadevi.jorimts@gmail.com"; 
    $subject = "Appointment Form from $name";
    $body = "Name: $name\n <br>";
    $body.= "Email: $email\n<br>";
    $body.= "Contact: $phone\n<br>";
    $body.= "Appointment Date: $date\n<br>";
    $body.= "Appointment Time: $date\n<br>";
    $body.= "Address: $address\n<br>";
    $body.= "State: $state\n<br>";
    $body.= "PinCode: $post_code\n<br>";

    

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