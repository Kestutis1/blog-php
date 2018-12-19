<?php

  include_once "header.php";
  include "duombaze.php";
      session_start();
      $id = $_SESSION['id'];

       ?>

<!-- Pradedame puslapio struktūrą -->

<section>
  <article>
      <?php


      if (isset($_COOKIE['auth'])) {
                $SQL = "SELECT * FROM straipsniai WHERE nariai_id = $id";
                $rezultatiObjektas = mysqli_query(getPrisijungimas(), $SQL);
                    if (mysqli_num_rows($rezultatiObjektas) > 0) {
                        while ($rezultati = mysqli_fetch_array($rezultatiObjektas)) {
                            $nariaiId= $rezultati['nariai_id'];
                            echo "<li>
                                        <a href='peržiūrėtiStraipsniusSuTekstu.php?pavadinimas=$rezultati[pavadinimas]'> $rezultati[pavadinimas] </a>
                                  </li>";
                        }
                    } else {
                              echo "Jūs neturite straipsnių";
                            }
                          }
              else {
                        header('location: index.php');
                    }


      ?>

  </article>
</section>


<?php include_once "foter.php"; ?>
























<?php include_once "foter.php"; ?>
