<?php
session_start();
include 'databaseconnection.php';
include 'common_function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["otp"])) {
        $userEnteredOTP = $_POST["otp"];

        if (isset($_SESSION["generated_otp"])) {
            $generatedOTP = $_SESSION["generated_otp"];

            if ($userEnteredOTP == $generatedOTP) {
                // OTP is verified successfully
                unset($_SESSION["generated_otp"]); // Clear the OTP from the session

                // Retrieve user data from POST
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $phoneNumber = $_POST["phoneNumber"];
                $role = "Customer"; // Assuming default role is "Customer"

                // Check if email already exists in the database
                $emailExistsQuery = "SELECT * FROM usermaster WHERE Email = '$email'";
                $result = $conn->query($emailExistsQuery);

                if ($result->num_rows > 0) {
                    echo "<script>alert('Email already exists. Please login.');</script>";
                } else {
 
                     $insertQuery = "INSERT INTO usermaster (Username, Password, Email, Address, PhoneNumber, Role) 
                                    VALUES ('$username', '$password', '$email', '$address', '$phoneNumber', '$role')";

                    if ($conn->query($insertQuery) === true) {
                        echo "<script>alert('Registration successful.'); window.location.href = 'index.php';</script>";
                    } else {
                        echo "<script>alert('Error: " . $insertQuery . "<br>" . $conn->error . "');</script>";
                    }
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
