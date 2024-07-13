
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

            <!--         Preloader animation
                     data-close-... data used for closing preloader
                     data-open-...  data used for opening preloader-->

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
                            <a href="index.php" class="nk-nav-logo">
                                <img src="assets/logo/logo31.png" alt="" width="150">
                            </a>
                        </div>

                        <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                            <ul class="nk-nav">
                                <li class=" ">
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
            <div class="container">
                <div class="nk-store nk-store-cart">
                    <div class=" bg-dark-1">

                        <div class="table-responsive" >

                            <table class="table nk-store-cart-products">
                                <tbody>
                                    <?php
                                    $total = 0;

                                    if (isset($_SESSION['userId'])) {
                                        $get_ip_add = $_SESSION['userId'];
                                        $cart_query = "SELECT * FROM cart WHERE UserID = '$get_ip_add'";
                                        $result = mysqli_query($conn, $cart_query);
                                        $result_count = mysqli_num_rows($result);

                                        if ($result_count > 0) {
                                            while ($row = mysqli_fetch_array($result)) {
                                                $productId = $row['ProductID'];

                                                $select_products = "SELECT * FROM Product WHERE ProductID = '$productId'";
                                                $result_products = mysqli_query($conn, $select_products);

                                                while ($row_product = mysqli_fetch_array($result_products)) {
                                                    $product_id = $row['ProductID'];
                                                    $product_price = $row_product['Price'];
                                                    $price_table = $row_product['Price'];
                                                    $product_cat = $row_product['categoryId'];
                                                    $product_title = $row_product['ProductName'];
                                                    $product_img = $row_product['Product_Front_image'];
                                                    $product_quantity = $row_product['Quantity']; // Fetch quantity from the database
                                                    $product_values = $row['Quantity'] * $product_price;
                                                    $total += $product_values;
                                                    ?>

                                                    <tr>
                                                        <td class="nk-product-cart-thumb">
                                                            <a href="singleProduct.php?product_id=<?php echo $product_id; ?>" class="nk-post-image">
                                                                <img src="../DreamPCseller/product_images/<?php echo $product_img; ?>" alt="<?php echo $product_title; ?>" class="nk-img">
                                                            </a>
                                                        </td>
                                                        <td class="nk-product-cart-title">
                                                            <h2 class="nk-post-title h5">
                                                                <a href="singleProduct.php?product_id=<?php echo $product_id; ?>"><?php echo $product_title; ?></a>
                                                            </h2>
                                                        </td>
                                                        <td class="nk-product-cart-price">
                                                            <h2 class="h5 text-white"><?php echo '₹' . $price_table; ?></h2>
                                                        </td>
                                                        <td class="nk-product-cart-quantity">
                                                            <div class="nk-form-control-number">
                                                                <select class="selected" name="quantityNumber_<?php echo $product_id; ?>" onchange="updateTotalPrice(this.value, <?php echo $price_table; ?>, <?php echo $productId; ?>);">
                                                                    <?php
                                                                    // Show the first three quantities by default
                                                                    for ($i = 1; $i <= min(3, $product_quantity); $i++) {
                                                                        echo "<option value='$i'>$i</option>";
                                                                    }
                                                                    ?>
                                                                    <option value="more">Show More...</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td class="nk-product-cart-total product-total" id="productTotal_<?php echo $productId; ?>">
                                                            <?php echo '₹' . ($row['Quantity'] * $price_table); ?>
                                                        </td>
                                                        <td class="nk-product-cart-remove">
                                                            <form method="post" action="">
                                                                <button type="submit" class="ion-android-delete" name="remove_cat" style="color:black"></button>
                                                                <input type="hidden" name="re_item[]" value="<?php echo $productId; ?>">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'><h2 class='text-center text-danger'>Cart is Empty..</h2></td></tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'><h2 class='text-center text-danger p-10'>Cart is Empty..</h2></td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php

                    function remove_cart_item() {
                        global $conn;
                        if (isset($_POST['remove_cat'])) {
                            if (isset($_POST['re_item'])) {
                                foreach ($_POST['re_item'] as $deleteid) {
                                    $deleteAdmin = $conn->prepare("DELETE FROM cart WHERE ProductID = ? AND UserID = ?");
                                    $deleteAdmin->bind_param("ii", $deleteid, $_SESSION['userId']);
                                    $deleteAdmin->execute();
                                }
                                echo "<script>window.location.href='cart.php'</script>";
                            } else {
                                echo '<script>alert("Error: No items selected for removal.")</script>';
                            }
                        }
                    }

                    $remove_item = remove_cart_item();
                    ?>

<?php if ($result_count > 0) { ?>
                        <div class="nk-gap-3"></div>
                        <div class="row vertical-gap lg-gap">
                            <div class="col-md-6">
                                <!-- Calculate Shipping -->
                            </div>
                            <div class="col-md-6">
                                <div class="nk-box-3 bg-dark-1">
                                    <h3 class="nk-title h4 text-center">Cart Totals</h3>
                                    <table class="table nk-store-cart-totals">
                                        <tbody>
                                            <tr class="nk-store-cart-totals-subtotal">
    <!--                                            <td>
                                                    Subtotal
                                                </td>
                                                <td>
                                                  
                                                </td>-->
                                            </tr>
                                            <tr class="nk-store-cart-totals-shipping">
    <!--                                            <td>
                                                    Shipping
                                                </td>-->
                                                <td>
                                                    Free Shipping
                                                </td>
                                            </tr>
                                            <tr class="nk-store-cart-totals-total">
                                                <td>
                                                    Total
                                                </td>
                                                <td>
                                                    <span><strong class="text-white" id="totalPrice">₹<?php echo $total; ?></strong></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="nk-gap-2"></div>


                                    <div class="nk-gap-3"></div>
                                    <div class="nk-cart-btns">
                                        <a href="store-checkout.php?product_id=$product_id" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-2">
                                            Go to Checkout
                                        </a>

                                        <a href="#" class="nk-btn nk-btn-lg link-effect-4 nk-btn-color-main-1 ">
                                            Continue Shopping
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


<?php } ?>
            </div>
            <div class="nk-gap-5 "></div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Footer -->
<?php include './Footer.php'; ?>

</div>

<!-- Side Buttons -->
<?php include './SideButtons.php'; ?>

<!-- Search Form -->
<?php include './Search.php'; ?>

<!-- Shopping Cart -->
<?php include './ShopingCart.php'; ?>

<!-- Sign-In Form -->
<?php include './SignInForm.php'; ?>

<!-- Scripts -->

<script>
    // JavaScript to handle the "Show More" option in the dropdown
    document.querySelector('select[name="quantityNumber_<?php echo $product_id; ?>"]').addEventListener('change', function () {
        var select = this;
        var product_id = <?php echo $product_id; ?>;
        var product_quantity = <?php echo $product_quantity; ?>;

        if (select.value === 'more') {
            // Remove the "Show More" option
            select.remove(select.length - 1);

            // Add all available quantities to the dropdown
            for (var i = 4; i <= product_quantity; i++) {
                var option = document.createElement('option');
                option.value = i;
                option.text = i;
                select.add(option);
            }
        }
    });
</script>

<script>
    function updateTotalPrice(quantity, productPrice, productId) {
        var totalPrice = quantity * productPrice;
        document.getElementById('productTotal_' + productId).textContent = '₹ ' + totalPrice;

        // Update total price in the checkout section
        calculateTotalPrice();
    }

    function calculateTotalPrice() {
        var total = 0;
        var productTotals = document.querySelectorAll('.product-total');

        for (var i = 0; i < productTotals.length; i++) {
            var price = parseFloat(productTotals[i].textContent.replace('₹', ''));
            total += price;
        }

        document.getElementById('totalPrice').textContent = 'Total Price: ₹ ' + total.toFixed(2);
    }

// Call calculateTotalPrice initially
    calculateTotalPrice();

</script>
</body>
</html>
