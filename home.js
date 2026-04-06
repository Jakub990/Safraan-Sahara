let fotos = ["images/couch.png", "images/food.png", "images/seats.png"];
let dots = document.getElementsByClassName("dot");
let huidigeIndex = 0; 

function toon(n) {
    huidigeIndex = n;

    let displayAfbeelding = document.getElementById("dia");
    displayAfbeelding.src = fotos[n];

    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active");
    }
    dots[n].classList.add("active");
}

function volgendeFoto() {
    huidigeIndex++;
    
    if (huidigeIndex >= fotos.length) {
        huidigeIndex = 0;
    }
    
    toon(huidigeIndex);
}

setInterval(volgendeFoto, 3000);

toon(0);