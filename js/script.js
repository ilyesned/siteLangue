document.addEventListener("DOMContentLoaded",()=>{

    let mailUser = document.querySelector("#adressMail");
    let passwordUser = document.querySelector("#password");
    
    let verifyText = document.querySelector(".verify")
    let submmit_btn = document.querySelector(".btn_connect")

    let  mail_verif =
        /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    
    
    submmit_btn.addEventListener("click",(e)=>{
        e.preventDefault();
        if((passwordUser.value.length>0)&&(mailUser.value.match(mail_verif))){
            location.href = "./main_page.html";
            localStorage.setItem("adressemail", mailUser.value);
    
        }else
        {
            verifyText.classList.add("verifyShow")
            verifyText.innerText= "Votre adresse mail et votre mot de passe sont incorrects "
        }
    })
})    