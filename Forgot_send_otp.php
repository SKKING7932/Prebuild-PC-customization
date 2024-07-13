<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/phpmailer/phpmailer/src/Exception.php';
require './phpmailer/phpmailer/phpmailer/src/PHPMailer.php';
require './phpmailer/phpmailer/phpmailer/src/SMTP.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"])) {
        $email = $_POST["email"];

        $otp = rand(100000, 999999);

        $_SESSION["Fgenerated_otp"] = $otp;

        $mail = new PHPMailer(true);

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host = 'smtp.gmail.com';                      // Set the SMTP server to send through
        $mail->SMTPAuth = true;                                  // Enable SMTP authentication
        $mail->Username = 'projectdreampc06@gmail.com';        // SMTP username
        $mail->Password = 'opotktoxazxkpiji';                  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           // Enable implicit TLS encryption
        $mail->Port = 465;                                  // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
// Recipients
        $mail->setFrom('projectdreampc06@gmail.com', 'Dream PC');
        $mail->addAddress($email);                                 // Recipient's email address
        $mail->isHTML(true);                                      // Set email format to HTML
        $mail->Subject = 'Dream PC Login OTP Authenticaton';                         // Set the subject of the email
        $mail->Body = '<div style="text-align: center;">
                        <img src="https://cdn2.f-cdn.com/contestentries/105005/9116874/5418c4a76d506_thumb900.jpg" alt="Dream PC" style="width: 150px; height: auto;">
                        <h2>Hello,</h2>
                        <p>Thank you for choosing our service! Please use the following One-Time Password (OTP) to complete your account verification:</p>
                        <h3 style="font-weight: bold;  font-size: 28px;">' . $otp . '</h3>
                        <p>If you did not request this OTP, please ignore this email.</p>
                        <p>Best regards,<br><b style=" color:#fd7e14    ;font-family:monospace; font-size: 38px;">DREAM PC</b></p>
                     </div>';      // Set the OTP in the email body
        $mail->AltBody = 'Your OTP is: ' . $otp;                  // Set the OTP for non-HTML mail clients

        $mail->send();

     } else {
        echo "Invalid request.";
    }
} else {
    echo "Invalid request method.";
}

