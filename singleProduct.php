<?php
session_start();

include './databaseconnection.php';
include './common_function.php';
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
        <link rel="icon" type="image/png" href="assets/images/favicon.png">

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
        <header class="nk-header nk-header-opaque">



            <!--
                START: Top Contacts
            
                Additional Classes:
                    .nk-contacts-top-light
            -->
            <!-- END: Top Contacts -->



            <!--
                START: Navbar
        
                Additional Classes:
                    .nk-navbar-sticky
                    .nk-navbar-transparent
                    .nk-navbar-autohide
                    .nk-navbar-light
                    .nk-navbar-no-link-effect
            -->
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

            <nav class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content" id="nk-side">

                <div class="nk-navbar-bg">
                    <div class="bg-image">
                        <img src="assets/images/bg-nav-side.jpg" alt="" class="jarallax-img">
                    </div>
                </div>


                <div class="nano">
                    <div class="nano-content">
                        <div class="nk-nav-table">

                            <div class="nk-nav-row">
                                <a href="index.html" class="nk-nav-logo">
                                    <img src="assets/images/logo.svg" alt="" width="150">
                                </a>
                            </div>

                            <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                                <ul class="nk-nav">
                                    <li class=" ">
                                        <a href="page-contact.html">
                                            Contact</a>
                                    </li><li class=" ">
                                        <a href="page-coming-soon.html">
                                            Coming Soon</a>
                                    </li><li class=" ">
                                        <a href="page-404.html">
                                            404</a>
                                    </li><li class=" ">
                                        <a href="page-age-check.html">
                                            Age Check</a>
                                    </li><li class=" nk-drop-item">
                                        <a href="#">
                                            Sub Menu Example</a><ul class="dropdown">
                                            <li class=" ">
                                                <a href="#1">
                                                    Sub Item 1</a>
                                            </li><li class=" nk-drop-item">
                                                <a href="#2">
                                                    Sub Item 2</a><ul class="dropdown">
                                                    <li class=" ">
                                                        <a href="#1">
                                                            Sub Item 1</a>
                                                    </li><li class=" ">
                                                        <a href="#2">
                                                            Sub Item 2</a>
                                                    </li>
                                                </ul>
                                            </li><li class=" nk-drop-item">
                                                <a href="#3">
                                                    Sub Item 3</a><ul class="dropdown">
                                                    <li class=" ">
                                                        <a href="#">
                                                            Sub Item</a>
                                                    </li>
                                                </ul>
                                            </li><li class=" nk-drop-item">
                                                <a href="#4">
                                                    Sub Item 4</a><ul class="dropdown">
                                                    <li class=" ">
                                                        <a href="#">
                                                            Sub Item</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="nk-nav-row">
                                <div class="nk-nav-footer">
                                    &copy; 2018 nK Group Inc. Developed in association with LoremInc. IpsumCompany, SitAmmetGroup, CumSit and related logos are registered trademarks. All Rights Reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
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






                <div class="container">
                    <?php
                    $userId = $_SESSION['userId'];

                    if (isset($_GET['product_id'])) {

                        Single($_GET['product_id']);
                    } else {
                        echo'<h1>Not Found</h1>';
                    }
                    ?> 
                    <!-- END: Tabs -->
                </div>
                <!-- START: Related Products -->

                <!-- END: Related Products -->
                <div class="nk-gap-4"></div>
                <div class="nk-gap-3"></div>
            </div>



            <!-- START: Footer -->
            <!--
                Additional Classes:
                    .nk-footer-parallax
                    .nk-footer-parallax-opacity
            -->
            <footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
                <img class="nk-footer-top-corner" src="assets/images/footer-corner.png" alt="">

                <?php include './Footer.php'; ?>



            </footer>
            <!-- END: Footer -->


        </div>



        <!--
        START: Share Buttons
            .nk-share-buttons-left
        -->
        <div class="nk-share-buttons nk-share-buttons-left d-none d-md-flex">

            <!--
            <li>
                <span class="nk-share-icon" title="Share page on Pinterest" data-share="pinterest">
                    <span class="icon fa fa-pinterest"></span>
                </span>
                <span class="nk-share-name">Pinterest</span>
            </li>
            <li>
                <span class="nk-share-icon" title="Share page on LinkedIn" data-share="linkedin">
                    <span class="icon fa fa-linkedin"></span>
                </span>
                <span class="nk-share-name">LinkedIn</span>
            </li>
            <li>
                <span class="nk-share-icon" title="Share page on VK" data-share="vk">
                    <span class="icon fa fa-vk"></span>
                </span>
                <span class="nk-share-name">Vkontakte</span>
            </li>
            -->
            </ul>
        </div>


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
        <!-- END: Sign Form -->




        <!-- START: Scripts -->

        <!-- Object Fit Polyfill -->
        <script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

        <!-- GSAP -->
        <script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
        <script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

        <!-- Popper -->
        <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Sticky Kit -->
        <script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

        <!-- Jarallax -->
        <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
        <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

        <!-- imagesLoaded -->
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

        <!-- Flickity -->
        <script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

        <!-- Isotope -->
        <script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>

        <!-- Photoswipe -->
        <script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
        <script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

        <!-- Typed.js -->
        <script src="assets/vendor/typed.js/lib/typed.min.js"></script>

        <!-- Jquery Validation -->
        <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

        <!-- Jquery Countdown + Moment -->
        <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
        <script src="assets/vendor/moment/min/moment.min.js"></script>
        <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

        <!-- Hammer.js -->
        <script src="assets/vendor/hammerjs/hammer.min.js"></script>

        <!-- NanoSroller -->
        <script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

        <!-- SoundManager2 -->
        <script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

        <!-- DateTimePicker -->
        <script src="assets/vendor/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js"></script>

        <!-- Revolution Slider -->
        <script src="assets/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="assets/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="assets/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="assets/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

        <!-- Keymaster -->
        <script src="assets/vendor/keymaster/keymaster.js"></script>

        <!-- Summernote -->
        <script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

        <!-- GODLIKE -->

        <script src="assets/js/godlike-init.js"></script>
        <!-- END: Scripts -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
     

        <script>
            function addToCart(ProductID, UserID) {

                $.ajax({
                    url: 'add_to_cart.php',
                    method: 'POST',
                    data: {
                        productID: ProductID,
                        UserID: UserID
                    },
                    success: function (response) {
                        if (response === 'success') {
                            alert('Product added to cart!');
                        } else if (response === 'already_in_cart') {
                            alert('Product is already in your cart.');
                        } else {


                            $('.nk-sign-toggle no-link-effect').load('SignInForm.php');

                        }

                    }
                });
            }

        </script>

</body>
</html>
