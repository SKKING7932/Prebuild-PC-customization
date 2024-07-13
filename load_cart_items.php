<?php
session_start(); // Start the session

// Include database connection
include './databaseconnection.php';

$output = '';
$total = 0; // Initialize total variable

if (isset($_SESSION['userId'])) {
    $get_ip_add = $_SESSION['userId'];
    $cart_query = "SELECT * FROM cart WHERE UserID = ?";
    $stmt = mysqli_prepare($conn, $cart_query);
    mysqli_stmt_bind_param($stmt, "s", $get_ip_add);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $result_count = mysqli_num_rows($result);
    
    if ($result_count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $productId = $row['ProductID'];

            $select_products = "SELECT * FROM Product WHERE ProductID = ?";
            $stmt_product = mysqli_prepare($conn, $select_products);
            mysqli_stmt_bind_param($stmt_product, "i", $productId);
            mysqli_stmt_execute($stmt_product);
            $result_product = mysqli_stmt_get_result($stmt_product);
            
            while ($row_product = mysqli_fetch_assoc($result_product)) {
                $product_id = $row['ProductID'];
                $product_price = $row_product['Price']; // Use the actual product price directly
                $price_table = $row_product['Price'];
                $product_cat = $row_product['categoryId'];
                $product_title = $row_product['ProductName'];
                $product_img = $row_product['Product_Front_image'];
                $product_values = $row['Quantity'] * $product_price; // Calculate product value
                $total += $product_values;

               $output .= "<tr>
                    <td class='nk-product-cart-thumb'>
                        <a href='singleProduct.php?product_id=$product_id' class='nk-post-image'>
                            <img src='../Seller/product_images/$product_img' alt='$product_title' class='nk-img'>
                        </a>
                    </td>
                    <td class='nk-product-cart-title'>
                        <h2 class='nk-post-title h5'>
                            <a href='singleProduct.php'>$product_title</a>
                        </h2>
                    </td>
                    <td class='nk-product-cart-price'>
                        <h2 class='h5 text-black' id='productPrice_$productId'>₹$price_table</h2>
                    </td>
                    <td class='nk-product-cart-quantity'>
                        <div class='nk-form-control-number'>
                            <input type='number' class='form-control block_quantity__number' data-product-id='$product_id' name='quantityNumber[]' min='1' value='{$row['Quantity']}'>
                        </div>
                    </td>
                    <td class='nk-product-cart-total product-total' id='productTotal_$productId'>
                        ₹" . ($row['Quantity'] * $price_table) . "
                    </td>
                    <td class='nk-product-cart-remove'>
                        <form method='post' action=''>
                            <button type='submit' class='ion-android-delete' name='remove_cat' style='color:black'></button>
                            <input type='hidden' name='re_item[]' value='$productId'>
                        </form>
                    </td>
                </tr>";
            }
        }
    } else {
        $output .= "<tr><td colspan='4'><h2 class='text-center text-danger'>Cart is Empty..</h2></td></tr>";
    }
} else {
    $output .= "<tr><td colspan='4'><h2 class='text-center text-danger p-10'>Cart is Empty..</h2></td></tr>";
}

echo $output;

// Display total and checkout buttons
if ($result_count > 0) {
    // Use the correct ID for the total
    echo "<div class='nk-cart-total'>
              Total <span><strong class='text-black' id='totalPrice'>₹" . number_format($total, 2) . "</strong></span>
          </div>";
}
?>
