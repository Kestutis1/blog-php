<?php

  include_once "header.php";
  include "duombaze.php";

       ?>

<!-- Pradedame puslapio struktūrą -->

<section>
  <article>

      <?php


      if (isset($_COOKIE['auth'])) {
        $id = $_GET['id'];
        $str = $_GET['pavadinimas'];
                $SQL = "SELECT * FROM straipsniai WHERE nariai_id = '$id' AND pavadinimas = '$str'";
                $rezultatiObjektas = mysqli_query(getPrisijungimas(), $SQL);
                if (mysqli_num_rows($rezultatiObjektas) > 0) {
                  $rezultati = mysqli_fetch_assoc($rezultatiObjektas);
                      echo $rezultati['pavadinimas']."<br />".$rezultati['tekstas'];
                } else {
                            echo " Įvyko klaida ";
                        }
              } else {
                  header('Location: index.php');
              }


      ?>

  </article>
</section>

<?php include_once "foter.php"; ?>
