const loginPopup = document.getElementById("loginPopup");
const overlay = document.getElementById("overlay");

function openPopup() {
    loginPopup.style.display = "block";
    overlay.style.display = "block";
}

function closePopup() {
    loginPopup.style.display = "none";
    overlay.style.display = "none";
}

openPopup();