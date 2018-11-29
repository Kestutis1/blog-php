<?php

  include_once "header.php";
  include "duombaze.php";
      session_start();
      $id = $_SESSION['id'];

       ?>

<!-- Pradedame puslapio struktūrą -->

<section>
  <aside>
      <?php if (isset($_COOKIE['auth'])) {
                $SQL = "SELECT pavadinimas FROM straipsniai WHERE nariai_id = $id";
                $rezultatiObjektas = mysqli_query(getPrisijungimas(), $SQL);
                    if (mysqli_num_rows($rezultatiObjektas) > 0) {
                        $rezultati = mysqli_fetch_assoc($rezultatiObjektas);
                        foreach ($rezultati as $antraste) {
                              echo $antraste;

                        }
                    } else {
                              echo "Jūs neturite straipsnių";
                            }
                          }
              else {
                        header('location: index.php');
                    }


      ?>

  </aside>






  <article>

  </article>
</section>



























<?php include_once "foter.php"; ?>
