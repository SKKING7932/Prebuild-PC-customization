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
            <div class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity">
                <img src="assets/images/border-top.png" width="1536px" class="jarallax-img">

                <div class="bg-image">
                    <img src="./images/12giphy.gif" alt="" class="jarallax-img">
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
                                <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4" data-toggle="modal" data-target="#myModal">Start Customization</span>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/images/border-bottom.png" style="position:absolute;bottom: 0px;" width="1536px" class="jarallax-img">

            </div>
            <!-- END: Header Title -->





            <!-- START: Demos -->

            <!-- END: Demos -->

            <!-- START: Demos -->
            <div class="nk-box bg-dark-1">
                <div class="container">
                    <div class="nk-gap-6"></div>

                    <h2 class="text-center">Recomendations For You</h2>
                    <div class="nk-gap-3"></div>
                    <div class="row vertical-gap lg-gap">
                        <div class="col-md-6">
                            <div class="nk-image-box-1-a nk-no-effect">
                                <a href="Recomendation.php?Recomendation_For='Gaming'" target="_blank" class="nk-image-box-link"></a>
                                <img src="assets/Static/GamingDemo.jpg" alt="Gaming" class="DemoImg">
                                <div class="nk-image-box-overlay nk-image-box-center">
                                    <div>
                                        <h3 class="nk-image-box-title h4">Gaming</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="nk-image-box-1-a nk-no-effect" >
                                <a href="Recomendation.php?Recomendation_For='Editing'" target="_blank" class="nk-image-box-link"></a>
                                <img src="assets/Static/EditingDemo.png" alt="Editing" class="DemoImg">
                                <div class="nk-image-box-overlay nk-image-box-center">
                                    <div>
                                        <h3 class="nk-image-box-title h4">Editing</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nk-image-box-1-a nk-no-effect">
                                <a href="Recomendation.php?Recomendation_For='Education'" target="_blank" class="nk-image-box-link" name="Recomended-For"></a>
                                <img src="assets/Static/StudentDemo.jpg" alt="Education" class="DemoImg">
                                <div class="nk-image-box-overlay nk-image-box-center">
                                    <div>
                                        <h3 class="nk-image-box-title h4">Education</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nk-image-box-1-a nk-no-effect">
                                <a href="Recomendation.php?Recomendation_For='Office'" target="_blank" class="nk-image-box-link"></a>
                                <img src="assets/Static/OfficeDemo.jpg" alt="Office" class="DemoImg">
                                <div class="nk-image-box-overlay nk-image-box-center">
                                    <div>
                                        <h3 class="nk-image-box-title h4">Office</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nk-image-box-1-a nk-no-effect">
                                <a href="Recomendation.php?Recomendation_For='Business'"  target="_blank" class="nk-image-box-link"></a>
                                <img src="assets/Static/BusinessDemo.jpg" alt="Business" class="DemoImg">
                                <div class="nk-image-box-overlay nk-image-box-center">
                                    <div>
                                        <h3 class="nk-image-box-title h4">Business</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nk-image-box-1-a nk-no-effect">
                                <a href="Recomendation.php?Recomendation_For='Scientists and Engineers'" target="_blank" class="nk-image-box-link"></a>
                                <img src="assets/Static/ScientistDemo.jpg" alt="Scientists and Engineers" class="DemoImg"> 
                                <div class="nk-image-box-overlay nk-image-box-center">
                                    <div>
                                        <h3 class="nk-image-box-title h4">Scientists &AMP; Engineers</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nk-image-box-1-a nk-no-effect">
                                <a href="Recomendation.php?Recomendation_For='Developer'" target="_blank" class="nk-image-box-link"></a>
                                <img src="assets/Static/DeveloperDemo.jpg" alt="Developer" class="DemoImg">
                                <div class="nk-image-box-overlay nk-image-box-center">
                                    <div>
                                        <h3 class="nk-image-box-title h4">Developer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nk-image-box-1-a nk-no-effect">
                                <a href="Recomendation.php?Recomendation_For='Animation'" target="_blank" class="nk-image-box-link"></a>
                                <img src="assets/Static/AnimationDemo.jpg" alt="Animation" class="DemoImg">
                                <div class="nk-image-box-overlay nk-image-box-center">
                                    <div>
                                        <h3 class="nk-image-box-title h4">Animation</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-gap-6"></div>
                </div>
            </div>
            <!-- END: Demos -->


            <div class="nk-box bg-dark-1">
                <img src="assets/images/border-top.png" style="position:absolute;top: 0px;" width="1536px" class="jarallax-img">

                <?php include './Slider.php'; ?>
                <img src="assets/images/border-bottom.png" style="position:absolute;bottom: 0px;" width="1536px" class="jarallax-img">

            </div>
            <div class="nk-gap-6"></div>
            <!-- START: Subscribe -->
            <div class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity">
                <img src="assets/images/border-top.png" width="1536px" class="jarallax-img">

                <div class="bg-image">
                    <img src="./images/g3iphy.gif" alt="" class="jarallax-img"/>
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
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/images/border-bottom.png" style="position:absolute;bottom: 0px;" width="1536px" class="jarallax-img">

            </div>
            <!-- END: Subscribe --> 


            <script type="text/javascript">//step 1: get DOM
                let nextDom = document.getElementById('next');
                let prevDom = document.getElementById('prev');

                let carouselDom = document.querySelector('.carousel');
                let SliderDom = carouselDom.querySelector('.carousel .list');
                let thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
                let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item');
                let timeDom = document.querySelector('.carousel .time');

                thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
                let timeRunning = 3000;
                let timeAutoNext = 7000;

                nextDom.onclick = function () {
                    showSlider('next');
                }

                prevDom.onclick = function () {
                    showSlider('prev');
                }
                let runTimeOut;
                let runNextAuto = setTimeout(() => {
                    next.click();
                }, timeAutoNext)
                function showSlider(type) {
                    let  SliderItemsDom = SliderDom.querySelectorAll('.carousel .list .item');
                    let thumbnailItemsDom = document.querySelectorAll('.carousel .thumbnail .item');

                    if (type === 'next') {
                        SliderDom.appendChild(SliderItemsDom[0]);
                        thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
                        carouselDom.classList.add('next');
                    } else {
                        SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
                        thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
                        carouselDom.classList.add('prev');
                    }
                    clearTimeout(runTimeOut);
                    runTimeOut = setTimeout(() => {
                        carouselDom.classList.remove('next');
                        carouselDom.classList.remove('prev');
                    }, timeRunning);

                    clearTimeout(runNextAuto);
                    runNextAuto = setTimeout(() => {
                        next.click();
                    }, timeAutoNext)
                }</script>
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


        <script>
            function setProcessor(procat) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "customization.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {

                    }
                };
                xhr.send("processor_category=" + procat);
            }
        </script>


    </body>
</html>
