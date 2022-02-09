var login = document.forms['form']['login'];
var password = document.forms['form']['password'];

var login_error = document.getElementById('login_error');
var password_error = document.getElementById('password_error');
var identifiant_error = document.getElementById('identifiant_error');

let identifiantBox = document.querySelector('#identifiant');
identifiantBox.addEventListener('keyup', function(){
    let enterIdentifiant = identifiant.value;
    if(enterIdentifiant==="bobo"){
        login.style.border = "1px solid sliver";
        login_error.style.display = "none";
        return true;
    }
});

let passwordBox = document.querySelector('#password');
passwordBox.addEventListener('keyup', function(){
    let enterPassword = password.value;
    if(enterPassword==="123456"){
        login.style.border = "1px solid sliver";
        login_error.style.display = "none";
        return true;
    }
});

function validated(){
    let enterIdentifiant = identifiant.value;
    let enterPassword = password.value;

    if (enterIdentifiant!="bobo") {
        login.style.border = "1px solid red";
        identifiant_error.style.display = "block";
        login.focus();
        return false;
    }
    if (enterPassword!="123456" ) {
        password.style.border = "1px solid red";
        identifiant_error.style.display = "block";
        password.focus();
        return false;
    }
}