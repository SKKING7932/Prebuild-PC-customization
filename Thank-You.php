
<?php
error_reporting(0);
session_start();
include 'databaseconnection.php';
include 'common_function.php';
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
            .DemoImg{
                filter: brightness(60%);
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
            <!-- Preloader animation
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
        <div class="nk-page-background op-5" data-video="" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('assets/Background-Video/Godlike Fire Background.mp4');"></div>
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
        --> 

        <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
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
            <div class="nk-header-title nk-header-title-full nk-header-title-parallax nk-header-title-parallax-opacity">
                <img src="assets/images/border-top.png" width="1536px" class="jarallax-img">

                <div class="bg-image op-8">
                    <img src="./images/g3iphy.gif" alt="" class="jarallax-img">
                </div>
                <div class="nk-header-table">
                    <div class="nk-header-table-cell">
                        <div class="container">




                            <div class="nk-header-text">

                                <div class="nk-gap-4"></div>
                                <div class="container">
                                    <div class="text-center">
                                        
                <span class="d-block d-sm-none"></span>            
                <h2 class="nk-title display-4 nk-typed ready" data-loop="true" data-shuffle="false" data-cursor="false" data-type-speed="90" data-start-delay="0" data-back-speed="60" data-back-delay="1000"><span>Thank You for Your Purchase!</span></h2>
                                        <div class="nk-gap-2"></div>

                                        <div class="row">
                                            <div class="col-md-8 offset-md-2">
                                                <p class="lead">Your Order Was Completed. Now You Are Our One Of The Precious Customer.</p>

                                                <div class="nk-gap-2"></div>
                                                <a target="_blank" href="index.php" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">Go to Homepage</a>
                                                <a href="store-account.php" target="_blank"  class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">View Order Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-4"></div>

                            </div>


                        </div>
                    </div>
                </div>
                <img src="assets/images/border-bottom.png" style="position:absolute;bottom: 0px;" width="1536px" class="jarallax-img">

            </div>
            <!-- END: Header Title -->
                    <div class="nk-gap-6"></div>
                    <div class="nk-gap-6"></div>







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

