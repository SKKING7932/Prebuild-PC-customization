
<?php
session_start();
error_reporting(0);
include './databaseconnection.php';
include './common_function.php';

if (!isset($_SESSION['userId'])) {
    echo "<script>$('.nk-sign-toggle no-link-effect').load('SignInForm.php');</script>";
} else {
    $user = $_SESSION['userId'];
    $select_query = "SELECT * FROM usermaster WHERE UserID = '$user'";
    $result = mysqli_query($conn, $select_query);
    $row_count = mysqli_num_rows($result);
    $user_data = mysqli_fetch_assoc($result);

    $select_cart_query = "SELECT * FROM cart WHERE UserID = '$user'";
    $result1 = mysqli_query($conn, $select_query);
    $row_count1 = mysqli_num_rows($result);
    $user_data1 = mysqli_fetch_assoc($result);
}
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

        <style>
            .circular-image {
                width: 100px; /* Adjust the width and height to your desired size */
                height: 100px;
                border-radius: 100%;
                overflow: hidden;
            }

            .circular-image img {
                width: 100%;
                height: 100%;
                object-fit: cover; /* This property ensures the image covers the circular container without distortion */
            }

        </style>
    </head>


    <!--
        Additional Classes:
            .nk-page-boxed
    -->
    <body>
        <div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('assets/images/page-background.jpg');"></div>
        
        <div class="nk-page-border">
            <div class="nk-page-border-t"></div>
            <div class="nk-page-border-r"></div>
            <div class="nk-page-border-b"></div>
            <div class="nk-page-border-l"></div>
        </div>
        <?php include './Header.php'; ?>

        <nav class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content" id="nk-side">

            <div class="nk-navbar-bg">
                <div class="bg-image">
                    <img src="assets/images/bg-nav-side.jpg" alt="" class="jarallax-img">
                </div>
            </div>

        </nav>

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
                <div class="nk-gap-4"></div>

                <div class="nk-store nk-store-checkout">
                    <div class="row vertical-gap lg-gap">
                        <div class="col-md-6">

                            <!-- START: Billing Details -->
                            <div class="nk-box-3 bg-dark-1">
                                <h3 class="nk-title h4 text-center">Billing Details</h3>
                                <div class="nk-gap"></div>
                                <form  method="post" class="nk-form nk-form-style-1">

                                    <div class="row vertical-gap">


                                        <div class="col-sm-6">
                                            <input type="text" class="form-control required" name="fname"  placeholder="First Name *" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control required" name="lname" placeholder="Last Name *"required>
                                        </div>
                                    </div>


                                    <div class="nk-gap-2"></div>
                                    <div class="row vertical-gap">
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control required" name="email" placeholder="Email Address *" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="tel" class="form-control required" name="phone" placeholder="Phone *" required>
                                        </div>
                                    </div>

                                    <div class="nk-gap-2"></div>                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- START: Notes -->
                            <div class="nk-box-3 bg-dark-1">

                                <label class="custom-control custom-checkbox nk-title h4 text-center">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    Ship to different address?
                                </label>
                                <div class="nk-gap"></div>

                                <span>If you want this same address then click on below checkbox.</span><br/><input type="checkbox" name="sameadd" id="hideCheckbox" value="">&nbsp;&nbsp;<?php echo $user_data['Address']; ?>
                                <span id="elementToHide">
                                    <div class="nk-gap"></div>
                                    <input type="text" class="form-control required" name="address" value="" placeholder="Address *" >

                                    <div class="nk-gap-2"></div>
                                    <input type="text" class="form-control required" name="city" placeholder="City *" >

                                    <div class="nk-gap-2"></div>
                                    <div class="row vertical-gap">

                                        <div class="col-sm-6">
                                            <input type="tel" class="form-control required" name="zip" placeholder="ZIP *" >
                                        </div>
                                    </div>
                                </span>
                                <div class="nk-gap-2">
                                    <input type="submit" class="nk-btn nk-btn-lg link-effect-4 float-right" name="place_order"  value="Place Order">
                                    <a href="#" class="nk-btn nk-btn-lg link-effect-2 nk-btn-color-main-1 ">
                                        Continue Shopping
                                    </a>
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        // Initial state
                                        $('#elementToHide').show();

                                        // Handle checkbox click event
                                        $('#hideCheckbox').click(function () {
                                            if ($(this).is(':checked')) {
                                                $('#elementToHide').hide();
                                            } else {
                                                $('#elementToHide').show();
                                            }
                                        });
                                    });
                                </script>
                                </form>
                            </div>
                            <!-- END: Notes -->
                            <!--cart Details-->
                        </div>
                    </div>

                    <!-- START: Order Products -->
                    <div class="nk-gap-3"></div>
                    <div class="nk-box-2 bg-dark-1">
                        <h3 class="nk-title h4 text-center">Your Order</h3>
                        <table  class="table">
                            <tbody>
                                <?php
                                $total = 0;

                                if (isset($_SESSION['userId'])) {
                                    $get_ip_add = $_SESSION['userId'];
                                    //total product
                                    $total_p = "SELECT count(*) as count FROM cart WHERE UserID = '$get_ip_add'";
                                    $result_t = $conn->query($total_p);

                                    if ($result_t === false) {
                                        die("Error in SQL query: " . $conn->error);
                                    }
                                    $row = $result_t->fetch_assoc();
                                    $count_p = $row['count'];
                                    // echo "Total rows: " . $count_p;
                                    //--------------------------------------------


                                   // $get_ip_add = $_SESSION['userId'];
                                    $cart_query = "SELECT * FROM cart WHERE UserID = '$get_ip_add'";
                                    $result = mysqli_query($conn, $cart_query);
                                    $result_count = mysqli_num_rows($result);
                                    if ($result_count > 0) {


                                        while ($row = mysqli_fetch_array($result)) {
                                            $productId = $row['ProductID'];

                                            $select_products = "SELECT * FROM Product WHERE ProductID =  '$productId' ";
                                            $result_products = mysqli_query($conn, $select_products);
                                            while ($row_product = mysqli_fetch_array($result_products)) {
                                                $product_id = $row['ProductID'];
                                                $product_price = array($row_product['Price']);
                                                $price_table = $row_product['Price'];
                                                $product_des = $row_product['ProductDescription'];
                                                $product_cat = $row_product['categoryId'];
                                                $product_title = $row_product['ProductName'];
                                                $product_img = $row_product['Product_Front_image'];
                                                $product_values = array_sum($product_price);
                                                $product_quantity = $row_product['Quantity'];
                                                $total += $product_values;
//                                                echo 'total amount' . $total;
                                                ?>
                                                <tr>
                                                    <td class="circular-image">
                                                        <img src="../DreamPCseller/product_images/<?php echo $product_img; ?>" alt="<?php echo $product_title; ?>" >

                                                    </td>
                                                    <td class="nk-product-cart w-25">
                                                        <a href="singleProduct.php"><?php echo $product_title ?></a>
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
                                                    <td>
                                                        <span><?php echo $product_des; ?></span>
                                                    </td>

                                                    <td class="nk-product-cart-total product-total" id="productTotal_<?php echo $productId; ?>">
                                                        <?php echo '₹' . ($row['Quantity'] * $price_table); ?>
                                                    </td>

                                                </tr>

                                                <?php
                                            }
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'><h2 class='text-center text-danger'>Please Select the products..</h2></td></tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'><h2 class='text-center text-danger p-10'>Please Select the products..</h2></td></tr>";
                                }

                                //total product
                                ?>

                            </tbody>
                        </table>


                        <?php if ($result_count > 0) { ?>

                            <div class="nk-gap-3"></div>
                            <div class="row vertical-gap lg-gap">
                                <div class="col-md-6">
                                    <!-- Calculate Shipping -->
                                </div>
                                <div class="col-md-6">
                                    <div class="nk-box-3 bg-dark-1">

                                        <table class="table nk-store-cart-totals">
                                            <tbody>

                                                <tr class="nk-store-cart-totals-total">
                                                    <td>
                                                        Total
                                                    </td>
                                                    <td>
                                                        <span><strong class="text-white" id="totalPrice" name="tprice"></strong></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="nk-gap-2"></div>


                                        <div class="nk-gap-3"></div>
                                        <div class="nk-cart-btns">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php } ?>



                </div>

            </div>

            <!-- Billing Details -->
            <?php
            if (isset($_POST['place_order'])) {
                //cart data


                $qty = $user_data1['Quantity'];

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $add = $_POST['address'];
                $city = $_POST['city'];
                $zip = $_POST['zip'];
                $invoice = mt_rand();
                $fullname = $fname . $lname;
                $shipadd = $add . $city . $zip;
                $sameadd = $user_data['Address'];
                if (isset($_POST['sameadd'])) {
                    $insert_query = "INSERT INTO `orders`(UserID,shippingname,email,mobileNo,invoiceNumber,TotalProduct,TotalAmount,shippingAddress) value ('$user','$fullname','$email','$phone','$invoice','$count_p','$total','$sameadd')";
                    $result = mysqli_query($conn, $insert_query);
                    if ($result) {
                        echo "<script>window.location.href='../DreamPCcustomer/payment.php'</script>";
                    }
                } else {
                    $insert_query = "INSERT INTO `orders`(UserID,shippingname,email,mobileNo,invoiceNumber,TotalProduct,TotalAmount,shippingAddress) value ('$user','$fullname','$email','$phone','$invoice','$count_p','$total','$shipadd')";
                    $result = mysqli_query($conn, $insert_query);
                    if ($result) {
                        echo "<script>window.location.href='../DreamPCcustomer/payment.php'</script>";
                    }
                }
//                        echo"<script>alert('$fullname')</script>";
            }
            ?>
            <!-- END: Billing Details -->

        </div>
        <?php include './Footer.php'; ?>
        <!-- END: Footer -->
    </div>
    <?php include './Search.php'; ?>
    <?php include './ShopingCart.php'; ?>
    <?php include './SignInForm.php'; ?>
    <?php include './Scripts.php'; ?>

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


        var total = calculateTotalPrice();
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "payment.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Handle the response from the server if needed
            }
        };
        xhr.send("total=" + total);
    </script>


</body>
</html>
