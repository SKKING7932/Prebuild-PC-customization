<?php
session_start();
error_reporting(0);
include './databaseconnection.php';
include './common_function.php';
?>
<!DOCTYPE html-->


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="_nK">
        <title>DREAM PC |  PC Customization</title>
        <link rel="icon" type="image/png" href="assets/logo/icons8-motherboard-96.png">


        <!-- START: Styles -->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700%7cMarcellus+SC" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

        <!-- FontAwesome -->
        <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
        <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

        <!-- IonIcons -->
        <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">

        <!-- Revolution Slider -->
        <link rel="stylesheet" href="assets/vendor/revolution/css/settings.css">
        <link rel="stylesheet" href="assets/vendor/revolution/css/layers.css">
        <link rel="stylesheet" href="assets/vendor/revolution/css/navigation.css">

        <!-- Flickity -->
        <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">

        <!-- Photoswipe -->
        <link rel="stylesheet" href="assets/vendor/photoswipe/dist/photoswipe.css">
        <link rel="stylesheet" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">

        <!-- DateTimePicker -->
        <link rel="stylesheet" href="assets/vendor/jquery-datetimepicker/build/jquery.datetimepicker.min.css">

        <!-- Summernote -->
        <link rel="stylesheet" href="assets/vendor/summernote/dist/summernote-bs4.css">

        <!-- GODLIKE -->
        <link rel="stylesheet" href="assets/css/godlike.css">

        <!-- Custom Styles -->
        <link rel="stylesheet" href="assets/css/custom.css">

        <!-- END: Styles -->

        <!-- jQuery -->
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>


    </head>


    <!--
        Additional Classes:
            .nk-page-boxed
    -->
    <body>
        <!-- START: Page Preloader -->
        <div class="nk-preloader">
            <!--
                 Preloader animation
                 data-close-... data used for closing preloader
                 data-open-...  data used for opening preloader
            -->
            <div class="nk-preloader-bg"
                 style="background-color: #000;"
                 data-close-frames="23"
                 data-close-speed="1.2"
                 data-close-sprites="./assets/images/preloader-bg.png"
                 data-open-frames="23"
                 data-open-speed="1.2"
                 data-open-sprites="./assets/images/preloader-bg-bw.png">
            </div>

            <div class="nk-preloader-content">
                <div>
                    <img class="nk-img" src="assets/logo/logo31.png" alt="GodLike - Gaming Bootstrap 4 Template" width="170">
                    <div class="nk-preloader-animation"></div>
                </div>
            </div>

            <div class="nk-preloader-skip">Skip</div>
        </div>
        <!-- END: Page Preloader -->


        <!--
    START: Page Video Background

    Additional Attributes:
        data-video - Youtube/Vimeo/self-hosted video urls.
            self-hosted video example:
            data-video="mp4:./video/local-video.mp4,webm:./video/local-video.webm,ogv:./video/local-video.ogv"
        data-video-loop - loop video (true/false)
        data-video-mute - mute video music (true/false)
        data-video-volume - volume of video music (0-100)
        data-video-start-time - video start time in seconds
        data-video-end-time - video end time in seconds
        data-video-pause-on-page-leave - pause video when the page not in focus (true/false)
        -->
 <div class="nk-page-background op-5" data-video="" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('assets/images/background_gif.gif');"></div>
        <!-- END: Page Background -->

        <!--
            START: Page Audio Background
        
            Additional Attributes:
                data-audio - URL to audio file
                data-audio-volume - audio volume (0-100)
                data-audio-autoplay - autoplay audio (true/false)
                data-audio-loop - loop audio (true/false)
                data-audio-pause-on-page-leave - pause video when the page not in focus (true/false)
        -->
        
        <!-- END: Page Background -->



        <!-- START: Page Border -->
        <div class="nk-page-border">
            <div class="nk-page-border-t"></div>
            <div class="nk-page-border-r"></div>
            <div class="nk-page-border-b"></div>
            <div class="nk-page-border-l"></div>
        </div>
        <!-- END: Page Border -->







        <?php include './Header.php'; ?>







        <!--
            START: Right Navbar
        
            Additional Classes:
                .nk-navbar-right-side
                .nk-navbar-left-side
                .nk-navbar-lg
                .nk-navbar-align-center
                .nk-navbar-align-right
                .nk-navbar-overlay-content
                .nk-navbar-light
                .nk-navbar-no-link-effect
        -->


        <!-- END: Right Navbar -->



        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
        .nk-navbar-light
        .nk-navbar-no-link-effect
        -->
        <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
            <div class="nano">
                <div class="nano-content">
                    <a target="_self" href="index.php" class="nk-nav-logo">
                        <img src="assets/logo/logo31.png" alt="" width="90">
                    </a>
                    <div class="nk-navbar-mobile-content">
                        <ul class="nk-nav">
                            <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Navbar Mobile -->



        <div class="nk-main">


            <!-- START: Header Title -->
            <!--
                Additional Classes:
                    .nk-header-title-sm
                    .nk-header-title-md
                    .nk-header-title-lg
                    .nk-header-title-xl
                    .nk-header-title-full
                    .nk-header-title-parallax
                    .nk-header-title-parallax-opacity
                    .nk-header-title-boxed
            -->
            <div class="nk-header-title nk-header-title-sm nk-header-title-parallax nk-header-title-parallax-opacity">
                <div class="bg-image op-5">
                    <img src="assets/images/image-5.jpg" alt="" class="jarallax-img">
                </div>
                <div class="nk-header-table">
                    <div class="nk-header-table-cell">
                        <div class="container">





                        </div>
                    </div>
                </div>

            </div>
            <!-- END: Header Title -->


            <?php
            $Emailid = $_SESSION["UserEmail"];

            $select_query = "SELECT * FROM usermaster WHERE Email = '$Emailid'";

            $result = mysqli_query($conn, $select_query);
            $row_count = mysqli_num_rows($result);
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data) {
                $customer_name = $user_data['Username'];
                $customer_email = $user_data['Email'];
                $customer_phonenumber = $user_data['PhoneNumber'];
                $customer_address = $user_data['Address'];
            } else {
                echo "<script>alert('Error');</script>";
            }
            ?>


            <div class="container">
                <div class="nk-social-profile nk-social-profile-container-offset">
                    <div class="row">
                        <div class="col-md-5 col-lg-3">
                            <div class="nk-social-profile-avatar">
                                <a target="_self" href="#">
                                    <img src="assets/images/avatar-1.jpg" alt="nK">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-9">
                            <div class="nk-social-profile-info">
                                <div class="nk-gap-2"></div>
                                <!--                <div class="nk-social-profile-info-last-seen">last seen 2 hours ago</div>-->
                                <h1 class=""><?php echo $customer_name; ?></h1>
                                <div class=""><?php echo $customer_email; ?></div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row vertical-gap">
                    <div class="col-lg-3">
                        <!--
                            START: Sidebar
            
                            Additional Classes:
                                .nk-sidebar-left
                                .nk-sidebar-right
                                .nk-sidebar-sticky
                        -->
                        <a target="_self"side class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">
                            <div class="nk-gap-2"></div>


                            <div class="nk-social-menu d-none d-lg-block">
                                <ul>
                                    <li class="">
                                        <a target="_self" href="Profile.php">
                                            Profile</a>
                                    </li>
                                    <li class="active">
                                        <a target="_self" href="Profile-updatebasicdetails.php">
                                            Update Basic Details</a>
                                    </li>

                                    <li class="">
                                        <a target="_self" href="Profile-updatepassword.php">
                                            Update Password</a>
                                    </li>
                                    <li class="">
                                        <a target="_self" href="Profile-forgotpassword.php">
                                            Forgot Password</a>
                                    </li>
                                    <li class="">
                                        <a target="_self" href="store-account.php">
                                            Orders Details</a>
                                    </li>
                                    <li class="">
                                        <a target="_self" href="logout.php">
                                            Log Out</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="nk-accordion d-lg-none" id="nk-social-menu-mobile" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="nk-social-menu-mobile-1-heading">
                                        <a target="_self" data-toggle="collapse" data-parent="#nk-social-menu-mobile" href="#nk-social-menu-mobile-1" aria-expanded="true" aria-controls="nk-social-menu-mobile-1" class="collapsed">
                                            Menu
                                        </a>
                                    </div>
                                    <div id="nk-social-menu-mobile-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="nk-social-menu-mobile-1-heading">
                                        <div class="nk-social-menu">
                                            <ul>
                                                <li class="">
                                                    <a target="_self" href="Profile.php">
                                                        Profile</a>
                                                </li>
                                                <li class="active">
                                                    <a target="_self" href="Profile-updatebasicdetails.php">
                                                        Update Basic Details</a>
                                                </li>

                                                <li class="">
                                                    <a target="_self" href="Profile-updatepassword.php">
                                                        Update Password</a>
                                                </li>
                                                <li class="">
                                                    <a target="_self" href="Profile-forgotpassword.php">
                                                        Forgot Password</a>
                                                </li>
                                                <li class="">
                                                    <a target="_self" href="store-account.php">
                                                        Orders Details</a>
                                                </li>


                                                <li class="">
                                                    <a target="_self" href="logout.php">
                                                        Log Out</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-gap-4 d-none d-lg-block"></div>
                        </aside>
                        <!-- END: Sidebar -->
                    </div

                    <div class="col-lg-9">

                        <div class="nk-social-container">

                            <form action="#" method="post">
                                <table>
                                    <tbody>

                                        <tr>
                                    <h1 class="h1">Change Your Deatils</h1>
                                    </tr>
                                    <tr>
                                    <div class="nk-gap-2"></div>    
                                    <td><strong>Change Name:</strong> &nbsp;&nbsp;&nbsp;</td>
                                    <td>
                                        <input type="text" class="form-control" name="username" placeholder="<?php echo $customer_name; ?>" />
                                    </td>
                                    </tr>
                                    <tr></tr>
<!--                                        <tr>
                                       <td><strong>Change Email:</strong> &nbsp;&nbsp;&nbsp;</td>
                                       <td></td>
                                    </tr>-->


                                    <tr>
                                        <td><strong>Change Number:</strong> &nbsp;&nbsp;&nbsp;</td>
                                        <td> 
                                            <input type="text" class="form-control" name="phoneNumber" placeholder="<?php echo $customer_phonenumber; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Change Address:</strong> &nbsp;&nbsp;&nbsp;</td>
                                        <td>
                                            <input type="text" class="form-control" name="address" placeholder="<?php echo $customer_address; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Change Email:</strong> &nbsp;&nbsp;&nbsp;</td>
                                        <td>
                                            <input type="email" class="form-control" name="email" placeholder="<?php echo $customer_email; ?>" />
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                                <div class="nk-gap-2"></div>
                                <button class="nk-btn link-effect-4 float-right" name="UBDbutton">Update Details</button>
                            </form>
                        </div>
                        <div class="nk-gap-4"></div>
                    </div>

                    <?php
                    $Emailid = $_SESSION["UserEmail"];
                    $Password = $_SESSION['username'];

                    $username = $_POST['username'];
                    $address = $_POST['address'];
                    $phoneNumber = $_POST['phoneNumber'];
                    $email = $_POST['email'];

                    $select_query = "SELECT * FROM usermaster WHERE Email = '$Emailid'";

                    $result = mysqli_query($conn, $select_query);
                    $row_data = mysqli_fetch_assoc($result);
                    $row_count = mysqli_num_rows($result);

                    if (isset($_POST['UBDbutton'])) {

                        $updateNameQuery = "UPDATE usermaster SET Username    = '$username'    WHERE Email = '$Emailid'";
                        $updateAddressQuery = "UPDATE usermaster SET Address     = '$address'     WHERE Email = '$Emailid'";
                        $updateMobileQuery = "UPDATE usermaster SET PhoneNumber = '$phoneNumber' WHERE Email = '$Emailid'";
                        $updateEmailQuery = "UPDATE usermaster SET Email       = '$email'       WHERE Email = '$Emailid'";

                        if (!empty($username)) {
                            if ($conn->query($updateNameQuery)) {
                                echo "<script>alert('Name Updated Successfully.')</script>";
                            } else {
                                echo "Error Updating Name: " . $conn->error;
                            }
                        }
                        if (!empty($address)) {
                            if ($conn->query($updateAddressQuery)) {
                                echo "<script>alert('Address Updated Successfully.')</script>";
                            } else {
                                echo "Error Updating Address: " . $conn->error;
                            }
                        }
                        if (!empty($phoneNumber)) {
                            if ($conn->query($updateMobileQuery)) {
                                echo "<script>alert('Mobile Number Updated Successfully.')</script>";
                            } else {
                                echo "Error Updating Mobile Number: " . $conn->error;
                            }
                        }
                        if (!empty($email)) {
                            if ($conn->query($updateEmailQuery)) {
                                $_SESSION["UserEmail"] = $email;

                                echo "<script>alert('Email Updated Successfully.')</script>";
                            } else {
                                echo "Error Updating Email ID: " . $conn->error;
                            }
                        }
                    }
                    ?>

                </div>
                <div class="nk-gap-4"></div>
                <div class="nk-gap-3"></div>
            </div>


            <!-- START: Footer -->
            <!--
                Additional Classes:
                    .nk-footer-parallax
                    .nk-footer-parallax-opacity
            -->
            <?php include './Footer.php'; ?>
            <!-- END: Footer -->


        </div>






        <!--
        START: Side Buttons
            .nk-side-buttons-visible
        -->
        <div class="nk-side-buttons nk-side-buttons-visible">
            <ul>
                <li>
                    <a target="_self" href="https://nkdev.info" target="_self" class="nk-btn nk-btn-lg link-effect-4">Keep in Touch</a>
                </li>
                <li>
                    <span class="nk-btn nk-btn-lg nk-btn-icon nk-bg-audio-toggle">
                        <span class="icon">
                            <span class="ion-android-volume-up nk-bg-audio-pause-icon"></span>
                            <span class="ion-android-volume-off nk-bg-audio-play-icon"></span>
                        </span>
                    </span>
                </li>
                <li class="nk-scroll-top">
                    <span class="nk-btn nk-btn-lg nk-btn-icon">
                        <span class="icon ion-ios-arrow-up"></span>
                    </span>
                </li>
            </ul>
        </div>
        <!-- END: Side Buttons -->



        <?php include './Search.php'; ?>




        <?php include './ShopingCart.php'; ?>




        <?php include './SignInForm.php'; ?>




        <?php include './Scripts.php'; ?>



    </body>
</html>
