
const inputs = document.querySelectorAll('.input') ;

function focusFunc() {
 let parent = this.parentNode.parentNode;
 parent.classList.add('focus') ;
}
function  blurFunc() {
 let parent = this.parentNode.parentNode;
 if(this.value == "") {
    parent.classList.remove('focus') ;

 }
}
inputs.forEach(input => {
    input.addEventListener('focus' , focusFunc ) ;
    input.addEventListener('blur' , blurFunc ) ;
} )



// const form = document.querySelector('form');
// const fnameInput = document.querySelector('input[name="Username"]');
// const lnameInput = document.querySelector('input[name="LastName"]');
// const emailInput = document.querySelector('input[name="Email"]');
// const passwordInput = document.querySelector('input[name="Password"]');
// const bpdInput = document.querySelector('input[name="DateofBirth"]');

// form.addEventListener('submit', function(event) {
//   let isValid = true;

//   // Validate First Name
//   if (fnameInput.value.trim() === '') {
//     isValid = false;
//     document.getElementById('errorfname').innerHTML='invilde name';

//  }

//   // Validate Last Name
//   if (lnameInput.value.trim() === '') {
//     isValid = false;
//     // alert('Last Name is required.');
//   }

//   // Validate Email
//   const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
//   if (!emailRegex.test(emailInput.value)) {
//     isValid = false;
//     // alert('Please enter a valid email address.');
//   }

//   // Validate Password
//   if (passwordInput.value.length < 8) {
//     isValid = false;
//     // alert('Password should be at least 8 characters.');
//   }

//   // Validate BPD (assuming BPD is some kind of input)
//   if (bpdInput.value.trim() === '') {
//     isValid = false;
//     // alert('BPD is required.');
//   }

//   if (!isValid) {
//     // event.preventDefault(); // Prevent form submission if any input is invalid
//   }
// });
