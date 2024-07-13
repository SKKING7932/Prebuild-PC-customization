<?php error_reporting(0); ?><!--
<?php session_start(); ?><!--
START: Sign Form

Additional Classes:
.nk-sign-form-light
-->
<div class="nk-sign-form" >
    <div class="nk-gap-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3">
                <div class="nk-sign-form-container">
                    <div class="nk-sign-form-toggle h3">
                        <a href="#" class="nk-sign-form-login-toggle active">Log In</a>
                        <a href="#" class="nk-sign-form-register-toggle">Register</a>
                    </div>
                    <div class="nk-gap-2" ></div>

                    <!-- START: Login Form -->
                    <span id="LGF" class="nk-sign-form-login active" >
                        <input class="form-control" name="EmailId"    type="text" placeholder="Enter Email" id="Lemail" required>
                        <span class="err" id="Lemmessage"></span>

                        <div class="nk-gap-2"> </div>

                      <input class="form-control" type="password" name="Password" placeholder="Enter Password" id="Lpassword" required>
<span class="err" id="Lpsmessage"></span>
<input type="checkbox" id="showPassword"> Show Password

<script>
// Get references to the input field and the show password checkbox
var passwordInput = document.getElementById("Lpassword");
var showPasswordCheckbox = document.getElementById("showPassword");

// Add an event listener to the checkbox
showPasswordCheckbox.addEventListener("change", function() {
    if (showPasswordCheckbox.checked) {
        // If the checkbox is checked, show the password in plain text
        passwordInput.type = "text";
    } else {
        // If the checkbox is unchecked, switch back to a password input field
        passwordInput.type = "password";
    }
});
</script>

                     
                          
<div class="input_field captch_box">
    <div class="input-group">
        <input type="text" class="form-control" value="" disabled>
        <button class="refresh_button ion-android-refresh">
            <i class="fa-solid fa-rotate-right"></i>
        </button>
    </div>
</div>
<div class="input_field captch_input">
    <input type="text" class="form-control" placeholder="Enter Captcha" id="captchaInput">
</div>
<p class="text-danger" id="error"></p>

                    

                        <div class="form-check float-left">
                            <!--                            <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                            Remember Me
                                                        </label>-->
                        </div>
                        <div class="nk-gap-2"></div>
                        <div class="nk-gap-2"></div>

                        <button class="nk-btn nk-btn-color-white link-effect-4  float-right" id="Lbutton" name="Lbutton">Log In</button>
                        <div class="nk-gap-2"></div>


                        <div class="clearfix"></div>
                        <div class="nk-gap-1"></div>
                        <a class=" float-right" href="Profile-forgotpassword.php">forgotPassword?</a>
                    </span>
                    <!-- END: Login Form -->


                    <span class="nk-sign-form-register"  id="loginForm"   >
                        <input type="text" class="form-control" name="username" placeholder="Username" id="username" required>
<!--                        <input class="form-control" type="text" placeholder="Username">-->
                        <span class="err" id="Usrmessage"></span>

                        <div class="nk-gap-2"></div>



                        <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number" id="phoneNumber" maxlength="10" required>
                        <span class="err" id="phnmessage"></span>

                        <div class="nk-gap-2"></div>


                        <input type="text" class="form-control" name="address" placeholder="Address" id="address" required>
                        <span class="err" id="addmessage"></span>

                        <div class="nk-gap-2"></div>
                        <input type="email" class="form-control" name="email" id="email"  placeholder="Email" required>
                        <span class="err" id="emmessage"></span>

                        <div class="nk-gap-2"></div>

                        <input type="password" class="form-control"  id="password"  name="password" placeholder="Password" required>
                        <span class="err" id="psmessage"></span>

                        <div class="nk-gap-2"></div>





<!--                        <input class="form-control" type="text" id="VEROTP"  name="VEROTP" placeholder="OTP">-->
                        <div id="OTP-con" style="display: none;">
                            <input type="text" id="EOTP" name="EOTP" placeholder="Enter OTP" class="form-control" maxlength="6" required>
                            <span class="err"  id="message"></span>

                            <button class="nk-btn nk-btn-color-white link-effect-4 float-right" id="SBOTP" name="SBOTP" >Submit OTP / Register</button>

                        </div>
                        <div class="nk-gap-2"></div>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div id="OTP-btn" class="login-form-btn-container">
                            <button class="nk-btn nk-btn-color-white link-effect-4 float-right"   name="SOTP" id="SOTP">Send OTP</button>
                        </div>



                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right" name="RESTOTP" id="RESTOTP" >Resend OTP</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
</div>
<!-- END: Sign Form -->
 <?php


// Check if the captcha session variable is not set
//if (!isset($_SESSION["captchaText"])) {
//    // Generate a new captcha and set it in the session
//    $captchaText = generateCaptcha(); // Assuming you have a function to generate a captcha
//    $_SESSION["captchaText"] = $captchaText;
//}

// Now you can use $_SESSION["captchaText"] in your form
?>
<script>
    $(document).ready(function () {
        $("#RESTOTP").on("click", function () {
            // Perform validation for the OTP send button
            var valid = true;

            // Validate username
            var username = $("#username").val();
            if (username.trim() === "") {
                valid = false;
                $("#Usrmessage").text("Username is required.");
            } else {
                $("#Usrmessage").hide();
            }

            // Validate phone number
            var phoneNumber = $("#phoneNumber").val();
            if (phoneNumber.trim() === "") {
                valid = false;
                $("#phnmessage").text("Phone Number is required.");
            } else if (!/^\d{10}$/.test(phoneNumber)) {
                valid = false;
                $("#phnmessage").text("Please enter a valid 10-digit phone number.");
            } else {
                $("#phnmessage").hide();
            }

            // Validate address
            var address = $("#address").val();
            if (address.trim() === "") {
                valid = false;
                $("#addmessage").text("Address is required.");
            } else {
                $("#addmessage").hide();
            }


            // Validate email
            var email = $("#email").val();
            if (email.trim() === "") {
                valid = false;
                $("#emmessage").text("Email is required.");
            } else if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email)) {
                valid = false;
                $("#emmessage").text("Please enter a valid email address.");
            } else {
                $("#emmessage").hide();
            }


            // Validate password
            var password = $("#password").val();
            if (password.length < 1) {
                valid = false;
                $("#psmessage").text("Password is required.");
            } else if (password.length < 6) {
                valid = false;
                $("#psmessage").text("Password should be at least 6 characters long.");
            } else {
                $("#psmessage").hide();
            }

            if (valid) {
                $("#message").text("");

                var email = $("#email").val();
                $.ajax({
                    url: "send_otp.php",
                    method: "POST",
                    data: {email: email},
                    success: function (response) {
                        //                               $("#message").text("OTP Sent Successful");
                        $("#message").html(response);

                        $("#OTP-btn").hide();

                        $("#OTP-con").show();
                    }

                });
            }
        });

       
    });
</script>

   
<script>
    $(document).ready(function () {
        $("#SOTP").on("click", function () {
            // Perform validation for the OTP send button
            var valid = true;

            // Validate username
            var username = $("#username").val();
            if (username.trim() === "") {
                valid = false;
                $("#Usrmessage").text("Username is required.");
            } else {
                $("#Usrmessage").hide();
            }

            // Validate phone number
            var phoneNumber = $("#phoneNumber").val();
            if (phoneNumber.trim() === "") {
                valid = false;
                $("#phnmessage").text("Phone Number is required.");
            } else if (!/^\d{10}$/.test(phoneNumber)) {
                valid = false;
                $("#phnmessage").text("Please enter a valid 10-digit phone number.");
            } else {
                $("#phnmessage").hide();
            }

            // Validate address
            var address = $("#address").val();
            if (address.trim() === "") {
                valid = false;
                $("#addmessage").text("Address is required.");
            } else {
                $("#addmessage").hide();
            }


            // Validate email
            var email = $("#email").val();
            if (email.trim() === "") {
                valid = false;
                $("#emmessage").text("Email is required.");
            } else if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email)) {
                valid = false;
                $("#emmessage").text("Please enter a valid email address.");
            } else {
                $("#emmessage").hide();
            }


            // Validate password
            var password = $("#password").val();
            if (password.length < 1) {
                valid = false;
                $("#psmessage").text("Password is required.");
            } else if (password.length < 6) {
                valid = false;
                $("#psmessage").text("Password should be at least 6 characters long.");
            } else {
                $("#psmessage").hide();
            }

            if (valid) {
                $("#message").text("");

                var email = $("#email").val();
                $.ajax({
                    url: "send_otp.php",
                    method: "POST",
                    data: {email: email},
                    success: function (response) {
                        //                               $("#message").text("OTP Sent Successful");
                        $("#message").html(response);

                        $("#OTP-btn").hide();

                        $("#OTP-con").show();
                    }

                });
            }
        });

        $("#SBOTP").on("click", function () {
            // Perform validation for the OTP submit button
            var validOTP = true;

            // Validate OTP
            var otp = $("#EOTP").val();
            if (!/^\d{6}$/.test(otp)) {
                validOTP = false;
                $("#message").text("Please enter a valid 6-digit OTP.");
            } else {
            }

            if (validOTP) {
                $("#message").text("");

                var otp = $("#EOTP").val();
                var username = $("#username").val();
                var password = $("#password").val();
                var email = $("#email").val();
                var address = $("#address").val();
                var phoneNumber = $("#phoneNumber").val();

                $.ajax({
                    url: "verify_otp.php",
                    method: "POST",
                    data: {
                        otp: otp,
                        username: username,
                        password: password,
                        email: email,
                        address: address,
                        phoneNumber: phoneNumber
                    },
                    success: function (response) {
                        $("#message").html(response);

                    }
                });

            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $("#Lbutton").on("click", function () {
            // Perform validation for the OTP send button
            var valid = true;
            
            if (!validateCaptcha()) {
        return; // Stop form submission if captcha is not valid
    }
            // Validate email
            var email = $("#Lemail").val();
            if (email.trim() === "") {
                valid = false;
                $("#Lemmessage").text("Email is required.");
            } else if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email)) {
                valid = false;
                $("#Lemmessage").text("Please enter a valid email address.");
            } else {
                $("#Lemmessage").hide();
            }


            // Validate password
            var password = $("#Lpassword").val();
            if (password.length < 1) {
                valid = false;
                $("#Lpsmessage").text("Password is required.");
            } else if (password.length < 6) {
                valid = false;
                $("#Lpsmessage").text("Password should be at least 6 characters long.");
            } else {
                $("#Lpsmessage").hide();
            }

            if (valid) {
                var email = $("#Lemail").val();
                var password = $("#Lpassword").val();

                $.ajax({
                    url: "LoginData.php",
                    method: "POST",
                    data: {
                        email: email,
                        password: password,
                    },
                    success: function (response) {
                                                $("#message").html(response);
                     }

                });
            }
        });
    });
</script>
 <script>
                            // Selecting necessary DOM elements
                            const captchaTextBox = document.querySelector(".captch_box input");
                            const refreshButton = document.querySelector(".refresh_button");
                            const captchaInputBox = document.querySelector(".captch_input input");
                            const message = document.querySelector(".message");
                            const submitButton = document.querySelector("#Login");
                            // Variable to store generated captcha
                            let captchaText = null;

                            // Function to generate captcha
                            const generateCaptcha = () => {
                                const randomString = Math.random().toString(36).substring(2, 7);
                                const randomStringArray = randomString.split("");
                                const changeString = randomStringArray.map((char) => (Math.random() > 0.5 ? char.toUpperCase() : char));
                                captchaText = changeString.join("   ");
                                captchaTextBox.value = captchaText;
                                console.log(captchaText);
                            };

                            const refreshBtnClick = () => {
                                generateCaptcha();
                                captchaInputBox.value = "";
                                captchaKeyUpValidate();
                            };

                            const captchaKeyUpValidate = () => {
//         Toggle submit button disable class based on captcha input field.
                                submitButton.classList.toggle("disabled", !captchaInputBox.value);

                                if (!captchaInputBox.value)
                                    message.classList.remove("active");
                            };

                            // Function to validate the entered captcha
                            const validateCaptcha = () => {
                                captchaText = captchaText
                                        .split("")
                                        .filter((char) => char !== " ")
                                        .join("");
//        message.classList.add("active");
                                // Check if the entered captcha text is correct or not
                                if (captchaInputBox.value === captchaText) {
                                    return true;
                                } else if (captchaInputBox.value == null || captchaInputBox.value == "") {
                                    console.warn("Enter  captcha");
                                    document.querySelector("#error").innerText = "Please enter the captcha";
                                    return false;

                                } else {
                                    console.warn("Invalid captcha");

                                    document.querySelector("#error").innerText = "Please enter valid captcha";
                                    return false;
                                }
                            };

                            // Add event listeners for the refresh button, captchaInputBox, submit button
                            refreshButton.addEventListener("click", refreshBtnClick);
                            captchaInputBox.addEventListener("keyup", captchaKeyUpValidate);

                            // Generate a captcha when the page loads
                            generateCaptcha();

        </script>
