document.addEventListener('DOMContentLoaded', () => {
  const otpButton = document.getElementById('otp');

  if (otpButton) {
    otpButton.addEventListener('click', () => {
      const phoneInput = document.getElementById('phone');
      const phone = phoneInput.value.trim();

      // Check if field is empty
      if (phone === '') {
        showToastr('error', 'Phone number is required.');
        phoneInput.focus();
        return;
      }

      // Validate 10-digit phone starting from 6-9
      const validPhone = /^[6-9]\d{9}$/.test(phone);
      if (!validPhone) {
        showToastr('error', 'Please enter a valid 10-digit phone number. ');
        phoneInput.focus();
        return;
      }

      // ✅ If valid, open OTP modal
      showToastr('success', 'OTP sent successfully.');
      
      const otpModal = new bootstrap.Modal(document.getElementById('otpModal'));
      setTimeout(()=>otpModal.show(),2000);
      
    });
  }

  // Initialize OTP input handler
  if (document.querySelector('.otp-input')) {
    otpHandler();
  }
});
