console.log("Labas");

// IDEA: nusistatau registracijos formos laukų kintamuosius ir keičiu validacijos žinutę.

if (document.getElementById("ivestiesVardas")) {
      var vardasIvestis = document.getElementById("ivestiesVardas");
      vardasIvestis.setCustomValidity("reikia užpildyti");

      // IDEA: Tikrinu vartotojo įvestis ir atitinkamai nustatau validaciją.

      vardasIvestis.addEventListener("input", function (event) {
        if (vardasIvestis.validity.typeMismatch) {
          vardasIvestis.setCustomValidity("Čia reiktų įvesti savo vardą!");

        } else {
          vardasIvestis.setCustomValidity("");
        }
        });

      // IDEA: Pakeičiu vardo pirmą raidę didžiają;

        function pakeiciamIdidziajaRaide() {
            var val = vardasIvestis.value;
            val = val.charAt(0).toUpperCase() + val.slice(1);
            document.getElementById("ivestiesVardas").value = val;
        }
}

if (document.getElementById("pavar")) {
      var pavardė= document.getElementById("pavar");
      pavardė.setCustomValidity("reikia užpildyti");

      pavardė.addEventListener("input", function (event) {
        if (pavardė.validity.typeMismatch) {
          pavardė.setCustomValidity("Čia reiktų įvesti savo vardą!");

        } else {
          pavardė.setCustomValidity("");
        }
        });
}

if (document.getElementById("mail")) {
      var email = document.getElementById("mail");
       email.setCustomValidity("reikia užpildyti");

       email.addEventListener("input", function (event) {
         if (email.validity.typeMismatch) {
           email.setCustomValidity("Čia rikia įvesti savo elektroninio pašto simbolį su @ simboliu !");

         } else {
           email.setCustomValidity("");
         }
       });
}

if (document.getElementById("tele")) {
      var telefonas = document.getElementById("tele");
      telefonas.setCustomValidity("reikia užpildyti");

      telefonas.addEventListener("input", function (event) {
        if (telefonas.validity.typeMismatch) {
          telefonas.setCustomValidity("Čia reikia įvesti savo telefono numerį!");

        } else {
          telefonas.setCustomValidity("");
        }
        });
}

if (document.getElementById("slapt")) {
      var slaptažodis1 = document.getElementById("slapt");
      slaptažodis1.setCustomValidity("reikia užpildyti");

      slaptažodis1.addEventListener("input", function (event) {
        if (slaptažodis1.validity.typeMismatch) {
          slaptažodis1.setCustomValidity("Čia reiktų įvesti savo vardą!");

        } else {
          slaptažodis1.setCustomValidity("");
        }
        });
}

if (document.getElementById("pakartotSlap")) {
      var slaptažodis2 = document.getElementById("pakartotSlap");
      slaptažodis2.setCustomValidity("reikia užpildyti");

      slaptažodis2.addEventListener("input", function (event) {
        if (slaptažodis2.validity.typeMismatch) {
          slaptažodis2.setCustomValidity("Čia reiktų įvesti savo vardą!");

        } else {
          slaptažodis2.setCustomValidity("");
        }
      });

      // IDEA: pasitikrinu ar sutampa slaptažodžiai.
      function patikSlaptažodSutap() {
          if (slaptažodis1.value !== slaptažodis2.value) {
                slaptažodis2.setCustomValidity("Slaptažodžiai nesutampa!");
                return false;
          }
          else {
                return true;
          }
      }
}
