<?php

include './databaseconnection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/phpmailer/phpmailer/src/Exception.php';
require './phpmailer/phpmailer/phpmailer/src/PHPMailer.php';
require './phpmailer/phpmailer/phpmailer/src/SMTP.php';

function send_mail($email) {
    global $conn; // Assuming $conn is established elsewhere F
    $sql = "SELECT ProductName,ProductDescription,Product_Front_image,Profession_Type
        FROM pre_built_pcs
        WHERE DATE(Created_At) = CURDATE()";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $newProducts = mysqli_fetch_all($result, MYSQLI_ASSOC); // Get all results as associative array

        foreach ($newProducts as $product) {
            $productName = $product['ProductName'];
            $productDescription = $product['ProductDescription'];
            $productImage = $product['Product_Front_image']; // Assuming image is stored as a path or ID
            $ProfessionType = $product['Profession_Type'];

            $mail = new PHPMailer(true);

            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'smtp.gmail.com';                      // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                  // Enable SMTP authentication
            $mail->Username = 'projectdreampc06@gmail.com';        // SMTP username
            $mail->Password = 'opotktoxazxkpiji';                  // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           // Enable implicit TLS encryption
            $mail->Port = 465;                                  // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->setFrom('projectdreampc06@gmail.com', 'Dream PC');
            $mail->addAddress("bca2021std@gmail.com");                                 // Recipient's email address
            $mail->isHTML(true);
            $mail->Subject = "New Product Alert: $productName";
            $mail->Body = "  
                    
  <h1>Hi there,</h1>

  <p>We're excited to announce a new product addition!</p>

  <b>Product Name:</b> $productName

  <b>Description:</b> $productDescription

  <b>Profession Type:</b> $ProfessionType

  <b>Image:</b> You can include the image URL here (replace with your actual logic)
  [Image of $productName](your_image_url_function($productImage))

  <p>We hope you'll find this new product useful. Check it out on our website!</p>

  <p>[Link to your website](your_website_url)</p>

  <p>Thanks,</p>
";
            $mail->AltBody = 'The [Dream PC] Team';

            $mail->SMTPDebug = SMTP::DEBUG_OFF; // Set the OTP for non-HTML mail clients

            if ($mail->send()) {
                echo "Email sent successfully for $productName.";
            } else {
                echo "Error sending email for $productName: " . $mail->ErrorInfo;
            }
        }
    } else {
        echo "Error retrieving data: " . mysqli_error($conn);
    }
}
?>
<?php


    $data = [];
    try {
        $jsonData = file_get_contents('members.json');
        $data = json_decode($jsonData, true);
    } catch (Exception $e) {
        echo "Error reading members.json: " . $e->getMessage();
    }
    $gamingEmails = [];
    if (!empty($data)) {
        foreach ($data as $entry) {
            if ($entry['ProfessionType'] === "Gaming") {
                $gamingEmails[] = $entry['CustomerEmailID'];
            }
        }
    }

// Send email to each email in the list (replace with your ESP integration)
    if (!empty($gamingEmails)) {
        foreach ($gamingEmails as $email) {
            send_mail($email);
        }
        echo "Emails sent successfully to users with profession 'Gaming'.";
    } else {
        echo "No users found with profession 'Gaming'.";
    }
?>