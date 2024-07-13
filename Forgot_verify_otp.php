<?php

session_start();
include 'databaseconnection.php';
include 'common_function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["otp"])) {
        $userEnteredOTP = $_POST["otp"];

        if (isset($_SESSION["Fgenerated_otp"])) {
            $generatedOTP = $_SESSION["Fgenerated_otp"];

            if ($userEnteredOTP == $generatedOTP) {
                unset($_SESSION["Fgenerated_otp"]); // Clear the OTP from the session

                $password = $_POST["password"];
                $email = $_POST["email"];

                $updateQuery = "UPDATE usermaster SET Password = '$password' WHERE Email = '$email'";
                if ($conn->query($updateQuery) === true) {
                    echo "<script>alert('Password Updated successful.'); window.location.href = 'Profile.php';</script>";
                } else {
                    echo "<script>alert('Error: " . $updateQuery . "<br>" . $conn->error . "');</script>";
                }
            } else {
                echo "<script>alert('Invalid OTP. Please try again.');</script>";
            }
        } else {
            echo "<script>alert('OTP expired or not generated.');</script>";
        }
    } else {
        echo "<script>alert('Invalid request.');</script>";
    }
} else {
    echo "<script>alert('Invalid request method.');</script>";
}
?>
