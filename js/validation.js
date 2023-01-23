// pre register
var options = document.querySelectorAll(".options_details");
var radioOptions = document.querySelectorAll(".radio_options");
const role = ["Farmer", "Consumer", "Vendor"];
const chooseProfession = document.getElementById("choose-profession");

for (i = 0; i < radioOptions.length; i++) {
  radioOptions[i].addEventListener("click", activeOption);
}
function activeOption() {
  for (i = 0; i < radioOptions.length; i++) {
    if (radioOptions[i].checked) {
      options[i].classList.add("active");
      var profession = document.getElementById("profession");
      profession.innerHTML = role[i];

      chooseProfession.disabled = false;
    } else {
      options[i].classList.remove("active");
      chooseProfession.disabled = true;
    }
  }
}

//sign up validation
const form = document.getElementById('sign_form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');


form.addEventListener('submit', (e) => {
  e.preventDefault();

  checkInputs();
});
function checkInputs() {
  //get the values from the inputs.
  const usernameValue = username.value.trim();   //Removes the leading and trailing white space and line terminator characters from a string.
  const emailValue = email.value.trim();
  const phoneValue = phone.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();
  var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

  if (usernameValue === '') {
    //show error
    //add error class
    setErrorFor(username, 'Username cannot be blank');
  }
  else {
    //add success class
    setSuccessFor(username);
  }

  if (emailValue === '') {
    setErrorFor(email, 'Email cannot be blank');
  }
  else {
    setSuccessFor(email);
  }
  if (phoneValue === '') {
    setErrorFor(phone, 'Phone no. cannot be blank');
  }
  else if (phoneValue.length !== 10) {
    setErrorFor(phone, 'Enter valid phone number')
  }
  else {
    setSuccessFor(phone);
  }
  if (passwordValue.match(passw)) {
    setSuccessFor(password);
  }
  else if (passwordValue === '') {
    setErrorFor(password, 'Password cannot be blank');
  }
  else {
    setErrorFor(password, 'Minimum eight characters, at least one uppercase letter, one lowercase letter and one number');
  }

  if (password2Value === '') {
    setErrorFor(password2, 'Password2 cannot be blank');
  }
  else if (passwordValue !== password2Value) {
    setErrorFor(password2, 'Password does not match');
  }
  else {
    setSuccessFor(password2);
  }

}
function setErrorFor(input, message) {
  const formControl = input.parentElement;  // points to .form-condrol(here 'input' is child of '.form-control'.
  const small = formControl.querySelector('small');

  //add error class
  formControl.className = 'form-control error';

  //add error message inside small
  small.innerText = message;

}
function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
}

// function isEmail(email) {
//   return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
// }

//password show and hide
function passwordFun() {
  const x = document.getElementById("password");
  const x2 = document.getElementById("password2");
  const hide = document.querySelector(".fa-eye");
  const show = document.querySelector(".fa-eye-slash");

  if (x.type === "password") {
    x.type = "text";
    x2.type = "text";
    
  }
   else {
    x.type = "password";
    x2.type = "password";
    
  }
}




