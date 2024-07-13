<?php
session_start(); // Start the session

// Include database connection
include './databaseconnection.php';

if (isset($_POST['productId']) && isset($_POST['quantity'])) {
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];

    // Update the cart item quantity in the database
    $update_query = "UPDATE cart SET Quantity = '$quantity' WHERE ProductID = '$productId' AND UserID = '$_SESSION[userId]'";
    mysqli_query($conn, $update_query);
}
?>
