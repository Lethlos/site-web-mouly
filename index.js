// On récupère le conteneur principal du diaporama
const diapo = document.getElementById("diapo");

// On récupère le conteneur de tous les éléments
elements = document.getElementById("elements");

// On récupère un tableau contenant la liste des diapos
slides = Array.from(elements.children);

// On récupère les deux flèches
let login = document.getElementById("login");
let next = document.getElementById("nav-droite");
let prev = document.getElementById("nav-gauche");

// Variables globales
let compteur = 0 // Compteur qui permettra de savoir sur quelle slide nous sommes
let timer, elements, slides, slideWidth;

// On calcule la largeur visible du diaporama
slideWidth = diapo.getBoundingClientRect().width;

// On met en place les écouteurs d'évènements sur les flèches
login.addEventListener("click", slideNext);
next.addEventListener("click", slideNext);
prev.addEventListener("click", slidePrev);


/**
 * Cette fonction fait défiler le diaporama vers la droite
 */
function slideNext(){
		alert("Bouton cliqué depuis le js !");
		/*
    // On incrémente le compteur
    compteur++;

    // Si on dépasse la fin du diaporama, on "rembobine"
    if(compteur == slides.length){
        compteur = 0;
    }

    // On calcule la valeur du décalage
    let decal = -slideWidth * compteur;
    elements.style.transform = `translateX(${decal}px)`;
	*/
}

/**
 * Cette fonction fait défiler le diaporama vers la gauche
 */
function slidePrev(){
    // On décrémente le compteur
    compteur--

    // Si on dépasse le début du diaporama, on repart à la fin
    if(compteur < 0){
        compteur = slides.length - 1
    }

    // On calcule la valeur du décalage
    let decal = -slideWidth * compteur
    elements.style.transform = `translateX(${decal}px)`
	alert("Bouton cliqué !");
}

// Automatiser le diaporama
timer = setInterval(slideNext, 4000)


// Gérer le survol de la souris
diapo.addEventListener("mouseover", stopTimer)
diapo.addEventListener("mouseout", startTimer)

/**
 * On stoppe le défilement
 */
function stopTimer(){
    clearInterval(timer)
}

/**
 * On redémarre le défilement
 */
function startTimer(){
    timer = setInterval(slideNext, 4000)
}

// Mise en oeuvre du "responsive"
window.addEventListener("resize", () => {
    slideWidth = diapo.getBoundingClientRect().width
    slideNext()
})