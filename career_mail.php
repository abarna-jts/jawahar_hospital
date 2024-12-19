<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $specialization = $_POST["specialization"];
    $date_of_birthday = $_POST["date_of_birthday"];
    $resume = $_POST["resume"];
    $message = $_POST["message"];
   
   
    $to = "abarnadevi.jorimts@gmail.com"; 
    $subject = "Career Form from $name";
    $body = "First Name: $fname\n <br>";
    $body = "Last Name: $lname\n <br>";
    $body.= "Email: $email\n<br>";
    $body.= "Contact: $number\n<br>";
    $body.= "Specialization: $specialization\n<br>";
    $body.= "Date of Birth: $date_of_birthday\n<br>";
    $body.= "Uploaded Resume: $resume\n<br>";
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