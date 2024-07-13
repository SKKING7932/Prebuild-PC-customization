<!-- START: Reviews Summary Rating -->
<div class='nk-box-3 bg-dark-1'>
    <h3 class='nk-title h4 text-center'>Reviews Summary</h3>
    <div class='nk-gap'></div>
    <!-- START: Total Star Reviews -->
    <span class='nk-product-rating'>
        <span class='nk-product-rating-front' style='width: 24%;'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </span>
        <span class='nk-product-rating-back'>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
        </span>
    </span>

    <!-- END: Total Star Reviews -->


    <br>
    <!-- START: Total Star O5 -->
    <small>4.7 out of 5.0</small>
    <!-- END: Total Star O5 -->


    <!-- START: Total Star PER Reviews -->
    <div class='nk-product-progress'>
        <table>
            <tr>
                <td>5 Star</td>
                <td>
                    <div class='nk-progress nk-progress-xs nk-progress-percent-static nk-count' data-progress='82' data-progress-mask='{$}%'>
                        <div class='nk-progress-line'>
                            <div style='width: 82%;'>
                                <div class='nk-progress-percent'>82%</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>4 Star</td>
                <td>
                    <div class='nk-progress nk-progress-xs nk-progress-percent-static nk-count' data-progress='10' data-progress-mask='{$}%'>
                        <div class='nk-progress-line'>
                            <div style='width: 10%;'>
                                <div class='nk-progress-percent'>10%</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>3 Star</td>
                <td>
                    <div class='nk-progress nk-progress-xs nk-progress-percent-static nk-count' data-progress='2' data-progress-mask='{$}%'>
                        <div class='nk-progress-line'>
                            <div style='width: 2%;'>
                                <div class='nk-progress-percent'>2%</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2 Star</td>
                <td>
                    <div class='nk-progress nk-progress-xs nk-progress-percent-static nk-count' data-progress='5' data-progress-mask='{$}%'>
                        <div class='nk-progress-line'>
                            <div style='width: 5%;'>
                                <div class='nk-progress-percent'>5%</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1 Star</td>
                <td>
                    <div class='nk-progress nk-progress-xs nk-progress-percent-static nk-count' data-progress='1' data-progress-mask='{$}%'>
                        <div class='nk-progress-line'>
                            <div style='width: 1%;'>
                                <div class='nk-progress-percent'>1%</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <!-- END: Total Star PER Reviews -->

</div>
<!-- END: Reviews Summary Rating -->


<?php

include './databaseconnection.php';
$userId = $_SESSION['userId'];
$getproductId = $_GET['product_id'];

function Single($product_id) {
global $conn;
$userId = $_SESSION['UserId'];
$search_query = "select * from product where ProductID = $product_id";
$result_query = mysqli_query($conn, $search_query);
$num_of_rows = mysqli_num_rows($result_query);
if ($num_of_rows == 0) {
echo "<h2 class='text-center text-danger'>Not Found... </h2>";
}
//                                    $row = mysqli_fetch_assoc($result_query);
//                                    echo $row['product_name'];
while ($row = mysqli_fetch_assoc($result_query)) {
$product_id = $row['ProductID'];
$product_name = $row['ProductName'];
$product_description = $row['ProductDescription'];
$product_image1 = $row['Product_Front_image'];
$product_image2 = $row['Product_back_image'];
$product_image3 = $row['Product_side_image'];
$product_price = $row['Price'];
$brand_id = $row['BrandID'];
$category_id = $row['CategoryID'];

echo "<div class='nk-gap-4'></div>
<div class='nk-store-product'>
    <div class='row xl-gap vertical-gap align-items-center'>
        <div class='col-md-5'>
            <!-- START: Product Photos Carousel -->
            <div class='nk-carousel-3' data-size='1'>
                <div class='nk-carousel-inner nk-popup-gallery'>

                    <div><div>
                        <a href='../DreamPcseller/product_images/$product_image1' class='nk-gallery-item' data-size='780x990'><img src='../DreamPcseller/product_images/$product_image1'  alt='$product_image1' ></a>
                    </div></div>

                    <div><div>
                        <a href='../DreamPcseller/product_images/$product_image2' class='nk-gallery-item' data-size='780x990'><img src='../DreamPcseller/product_images/$product_image2'  alt='$product_image2'></a>
                    </div></div>

                    <div><div>
                        <a href='../DreamPcseller/product_images/$product_image3' class='nk-gallery-item' data-size='780x990'><img src='../DreamPcseller/product_images/$product_image3'  alt='$product_image3'></a>
                    </div></div>

                  

                </div>
                
            </div>
            <!-- END: Product Photos Carousel -->
        </div>
        <div class='col-md-7'>
            <h2 class='nk-product-title'>$product_name</h2>

            <div class='nk-product-description'>
                <p>$product_description</p>
            </div>
<div class='nk-product-description'>
                <span class='nk-product-price'>₹$product_price</span>
            </div>
           
            <form class='nk-form nk-product ' >
                
                
                    ";
if (!isset($_SESSION['userId'])) {
echo "<button class='nk-btn nk-btn-x2 link-effect-4 nk-sign-toggle'  onclick='addToCart($product_id, $userId)'>Add to Cart</button>"
. "<button class='nk-btn nk-btn-x2 link-effect-4 nk-sign-toggle'>Buy</button>";
} else {
echo "<a href='store-checkout.php?product_id=$product_id'><button class='nk-btn nk-btn-x2 link-effect-2 ' onclick='addToCart($product_id, $userId)'>Add to Cart</button></a>"
. "<a href='store-checkout.php?product_id=$product_id'><button class='nk-btn nk-btn-x2 link-effect-2'>Buy</button></a>";
}



echo "
            </form>
        </div>
    </div>

    <div class='nk-gap-3'></div>
    <!-- START: Tabs -->
    <div class='nk-tabs'>
        <ul class='nav nav-tabs' role='tablist'>
            <li class='nav-item'>
                <a class='nav-link active' href='#tab-description' role='tab' data-toggle='tab'>Description</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='#tab-parameters' role='tab' data-toggle='tab'>Parameters</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='#tab-reviews' role='tab' data-toggle='tab'>Reviews <small>(3)</small></a>
            </li>
        </ul>

        <div class='tab-content'>
            <!-- START: Tab Description -->
            <div role='tabpanel' class='tab-pane fade show active' id='tab-description'>
                <div class='nk-gap-3'></div>
                <div class='nk-box-3 bg-dark-1'>
                    <p>$product_description</p>
                    
                </div>
            </div>
            <!-- END: Tab Description -->

            <!-- START: Tab Parameters -->
            <!-- <div role='tabpanel' class='tab-pane fade' id='tab-parameters'>
                <div class='nk-gap-3'></div>
                <div class='nk-box-3 bg-dark-1'>
                    <table class='table table-bordered'>
                        <tr>
                            <td>Brand</td>
                            <td>Welder</td>
                        </tr>
                        <tr>
                            <td>SKU</td>
                            <td>S18-9247</td>
                        </tr>
                        <tr>
                            <td>Material Type</td>
                            <td>Mineral</td>
                        </tr>
                        <tr>
                            <td>Display Type</td>
                            <td>Analog</td>
                        </tr>
                        <tr>
                            <td>Case Material</td>
                            <td>Stainless Steel</td>
                        </tr>
                        <tr>
                            <td>Case Diameter</td>
                            <td>50mm</td>
                        </tr>
                        <tr>
                            <td>Band Material</td>
                            <td>Rubber</td>
                        </tr>
                        <tr>
                            <td>Band width</td>
                            <td>23mm</td>
                        </tr>
                        <tr>
                            <td>Movement</td>
                            <td>Quartz</td>
                        </tr>
                    </table>
                </div>
            </div> -->
            <!-- END: Tab Parameters -->

            <!-- START: Tab Reviews -->
            <div role='tabpanel' class='tab-pane fade' id='tab-reviews'>
            <div><h1 id='mess'></h1></div>

                <div class='nk-gap-3'></div>
                <div class='row vertical-gap lg-gap'>
                    <div class='col-md-6'>
                    ";

echo "<!-- START: Reviews Summary Rating -->
<div class='nk-box-3 bg-dark-1'>
    <h3 class='nk-title h4 text-center'>Reviews Summary</h3>
    <div class='nk-gap'></div>
    <!-- START: Total Star Reviews -->
    <span class='nk-product-rating'>
        <span class='nk-product-rating-front' style='width: 24%;'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </span>
        <span class='nk-product-rating-back'>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
        </span>
    </span>

    <!-- END: Total Star Reviews -->


    <br>
    <!-- START: Total Star O5 -->
    <small>4.7 out of 5.0</small>
    <!-- END: Total Star O5 -->


    <!-- START: Total Star PER Reviews -->
    <div class='nk-product-progress'>
        <table>
            <tr>
                <td>5 Star</td>
                <td>
                    <div class='nk-progress nk-progress-xs nk-progress-percent-static nk-count' data-progress='82' >
                        <div class='nk-progress-line'>
                            <div style='width: 82%;'>
                                <div class='nk-progress-percent'>82%</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>4 Star</td>
                <td>
                    <div class='nk-progress nk-progress-xs nk-progress-percent-static nk-count' data-progress='10' >
                        <div class='nk-progress-line'>
                            <div style='width: 10%;'>
                                <div class='nk-progress-percent'>10%</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>3 Star</td>
                <td>
                    <div class='nk-progress nk-progress-xs nk-progress-percent-static nk-count' data-progress='2' >
                        <div class='nk-progress-line'>
                            <div style='width: 2%;'>
                                <div class='nk-progress-percent'>2%</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2 Star</td>
                <td>
                    <div class='nk-progress nk-progress-xs nk-progress-percent-static nk-count' data-progress='5' >
                        <div class='nk-progress-line'>
                            <div style='width: 5%;'>
                                <div class='nk-progress-percent'>5%</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1 Star</td>
                <td>
                    <div class='nk-progress nk-progress-xs nk-progress-percent-static nk-count' data-progress='1' >
                        <div class='nk-progress-line'>
                            <div style='width: 1%;'>
                                <div class='nk-progress-percent'>1%</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <!-- END: Total Star PER Reviews -->

</div>
<!-- END: Reviews Summary Rating -->
";

echo "            </div>
                    <div class='col-md-6'>
                        <!-- START: Reply -->
                        <div class='nk-box-3 bg-dark-1'>
                            <h3 class='nk-title h4 text-center'>Add a Review</h3>
                            <div class='nk-gap'></div>
                            <div class='nk-reply mt-0'>
                                <form action='#' class='nk-form nk-form-style-1'>
                                    <div class='nk-rating'>
                                        <input type='radio' id='review-rate-5' name='review-rate' value='5'>
                                        <label for='review-rate-5'>
                                            <span><i class='fa fa-star-o'></i></span>
                                            <span><i class='fa fa-star'></i></span>
                                        </label>

                                        <input type='radio' id='review-rate-4' name='review-rate' value='4'>
                                        <label for='review-rate-4'>
                                            <span><i class='fa fa-star-o'></i></span>
                                            <span><i class='fa fa-star'></i></span>
                                        </label>

                                        <input type='radio' id='review-rate-3' name='review-rate' value='3'>
                                        <label for='review-rate-3'>
                                            <span><i class='fa fa-star-o'></i></span>
                                            <span><i class='fa fa-star'></i></span>
                                        </label>

                                        <input type='radio' id='review-rate-2' name='review-rate' value='2'>
                                        <label for='review-rate-2'>
                                            <span><i class='fa fa-star-o'></i></span>
                                            <span><i class='fa fa-star'></i></span>
                                        </label>

                                        <input type='radio' id='review-rate-1' name='review-rate' value='1'>
                                        <label for='review-rate-1'>
                                            <span><i class='fa fa-star-o'></i></span>
                                            <span><i class='fa fa-star'></i></span>
                                        </label>
                                    </div>
                                    <div class='nk-gap'></div>
                                    <div class='row vertical-gap'>
                                        <div class='col-sm-6'>
                                            <input type='text' class='form-control required' name='name' placeholder='Name *'>
                                        </div>
                                        <div class='col-sm-6'>
                                            <input type='text' class='form-control required' name='title' placeholder='Title *'>
                                        </div>
                                    </div>
                                    <div class='nk-gap-1'></div>
                                    <textarea class='form-control required' id='Feedback_Content' name='Feedback_Content' rows='5' placeholder='Your Review *' aria-required='true'></textarea>
                                    <div class='nk-gap-1'></div>
                                    <button class='nk-btn nk-btn-lg link-effect-4 float-right' id='SBFB' name='SBFB'>Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- END: Reply -->
                    </div>
                </div>

                <div class='nk-gap-3'></div>
                

                <!--comment-->";

$query = "SELECT feedback.UserID, feedback.ProductID, feedback.Feedback_Content, feedback.FeedBack_Date, feedback.FeedBack_Time, feedback.Ratings, usermaster.Username, COUNT(feedback.FeedbackID) OVER (PARTITION BY feedback.ProductID) AS TotalFeedback, COUNT(feedback.ProductID) OVER() AS TotalProductFeedback FROM feedback JOIN usermaster ON feedback.UserID = usermaster.UserID WHERE ProductID = $product_id";
$result = mysqli_query($conn, $query);
$totalReviews = mysqli_num_rows($result);

echo "<div class='nk-comments mb-0'>
    <h3 class='nk-title h4 text-center'> $totalReviews Reviews</h3>
    <div class='nk-gap-2'></div>";
while ($row = mysqli_fetch_assoc($result)) {
$Ratings = $row['Ratings'];
$Username = $row['Username'];
$FeedBack_Date = $row['FeedBack_Date'];
$FeedBack_Time = $row['FeedBack_Time'];
$Feedback_Content = $row['Feedback_Content'];

echo "
        <div class='nk-comment'>
            <div class='nk-comment-avatar'>
                <a href='#'><img src='assets/images/avatar-2.jpg' alt=''></a>
            </div>
            <div class='nk-comment-meta'>
                <div>
                    <span class='nk-product-rating nk-review-rating'>
                     
                        <span class='nk-product-rating-front'>";
if ($Ratings == 1) {
echo"
                <i class='fa fa-star'></i>            
                <i class='far fa-star'></i>
                <i class='far fa-star'></i>
                <i class='far fa-star'></i>
                <i class='far fa-star'></i>";
} elseif ($Ratings == 2) {
echo"
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='far fa-star'></i>
                <i class='far fa-star'></i>
                <i class='far fa-star'></i>";
} elseif ($Ratings == 3) {
echo"
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='far fa-star'></i>
                <i class='far fa-star'></i>";
} elseif ($Ratings == 4) {
echo"
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>            
                <i class='far fa-star'></i>
";
} elseif ($Ratings == 5) {
echo"
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>";
}
echo "
                        </span>
                    </span>
                </div>
                <div class='nk-comment-name h5'>
                    <a href='#'>$Username</a>
                </div>
                <div class='nk-comment-date'>
                    $FeedBack_Date.&nbsp;&nbsp;.$FeedBack_Time
                </div>
            </div>
            <p>$Feedback_Content</p>
        </div>
    


";
}
echo '</div>';

echo"
                 <!--comment-->
            </div>
            <!-- END: Tab Reviews -->

        </div>
    </div>
</div>

   <script>
            $(document).ready(function () {
           var rate=0;
           
                $('#SBFB').click(function (event) {
                    event.preventDefault();
                    var UserID = " . $_SESSION['userId'] . ";
            var ProductID = '$product_id';
            var Feedback_Content = $('#Feedback_Content').val();
            var Ratings =  $('input[name=review-rate]:checked').val();

                    $.ajax({
                        url: 'FeedBackDataStore.php',
                        type: 'POST',
                        data: {
                            UserID: UserID,
                            ProductID: ProductID,
                            Feedback_Content: Feedback_Content,
                            Ratings: Ratings
                        },
                        success: function (response) {
                        $('#mess').html(response);
                        }
                    });
                });
            });
        </script>
";
}
}

function getProducts() {
global $conn;
$select_query = "SELECT * FROM `product` order by rand()"; // Fixed typo: 'whare' to 'WHERE'
$result_query = mysqli_query($conn, $select_query);

// Initialize the $output variable to store the generated HTML
$output = '';

while ($row = mysqli_fetch_assoc($result_query)) {
$product_id = $row['ProductID'];
$product_name = $row['ProductName'];
$product_description = $row['ProductDescription'];
$product_image1 = $row['Product_Front_image'];
$product_price = $row['Price'];

// Truncate the product description
$product_description_half = truncate_text($product_description, 100);

$output .= "
        <div class='col-md-4 mb-4' data-aos='fade-up'>
            <div class='card h-100'>
                <a href='single_product.php?product_id=$product_id'>
                    <img src='../DreamPcseller/product_images/$product_image1' alt='$product_name' class='card-img-top img-fluid'>
                </a>
                <div class='card-body'>
                    <h5 class='card-title'><a href='single_product.php?product_id=$product_id'>$product_name</a></h5>
                    <p class='card-text'>$product_description_half</p>
                </div>
                <div class='card-footer d-flex justify-content-between align-items-center'>
                    <div>
                        <p class='card-text text-primary font-weight-bold'>Price: ₹$product_price/-</p>
                    </div>
                    <div>
                        <button type='button' class='btn btn-secondary btn-sm ml-2' data-bs-toggle='modal' data-bs-target='#exampleModal$product_id'><i class='fas fa-info-circle'></i> Details</button>
                    </div>
                </div>
            </div>
        </div>
        ";
}
echo 'abc';
}

//function searchproduct() {
//    global $conn;
//    if (isset($_GET['search_data_product'])) {
//        $search_data_value = $_GET['search'];
//        $search_query = "select * from products where product_name like '%$search_data_value%'";
//        $result_query = mysqli_query($conn, $search_query);
//        $num_of_rows = mysqli_num_rows($result_query);
//        if ($num_of_rows == 0) {
//            echo "<h2 class='text-center text-danger'>Not Found... </h2>";
//        }
////                                    $row = mysqli_fetch_assoc($result_query);
////                                    echo $row['product_name'];
//        while ($row = mysqli_fetch_assoc($result_query)) {
//            $product_id = $row['product_id'];
//            $product_name = $row['product_name'];
//            $product_description = $row['product_description'];
//            $product_image1 = $row['product_image1'];
//            $product_price = $row['price'];
//            $brand_id = $row['brand_id'];
//            $category_id = $row['category_id'];
//            echo "<div class='col-sm-6 col-lg-4 mb-4' data-aos='fade-up'>
//                                    <div class='block-4 text-center border'>
//                                        <figure class='block-4-image'>
//                                            <a href=''><img src='../seller/product_images/$product_image1' alt=$product_name class='img-fluid' height='100px' width='200px'></a>
//                                        </figure>
//                                        <div class='block-4-text p-4'>
//                                            <h3><a href='single_product.php?product_id=$product_id'>$product_name</a></h3>
//                                            <p class='mb-0'>$product_description</p>
//                                            <p class='text-primary font-weight-bold'>Price : ₹$product_price/-</p>
//                                        </div>
//                                    </div>
//                                </div>";
//        }
//    }
//}
// Database connection and other functions included here
// common_function.php

function view_single_product() {
global $conn;

if (isset($_GET['product_id'])) {
$product_id = $_GET['product_id'];
$select_query = "SELECT * FROM product WHERE ProductID = $product_id";
$result_query = mysqli_query($conn, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
$product_name = $row['ProductName'];
$product_short_description = $row['ProductShortDescription'];
$product_description = $row['ProductDescription'];
$product_image1 = $row['Product_Front_image'];
$product_image2 = $row['Product_Image_2'];
$product_image3 = $row['Product_Image_3'];
$product_price = $row['Price'];
$product_rating = $row['ProductRating'];

echo "
                <div class='site-section'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div id='productImageSlider' class='carousel slide' data-ride='carousel'>
                                    <div class='carousel-inner'>
                                        <div class='carousel-item active'>
                                            <img src='../seller/product_images/$product_image1' alt='$product_name' class='img-fluid'>
                                        </div>
                                        <div class='carousel-item'>
                                            <img src='../seller/product_images/$product_image2' alt='$product_name' class='img-fluid'>
                                        </div>
                                        <div class='carousel-item'>
                                            <img src='../seller/product_images/$product_image3' alt='$product_name' class='img-fluid'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <h2 class='text-black'>$product_name</h2>
                                <p>$product_short_description</p>
                                <table class='table'>
                                    <tr>
                                        <th>Price:</th>
                                        <td>₹$product_price/-</td>
                                    </tr>
                                    <tr>
                                        <th>Rating:</th>
                                        <td>$product_rating</td>
                                    </tr>
                                    <tr>
                                        <th>Quantity:</th>
                                        <td>
                                            <input type='number' id='quantity' name='quantity' value='1' min='1'>
                                        </td>
                                    </tr>
                                </table>
                                        <button class='btn btn-primary btn-sm' name='add_to_cart' value='<?= $product_id ?>'>Add to Cart</button>
                                <button class='btn btn-success' id='buyBtn'>Buy</button>
                                <div class='product-description'>
                                    <h4>Detailed Description:</h4>
                                    <p>$product_description</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
}
}
}

// ...

function total_cart_price() {
global $conn;
$total = 0;
$get_ip_add = $_SESSION['userId']; // Update this to match your session variable
$cart_query = "SELECT * FROM cart WHERE UserID = '$get_ip_add'";
$result = mysqli_query($conn, $cart_query);

while ($row = mysqli_fetch_array($result)) {
$product_id = $row['ProductID'];
$select_product_price = "SELECT Price FROM product WHERE ProductID = $product_id";
$result_product_price = mysqli_query($conn, $select_product_price);
$row_product_price = mysqli_fetch_array($result_product_price);
$product_price = $row_product_price['Price'];
$total += $product_price * $row['Quantity'];
}

return $total;
}

function cart() {
global $conn;

// Handling Add to Cart functionality
if (isset($_POST['add_to_cart'])) {
$product_id = $_POST['add_to_cart'];
$user_id = getIPAddress(); // Use appropriate user identification here
// Check if the product is already in the cart
$check_query = "SELECT * FROM cart WHERE UserID = '$user_id' AND ProductID = '$product_id'";
$check_result = $conn->query($check_query);

if ($check_result->num_rows === 0) {
// Product not in the cart, add it
$insert_query = "INSERT INTO cart (UserID, ProductID, Quantity) VALUES (?, ?, ?)";
$quantity = 1; // You can adjust this based on your requirements

$stmt = $conn->prepare($insert_query);
$stmt->bind_param("iii", $user_id, $product_id, $quantity);

if ($stmt->execute()) {
echo "<script>alert('Product added to cart');</script>";
} else {
echo "<script>alert('Failed to add product to cart');</script>";
}
} else {
echo "<script>alert('Product is already in the cart');</script>";
}
}

// Check if the user clicked on Increase Quantity
if (isset($_POST['increase_qty'])) {
$product_id = $_POST['product_id'];
update_quantity($product_id, 1);
echo "<script>window.open('single_product.php?product_id=$product_id','_self')</script>";
}

// Check if the user clicked on Decrease Quantity
if (isset($_POST['decrease_qty'])) {
$product_id = $_POST['product_id'];
update_quantity($product_id, -1);
echo "<script>window.open('single_product.php?product_id=$product_id','_self')</script>";
}
}

// ...
#get user details 

function get_user_order_details() {
global $conn;
$get_details = "select * from user_table where username = 'jp'";
$result_query = mysqli_query($conn, $get_details);
while ($row_query = mysqli_fetch_array($result_query)) {
$user_id = $row_query['user_id'];
if (isset($_GET['edit_account'])) {
if (isset($_GET['mu_orders'])) {
if (isset($_GET['delete_account'])) {
$get_orders = "select * from user_orders where user_id = $user_id and order_status = 'pending'";
$result_order_query = mysqli_query($conn, $get_orders);
$row_count = mysqli_num_rows($result_order_query);
if ($row_count > 0) {
echo "<h3 class='text-center'>You have <span class='text-danger'>$row_count</span>pending orders.</h3>";
}
}
}
}
}
}
?>
