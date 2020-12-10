window.addEventListener('load', function(){
    var contactForm = document.getElementById("contact-form");
    
    var firstNameTxt = document.getElementById("first-name-txt");
    var lastNameTxt = document.getElementById("last-name-txt");
    var emailTxt = document.getElementById("email-txt");
    var messageTxt = document.getElementById("message-txt");

    var firstNameValidationMsg = document.getElementById("first-name-validation-msg");
    var lastNameValidationMsg = document.getElementById("last-name-validation-msg");
    var emailValidationMsg = document.getElementById("email-validation-msg");
    var messageValidationMsg = document.getElementById("message-validation-msg");

    contactForm.addEventListener("submit", function(event) {
        if (validate() == false) {
            event.preventDefault();
        }
    });

    function validate() {
        var valid = true;

        clearValidationMsgs();

        if (firstNameTxt.value.length == 0) {
            firstNameValidationMsg.innerHTML = "<div>Please Enter Your First Name</div>";
            valid = false;
        }

        if (lastNameTxt.value.length == 0) {
            lastNameValidationMsg.innerHTML = "<div>Please Enter Your Last Name</div>";
            valid = false;
        }

        if (emailTxt.value.length == 0) {
            emailValidationMsg.innerHTML = "<div>Please Enter Your Email</div>";
            valid = false;
        } else if (validateEmail(emailTxt.value) == false) {
            emailValidationMsg.innerHTML = "<div>Please Enter a Valid Email</div>";
            valid = false;
        }

        if (messageTxt.value.length == 0){
            messageValidationMsg.innerHTML = "<div>Please Enter a Message</div>";
            valid = false;
        }

        return valid;
    }

    function clearValidationMsgs() {
        firstNameValidationMsg.innerHTML = "";
        lastNameValidationMsg.innerHTML = "";
        emailValidationMsg.innerHTML = "";
        messageValidationMsg.innerHTML = "";
    }

    function validateEmail(email) {
        var regExp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regExp.test(email);
    }
});