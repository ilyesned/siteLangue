let language = document.querySelector("#language-select");

language.addEventListener("change", showLanguage);

function showLanguage(event){

    displayNoneSelect();

    
    
    let value = event.target.value;
    let valueL = event.target.value;

    if(value==="1"){
        document.querySelector("#level-select").style.display= "block";
        if(valueL==="1" || valueL==="2"){
            document.querySelector("#niv-AB1AB2").style.display= "block";
            document.querySelector("#niv-child").style.display= "none";
            document.querySelector("#niv-C1C2").style.display= "none";
        }else if(valueL==="3"){
            document.querySelector("#niv-C1C2").style.display= "block";
            document.querySelector("#niv-child").style.display= "none";
            document.querySelector("#niv-AB1AB2").style.display= "none";
        }else if(valueL==="4"){
            document.querySelector("#niv-child").style.display= "block";
            document.querySelector("#niv-AB1AB2").style.display= "none";
            document.querySelector("#niv-C1C2").style.display= "none";
        }
    }
}



/* let level = document.querySelector("#level-select");

level.addEventListener('change', showLevel );

function showLevel(event){

    let valueL = event.target.value;

    if(valueL==="1" || valueL==="2"){
        document.querySelector("#niv-AB1AB2").style.display= "block";
        document.querySelector("#niv-child").style.display= "none";
        document.querySelector("#niv-C1C2").style.display= "none";
    }else if(valueL==="3"){
        document.querySelector("#niv-C1C2").style.display= "block";
        document.querySelector("#niv-child").style.display= "none";
        document.querySelector("#niv-AB1AB2").style.display= "none";
    }else if(valueL==="4"){
        document.querySelector("#niv-child").style.display= "block";
        document.querySelector("#niv-AB1AB2").style.display= "none";
        document.querySelector("#niv-C1C2").style.display= "none";
    }
} */



function displayNoneSelect(){
    document.querySelector("#niv-child").style.display= "none";
    document.querySelector("#niv-AB1AB2").style.display= "none";
    document.querySelector("#niv-C1C2").style.display= "none";
}