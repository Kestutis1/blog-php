<?php
        include_once "header.php";

        include "duombaze.php";

function registrujam() {
  $vardas = mysqli_real_escape_string(getPrisijungimas(), $_POST['vardas']);
  $pavarde = mysqli_real_escape_string(getPrisijungimas(), $_POST['pavarde']) ;
  $telefonas = mysqli_real_escape_string(getPrisijungimas(), $_POST['telefonas']) ;
  $email = mysqli_real_escape_string(getPrisijungimas(), $_POST['email']) ;
  $password = mysqli_real_escape_string(getPrisijungimas(), $_POST['password']) ;

$SQL = "INSERT INTO `nariai` (`id`, `data_registracijos`, `vardas`, `pavarde`, `telefonas`, `email`, `password`) VALUES (NULL, CURRENT_TIMESTAMP, '$vardas', '$pavarde', '$telefonas', '$email', '$password');";
$ikleliamDB = mysqli_query(getPrisijungimas(), $SQL);
    }

    if (isset($_POST['registruotis'])){
              registrujam();
          }














                    if ( $prisijungimas && $rodytiPrisijungima ) {
                        echo "Sėkmingai prisijungėme prie duombazės". DB_NAME;
                    }
                    elseif ( $rodytiPrisijungima ) {
                        echo "Nepavyko prisijungti prie duombazės";
                    }




?>
