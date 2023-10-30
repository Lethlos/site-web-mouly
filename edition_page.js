var errCP = "";

document.addEventListener("DOMContentLoaded", function () {
    const inputBed = document.getElementById("inputBed");
    const inputPlace = document.getElementById("inputPlace"); 
    const inputRoom = document.getElementById("inputRoom");

    const inputPriceWeek = document.getElementById("inputPriceWeek");
    const inputPriceNight = document.getElementById("inputPriceNight"); 
    const inputPriceHighWeek = document.getElementById("inputPriceHighWeek");
    const inputPriceHighNight = document.getElementById("inputPriceHighNight");

    const inputCP = document.getElementById("inputCP");

    const inputNumTel = document.getElementById("inputNumTel");
    const inputMail = document.getElementById("inputMail");
    const inputX = document.getElementById("inputX");
    const inputInsta = document.getElementById("inputInsta");
    const inputFacebook = document.getElementById("inputFacebook")

    const boutonEnvoi = document.getElementById("boutonEnvoi");

    inputBed.addEventListener("input", justNumber);
    inputPlace.addEventListener("input", justNumber);
    inputRoom.addEventListener("input", justNumber);

    inputPriceWeek.addEventListener("input", justNumber);
    inputPriceNight.addEventListener("input", justNumber);
    inputPriceHighWeek.addEventListener("input", justNumber);
    inputPriceHighNight.addEventListener("input", justNumber);

    inputCP.addEventListener("input", justValidCP);
    inputCP.addEventListener("blur", testValidCP);

    inputNumTel.addEventListener("input", justNumTel);
    inputNumTel.addEventListener("blur", testValidNumTel);
    inputMail.addEventListener("input", justMail);
    inputMail.addEventListener("blur", testValidMail);
    inputX.addEventListener("input", justX);
    inputInsta.addEventListener("input", justInsta);
    inputFacebook.addEventListener("input", justFacebook);
    inputFacebook.addEventListener("blur", testValidFacebook);

    boutonEnvoi.addEventListener("click", SaveDocument);
    
  });


/**
 * Enregistre le document avec toutes les informations écrites
 */
function SaveDocument() {
  parser = new DOMParser();
  xmlDoc = parser.parseFromString(text,"text/xml");
  
}


/**
 * Empèche l'écriture de caractère autre que des chiffres positifs dans l'input pris en argument
 * @param {*} e 
 */
function justNumber(e) {
    const inputValue = e.target.value;

    // Remplace tout ce qui n'est pas un chiffre positif par une chaîne vide
    const cleanedValue = inputValue.replace(/[^0-9]/g, "");

    // Mise à jour de la valeur du champ de texte avec la version nettoyée
    e.target.value = cleanedValue;
}

/**
 * Empèche d'écrire un code-postal avec des lettres, des chiffres negatifs, ou une taille trop grande
 * @param {*} e 
 */
function justValidCP(e) {
    const inputValue = e.target.value;

    // Remplace tout ce qui n'est pas un chiffre positif par une chaîne vide
    const cleanedValue = inputValue.replace(/[^0-9]/g, "").substr(0, 5);

    // Mise à jour de la valeur du champ de texte avec la version nettoyée
    e.target.value = cleanedValue;
}

/**
 * Affiche un message d'erreur si le CP n'est pas valide
 * @param {*} e 
 */
function testValidCP(e) {
    const inputValue = document.getElementById("inputCP").value;
    const errInput = document.getElementById("errInputCP");
    let messageError = "";
    if(inputValue.length != 5) messageError = "* Code postal incorrect";

    errInput.textContent = messageError;
}

/**
 * Formatte l'input n° de téléphone
 *  @param {*} e 
 */
function justNumTel(e) {

    const input =  e.target;
    let phoneNumber = input.value.replace(/\D/g, ''); // Supprime tout sauf les chiffres
    let formattedPhoneNumber = '';

    // Ajoute des espaces visuels
    for (let i = 0; i < phoneNumber.length; i++) {
        if (i > 0 && i % 2 === 0) {
            formattedPhoneNumber += ' ';
        }
        formattedPhoneNumber += phoneNumber[i];
    }

    input.value = formattedPhoneNumber.substring(0, 14);
};

/**
 * Affiche un message d'erreur si le num de tel n'est pas valide
 * @param {*} e 
 */
function testValidNumTel(e) {
    const inputValue = document.getElementById("inputNumTel").value;
    const errInput = document.getElementById("errInputNumTel");
    let messageError = "";
    if(inputValue.length != 14) messageError = "* Numéro de téléphone incorrect";

    errInput.textContent = messageError;
}

/**
 * Formatte le @ X 
 * @param {*} e 
 */
function justX(e) {

    const input =  e.target;
    let inputValue = input.value;

    inputValue = inputValue.replace(/[^a-zA-Z0-9_]/g, "").substr(0, 16);

    // Vérifier si la valeur commence par '@'
    if (!inputValue.startsWith('@')) {
      inputValue = '@' + inputValue;
    }

    // Mettre à jour la valeur de l'input
    input.value = inputValue;
  }

  /**
 * Formatte le @ Insta
 * @param {*} e 
 */
function justInsta(e) {

    const input =  e.target;
    let inputValue = input.value;

    inputValue = inputValue.replace(/[^a-zA-Z0-9_\.]/g, "").substr(0, 31);

    // Vérifier si la valeur commence par '@'
    if (!inputValue.startsWith('@')) {
      inputValue = '@' + inputValue;
    }

    // Mettre à jour la valeur de l'input
    input.value = inputValue;
  }

  /**
 * Formatte le username Facebook 
 * @param {*} e 
 */
function justFacebook(e) {

    const input =  e.target;
    let inputValue = input.value;

    inputValue = inputValue.replace(/[^a-zA-Z0-9\.]/g, "").substr(0, 30);

    // Mettre à jour la valeur de l'input
    input.value = inputValue;
  }

/**
 * Affiche un message d'erreur si le username facebook n'est pas valide
 * @param {*} e 
 */
function testValidFacebook(e) {
    const inputValue = document.getElementById("inputFacebook").value;
    const errInput = document.getElementById("errInputFacebook");
    let messageError = "";
    if(inputValue.length < 5 && inputValue.length > 0) messageError = "* Le userName Facebook doit faire au moins 5 caractères";

    errInput.textContent = messageError;
}

  /**
 * Formatte le username Facebook 
 * @param {*} e 
 */
  function justMail(e) {

    const input =  e.target;
    let inputValue = input.value;

    inputValue = inputValue.replace(/[^a-zA-Z0-9._@-]/g, "").substr(0, 30);

    // Mettre à jour la valeur de l'input
    input.value = inputValue;
  }

/**
 * Affiche un message d'erreur si l'adresse mail n'est pas valide'
 * @param {*} e 
 */
function testValidMail(e) {
    const inputValue = document.getElementById("inputMail").value;
    const errInput = document.getElementById("errInputMail");
    const regex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$/;

    let messageError = "";
    if(!regex.test(inputValue)) messageError = "* L'adresse mail n'est pas valide";

    errInput.textContent = messageError;
}