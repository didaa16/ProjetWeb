
function allLetter(word) {
    var letters = /^[A-Za-z]+$/;
    if (word.match(letters)) {
        return true;
    }
    else {
        return false;
    }

    
}

function verif() {
    let titre = document.getElementById("titre").value;
    let type = document.getElementById("type").value;
    let fondateur = document.getElementById("fondateur").value;
    let date = document.getElementById("date").value;

    if (titre === "") {
        alert("Title cannot be empty");
        return false;
    }

    if (allLetter(titre) === false) {
        alert("Title can only contain alphabets");
        return false;
    }
    if (type === "") {
        alert("type cannot be empty");
        return false;
    }

    if (fondateur === "") {
        alert("fondateur cannot be empty");
        return false;
    }


    if (date === "") {
        alert("date cannot be empty");
        return false;
    }

    return true;
}
function verif1() {
    let bloc = document.getElementById("bloc").value;
    let numero = document.getElementById("numero").value;
    let etage = document.getElementById("etage").value;


    if (bloc === "") {
        alert("bloc cannot be empty");
        return false;
    }

    if (allLetter(bloc) === false) {
        alert("bloc can only contain alphabets");
        return false;
    }

    if (numero === "") {
        alert("numero cannot be empty");
        return false;
    }
    if (etage === "") {
        alert("etage cannot be empty");
        return false;
    }

    if (isNaN(etage)) {
        alert("etage must be a number");
        return false;
    }
    if (isNaN(numero)) {
        alert("numero must be a number");
        return false;
    }


    return true;
}


