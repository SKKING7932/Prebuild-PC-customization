<?php
session_start();
include 'databaseconnection.php';
if (isset($_POST['productID']) && isset($_SESSION['userId'])) {
    $productID = $_POST['productID'];
    $userID = $_SESSION['userId'];
    
    // Check if the product is already in the cart
    $checkQuery = "SELECT * FROM cart WHERE UserID = $userID AND ProductID = $productID";
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if (mysqli_num_rows($checkResult) > 0) {
        echo 'already_in_cart';
    } else {
        $insertQuery = "INSERT INTO cart (UserID, ProductID, Quantity) VALUES ($userID, $productID, 1)";
        if (mysqli_query($conn, $insertQuery)) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
} else {
    echo 'invalid_request';
}

?>
