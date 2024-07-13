function sendOTP() {
  const email = document.getElementById('EmailId').value;

  // Send the email to the server using AJAX
  // For simplicity, we assume the server-side endpoint is named 'send_otp.php'
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      document.getElementById('FORM').style.display = 'block';
      document.getElementById('message').innerText = 'OTP sent to your email. Please check and enter the OTP below.';
    }
  };
  xhr.open('POST', 'send_otp.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send('email=' + email);
}

function verifyOTP() {
  const email = document.getElementById('email').value;
  const otp = document.getElementById('otp').value;

  // Verify the OTP on the server using AJAX
  // For simplicity, we assume the server-side endpoint is named 'verify_otp.php'
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState === 4) {
      if (this.status === 200) {
        document.getElementById('message').innerText = 'Login successful!'; // Replace with desired action after successful login
      } else {
        document.getElementById('message').innerText = 'Invalid OTP. Please try again.';
      }
    }
  };
  xhr.open('POST', 'verify_otp.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send('email=' + email + '&otp=' + otp);
}
