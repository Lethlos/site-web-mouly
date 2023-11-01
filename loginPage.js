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

function checkLogin() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Remplacez cette condition par la vérification réelle du login et du mot de passe
    if (username === "votre_nom_d_utilisateur" && password === "votre_mot_de_passe") {
        alert("Login réussi !");
        closePopup();
    } else {
        alert("Login échoué. Veuillez réessayer.");
    }
}

openPopup();