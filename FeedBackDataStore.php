
<?php
error_reporting(0);
include './databaseconnection.php';
$UserID = $_POST['UserID'];
$ProductID = $_POST['ProductID'];
$Feedback_Content = $_POST['Feedback_Content'];
$Ratings = $_POST['Ratings'];
$Product_Type = $_POST['Product_Type'];

$insertQuery = "INSERT INTO feedback (UserID,ProductID,Feedback_Content,FeedBack_Date,FeedBack_Time,Ratings,Product_Type) VALUES ('$UserID','$ProductID','$Feedback_Content',CURRENT_DATE(),CURRENT_TIME(),'$Ratings','$Product_Type')";

if ($conn->query($insertQuery) === true) {
    echo "<script>alert('Feedback submitted successfully!');</script>";
} else {
    echo "<script>alert('Error: " . $insertQuery . "<br>" . $conn->error . "');</script>";
}
?> 