<?php
use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\Exception;
                    use PHPMailer\PHPMailer\SMTP;

require './assets/PHPMailer/src/Exception.php';
                    require './assets/PHPMailer/src/PHPMailer.php';
                    require './assets/PHPMailer/src/SMTP.php';

// Function to generate OTP
function generateOTP() {
    return mt_rand(100000, 999999);
}

// Function to send OTP via email
function sendOTP($email, $otp) {
$mail = new PHPMailer(true);

                        try {
                            // Server settings
                            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                            $mail->isSMTP();                                            // Send using SMTP
                            $mail->Host = 'smtp.gmail.com';                      // Set the SMTP server to send through
                            $mail->SMTPAuth = true;                                  // Enable SMTP authentication
                            $mail->Username = 'projectdreampc06@gmail.com';        // SMTP username
                            $mail->Password = 'bnnfcpzxuxfbssdk';                  // SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           // Enable implicit TLS encryption
                            $mail->Port = 465;                                  // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                            // Recipients
                            $mail->setFrom('projectdreampc06@gmail.com', 'Dream PC');
                            $mail->addAddress($email);                                 // Recipient's email address
                            // Content
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
                            return true;
                        } catch (Exception $e) {
                            return false;
                        }
                    }

if (isset($_POST['action'])) {
    if ($_POST['action'] === 'getOTP') {
        $Emailid = $_POST['EmailId'];
        $otp = generateOTP();
        if (sendOTP($Emailid, $otp)) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('error' => 'OTP could not be sent. Please try again later.'));
        }
        exit;
    } elseif ($_POST['action'] === 'login') {
        // Implement login validation logic here using $_POST data
        // ...
        // Return appropriate JSON response (success or error)
        // Example:
        // echo json_encode(array('success' => true));
        // or
        // echo json_encode(array('error' => 'Invalid credentials'));
        exit;
    }
}
?>
