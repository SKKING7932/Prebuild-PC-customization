<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['processor_category'])) {
        $oldProcessorCategory = $_SESSION['processor_category'] ?? null;

        if ($_SESSION['processor_category'] !== $_POST['processor_category']) {
            $_SESSION['Total_Price'] = 0;
            $_SESSION['i'] = 0;
            unset($_SESSION['processor_category']);
        }

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

        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700%7cMarcellus+SC" rel="stylesheet">
        <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
        <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>
        <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/vendor/revolution/css/settings.css">
        <link rel="stylesheet" href="assets/vendor/revolution/css/layers.css">
        <link rel="stylesheet" href="assets/vendor/revolution/css/navigation.css">
        <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">
        <link rel="stylesheet" href="assets/vendor/photoswipe/dist/photoswipe.css">
        <link rel="stylesheet" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">
        <link rel="stylesheet" href="assets/vendor/jquery-datetimepicker/build/jquery.datetimepicker.min.css">
        <link rel="stylesheet" href="assets/vendor/summernote/dist/summernote-bs4.css">
        <link rel="stylesheet" href="assets/css/godlike.css">
        <link rel="stylesheet" href="assets/css/custom.css">
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
        <script>
  if (sessionStorage.getItem('isFirstVisit') === null) {
    sessionStorage.setItem('isFirstVisit', 'true');
  } else {
    const answer = confirm("Your session exists. Reset or keep it?");
    if (answer) {
      fetch('/reset-session.php')
        .then(response => response.text())
        .then(data => {
          console.log(data);
        })
        .catch(error => {
          console.error(error);
        });
    }
  }
</script>

    </head>

    <body   id="MainForm" >

        <div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('assets/images/page-background.jpg');"></div>


        <div class="nk-page-border">
            <div class="nk-page-border-t"></div>
            <div class="nk-page-border-r"></div>
            <div class="nk-page-border-b"></div>
            <div class="nk-page-border-l"></div>
        </div>
        <?php include './Header.php'; ?>
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
        <div class="nk-main">

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
                            echo '<div style="width:250px;height:534.917px;align-items: center;" class="card custom-card">
                            <img src="assets/Static/RyzenProcessor.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">PROCESSOR</h5>
                                <p class="card-text">Select PROCESSOR</p>
                                <div class="nk-gap-3"></div>                                

                                <span class="nk-btn mt-100 nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#RYZEN">SELECT PROCESSOR</span>
                            </div>
                        </div>';
                        } else {
                            echo '<div style="width:250px;height:534.917px;align-items: center;" class="card custom-card">
                            <img src="assets/Static/IntelProcessor.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">PROCESSOR</h5>
                                <p class="card-text">Select PROCESSOR</p>
                                <div class="nk-gap-3"></div>                                

                                <span class="nk-btn mt-10 nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#INTEl">SELECT PROCESSOR</span>
                            </div>
                        </div>';
                        }
                        ?>

                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div style="width:250px;height:534.917px;align-items: center;" class="card custom-card">
                            <img src="assets/Static/Motherboard.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Motherboard</h5>
                                <p class="card-text">Select Motherboard</p>
                                <div class="nk-gap-3"></div>
                                <span class="nk-btn mt-7 nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#Motherboard">Select Motherboard</span>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div style="width:250px;height:534.917px;align-items: center;" class="card custom-card">
                            <img src="assets/Static/Storage.webp" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Storage</h5>
                                <p class="card-text">Select Storage</p>
                                <div class="nk-gap-3"></div> 
                                <span class="nk-btn mt-7 nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#Storage">Select Storage</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div style="width:250px;height:534.917px;align-items: center;" class="card custom-card">
                            <img src="assets/Static/Coolingfan.jpeg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Cooling Fan</h5>
                                <p class="card-text">Select Cooling Fan</p>
                                <div class="nk-gap-3"></div>                                                                
                                <span class="nk-btn mt-7 nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#CoolingFan">Select Cooling Fan</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div style="width:250px;height:534.917px;align-items: center;" class="card custom-card">
                            <img src="assets/Static/Graficscard.jpeg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Graphics Card</h5>
                                <p class="card-text">Select Graphics Card</p>
                                <div class="nk-gap-3"></div>                                                                
                                <span class="nk-btn mt-7 nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#GraphicsCard">Select Graphics Card</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div style="width:250px;height:534.917px; align-items: center;" class="card custom-card">
                            <img src="assets/Static/Cabinet.avif" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Cabinet</h5>
                                <p class="card-text">Select Cabinet</p>
                                <div class="nk-gap-3"></div>                                                               
                                <span class="nk-btn mt-7 nk-btn-sm  nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#Cabinet">Select Cabinet</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div style="width:250px;height:534.917px;align-items: center;" class="card custom-card">
                            <img src="assets/Static/PSU.jpeg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Power Supply Unit</h5>
                                <p class="card-text">Select Power Supply Unit</p>
                                <div class="nk-gap-3"></div>                                                                
                                <span class="nk-btn mt-7 nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#PSU">Select PSU</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div style="width:250px;height:534.917px;align-items: center;" class="card custom-card">
                            <img src="assets/Static/RAM.jpg" class="card-img-top" alt="Your Image">
                            <div class="card-body">
                                <h5 class="card-title">Random Access Memory</h5>
                                <p class="card-text">Select Random Access Memory</p>
                                <div class="nk-gap-3"></div>                                                               
                                <span  class="nk-btn mt-7 nk-btn-sm nk-btn-color-main-1 link-effect-4 " data-toggle="modal" data-target="#RAM" >Select RAM</span>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <?php
            include './Models/selectedDetailsModel.php';
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

            <?php include './Footer.php'; ?>
        </div>

        <div class="nk-side-buttons nk-side-buttons-visible">
            <ul>

                <li class="nk-scroll-top">
                    <span class="nk-btn nk-btn-lg nk-btn-icon">
                        <span class="icon ion-ios-arrow-up"></span>
                    </span>
                </li>
            </ul>
        </div>
        <?php include './Search.php'; ?>
        <?php include './Scripts.php'; ?>
    </body>
</html>
