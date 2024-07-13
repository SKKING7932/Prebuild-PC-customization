 
<!-- START: Pricing Tables 3 -->
<div   id="selectedDetailsModel" class=" container modal nk-modal fade" tabindex="-1" role="dialog" aria-labelledby="selectedDetailsModel" aria-hidden="true">
    <div class="nk-gap-4"></div>
    <div class=" vertical-gap align-items-center">
        <div class="row h-100   -gap align-items-center">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="col-md-12">
                        <div class="nk-pricing bg-main-1 text-black">
                            <h3 class="nk-pricing-title">Customization Details
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="ion-android-close"></span>
                                </button></h3>
                            <div class="nk-pricing-price">
                                <span class="nk-pricing-title">Total Price : </span>

                                <span class="nk-pricing-currency">₹</span><?php
                                $Total_Price = $_SESSION['Total_Price'];
                                echo $Total_Price;
                                ?>
                            </div>

                            <ul class="nk-pricing-features">

                                <li><?php
                                    global $conn;
                                    $selected_processor_id = $_SESSION['selected_processor_id'];
                                    $select_query = "SELECT `ProductID`, `ProductName`,`ProductDescription`,`Price` FROM `product` WHERE `ProductID`= $selected_processor_id; ";
                                    $result_query = mysqli_query($conn, $select_query);
                                    $row = mysqli_fetch_assoc($result_query);
                                    $price_processor = $row['Price'];

                                    if ($_SESSION["i"] < 1) {
                                        $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_processor;
                                        $_SESSION["i"] = $_SESSION["i"] + 1;
                                    }

//                                $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_processor;
                                    echo '<h4>Processor</h4>' . "<a href='http://localhost/DreamPcCustomer/singleProduct.php?product_id=$selected_processor_id' style='pointer-events:click;color:black;'>" . $row['ProductDescription'] . "</a>";
                                    ?>
                                </li>
                                <li><?php
                                    global $conn;
                                    $selected_motherboard_id = $_SESSION['selected_motherboard_id'];
                                    $select_query = "SELECT `ProductID`, `ProductName`,`ProductDescription`,`Price` FROM `product` WHERE `ProductID`= $selected_motherboard_id; ";
                                    $result_query = mysqli_query($conn, $select_query);
                                    $row = mysqli_fetch_assoc($result_query);
                                    $price_motherboard = $row['Price'];
                                    if ($_SESSION["i"] < 2) {
                                        $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_motherboard;
                                        $_SESSION["i"] = $_SESSION["i"] + 1;
                                    }
//                                    $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_motherboard;

                                    echo '<h4>Motherboard</h4>' . "<a href='http://localhost/DreamPcCustomer/singleProduct.php?product_id=$selected_motherboard_id' style='pointer-events:click;color:black;'>" . $row['ProductDescription'] . "</a>";
                                    ?>
                                </li>
                                <li><?php
                                    global $conn;
                                    $selected_storage_id = $_SESSION['selected_storage_id'];
                                    $select_query = "SELECT `ProductID`, `ProductName`,`ProductDescription`,`Price` FROM `product` WHERE `ProductID`= $selected_storage_id; ";
                                    $result_query = mysqli_query($conn, $select_query);
                                    $row = mysqli_fetch_assoc($result_query);
                                    $price_storage = $row['Price'];
                                    if ($_SESSION["i"] < 3) {
                                        $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_storage;
                                        $_SESSION["i"] = $_SESSION["i"] + 1;
                                    }
//                                    $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_storage;

                                    echo '<h4>Storage</h4>' . "<a href='http://localhost/DreamPcCustomer/singleProduct.php?product_id=$selected_storage_id' style='pointer-events:click;color:black;'>" . $row['ProductDescription'] . "</a>";
                                    ?>
                                </li>
                                <li><?php
                                    global $conn;
                                    $selected_coolingfan_id = $_SESSION['selected_coolingfan_id'];
                                    $select_query = "SELECT `ProductID`, `ProductName`,`ProductDescription`,`Price` FROM `product` WHERE `ProductID`= $selected_coolingfan_id; ";
                                    $result_query = mysqli_query($conn, $select_query);
                                    $row = mysqli_fetch_assoc($result_query);
                                    $price_coolingfan = $row['Price'];
                                    if ($_SESSION["i"] < 4) {
                                        $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_coolingfan;
                                        $_SESSION["i"] = $_SESSION["i"] + 1;
                                    }
//                                    $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_coolingfan;

                                    echo '<h4>Cooling Fan</h4>' . "<a href='http://localhost/DreamPcCustomer/singleProduct.php?product_id=$selected_coolingfan_id' style='pointer-events:click;color:black;'>" . $row['ProductDescription'] . "</a>";
                                    ?>
                                </li>
                                <li><?php
                                    global $conn;
                                    $selected_graphicscard_id = $_SESSION['selected_graphicscard_id'];
                                    $select_query = "SELECT `ProductID`, `ProductName`,`ProductDescription`,`Price` FROM `product` WHERE `ProductID`= $selected_graphicscard_id; ";
                                    $result_query = mysqli_query($conn, $select_query);
                                    $row = mysqli_fetch_assoc($result_query);
                                    $price_graphicscard = $row['Price'];
                                    if ($_SESSION["i"] < 5) {
                                        $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_graphicscard;
                                        $_SESSION["i"] = $_SESSION["i"] + 1;
                                    }
//                                    $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_graphicscard;

                                    echo '<h4>Graphics Card</h4>' . "<a href='http://localhost/DreamPcCustomer/singleProduct.php?product_id=$selected_graphicscard_id' style='pointer-events:click;color:black;'>" . $row['ProductDescription'] . "</a>";
                                    ?>
                                </li>
                                <li><?php
                                    global $conn;
                                    $selected_cabinet_id = $_SESSION['selected_cabinet_id'];
                                    $select_query = "SELECT `ProductID`, `ProductName`,`ProductDescription`,`Price` FROM `product` WHERE `ProductID`= $selected_cabinet_id; ";
                                    $result_query = mysqli_query($conn, $select_query);
                                    $row = mysqli_fetch_assoc($result_query);
                                    $price_cabinet = $row['Price'];
                                    if ($_SESSION["i"] < 6) {
                                        $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_cabinet;
                                        $_SESSION["i"] = $_SESSION["i"] + 1;
                                    }
//                                    $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_cabinet;

                                    echo '<h4>Cabinet</h4>' . "<a href='http://localhost/DreamPcCustomer/singleProduct.php?product_id=$selected_cabinet_id' style='pointer-events:click;color:black;'>" . $row['ProductDescription'] . "</a>";
                                    ?>
                                </li>
                                <li><?php
                                    global $conn;
                                    $selected_psu_id = $_SESSION['selected_psu_id'];
                                    $select_query = "SELECT `ProductID`, `ProductName`,`ProductDescription`,`Price` FROM `product` WHERE `ProductID`= $selected_psu_id; ";
                                    $result_query = mysqli_query($conn, $select_query);
                                    $row = mysqli_fetch_assoc($result_query);
                                    $price_psu = $row['Price'];
                                    if ($_SESSION["i"] < 7) {
                                        $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_psu;
                                        $_SESSION["i"] = $_SESSION["i"] + 1;
                                    }
//                                    $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_psu;

                                    echo '<h4>Power Supply Unit</h4>'  . "<a href='http://localhost/DreamPcCustomer/singleProduct.php?product_id=$selected_psu_id' style='pointer-events:click;color:black;'>" . $row['ProductDescription'] . "</a>";
                                    ?>
                                </li>
                                <li><?php
                                    global $conn;
                                    $selected_ram_id = $_SESSION['selected_ram_id'];
                                    $select_query = "SELECT `ProductID`, `ProductName`,`ProductDescription`,`Price` FROM `product` WHERE `ProductID`= $selected_ram_id; ";
                                    $result_query = mysqli_query($conn, $select_query);
                                    $row = mysqli_fetch_assoc($result_query);
                                    $price_ram = $row['Price'];
                                    if ($_SESSION["i"] < 8) {
                                        $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_ram;
                                        $_SESSION["i"] = $_SESSION["i"] + 1;
                                    }
//                                    $_SESSION['Total_Price'] = $_SESSION['Total_Price'] + $price_ram;
                                    
                                    $id = $row['ProductID'];
                                    echo '<h4>Random Access Memory</h4>' . "<a href='http://localhost/DreamPcCustomer/singleProduct.php?product_id=$selected_ram_id' style='pointer-events:click;color:black;'>" . $row['ProductDescription'] . "</a>";
                                    ?>
                                </li>
                            </ul>


                        </div>
                        <div class="nk-pricing-button">
                            <a  href='http://localhost/DreamPcCustomer/store-checkout_1.php' class="nk-btn nk-btn-block nk-btn-lg link-effect-4">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-4"></div>
    <div class="nk-gap-4"></div>
</div>
<!-- END: Pricing Tables 3 -->