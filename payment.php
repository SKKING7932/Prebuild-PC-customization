<!--<button class="btn btn-primary" onclick="payNow()">Pay Now</button>
        <button class="btn btn-secondary" onclick="payCash()">Pay Cash</button>-->
<?php include './store-checkout.php';
?>

                                              
<?php
if (isset($_POST['total'])) {
    $total = $_POST['total'];

    // You can now use $total in your PHP code for further processing
    // For example, you can store it in a session or a database
    // or display it in the HTML output
}?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    // Function to handle Razorpay payment
    function payNow() {
        var options = {
            "key": "rzp_test_CbaFn85iuQGSSG",
            "amount": <?php echo $total *100;?> , // Amount in paise
            "currency": "INR",
            "name": "Dream PC",
            "description": "Service Payment",
            "handler": function (response)  {
                jquery.ajax({
                            type:'POST',
                            url:'paymentprocess.php',
                            data:{
                                PaymentID:response.razorpay_payment_id,
                                amount:total
                            },
                            success:function(result){
                                alert("Payment successful! Payment ID: " + response.razorpay_payment_id);
                                window.location.href="index.php";
                // You can perform further actions like updating payment status in the database
            
                            }
                        });
                // This function will be executed when payment is successful
                }
        };

        var rzp = new Razorpay(options);
        rzp.open();
    }

payNow();
</script>