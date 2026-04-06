let currentDate = new Date();
let currentHour = currentDate.getHours();
let myMessage = document.getElementById("message");

function checkOpeningStatus() {
    if (currentHour >= 10 && currentHour < 23) {
        myMessage.style.color = "green";
        myMessage.innerHTML = "Het restaurant is nu geopend!";
    } else {
        myMessage.style.color = "red";
        myMessage.innerHTML = "Het restaurant is nu gesloten!";
    }
}

checkOpeningStatus();