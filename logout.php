<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dreampc";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update logout_datetime for a specific user
$UserIDToUpdate = $_SESSION['userId']; // Example UserID

// Create the UPDATE query to set logout_datetime to the current date and time
$sqlUpdate = "UPDATE online_user SET logout_datetime = NOW() WHERE UserID = ? AND logout_datetime IS NULL";

// Prepare and execute the statement
$stmt = $conn->prepare($sqlUpdate);
$stmt->bind_param("i", $UserIDToUpdate);

if ($stmt->execute()) {
    $affectedRows = $stmt->affected_rows;
    if ($affectedRows > 0) {
        echo "Logout time updated for $affectedRows user(s).";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "No user found to update.";
    }
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and the connection
$stmt->close();
$conn->close();
session_unset();
session_destroy();
?>