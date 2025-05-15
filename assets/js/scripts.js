// assets/js/global.js
// JS for login page
// Show Toastr messages
function showToastr(type, message) {
    if (type === 'success') {
      toastr.success(message);
    } else {
      toastr.error(message);
    }
  }
  
  // Handle numeric-only OTP inputs globally
  function otpHandler(selector = '.otp-input') {
    const inputs = document.querySelectorAll(selector);
    
    inputs.forEach((input, index) => {
      input.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/, '');
        if (e.target.value && index < inputs.length - 1) {
          inputs[index + 1].focus();
        }
      });
  
      input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace') {
          if (input.value === '') {
            if (index > 0) {
              inputs[index - 1].focus();
              inputs[index - 1].value = '';
              e.preventDefault();
            }
          } else {
            input.value = '';
          }
        }
      });
  
      input.addEventListener('paste', (e) => {
        e.preventDefault();
        const pasteData = (e.clipboardData || window.clipboardData).getData('text').trim().slice(0, inputs.length);
        pasteData.split('').forEach((char, i) => {
          if (/\d/.test(char)) {
            inputs[i].value = char;
          }
        });
        if (pasteData.length === inputs.length) {
          inputs[inputs.length - 1].focus();
        } else {
          inputs[pasteData.length].focus();
        }
      });
    });
  }
  
  // Export for page-specific usage
  document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.otp-input')) {
      otpHandler();
    }
  });
  