const body = document.body;
let size = 100;

const dark = document.getElementById('knop-donker');
const larger = document.getElementById('knop-groter');
const reset = document.getElementById('knop-herstel');
const contrast = document.getElementById('knop-contrast');
const menu = document.getElementById("menu-knop");
const nav = document.getElementById("navigatie");

if(menu && nav) {
    menu.onclick = function() {
        nav.classList.toggle("toon-menu");
    };
}

if(dark){
    dark.onclick = () => body.classList.toggle('donker-modus');
}

if(larger){
    larger.onclick = () => {
        size += 10;
        body.style.fontSize = size + '%';
    };
}

if(contrast){
    contrast.onclick = () => {
        console.log("Hoog contrast geactiveerd");
        body.classList.toggle('hoog-contrast');
    };
}

if(reset){
    reset.onclick = () => {
        size = 100;
        body.style.fontSize = '100%';
        body.classList.remove('donker-modus', 'hoog-contrast');
    };
}