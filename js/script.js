document.addEventListener("DOMContentLoaded", function() {
   // Selecting the profile element
   let profile = document.querySelector('.header .flex .profile');

   // Check if user-btn element exists
   let userBtn = document.querySelector('#user-btn');
   if (userBtn) {
       // Toggle profile active class on user-btn click
       userBtn.onclick = () => {
           profile.classList.toggle('active');
       };
   } else {
       console.error('Element with ID user-btn not found');
   }

   // Hide profile when scrolling
   window.onscroll = () => {
       profile.classList.remove('active');
   };

   // Limit input number length
   document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
       inputNumber.oninput = () => {
           if (inputNumber.value.length > inputNumber.maxLength) {
               inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);
           }
       };
   });
});
