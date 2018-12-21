<?php
include_once "header.php";
include "duombaze.php";
session_start();

//IDEA: Įkeliam redaguotą straipsnį į duombazę taip Updeatinam jį
if (isset($_GET['redaguojamStr'])) {
      $idTemp = test_input($_GET['id']);
      $pavTemp = test_input($_GET['redPavadinimas']);
      $tekstTemp = test_input($_GET['redTekstas']);
      echo $idTemp.$pavTemp.$tekstTemp;
      $id = mysqli_real_escape_string(getPrisijungimas(), $idTemp);
      $pav = mysqli_real_escape_string(getPrisijungimas(), $pavTemp);
      $tekst = mysqli_real_escape_string(getPrisijungimas(), $tekstTemp);
      echo $tekst;
      echo $id;
      echo $pav;

      // $SQL = "UPDATE staripsniai SET pavadinimas = $pav, tekstas = $tekst WHERE pavadinimas = $str";
      $SQL="UPDATE straipsniai SET tekstas= '$tekst', pavadinimas = '$pav' WHERE id= '$id' ";
      $arPakeitem = mysqli_query(getPrisijungimas(), $SQL);

      if (!$arPakeitem) {
                  echo "<h4>Nepavyko redaguoti straipsnio pavadinimu".$pav."</h4>";
              } else {
                  echo "<h4>Sėkmingai redagavote straipsnį pavadinimu".$pav."</h4>";
              }

}

// IDEA: Straipsnio ištrinimo skriptas
  if (isset($_GET['istrinti'])) {
      $straipsnioId = $_GET['id'];
       $istr = "DELETE FROM straipsniai WHERE id = '$straipsnioId' LIMIT 1";
      $istrinam = mysqli_query(getPrisijungimas(), $istr);
      if (!$istrinam) {
            echo "Atsiprašome ištrinti nepavyko straipsnio pavadinimu";
      } else {
            echo "Sėkmingai ištrynėme straipsnį pavadinimu";
      }
  }


include_once "foter.php";
 ?>
