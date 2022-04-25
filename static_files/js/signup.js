 
const form = document.querySelector("#form-details");
const firstNameInput = document.querySelector("#firstname");
const secondNameInput = document.querySelector("#secondname");
const emailInputSignup = document.querySelector("#email");
const passwordInputSignup = document.querySelector("#password");
const confirmPasswordInput = document.querySelector("#confirmpassword");
const genderInput = document.querySelector("#gender");
const countryInput = document.querySelector("#country");
const countyInput = document.querySelector("#county");

 


function validateFirstName() {
    // FIRSTNAME
    if (firstNameInput.value.trim() == "") {
        setError(firstNameInput, "THis field cannot be blank");
    }
    else  {
        setSuccess(firstNameInput, "valid");
    }
}
// SECONDNAME
function validateSecondName() {
    if (secondNameInput.value.trim() == "") {
        setError(secondNameInput, "This field cannot be blank")
    }
    else {
        setSuccess(secondNameInput, "valid");
    }
}
// GENDER
function validateGender() {
    if (genderInput.value.trim() == "") {
        setError(genderInput, "This field cannot be blank")
    }
    else {
        setSuccess(genderInput, "valid");
    }
}
// COUNTRY
function validateCountry() {
    if (countryInput.value.trim() == "") {
        setError(countryInput, "This field cannot be blank")
    }
    else {
        setSuccess(countryInput, "valid");
    }
}
// COUNTY
function validateCounty() {
     if (countyInput.value.trim() == "") {
        setError(countyInput, "You must choose your county")
    }
    else {
        setSuccess(countyInput, "valid");
    }
   }
// EMAIL
function validateEmail() {
    if (emailInputSignup.value.trim() == "") {
        setError(emailInputSignup, "Enter a valid email");
    }
    else if (emailInputSignup.value.trim().length<4) {
        setError(emailInputSignup, "Enter a correct enail address");
    }
     else {
        setSuccess(emailInputSignup, "valid");
    }

}
// PASSWORD
function validatePassword() {
    if (passwordInputSignup.value.trim() == "") {
        setError(passwordInputSignup, "Enter a strong password")
    }
    else if (passwordInputSignup.value.trim().length < 5 || passwordInputSignup.value.trim().length > 15) {
        setError(passwordInputSignup, "Your password must be greater than 5 and less than 15 characters long");
    }
    else {
        setSuccess(passwordInputSignup, "valid");
    }
}

// CONFIRM PASSWORD
function validateConfirmPassword() {
    if (confirmPasswordInput.value.trim() != passwordInputSignup.value.trim()) {
        setError(confirmPasswordInput, "The password do not match");
    }
    else if (passwordInputSignup.value.trim() == "") {
        setError(confirmPasswordInput, "This field cannot be blank!");
    }
    else if (confirmPasswordInput.value.trim() == "") {
        setError(confirmPasswordInput, "Password can't be Empty");
    }
    else {
        setSuccess(confirmPasswordInput, "valid");
    }

}

// switching the classes to facilitate validation
function setError(element, errorMessage) {
    const parent = element.parentElement;
    if (parent.classList.contains("success")) {
        parent.classList.remove("success");
    }
    parent.classList.add("error");
    const paragraph = parent.querySelector("p");
    paragraph.textContent = errorMessage;
}
function setSuccess(element, errorMessage) {
    const parent = element.parentElement;
    if (parent.classList.contains("error")) {
        parent.classList.remove("error");
    }
    parent.classList.add("success");
    const paragraphSuccess = parent.querySelector("p");
    paragraphSuccess.textContent = errorMessage;
}


