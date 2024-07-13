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
    $subject = "Exciting news for gamers!"; // Replace with your subject
    $message = "Your chosen profession has new product arrivals! Check it out!"; // Replace with your message
    foreach ($gamingEmails as $email) {
        send_email($email, $subject, $message);
    }
    echo "Emails sent successfully to users with profession 'Gaming'.";
} else {
    echo "No users found with profession 'Gaming'.";
}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dreampc";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/phpmailer/phpmailer/src/Exception.php';
require './phpmailer/phpmailer/phpmailer/src/PHPMailer.php';
require './phpmailer/phpmailer/phpmailer/src/SMTP.php';

session_start();

$sql = "SELECT ProductName,ProductDescription,Product_Front_image,Profession_Type
            FROM pre_built_pcs
            WHERE DATE(Created_At) = CURDATE()";
$stmt = $conn->prepare($sql);
$stmt->execute();
$newProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
$mail->isHTML(true);

foreach ($newProducts as $product) {
    $productName = $product['ProductName'];
    $productDescription = $product['ProductDescription'];
    $productImage = $product['Product_Front_image']; // Assuming image is stored as a path or ID
    $ProfessionType = $product['Profession_Type'];
    $subject = "New Product Alert: $productName";

    $message = "
    Hi there,

    We're excited to announce a new product addition!

    **Product Name:** $productName

    **Description:** $productDescription
    
    **Profession Type:** $ProfessionType
        
     **Image:** You can include the image URL here (replace with your actual logic)
     [Image of $productName](your_image_url_function($productImage))

    We hope you'll find this new product useful. Check it out on our website!

    [Link to your website](your_website_url)

    Thanks,

    The [Dream PC] Team
    ";
}

$mail->SMTPDebug = SMTP::DEBUG_OFF; // Set the OTP for non-HTML mail clients
if ($mail->send()) {
    
} else {
    echo "Error Sending Mail";
}
    
        
         