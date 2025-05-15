 // OTP VALIDATION
 document.getElementById('otp').addEventListener('click', function () {
    const phoneInput = document.getElementById('phone');
    const phone = phoneInput.value;
    const pattern = /^[6-9]\d{9}$/;

    if (!pattern.test(phone)) {
      showToastr('error');
      phoneInput.focus();
    } else {
      showToastr('success');
     
      // Trigger OTP modal if valid
      const otpModal = new bootstrap.Modal(document.getElementById('otpModal'));
       setTimeout(()=>{otpModal.show()}, 1000)
      
    }
  });

  function showToastr(type) {
    if (type === 'success') {
      toastr.success('Phone number is valid. OTP sent successfully!');
    } else {
      toastr.error('Invalid phone number! Please enter a valid 10-digit phone number starting with 6-9.');
    }
  }

  // OTP FOCUS CHANGE
 
  const inputs=document.querySelectorAll('.otp-input');
inputs.forEach((input,index)=>{
input.addEventListener('input',(e)=>{
e.target.value=e.target.value.replace(/\D/, '');
if(e.target.value&&index<inputs.length-1){
    inputs[index+1].focus();
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
