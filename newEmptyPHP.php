<?php

include './databaseconnection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/phpmailer/phpmailer/src/Exception.php';
require './phpmailer/phpmailer/phpmailer/src/PHPMailer.php';
require './phpmailer/phpmailer/phpmailer/src/SMTP.php';

function send_mail($email) {
    global $conn; // Assuming $conn is established elsewhere

    $sql = "SELECT ProductID,ProductName, ProductDescription, Product_Front_image, Profession_Type
          FROM pre_built_pcs
          WHERE DATE(Created_At) = CURDATE()";

    if (!$conn) {
        echo "Error connecting to database.";
        return; // Exit the function if connection fails
    }

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $newProducts = mysqli_fetch_all($result, MYSQLI_ASSOC); // Get all results as associative array

        foreach ($newProducts as $product) {
            $productID = $product['ProductID'];
            $productName = $product['ProductName'];
            $productDescription = $product['ProductDescription'];
            $productImage = $product['Product_Front_image']; // Assuming image is stored as a path or ID
            $ProfessionType = $product['Profession_Type'];

            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = SMTP::DEBUG_OFF; // Set to DEBUG_SERVER for detailed logs
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'projectdreampc06@gmail.com';
                $mail->Password = 'opotktoxazxkpiji'; // Replace with your actual password (not recommended in code)
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;

                $mail->setFrom('projectdreampc06@gmail.com', 'Dream PC');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = "New Product Alert: $productName";
                $mail->Body = "
          <h1>Hi there,</h1>

          <p>We're excited to announce a new product addition!</p>

          <b>Product Name:</b> $productName<br>

          <b>Description:</b> $productDescription<br>

          <b>Profession Type:</b> $ProfessionType<br>

          <b>Image:</b> You can include the image URL here (replace with your actual logic)
          [Image of $productName](your_image_url_function($productImage))<br>

          <p>We hope you'll find this new product useful. Check it out on our website!</p><br>

          <p><a href='http://localhost/DreamPcCustomer/singlePrebuilt.php?product_id=$productID' target='_blank'>View Product</a></p><br>

          <p>Thanks,</p><br>

          The [Dream PC] Team
        ";
                $mail->AltBody = 'The [Dream PC] Team';

                if ($mail->send()) {
                    echo "Email sent successfully for $productName.";
                } else {
                    echo "Error sending email for $productName: " . $mail->ErrorInfo;
                }
            } catch (Exception $e) {
                echo "Error sending email: " . $e->getMessage();
            }
        }

        mysqli_free_result($result); // Free the result set memory
    } else {
        echo "Error retrieving data: " . mysqli_error($conn);
    }
}

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