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


        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <style>
            /* Change slider point (handle) color to black */
            .ui-slider-handle {
                background: black;
                border: 2px solid white; /* Add a white border to the handle for better visibility */
            }

            /* Change slider range color to white */
            .ui-slider-range {
                background: black;
            }
            .Product-image{
                  display: none;
            }
        </style>
    </head>


    <!--
        Additional Classes:
            .nk-page-boxed
    -->
    <body>

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

        <div class="nk-page-background op-5" data-video="" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('assets/images/background_gif.gif');"></div>
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
                <div class="nano-content ">
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






            <div class="container">
                <div class="row">
                    <!-- START: Filter Section (Left Side) -->
                    <div class="col-md-3">
                        <div class="sidebar ">
                            <h3 id="cat">Categories
                                <a data-toggle="collapse" href="#categoryDropdown" aria-expanded="false">
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </h3>

                            <div class="list-group">
                                <?php
                                // Loop through categories and display checkboxes
                                global $conn;
                                $select_query = "SELECT * FROM `category`";
                                $result_query = mysqli_query($conn, $select_query);
                                while ($row = mysqli_fetch_assoc($result_query)) {
                                    $category_id = $row['CategoryID'];
                                    $category_name = $row['CategoryName'];
                                    echo '<label class="list-group-item bg-black checkbox">
                        <input type="checkbox" class="common_selector category" value="' . $category_name . '"> ' . $category_name . '
                    </label>';
                                }
                                ?>
                            </div>

                            <div class="mb-4">
                                <h3 >Filter by Price</h3>
                                <div id="slider-range" class=""></div> 
                                <input type="hidden" id="hidden_minimum_price"  value="" />
                                <input type="hidden" id="hidden_maximum_price" value="" />
                                <p id="price_show">100 - 300000</p>
                            </div>


                            <h3 id="br">Brands
                                <a data-toggle="collapse" href="#categoryDropdown" aria-expanded="false">
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </h3>


                            <div class="list-groups">
                                <?php
                                // Loop through bra-nd display checkboxes
                                global $conn;
                                $select_query = "SELECT * FROM `brand`";
                                $result_query = mysqli_query($conn, $select_query);
                                while ($row = mysqli_fetch_assoc($result_query)) {
                                    $brand_id = $row['BrandID'];
                                    $brand_name = $row['BrandName'];
                                    echo '<label class="list-group-item bg-black checkbox">
                        <input type="checkbox" class="common_selector brand" value="' . $brand_name . '"> ' . $brand_name . '
                    </label>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class=" nk-store">

                            <!-- START: Products List -->
                            <div class="row no-gutters filter_data" id="auto-suggest-results">
                                <?php //getproducts(); ?>
                            </div>
                            <!-- END: Products List -->

                        </div>

                        <div class="nk-gap-5"></div>

                        <!-- START: Pagination -->
                        <div class="nk-pagination nk-pagination-center">
                            <nav>
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a class="nk-pagination-current-white" href="#">3</a>
                                <a href="#">4</a>
                                <span>...</span>
                            </nav>
                        </div>
                        <!-- END: Pagination -->
                    </div>
                </div>
                    <div class="nk-gap-4"></div>
                    <div class="nk-gap-3"></div>
 
                </div>
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
                <?php include './Footer.php'; ?>

                <!-- END: Sign Form -->



                <script>
                    $(document).ready(function () {

                        filter_data();
                        $('#search-form').on('submit', function (e) {
                            e.preventDefault();
                            filter_data();
                        });

                        function filter_data()
                        {
                            $('.filter_data').html('<div id="loading" style="" ></div>');
                            var action = 'fetch_data';
                            var minimum_price = $('#hidden_minimum_price').val();
                            var maximum_price = $('#hidden_maximum_price').val();
                            var brand = get_filter('brand');
                            var category = get_filter('category');
                            var search = $('#searchInput').val();

                            $.ajax({
                                url: "fetch_data.php",
                                method: "POST",
                                data: {action: action,
                                    minimum_price: minimum_price,
                                    maximum_price: maximum_price,
                                    brand: brand,
                                    category: category,
                                    search: search},
                                success: function (data) {
                                    $('.filter_data').html(data);
                                }
                            });
                        }

                        function get_filter(class_name)
                        {
                            var filter = [];
                            $('.' + class_name + ':checked').each(function () {
                                filter.push($(this).val());
                            });
                            return filter;
                        }

                        $('.common_selector').click(function () {
                            filter_data();
                        });

                        $('#slider-range').slider({
                            range: true,
                            min: 100,
                            max: 300000,
                            values: [100, 300000],
                            step: 100,
                            stop: function (event, ui)
                            {
                                $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                                $('#hidden_minimum_price').val(ui.values[0]);
                                $('#hidden_maximum_price').val(ui.values[1]);
                                filter_data();
                            }
                        });

                    });
                </script>
                
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
                    $(document).on('click', '.pagination a', function (e) {
                        e.preventDefault();
                        page = $(this).data('page'); // Get the page number from the clicked link
                        filter_data(page); // Load products for the selected page
                    });

                    // Initial load of products (page 1)
                    filter_data(page);

                </script>
                <script>
                    $(document).ready(function () {
                        $("#cat").click(function () {
                            // Toggle the visibility of the clicked category
                            $(".list-group").toggle();
                        });

                        $("#br").click(function () {
                            // Toggle the visibility of the double-clicked category
                            $(".list-groups").toggle();
                        });
                    });
                </script>



                </body>
                </html>
