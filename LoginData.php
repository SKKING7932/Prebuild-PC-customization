<?php

include './databaseconnection.php';

// Start a session if not already started
if (!isset($_SESSION)) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EmailId = $_POST["email"];
    $Password = $_POST["password"];

    $select_query = "SELECT * FROM usermaster WHERE Email = '$EmailId'";

    $result = mysqli_query($conn, $select_query);
    $row_count = mysqli_num_rows($result);

    if ($row_count > 0) {
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['Password'] == $Password) {
            $userRole = $user_data['Role'];

            // Redirect user based on their role
            if ($userRole == 'Customer') {
                $_SESSION['UserEmail'] = $user_data['Email'];
                $_SESSION['UserPassword'] = $user_data['Password'];
                $_SESSION['userId'] = $user_data['UserID'];
                $_SESSION['username'] = $user_data['Username'];
//                echo "<script>alert('login successfully.')</script>";

                $_SESSION["i"] = 0;
                if( $_SESSION["i"] == 0 )
                {
                    $_SESSION['Total_Price'] = 0;
                }
                // Create the INSERT query with NOW() for login_time
                $sql = "INSERT INTO online_user (UserID, login_time, logout_datetime) VALUES (?, NOW(), ?)";
                $logout_datetime = null;
                $UserID = $_SESSION['userId'];
// Prepare and execute the statement
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("is", $UserID, $logout_datetime); // Assuming logout_datetime is null initially

                if ($stmt->execute()) {
                    echo "Record inserted successfully.";
                } else {
                    echo "Error: " . $stmt->error;
                }
                echo "<script>window.location.href='index.php'</script>";
                exit;
            } elseif ($userRole == 'Seller') {
                $_SESSION['userId'] = $user_data['UserID'];
                $_SESSION['username'] = $user_data['Username'];
                echo "<script>alert('login successfully.')</script>";
                echo "<script>window.location.href='../DreamPcseller/index.php'</script>";
                exit;
            }
        } else {
            echo "<script>alert('Password is incorrect. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Username is incorrect. Please try again.');</script>";
    }
}
?>


<?php
//
//session_start();
//include 'databaseconnection.php';
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $password = $_POST["password"];
//    $email = $_POST["email"];
//
//    $select_query = "SELECT * FROM usermaster WHERE Email = '$email'";
//
//    $result = mysqli_query($conn, $select_query);
//    $row_count = mysqli_num_rows($result);
//
//    if ($row_count > 0) {
//        $user_data = mysqli_fetch_assoc($result);
//
//        if ($user_data['Password'] == $password) {
//            $userRole = $user_data['Role'];
//
//            // Redirect user based on their role
//            if ($userRole == 'Customer') {
//                $_SESSION['UserEmail'] = $user_data['Email'];
//                $_SESSION['UserPassword'] = $user_data['Password'];
//
//                $_SESSION['userId'] = $user_data['UserID'];
//                $_SESSION['username'] = $user_data['Username'];
//                echo "<script>window.location.href='index.php'</script>";
//
//                // Create the INSERT query with NOW() for login_time
//                $sql = "INSERT INTO online_user (UserID, login_time, logout_datetime) VALUES (?, NOW(), ?)";
//                $logout_datetime = null;
//                $UserID = $_SESSION['userId'];
//// Prepare and execute the statement
//                $stmt = $conn->prepare($sql);
//                $stmt->bind_param("is", $UserID, $logout_datetime); // Assuming logout_datetime is null initially
//            } elseif ($userRole == 'Seller') {
//
//                echo "<script>window.location.href='../DreamPcseller/index.php'</script>";
//                exit;
//            }
//        } else {
//            echo "<script>alert('Password is incorrect. Please try again.');</script>";
//        }
//    } else {
//        echo "<script>alert('Username is incorrect. Please try again.');</script>";
//    }
//} else {
//    echo "<script>alert('Invalid request method.');</script>";
//}
//?>
