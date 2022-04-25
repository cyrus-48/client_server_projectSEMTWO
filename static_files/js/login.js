const form = document.querySelector("#log-account-form");
const emailInputSignin = document.querySelector("#email");
const passwordInputSignin = document.querySelector("#password");


// EMAIL
function validateEmail() {
    if (emailInputSignin.value.trim() == "" || emailInputSignin.value.trim().length<2 ) {
        setError(emailInputSignin, "Enter your email");
    }
    else if (passwordInputSignin.value.trim() == "") {
        setError(passwordInputSignin, "Enter your password");
    }
     else {
        setSuccess(emailInputSignin, "");
    }

}
// PASSWORD
function validatePassword() {
    if (passwordInputSignin.value.trim() == "") {
        setError(passwordInputSignin, "Enter your password")
    }
    else if (emailInputSignin.value.trim() == "") {
        setError(emailInputSignin, "Enter your email");
    }
    else {
        setSuccess(passwordInputSignin, "");
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


