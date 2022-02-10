var login = document.forms['form']['login'];
var password = document.forms['form']['password'];

var login_error = document.getElementById('login_error');
var password_error = document.getElementById('password_error');
var identifiant_error = document.getElementById('identifiant_error');

function validated(){
    let enterIdentifiant = identifiant.value;
    let enterPassword = password.value;

    if (enterIdentifiant!="bobo" && enterPassword!="123456") {
        login.style.border = "1px solid red";
        password.style.border = "1px solid red";
        identifiant_error.style.display = "block";
        return false;
    }

    if (enterIdentifiant!="bobo") {
        login.style.border = "1px solid red";
        login_error.style.display = "block";
        password_error.style.display = "none";
        identifiant_error.style.display = "block";
        login.focus();
        return false;
    }
    
    if (enterPassword!="123456") {
        password.style.border = "1px solid red";
        password_error.style.display = "block";
        login_error.style.display = "none";
        identifiant_error.style.display = "block";
        password.focus();
        return false;
    }
}