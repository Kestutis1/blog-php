console.log("Labas");

// IDEA: nusistatau registracijos formos laukų kintamuosius

var vardasIvestis = document.getElementById("ivestiesVardas");
var pavardė= document.getElementById("pavar");
var email = document.getElementById("mail");
var telefonas = document.getElementById("tele");
var slaptažodis1 = document.getElementById("slapt");
var slaptažodis2 = document.getElementById("pakartotSlap");


 vardasIvestis.setCustomValidity("reikia užpildyti");
 pavardė.setCustomValidity("reikia užpildyti");
 email.setCustomValidity("reikia užpildyti");
 telefonas.setCustomValidity("reikia užpildyti");
 slaptažodis1.setCustomValidity("reikia užpildyti");
 slaptažodis2.setCustomValidity("reikia užpildyti");



vardasIvestis.addEventListener("input", function (event) {
  if (vardasIvestis.validity.typeMismatch) {
    vardasIvestis.setCustomValidity("Čia reiktų įvesti savo vardą!");

  } else {
    vardasIvestis.setCustomValidity("");
  }
  });


pavardė.addEventListener("input", function (event) {
  if (pavardė.validity.typeMismatch) {
    pavardė.setCustomValidity("Čia reiktų įvesti savo vardą!");

  } else {
    pavardė.setCustomValidity("");
  }
  });


email.addEventListener("input", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("Čia rikia įvesti savo elektroninio pašto simbolį su @ simboliu !");

  } else {
    email.setCustomValidity("");
  }
});


telefonas.addEventListener("input", function (event) {
  if (telefonas.validity.typeMismatch) {
    telefonas.setCustomValidity("Čia reikia įvesti savo telefono numerį!");

  } else {
    telefonas.setCustomValidity("");
  }
  });


slaptažodis1.addEventListener("input", function (event) {
  if (slaptažodis1.validity.typeMismatch) {
    slaptažodis1.setCustomValidity("Čia reiktų įvesti savo vardą!");

  } else {
    slaptažodis1.setCustomValidity("");
  }
  });


slaptažodis2.addEventListener("input", function (event) {
  if (slaptažodis2.validity.typeMismatch) {
    slaptažodis2.setCustomValidity("Čia reiktų įvesti savo vardą!");

  } else {
    slaptažodis2.setCustomValidity("");
  }
});


// IDEA: pasitikrinu ar sutampa slaptažodžiai
function patikSlaptažodSutap() {
    if (slaptažodis1.value !== slaptažodis2.value) {
          slaptažodis2.setCustomValidity("Slaptažodžiai nesutampa!");
          return false;
    }
    else {
          return true;
    }
}
