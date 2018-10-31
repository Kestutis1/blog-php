console.log("Labas");



var email = document.getElementById("mail");
email.setCustomValidity("Reikia užpildyti");

email.addEventListener("input", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("Čia reiktų įvesti elektroninio pašto adresą!");

  } else {
    email.setCustomValidity("");
  }
});
