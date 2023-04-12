window.onload = function() {
    const id_org = document.getElementById("id_org");
    const id_event = document.getElementById("id_event");
    const nom = document.getElementById("nom");
    const date_debut = document.getElementById("date_debut");
    const date_fin = document.getElementById("date_fin");
    const prix = document.getElementById("prix");
    const description = document.getElementById("description");
  
    const regexId = /^[0-9]{8}$/;
    const regexName = /^[a-zA-Z\s]+$/;
    const regexDate = /^\d{2}-\d{2}-\d{4}$/;
  
    id_org.addEventListener('input', function () {
      if (!regexId.test(id_org.value)) {
        id_org.setCustomValidity("L'identifiant d'organisateur doit con");
      } else {
        id_org.setCustomValidity("");
      }
    });
  
    id_event.addEventListener('input', function () {
      if (!regexId.test(id_event.value)) {
        id_event.setCustomValidity("L'identifiant d'événement doit contenir 8 chiffres");
      } else {
        id_event.setCustomValidity("");
      }
    });
  
    nom.addEventListener('input', function () {
      if (!regexName.test(nom.value)) {
        nom.setCustomValidity("Le nom de l'événement doit contenir seulement des caractères alphabétiques");
      } else {
        nom.setCustomValidity("");
      }
    });
  
    date_debut.addEventListener('input', function () {
      if (!regexDate.test(date_debut.value)) {
        date_debut.setCustomValidity("La date de début doit être au format 'yyyy-mm-dd'");
      } else {
        date_debut.setCustomValidity("");
      }
    });
  
    date_fin.addEventListener('input', function () {
      if (!regexDate.test(date_fin.value)) {
        date_fin.setCustomValidity("La date de fin doit être au format 'yyyy-mm-dd'");
      } else {
        date_fin.setCustomValidity("");
      }
    });
    
    prix.addEventListener('input', function () {
      if (isNaN(parseFloat(prix.value)) || prix.value <= 0) {
        prix.setCustomValidity("Le prix doit être un nombre positif");
      } else {
        prix.setCustomValidity("");
      }
    });
  }
  