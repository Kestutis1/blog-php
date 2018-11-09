<?php
        include_once "header.php";

        include "duombaze.php";

// IDEA: Šioje funkcijoje pašalinam nuo įvesčių /*  + <>.

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }

   // if ($_SERVER["REQUEST_METHOD"] == "POST") {
   //
   // }


// IDEA: Šioje funkcijoje apsisaugom nuo haker atakų ir įvestis rašom į duombaze.

function registrujam() {
  $vardas = mysqli_real_escape_string(getPrisijungimas(), $_POST['vardas']);
  $pavarde = mysqli_real_escape_string(getPrisijungimas(), $_POST['pavarde']) ;
  $pavarde = ucfirst($pavarde);
  $telefonas = mysqli_real_escape_string(getPrisijungimas(), $_POST['telefonas']) ;
  $email = mysqli_real_escape_string(getPrisijungimas(), $_POST['email']) ;
  $password = mysqli_real_escape_string(getPrisijungimas(), $_POST['password']) ;

$SQL = "INSERT INTO `nariai` (`id`, `data_registracijos`, `vardas`, `pavarde`, `telefonas`, `email`, `password`) VALUES (NULL, CURRENT_TIMESTAMP, '$vardas', '$pavarde', '$telefonas', '$email', '$password');";
$ikleliamDB = mysqli_query(getPrisijungimas(), $SQL);
    }

// IDEA: Išaukiam duomenų įrašymo funkciją į duombazę

    if (isset($_POST['registruotis'])){
      test_input($_POST["vardas"]);
      test_input($_POST["pavarde"]);
      test_input($_POST["telefonas"]);
      test_input($_POST["email"]);
      test_input($_POST["password"]);


              registrujam();
          }


// IDEA: Čia pasitikrinam ar pavyko susijungimas su duombaze žinutės pagalba.

                    if ( $prisijungimas && $rodytiPrisijungima ) {
                        echo "Sėkmingai prisijungėme prie duombazės". DB_NAME;
                    }
                    elseif ( $rodytiPrisijungima ) {
                        echo "Nepavyko prisijungti prie duombazės";
                    }




?>
