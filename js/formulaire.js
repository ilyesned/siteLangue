let level = document.querySelector("#level-select");

level.addEventListener('change', showSelect );

function showSelect(event){

    let value = event.target.value;

    if(value==="1"){
        document.querySelector("#niv-A1A2").style.display= "block";
    }
}