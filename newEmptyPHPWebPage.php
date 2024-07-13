<?php
session_start();
include 'databaseconnection.php';
include 'common_function.php';
$_SESSION['Total_Price'] = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['processor_category'])) {
        $_SESSION['processor_category'] = $_POST['processor_category'];
     }
}
?>



<!DOCTYPE html>

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
        <style>
            .err {
                color: red;
            }

            .microphone-box {
                max-width: 0;
                overflow: hidden;
                transition: max-width 1.0s;
            }
            .microphone-expanded {
                max-width: 200px;
                transition: max-width 1.0s;
            }
            .search-box  {
                max-width: 0;
                overflow: hidden;
                transition: max-width 1.0s;
            }
            .search-box-expanded  {
                max-width: 200px;
                transition: max-width 1.0s;
            }

            .custom-card {
                background-color: black;
                color: white;
                margin: 10px;
            }
        </style>

    </head>


    <!--
        Additional Classes:
            .nk-page-boxed
    -->
    <body   id="MainForm" >
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
                    <img class="nk-img" type="image/png"src="assets/logo/logo.png" alt="DREAM PC" width="170">
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
        <div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('assets/images/page-background.jpg');"></div>
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







        <!--
            Additional Classes:
                .nk-header-opaque
        -->
        <?php include './Header.php'; ?>









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
        --> <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
            <div class="nano">
                <div class="nano-content">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="assets/images/logo.svg" alt="" width="90">
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

                <div class="nk-header-table">
                    <div class="nk-header-table-cell">
                        <div class="container">




                            <div class="nk-header-text">

                                <h1 class="nk-title display-3">Dream PC</h1>

                                <div class="nk-title display-5" >
                                    Customize and Build Your Dream PC
                                </div>



                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <!-- END: Header Title -->
            <?php
            include './Models/Cabinet.php';
            include './Models/CoolingFan.php';
            include './Models/GraphicsCard.php';
            include './Models/Motherboard.php';
            include './Models/Processor.php';
            include './Models/Psu.php';
            include './Models/Ram.php';
            include './Models/Storage.php';
            ?>

            <!-- START: Demos -->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <?php
                        if ($_SESSION['processor_category'] == "ryzen") {
                            echo '<div class="card custom-card">
                            <img src="images/1413018-am5-ryzen-1260x709-1.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">PROCESSOR</h5>
                                <p class="card-text">Select PROCESSOR</p>
                                <div class="nk-gap-3"></div>                                

                                <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#RYZEN">SELECT PROCESSOR</span>
                            </div>
                        </div>';
                        } else {
                            echo '<div class="card custom-card">
                            <img src="https://cdn.wccftech.com/wp-content/uploads/2023/02/Intel-13th-Gen-Desktop-CPU-Lineup-65W-35W-Options-CES-2023-gigapixel-very_compressed-scale-4_00x-scaled-1-1456x819.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">PROCESSOR</h5>
                                <p class="card-text">Select PROCESSOR</p>
                                <div class="nk-gap-3"></div>                                

                                <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#INTEl">SELECT PROCESSOR</span>
                            </div>
                        </div>';
                        }
                        ?>

                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card custom-card">
                            <img src="images/slejven-djurakovic-0uXzoEzYZ4I-unsplash.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Motherboard</h5>
                                <p class="card-text">Select Motherboard</p>
                                <div class="nk-gap-3"></div>
                                <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#Motherboard">Select Motherboard</span>

                            </div>
                        </div>
                    </div>
                    <!--                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                            <div class="card custom-card">
                                                <img src="images/1413018-am5-ryzen-1260x709-1.jpg" class="card-img-top" alt="Your Image">
                                                <div class="card-body">
                                                    <h5 class="card-title">CPU</h5>
                                                    <p class="card-text">Select CPU</p>
                                                    <div class="nk-gap-3"></div>                                                               
                                                    <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#myModal">Start Customization</span>
                                                </div>
                                            </div>
                                        </div>-->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card custom-card">
                            <img src="images/1413018-am5-ryzen-1260x709-1.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Storage</h5>
                                <p class="card-text">Select Storage</p>
                                <div class="nk-gap-3"></div> 
                                <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#Storage">Select Storage</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card custom-card">
                            <img src="assets/ProductImages/images.jpeg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Cooling Fan</h5>
                                <p class="card-text">Select Cooling Fan</p>
                                <div class="nk-gap-3"></div>                                                                
                                <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#CoolingFan">Select Cooling Fan</span>
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                            <div class="card custom-card">
                                                <img src="images/1413018-am5-ryzen-1260x709-1.jpg" class="card-img-top" alt="Your Image">
                                                <div class="card-body">
                                                    <h5 class="card-title">SSD</h5>
                                                    <p class="card-text">Select SSD</p>
                                                    <div class="nk-gap-3"></div>                                                                
                                                    <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#myModal">Start Customization</span>
                                                </div>
                                            </div>
                                        </div>-->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card custom-card">
                            <img src="assets/images/gfxjpeg.jpeg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Graphics Card</h5>
                                <p class="card-text">Select Graphics Card</p>
                                <div class="nk-gap-3"></div>                                                                
                                <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#GraphicsCard">Select Graphics Card</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card custom-card">
                            <img src="images/1413018-am5-ryzen-1260x709-1.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Cabinet</h5>
                                <p class="card-text">Select Cabinet</p>
                                <div class="nk-gap-3"></div>                                                               
                                <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#Cabinet">Select Cabinet</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card custom-card">
                            <img src="images/1413018-am5-ryzen-1260x709-1.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Power Supply Unit</h5>
                                <p class="card-text">Select Power Supply Unit</p>
                                <div class="nk-gap-3"></div>                                                                
                                <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#PSU">Select PSU</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card custom-card">
                            <img src="images/1413018-am5-ryzen-1260x709-1.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Random Access Memory</h5>
                                <p class="card-text">Select Random Access Memory</p>
                                <div class="nk-gap-3"></div>                                                               
                                <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#RAM" >Select RAM</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                       <div class="card custom-card">
                           <img src="images/1413018-am5-ryzen-1260x709-1.jpg" class="card-img-top" alt="Your Image">
                           <div class="card-body">
                               <h5 class="card-title">Card Title</h5>
                               <p class="card-text">Card content goes here.</p>
                               <div class="nk-gap-3"></div>                                                                
                               <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#myModal">Start Customization</span>
                           </div>
                       </div>
                   </div>
                   <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                       <div class="card custom-card">
                           <img src="images/1413018-am5-ryzen-1260x709-1.jpg" class="card-img-top" alt="Your Image">
                           <div class="card-body">
                               <h5 class="card-title">Card Title</h5>
                               <p class="card-text">Card content goes here.</p>
                               <div class="nk-gap-3"></div>                                                                
                               <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#myModal">Start Customization</span>
                           </div>
                       </div>
                   </div>
                   <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                       <div class="card custom-card">
                           <img src="images/1413018-am5-ryzen-1260x709-1.jpg" class="card-img-top" alt="Your Image">
                           <div class="card-body">
                               <h5 class="card-title">Card Title</h5>
                               <p class="card-text">Card content goes here.</p>
                               <div class="nk-gap-3"></div>                                                                
                               <span class="nk-btn nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#myModal">Start Customization</span>
                           </div>
                       </div>
                   </div>-->
                </div>
            </div>
            <?php include './Models/selectedDetailsModel.php'
                    . '';
            ?>
            <div class="container">
                <div class="nk-gap-4"></div>
                <div class="row vertical-gap align-items-center">
                    <div class="col-md-12">
                        <div class="nk-pricing-button">
                            <a href="#" class="nk-btn nk-btn-block nk-btn-lg link-effect-4 " data-toggle="modal" data-target="#selectedDetailsModel">View Selected Details & Proceed To Purchase</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="nk-gap-3"></div>
            <div class="nk-gap-3"></div>
            <div class="nk-gap-3"></div>
            <div class="nk-gap-2"></div>
            <div class="nk-gap-2"></div>
            <div class="nk-gap-2"></div>

            <!-- END: Demos -->

            <!-- START: Demos -->

            <!-- END: Demos -->

            <!-- START: Subscribe -->

            <!-- END: Subscribe -->




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
        START: Share Buttons
            .nk-share-buttons-left
        -->
        <!--
        START: Side Buttons
            .nk-side-buttons-visible
        -->
        <div class="nk-side-buttons nk-side-buttons-visible">
            <ul>

                <li class="nk-scroll-top">
                    <span class="nk-btn nk-btn-lg nk-btn-icon">
                        <span class="icon ion-ios-arrow-up"></span>
                    </span>
                </li>
            </ul>
        </div>
        <!-- END: Side Buttons -->



        <!--
    START: Search

    Additional Classes:
        .nk-search-light
        -->
<?php include './Search.php'; ?>

        <!-- END: Search -->




        <!--
    START: Shopping Cart

    Additional Classes:
        .nk-cart-light
        -->


        <!-- END: Shopping Cart -->




        <!--
    START: Sign Form

    Additional Classes:
        .nk-sign-form-light
        -->


        <!-- END: Sign Form -->




        <!-- START: Scripts -->
<?php include './Scripts.php'; ?>
        <!-- END: Scripts -->





    </body>
</html>
