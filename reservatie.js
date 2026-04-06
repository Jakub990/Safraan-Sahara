document.getElementById("reservatieForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const button = this.querySelector("button");
    button.style.display = "none";

    const message = document.createElement("p");
    message.textContent = "Reservering is gelukt";

    this.appendChild(message);
});