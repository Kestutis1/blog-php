<?php         include_once "header.php";
              include "duombaze.php";
               session_start();

// IDEA: Jeigu vartotojas neprisijungias siunčiam jį į pagrindinį puslapį.
          if(!isset($_COOKIE['auth']))
               {
                  header('location: index.php');
               }


    ?>

<section>

  <article class="">


  <h1>Įkelkite Straipsnį</h1>

      <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
          <label> Pavadinimas </label><br />
              <input type="text" name="Antraštė" value=""><br />
              <label for="Postas"> Straipsnis </label><br/>
              <textarea name="Postas" rows="8" cols="40"></textarea><br /><br />
          <button type="submit" name="ĮkeltiStraipsnį"> Iįkelti </button>
      </form>


  </article>

</section>

<?php

  // IDEA: Pradedu straipsnio įkėlimą į duombazę.

  function švarinamIvestis($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



if(isset($_GET['ĮkeltiStraipsnį']))  {

// IDEA: Susitvarkom kintamuosius.
      $straipsnioPavadinimas = švarinamIvestis($_GET['Antraštė']);
      $straipsnioTekstas = švarinamIvestis($_GET['Postas']);
      $pavadinimas = mysqli_real_escape_string(getPrisijungimas(), $straipsnioPavadinimas);
      $tekstas = mysqli_real_escape_string(getPrisijungimas(), $straipsnioTekstas);
      $vardas = $_SESSION['vardas'];
      $nariai_id = $_SESSION['id'];

// IDEA: Pradedam SQL ir kintaūjų įrašymą į duomenų bazę.
    $SQL = "INSERT INTO `straipsniai` (`id`, `nariai_id`, `nariai_vardas`, `pavadinimas`, `tekstas`, `laikas`)
            VALUES (NULL, '$nariai_id', '$vardas', '$pavadinimas', '$tekstas', CURRENT_TIMESTAMP);";
    $IKELEM = mysqli_query(getPrisijungimas(), $SQL);


}

          include_once "foter.php"; ?>
