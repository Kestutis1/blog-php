<?php

  include_once "header.php";
  include "duombaze.php";
  session_start();
       ?>

<!-- Pradedame puslapio struktūrą -->

<section>
  <div class="row">
    <article>
      <div id="straipsnis">
      <?php

      if (isset($_COOKIE['auth'])) {
        $id = $_SESSION['id'];
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
          </div> <!-- uždarom straipsnio div -->

            <div id="strRedagaForm" class="">
                <form  class="" action="redagavomStr.php" method="get">
                    <input type="text" name="redPavadinimas" value="<?php echo $rezultati['pavadinimas']; ?>"><br />
                    <input type="hidden" name="id" value="<?php echo $rezultati['id']; ?>"><br />
                    <input type="text" name="redTekstas" value="<?php echo $rezultati['tekstas']; ?>"><br />
                    <button type="submit" name="redaguojamStr"> Išsaugoti </button>
                </form>
            </div>

        </article>

      <aside>
    <!-- Mygtukas skirtas redagavimui -->
        <button onclick="redaguotStr();"> Redaguoti straipsnį </button>
    <!-- Mygtukas skirtas ištrynimui -->
        <form action="redagavomStr.php" method="get">
          <input type="hidden" name="id" value="<?php echo $rezultati['id']; ?>">
          <button name="istrinti" type="submit"> Ištrinti straipsnį </button>
        </form>
    </aside>

  </div> <!-- Uždarom Rov -->
</section>

<?php

    include_once "foter.php";

    ?>
