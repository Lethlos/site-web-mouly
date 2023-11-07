// Variables globales
var compteur = 0 // Compteur qui permettra de savoir sur quelle slide nous sommes
var timer, elements, slides, slideWidth;


document.addEventListener("DOMContentLoaded", function () {
    let tel = document.getElementById("phone-number");
    let mail = document.getElementById("mail-adress");
    tel.addEventListener("click", function () {
        copy(tel.textContent.trim().replace("Tel : ", ''));
    });
    mail.addEventListener("click", function () {
        copy(mail.textContent.trim().replace("Mail : ", ''));
    });
});
function copy(cop_value) {
    const tempInput = document.createElement("input");
    tempInput.value = cop_value;
    // Ajoutez l'élément temporaire à la document
    document.body.appendChild(tempInput);
    // Sélectionnez le texte dans l'élément temporaire
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // Pour certains navigateurs mobiles
    // Copiez le texte dans le presse-papiers
    document.execCommand("copy");
    // Supprimez l'élément temporaire
    document.body.removeChild(tempInput);
    // Affichez une notification ou un message pour informer l'utilisateur que le numéro a été copié
    alert(cop_value + " copié dans le presse-papiers.");
}


/**
 * Cette fonction fait défiler le diaporama vers la droite
 */
function slideNext(){
    // On incrémente le compteur
    compteur++;

    // Si on dépasse la fin du diaporama, on "rembobine"
    if(compteur == slides.length){
        compteur = 0;
    }

    // On calcule la valeur du décalage
    let decal = -slideWidth * compteur;
    elements.style.transform = `translateX(${decal}px)`;
}

/**
 * Cette fonction fait défiler le diaporama vers la gauche
 */
function slidePrev(){
    // On décrémente le compteur
    compteur--;

    // Si on dépasse le début du diaporama, on repart à la fin
    if(compteur < 0){
        compteur = slides.length - 1;
    }

    // On calcule la valeur du décalage
    let decal = -slideWidth * compteur;
    elements.style.transform = `translateX(${decal}px)`;
}

function load_calendar(xhr){
    if (xhr.status === 200) {
        const data = xhr.response;
        const calendar = new FullCalendar.Calendar(calendarElement, {
        initialView: "dayGridMonth",
        events: data.map(reservation => ({
            title: "Réservation",
            start: reservation.start,
            end: reservation.end
        })),
        });
        calendar.render();
    } else {
        console.error('Erreur lors de la récupération des données :', xhr.statusText);
    }
}

// Simuler des données de calendrier (remplacez ceci par les données de votre base de données)
const reservations = [
    { start: "2023-11-05", end: "2023-11-10" },
    { start: "2023-11-15", end: "2023-11-20" },
    // Ajoutez d'autres réservations ici
  ];




document.addEventListener("DOMContentLoaded", function () {

    const calendarElement = document.getElementById("calendar");

    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_calendar.php', true);
    xhr.responseType = 'json';

    xhr.onload = load_calendar(xhr);
    
    // On récupère le conteneur principal du diaporama
    const diapo = document.querySelector(".diapo");


    // On récupère les deux flèches
    let next = document.querySelector("#nav-droite");
    let prev = document.querySelector("#nav-gauche");

    // On récupère le conteneur de tous les éléments
    elements = document.querySelector(".elements");


    // On récupère un tableau contenant la liste des diapos
    slides = Array.from(elements.children)


    // On calcule la largeur visible du diaporama
    slideWidth = diapo.getBoundingClientRect().width;
    
    // On met en place les écouteurs d'évènements sur les flèches
    next.addEventListener("click", slideNext);
    prev.addEventListener("click", slidePrev);

    // Mise en oeuvre du "responsive"
    window.addEventListener("resize", () => {
        slideWidth = diapo.getBoundingClientRect().width;
        slideNext();
    })
});