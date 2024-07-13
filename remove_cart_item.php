<?php
session_start(); // Start the session

include './databaseconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['productId'])) {
        $productId = $_POST['productId'];

        // Remove cart item from the database
        $deleteQuery = "DELETE FROM cart WHERE ProductID = '$productId' AND UserID = '$_SESSION[userId]'";
        $result = mysqli_query($conn, $deleteQuery);

        if ($result) {
            // Successfully removed the item
            echo json_encode(['success' => true]);
        } else {
            // Handle error if the deletion fails
            echo json_encode(['success' => false, 'message' => 'Failed to remove item']);
        }
    }
}
?>
