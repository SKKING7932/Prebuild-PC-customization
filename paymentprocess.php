<?php
include 'databaseconnection.php';

if (isset($_POST['PaymentID']) && isset($_POST['amount'])) {
    $PaymentID = $_POST['PaymentID'];
    $Amount = $_POST['amount'];

    $sql = "INSERT INTO Payment(PaymentID, PaymentDate, Amount, PaymentStatus)
                VALUES(?,NOW(),?,'Successful')";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sd', $PaymentID, $Amount);

    if ($stmt->execute()) {
        echo "Data inserted Successfully";
    } else {
        echo "Error:" . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>