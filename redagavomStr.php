<?php
include_once "header.php";
include "duombaze.php";
session_start();

//IDEA: Įkeliam redaguotą straipsnį į duombazę taip Updeatinam jį
if (isset($_GET['redaguojamStr'])) {
      $id = $_GET['id'];
      $pav = $_GET['redPavadinimas'];
      $tekst = $_GET['redTekstas'];
      echo $tekst;
      echo $id;
      echo $pav;

      // $SQL = "UPDATE staripsniai SET pavadinimas = $pav, tekstas = $tekst WHERE pavadinimas = $str";
      $SQL="UPDATE straipsniai SET tekstas= '$tekst', pavadinimas = '$pav' WHERE id= 1 ";
      $arPakeitem = mysqli_query(getPrisijungimas(), $SQL);

      if (!$arPakeitem) {
                  echo "<h4>Nepavyko redaguoti straipsnio pavadinimu".$pav."</h4>";
              } else {
                  echo "<h4>Sėkmingai redagavote straipsnį pavadinimu".$pav."</h4>";
              }

}

include_once "foter.php";
 ?>
