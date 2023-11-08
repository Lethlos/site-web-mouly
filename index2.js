// Variables globales
var compteur = 0 // Compteur qui permettra de savoir sur quelle slide nous sommes
var timer, elements, slides, slideWidth;





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
        const reservationsData = JSON.parse(xmlhttp.responsText);
        console.log(reservationsData);
        const calendar = new FullCalendar.Calendar(calendarElement, {
        initialView: "dayGridMonth",
        events: reservationsData.map(reservation => ({
            title: "Réservation",
            start: reservation.start,
            end: reservation.end
        })),
        });
        calendar.render();
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

    const xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status === 200) {
            const reservationsData = JSON.parse(xmlhttp.responseText);
            console.log(reservationsData);
            const calendar = new FullCalendar.Calendar(calendarElement, {
                initialView: "dayGridMonth",
                events: reservationsData.map(reservation => ({
                    title: "Réservation",
                    start: reservation.start,
                    end: reservation.end
                })),
            });
            calendar.render();
        }
    }

    xmlhttp.open('GET', 'get_calendar.php', true);
    xmlhttp.send();
    
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