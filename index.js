document.addEventListener("DOMContentLoaded", function () {
    let tel = document.getElementById("phone-number");
    let mail = document.getElementById("mail-adress");
    let tel2 = document.getElementById("phone-number-resp");
    let mail2 = document.getElementById("mail-adress-resp");
    tel2.addEventListener("click", function () {
        copy(tel2.textContent.trim().replace("Tel : ", ''));
    });
    mail2.addEventListener("click", function () {
        copy(mail2.textContent.trim().replace("Mail : ", ''));
    });
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