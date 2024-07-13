<?php
session_start();
include 'databaseconnection.php';
include 'common_function.php';
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
<!--        <link rel="icon" type="image/png" href="assets/images/favicon.png">-->
<link rel="icon" type="image/png" href="assets/logo/icons8-motherboard-96.png">

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
                    <img class="nk-img" type="image/png"src="assets/logo/logo.png" alt="DREAM PC" width="170">
                    <div class="nk-preloader-animation " ></div>
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
        <?php include'./Header.php' ?>











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
            <div class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity">
                <div class="bg-image op-6">
                    <img src="assets/Products/images/12giphy.gif" alt="" class="jarallax-img">
                </div>
                <div class="nk-header-table">
                    <div class="nk-header-table-cell">
                        <div class="container">




                            <div class="nk-header-text">

                                <h1 class="nk-title display-3">Dream PC</h1>

                                <div class="nk-title display-5" >
                                    Customize and Build Your Dream PC
                                </div>

                                <div class="nk-gap-3"></div>
                                <a href="https://themeforest.net/item/godlike-the-game-template/17166433?ref=_nK" target="_self" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                                    <span>Start Customization</span>
                                </a>


                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <!-- END: Header Title -->





            <!-- START: Demos -->
            <div class="container" id="demos">
                <div class="nk-gap-6"></div>
                <div class="row vertical-gap lg-gap">
                    <div class="col-md-6">
                        <div class="nk-image-box-1-a nk-no-effect">
                            <a href="index-main.php" class="nk-image-box-link"></a>
                            <img src="assets/Products/images/1giphy.gif" alt="Main Demo">
                            <div class="nk-image-box-overlay nk-image-box-center">
                                <div>
                                    <h3 class="nk-image-box-title h4">Main Demo</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nk-image-box-1-a nk-no-effect">
                            <a href="index-game-promo.php" class="nk-image-box-link"></a>
                            <img src="assets/Products/images/g4iphy.gif" alt="Game Promo Demo">
                            <div class="nk-image-box-overlay nk-image-box-center">
                                <div>
                                    <h3 class="nk-image-box-title h4">Game Promo Demo</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-gap-6"></div>
            </div>
            <!-- END: Demos -->

           
    <!-- START: Demos -->
    <div class="nk-box bg-dark-1">
        <div class="container">
            <div class="nk-gap-6"></div>

            <h2 class="text-center">Additional Pages</h2>
            <div class="nk-gap-3"></div>
            <div class="row vertical-gap lg-gap">
                <div class="col-md-6">
                    <div class="nk-image-box-1-a nk-no-effect">
                        <a href="index-main.html" class="nk-image-box-link"></a>
                        <img src="assets/Products/images/pc-gaming-computer-pc-cases-technology-wallpaper-preview.jpg" alt="Main Demo">
                        <div class="nk-image-box-overlay nk-image-box-center">
                            <div>
                                <h3 class="nk-image-box-title h4">Shop</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-image-box-1-a nk-no-effect">
                        <a href="index-game-promo.html" class="nk-image-box-link"></a>
                                <img src="assets/Products/images/1413018-am5-ryzen-1260x709-1.jpg" alt="Game Promo Demo">
                        <div class="nk-image-box-overlay nk-image-box-center">
                            <div>
                                <h3 class="nk-image-box-title h4">Product</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-image-box-1-a nk-no-effect">
                        <a href="index-game-promo.html" class="nk-image-box-link"></a>
                                <img src="assets/Products/ProductImages/ramXPG1.jpg" alt="Game Promo Demo">
                        <div class="nk-image-box-overlay nk-image-box-center">
                            <div>
                                <h3 class="nk-image-box-title h4">Social Network</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-image-box-1-a nk-no-effect">
                        <a href="index-game-promo.html" class="nk-image-box-link"></a>
                                <img src="assets/Products/ProductImages/keyZEBRONICS1.jpg" alt="Game Promo Demo">
                        <div class="nk-image-box-overlay nk-image-box-center">
                            <div>
                                <h3 class="nk-image-box-title h4">Blog Post</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-image-box-1-a nk-no-effect">
                        <a href="index-game-promo.html" class="nk-image-box-link"></a>
                                <img src="assets/Products/ProductImages/mouDragonwar2.jpg" alt="Game Promo Demo">
                        <div class="nk-image-box-overlay nk-image-box-center">
                            <div>
                                <h3 class="nk-image-box-title h4">Blog Grid</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-image-box-1-a nk-no-effect">
                        <a href="index-game-promo.html" class="nk-image-box-link"></a>
                                <img src="assets/Products/images/daniel-hatcher-zPHftoPajis-unsplash.jpg" alt="Game Promo Demo">
                        <div class="nk-image-box-overlay nk-image-box-center">
                            <div>
                                <h3 class="nk-image-box-title h4">Blog List</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-image-box-1-a nk-no-effect">
                        <a href="index-game-promo.html" class="nk-image-box-link"></a>
                                <img src="assets/Products/images/mag_a550bn_01-300x300.png" alt="Game Promo Demo">
                        <div class="nk-image-box-overlay nk-image-box-center">
                            <div>
                                <h3 class="nk-image-box-title h4">Coming Soon</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-image-box-1-a nk-no-effect">
                        <a href="index-game-promo.html" class="nk-image-box-link"></a>
                                <img src="assets/Products/images/giphy.gif" alt="Game Promo Demo">
                        <div class="nk-image-box-overlay nk-image-box-center">
                            <div>
                                <h3 class="nk-image-box-title h4">Age Check</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-6"></div>
        </div>
    </div>
    <!-- END: Demos -->






            <!-- START: Footer -->
            <!--
                Additional Classes:
                    .nk-footer-parallax
                    .nk-footer-parallax-opacity
            --><?php include './Footer.php'; ?>
            <!-- END: Footer -->
 </div>
        <!--
        START: Side Buttons
            .nk-side-buttons-visible
        -->
        <div class="nk-side-buttons nk-side-buttons-visible">
            <ul>
                <li>
                    <a href="https://nkdev.info" target="_self" class="nk-btn nk-btn-lg link-effect-4">Keep in Touch</a>
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
