<?php include '../includes/headers.php'; ?>
<link rel="stylesheet" href="../assets/css/login.css">

<body class="login-page">

  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card login-card text-center">

      <img src="../assets/images/general_images/Bjplogo.jpg" class="img-fluid rounded-circle mx-auto login-logo" alt="Logo">

      <h2 class="login-title">
        Vidhayak Sewa Kendra
      </h2>

      <div class="form-wrapper">
        <h3 class="form-heading">
          Login with Phone
        </h3>

        <form action="#" method="POST">
          <div class="mb-3 text-start">
            <label for="phone" class="form-label fw-semibold mt-2">Enter Phone Number</label>
            <input type="tel" id="phone" name="phone" class="form-control border-0 border-bottom border-black rounded-0 bg-transparent mb-5" placeholder="+91 9900000000" maxlength="10" pattern="^[6-9]\d{9}$" title="Please enter a valid 10-digit phone number starting with 6-9" required>
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
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4">
        <div class="modal-header border-0">
          <h5 class="modal-title w-100 text-center text-orange" id="otpModalLabel">
            Verify Your OTP
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="verify-otp.php" method="POST">
            <div class="d-flex justify-content-center gap-2 mb-4">
              <?php for ($i = 0; $i < 6; $i++) : ?>
                <input type="text" maxlength="1" name="otp[]" class="otp-input text-center form-control border-0 border-bottom border-black rounded-0 bg-transparent" required>
              <?php endfor; ?>
            </div>
            <button type="submit" class="btn w-100 bg-orange-gradient btn-rounded">
              Verify OTP
            </button>
            <p class="text-center mt-2">Resend</p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/js/login.js"></script>
  <?php include '../includes/footers.php'; ?>
</body>

</html>