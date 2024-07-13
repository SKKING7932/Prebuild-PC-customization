
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


    
        



<?php include './Header.php';?>

    
    
    
    
        

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
                    <a href="index.php" class="nk-nav-logo">
                        <img src="assets/logo/logo31.png" alt="" width="150">
                    </a>
                </div>
                
                <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                    <ul class="nk-nav">
                        <li class="active ">
            <a href="page-contact.php">
                Contact</a>
        </li><li class=" ">
            <a href="page-coming-soon.php">
                Coming Soon</a>
        </li><li class=" ">
            <a href="page-404.php">
                404</a>
        </li><li class=" ">
            <a href="page-age-check.php">
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
            <a href="index.php" class="nk-nav-logo">
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
    <div class="bg-image">
        <img src="assets/images/image-1.jpg" alt="" class="jarallax-img">
    </div>
    <div class="nk-header-table">
        <div class="nk-header-table-cell">
            <div class="container">
                
                
                    <h1 class="nk-title">Contact Us</h1>
                
                
                
                
            </div>
        </div>
    </div>
    
</div>
<!-- END: Header Title -->


        

        

    <!-- START: Contact Form -->
    <div class="nk-gap-4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="nk-box-3 bg-dark-1">
                    <h2 class="nk-title h3 text-center">Drop Us a Line</h2>
                    <div class="nk-gap-2"></div>
                    <form action="assets/php/ajax-contact-form.php" class="nk-form nk-form-ajax nk-form-style-1">
                        <input type="email" class="form-control required" name="email" placeholder="Email *">
                        <div class="nk-gap-1"></div>
                        <input type="text" class="form-control required" name="name" placeholder="Name *">
                        <div class="nk-gap-1"></div>
                        <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button class="nk-btn nk-btn-lg link-effect-4">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-4"></div>
    <!-- END: Contact Form -->

    <!-- START: Google Map -->
    <div id="google-map-contact" class="nk-gmaps nk-gmaps-lg"></div>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
<!--    <script>
        function initializeGmaps() {
            var LatLng = {lat: 47.496474, lng: 19.0484679};
            var mapCanvas = document.getElementById('google-map-contact');
            var mapOptions = {
                center      : LatLng,
                scrollwheel : false,
                zoom        : 14,
                mapTypeId   : google.maps.MapTypeId.ROADMAP,
                backgroundColor: 'none',
                mapTypeId   : 'GodlikeStyle'
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);
            var marker = new google.maps.Marker({
                position: LatLng,
                map: map,
                icon: 'assets/images/marker.png',
                title: 'GodLike Office'
            });

            // style from https://snazzymaps.com/style/151/ultra-light-with-labels
            var styledMapType = new google.maps.StyledMapType([{featureType:"all",elementType:"labels",stylers:[{visibility:"on"}]},{featureType:"all",elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#000000"},{lightness:40}]},{featureType:"all",elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#000000"},{lightness:16}]},{featureType:"all",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:1},{weight:1.2}]},{featureType:"administrative.country",elementType:"labels.text.fill",stylers:[{color:"#e08821"}]},{featureType:"administrative.locality",elementType:"labels.text.fill",stylers:[{color:"#c4c4c4"}]},{featureType:"administrative.neighborhood",elementType:"labels.text.fill",stylers:[{color:"#e08821"}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#000000"},{lightness:10}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#000000"},{lightness:13},{visibility:"on"}]},{featureType:"poi.business",elementType:"geometry",stylers:[{visibility:"on"}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#e08821"},{lightness:"0"}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{visibility:"off"}]},{featureType:"road.highway",elementType:"labels.text.fill",stylers:[{color:"#ffffff"}]},{featureType:"road.highway",elementType:"labels.text.stroke",stylers:[{color:"#e08821"}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#000000"},{lightness:12}]},{featureType:"road.arterial",elementType:"geometry.fill",stylers:[{color:"#575757"}]},{featureType:"road.arterial",elementType:"labels.text.fill",stylers:[{color:"#ffffff"}]},{featureType:"road.arterial",elementType:"labels.text.stroke",stylers:[{color:"#2c2c2c"}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#000000"},{lightness:16}]},{featureType:"road.local",elementType:"labels.text.fill",stylers:[{color:"#999999"}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#000000"},{lightness:10}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#000000"}]}], { name: 'GodlikeStyle' });
            map.mapTypes.set('GodlikeStyle', styledMapType);
        }
        if(typeof google !== 'undefined') {
            google.maps.event.addDomListener(window, 'load', initializeGmaps);
        }
    </script>-->
    <!-- END: Google Map -->


        
            <!-- START: Footer -->
<!--
    Additional Classes:
        .nk-footer-parallax
        .nk-footer-parallax-opacity
-->
<?php include './Footer.php';?>
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


    
        <?php include './Search.php';?>

    

    
        <?php include './ShopingCart.php';?>

    

    
        <?php include './SignInForm.php';?>

    

    
<?php include './Scripts.php';?>


    
</body>
</html>
