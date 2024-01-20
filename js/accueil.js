const visitors = document.querySelector("#visitors");

window.onload = function() {
    visitors.textContent = "Nombre de visiteurs: " + (Math.floor(Math.random() * (100 - 5 + 1)) + 5);
}
