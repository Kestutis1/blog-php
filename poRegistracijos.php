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


// IDEA: Šioje funkcijoje apsisaugom nuo haker atakų ir įvestis rašom į duombaze.

function registrujam() {
  $name = test_input($_POST["vardas"]);
  $name1 = test_input($_POST["pavarde"]);
  $name2 = test_input($_POST["telefonas"]);
  $name3 = test_input($_POST["email"]);
  $name4 = test_input($_POST["password"]);

  $vardas = mysqli_real_escape_string(getPrisijungimas(), $name);
  $vardas = ucfirst($vardas);
  $pavarde = mysqli_real_escape_string(getPrisijungimas(), $name1);
  $pavarde = ucfirst($pavarde);
  $telefonas = mysqli_real_escape_string(getPrisijungimas(), $name2);
  $email = mysqli_real_escape_string(getPrisijungimas(), $name3);
  $password = mysqli_real_escape_string(getPrisijungimas(), $name4);
  $password_hashed = password_hash($password, PASSWORD_DEFAULT);

$SQL = "INSERT INTO `nariai` (`id`, `data_registracijos`, `vardas`, `pavarde`, `telefonas`, `email`, `password`) VALUES
(NULL, CURRENT_TIMESTAMP, '$vardas', '$pavarde', '$telefonas', '$email', '$password_hashed');";
$ikleliamDB = mysqli_query(getPrisijungimas(), $SQL);
    }


// IDEA: Išaukiam duomenų įrašymo funkciją į duombazę

 if (isset($_POST['registruotis'])){
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
