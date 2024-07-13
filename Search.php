<?php
// Connect to your database (assuming you have one)
include './databaseconnection.php';
if (isset($_GET['query'])) {
    $query = $_GET['query'];

    // Perform the search query (adjust SQL as per your database schema)
    $sql = "SELECT * FROM product WHERE ProductDescription LIKE '%$query%'";
    $output = '';
    $modal = ''; // Initialize the modal content

    $result = mysqli_query($conn, $query);
    $total_row = mysqli_num_rows($result);

    if ($total_row > 0) {

        function truncate_text($text, $max_length) {
            if (strlen($text) > $max_length) {
                $text = substr($text, 0, $max_length);
                $text = rtrim($text, "!,.-"); // Remove trailing punctuation for cleaner output
                $text = substr($text, 0, strrpos($text, ' ')) . '...'; // Truncate to the last full word
            }
            return $text;
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $product_id = $row['ProductID'];
            $product_name = $row['ProductName'];
            $product_description = $row['ProductDescription'];
            $product_image1 = $row['Product_Front_image'];
            $product_price = $row['Price'];

            // Truncate the product description
            $product_description_half = truncate_text($product_description, 100);

            $output .= "<div class='col-sm-6 col-lg-4'>
    <div class='nk-product' data-mouse-parallax-z='2'>
        <div>
            <div class='nk-carousel-3' data-size='1' >
                <div class='nk-carousel-inner nk-popup-gallery'>
                  <div class='card h-100 bg-black'>
       
            
        
        <div class='nk-image-box-1-a'>
                    <img src='../DreamPcseller/product_images/$product_image1' alt='$product_name' class='card-img-top img-fluid'>
                    <div class='nk-image-box-overlay nk-image-box-center'>
                        <div>
                            
                           ";

 if (!isset($_SESSION['userId']))
{
          $output .= "<a href='singleProduct.php?product_id=$product_id' class='nk-image-box-icon-btn'><span class='p-15 ion-eye'></span></a>"
        . " <a onclick='addToCart($product_id, $userId)' class='nk-image-box-icon-btn'><span class='p-15 ion-android-cart nk-sign-toggle'></span></a>";
}else {
 $output .= "<a href='singleProduct.php?product_id=$product_id' class='nk-image-box-icon-btn'><span class='p-15 ion-eye'></span></a>"
        . " <a onclick='addToCart($product_id, $userId)' class='nk-image-box-icon-btn'><span class='p-15 ion-android-cart'></span></a>";
}
 $output .= "
                        </div>
                    </div>
                </div>

        <div class='card-body'>
            <h5 class='card-title'><a href='singleProduct.php?product_id=$product_id'>$product_name</a></h5>
            <p class='card-text'>$product_description</p>
        </div>
        <div class='card-footer d-flex justify-content-between align-items-center'>
            <div >
             <h5 class='card-title'><a href='singleProduct.php?product_id=$product_id'>Price: ₹$product_price/-</a></h5>
              
            </div>
            
        </div>
    </div>
                </div>
            </div>
           
            
        </div>
    </div>
</div>
";

// Create a modal for displaying product details
            $modal .= "
<div class='modal fade' id='exampleModal$product_id' tabindex='-1' role='dialog' aria-labelledby='exampleModal$product_idLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-lg' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModal$product_idLabel'>$product_name</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                <img src='../seller/product_images/$product_image1' alt='$product_name' class='img-fluid mb-3'>
                <p>$product_description</p> <!-- Use the correct product description variable -->
            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary btn-sm ml-2' data-bs-toggle='modal' data-bs-target='#exampleModal$product_id'><i class='fas fa-info-circle'></i> Details</button>

            </div>
        </div>
    </div>
</div>
";
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }

    echo $output;
}

$conn->close();
?>



