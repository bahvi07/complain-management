<?php include '../complain-management/includes/headers.php'; ?>
<!-- No extra <body> tag here -->

<div class="splash-wrapper">
  <img class="splash-logo" src="../complain-management/assets/images/general_images/Bjplogo.jpg" alt="Logo">
  <p class="splash-tagline">Welcome to Vidhayak Seva Kendra</p>
</div>

<?php include '../complain-management/includes/footers.php'; ?>

<!-- Splash Redirect Script -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
      document.querySelector('.splash-logo').classList.add('fade-out');
      document.querySelector('.splash-wrapper').style.opacity = '0';

      setTimeout(() => {
        window.location.href = "auth/login.php";
      }, 1000);
    }, 2000);
  });
</script>
