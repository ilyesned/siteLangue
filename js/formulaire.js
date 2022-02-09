let level = document.querySelector("#level-select");

level.addEventListener('change', showSelect );

function showSelect(event){

    let value = event.target.value;

    if(value==="1" || value==="2"){
        document.querySelector("#niv-AB1AB2").style.display= "block";
        document.querySelector("#niv-child").style.display= "none";
        document.querySelector("#niv-C1C2").style.display= "none";
    }else if(value==="3"){
        document.querySelector("#niv-C1C2").style.display= "block";
        document.querySelector("#niv-child").style.display= "none";
        document.querySelector("#niv-AB1AB2").style.display= "none";
    }else if(value==="4"){
        document.querySelector("#niv-child").style.display= "block";
        document.querySelector("#niv-AB1AB2").style.display= "none";
        document.querySelector("#niv-C1C2").style.display= "none";
    }
}

let language = document.querySelector("#language-select");

language.addEventListener("change", showLevel);

function showLevel(event){
    let value = event.target.value;
    /* Je n'ai pas réussi à faire disparaitre le menu deroulant du niveau
    d'anglais */
    if(value==="2"){
        document.querySelector("#niv-portu").style.display= "block";
    }
}