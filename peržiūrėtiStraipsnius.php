<?php

  include_once "header.php";
  include "duombaze.php";
      session_start();
      $id = $_SESSION['id'];

       ?>

<!-- Pradedame puslapio struktūrą -->

<section>
  <aside>
      <?php


      if (isset($_COOKIE['auth'])) {
                $SQL = "SELECT * FROM straipsniai WHERE nariai_id = $id";
                $rezultatiObjektas = mysqli_query(getPrisijungimas(), $SQL);
                    if (mysqli_num_rows($rezultatiObjektas) > 0) {
                        while ($rezultati = mysqli_fetch_array($rezultatiObjektas)) {
                            $nariaiId= $rezultati['nariai_id'];
                            echo "<li>
                                        <a href='peržiūrėtiStraipsniusSuTekstu.php?id=$nariaiId&pavadinimas=$rezultati[pavadinimas]'> $rezultati[pavadinimas] </a>
                                  </li>";
                            echo $rezultati['pavadinimas']."<br />";
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
























<?php include_once "foter.php"; ?>
