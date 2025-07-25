<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// চেক করো ফাইল গুলো পাওয়া যাচ্ছে কি না
// var_dump(file_exists("PHPMailer/src/Exception.php")); // true হলে ঠিক আছে

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@gmail.com'; // নিজের Gmail
        $mail->Password = 'your_app_password';    // App password (2FA required)
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($email, $fullname);
        $mail->addAddress('your_email@gmail.com'); // যেখানে মেইল যাবে

        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Message';
        $mail->Body    = "Name: $fullname<br>Email: $email<br>Message: $message";

        $mail->send();
        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
