<?php include '../includes/headers.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Vidhayak Sewa Kendra</title>
  <link rel="stylesheet" href="../assets/css/login.css">
<style>

</style>
</head>
<body class="custom-body">

  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card login-card text-center">
      
      <img src="../assets/images/general_images/Bjplogo.jpg" class="img-fluid rounded-circle mx-auto login-logo" alt="Logo">
      
      <h2 class="login-title" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #FF4500;">
        Vidhayak Sewa Kendra
      </h2>

      <div class="form-wrapper">
        <h3 class="form-heading" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #333;">
          Login with Phone
        </h3>
        
        <form action="#" method="POST"> <!-- Temporary # to prevent redirect -->
          <div class="mb-3 text-start">
            <label for="phone" class="form-label fw-semibold mt-2" style="font-family: 'Poppins', sans-serif;">Enter Phone Number</label>
            <input type="tel" id="phone" name="phone" 
                   class="form-control border-0 border-bottom border-black rounded-0 bg-transparent mb-5" 
                   placeholder="+91 9900000000" 
                   maxlength="10"
                   pattern="^[6-9]\d{9}$" 
                   title="Please enter a valid 10-digit phone number starting with 6-9" 
                   required>
          </div>
          
          <!-- Trigger Modal -->
          <button type="button" class="btn w-100 login-btn" id="otp">
            Send OTP
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- OTP Modal -->
  <div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 450px;"> <!-- Adjusted width -->
      <div class="modal-content p-4" style="border-radius: 20px; background: #fff5f2; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);">
        <div class="modal-header border-0">
          <h5 class="modal-title text-center w-100" id="otpModalLabel" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #FF4500;">
            Verify Your OTP
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="verify-otp.php" method="POST">
            <div class="d-flex justify-content-center gap-2 mb-4">
              <input type="text" maxlength="1" name="otp[]" class="otp-input text-center form-control border-0 border-bottom border-black rounded-0 bg-transparent" required>
              <input type="text" maxlength="1" name="otp[]" class="otp-input text-center form-control border-0 border-bottom border-black rounded-0 bg-transparent" required>
              <input type="text" maxlength="1" name="otp[]" class="otp-input text-center form-control border-0 border-bottom border-black rounded-0 bg-transparent" required>
              <input type="text" maxlength="1" name="otp[]" class="otp-input text-center form-control border-0 border-bottom border-black rounded-0 bg-transparent" required>
              <input type="text" maxlength="1" name="otp[]" class="otp-input text-center form-control border-0 border-bottom border-black rounded-0 bg-transparent" required>
              <input type="text" maxlength="1" name="otp[]" class="otp-input text-center form-control border-0 border-bottom border-black rounded-0 bg-transparent" required>
            </div>
            <button type="submit" class="btn w-100" style="background: linear-gradient(to right, #FF7E5F, #FD3A69); color: white; font-weight: 600; border-radius: 50px;">
              Verify OTP
            </button>
            <p class="text-center mt-2">Resend</p>
          </form>
        </div>
      </div>
    </div>
  </div>

<script src="../assets/js/login.js"></script>
  <?php include '../includes/footers.php' ?>
</body>
</html>
