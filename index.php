<?php include_once "header.php";
      include "duombaze.php";
       session_start();
        // echo phpinfo();


// IDEA: Perkrovus puslapį nedings prisijungimo formos įvesties laukų įvestys.
      $emailas = (isset($_GET['email']) == true) ?  $_GET['email'] : '';
      $passwordas = (isset($_GET['password']) == true) ?  $_GET['password'] : '';
  ?>

<section>

  <div class="container">
    <div class="row">
      <article class="col-sm text-center aukstis-500">
        <h1> Straipsniai </h1>
          <?php // IDEA: Paimam straipsnius 5 straipsnius iš duombazės ir atvaizdujam

              $StrapsniųSQL = "SELECT * FROM straipsniai";
              $straipsniuRezultatai = mysqli_query(getPrisijungimas(), $StrapsniųSQL);
              if(mysqli_num_rows($straipsniuRezultatai) > 0) {
                $masyvasStraipsniai = mysqli_fetch_array($straipsniuRezultatai);
                 echo $masyvasStraipsniai['pavadinimas']."<br />";
                 echo $masyvasStraipsniai['tekstas']."<br />";
                 echo $masyvasStraipsniai['nariai_vardas']."<br />";
                 echo $masyvasStraipsniai['laikas']."<br />";
              }


           ?>
      </article>
      <aside class="col-sm text-center">

          <div class="" id="prisijungimoForma">
              <h4> Prisijungimas </h4>
              <form class=""  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
                  <input type="email" id="email" name="email" value="<?php echo $emailas; ?>" min="7" maxlength="70" title="įveskite elektroninio pašto adresą" required>
                  <input type="password" id="password" name="password" value="<?php echo $passwordas; ?>" min="7" maxlength="70" title="įveskite slaptažodį mažiausiai 7 simbolius" autocomplete="on" required>
                  <button type="submit" name="prisijungti"> Prisijungti </button> <br />
                  <label for="prisimintiMane"> Prisiminti mane </label>
                  <input type="checkbox" name="prisimintiMane" />
              </form>
              <br />

              <button type="button" name="button"><a href="registracija.php"> Registrutis </a></button>
        </div>


<?php

// IDEA: Susigražinam reikšmes iš Cookies prisijungimo formos įvestims.

if (isset($_COOKIE["email"]) && isset($_COOKIE["pass"])) {
      $email = $_COOKIE["email"];
      $password = $_COOKIE["pass"];

  echo "<script> document.getElementById('email').value= '$email';
                 document.getElementById('password').value= '$password';
      </script>";
}

// IDEA: Pakartotinai grįžus į namų puslapį patikrinam ar reikia rodyti prisijungimą su registracija.
if (isset($_COOKIE['auth'])) {
      echo "<script> document.getElementById('prisijungimoForma').innerHTML= '<h4> Jūsų valdymas </h4><br />'; </script>";
      include ("straipsniai.php");
}


// IDEA: jeigu vartotojas paspaudė prisijungti šaukiam funkciją

 if (isset($_GET['prisijungti'])) {

      prisijungimas();
}


// IDEA: trim budais apsaugom vartotojo prisijungimo duomenis

function test_input ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// IDEA: apsaugom ir įvestis padarom kintamaisiais, jungemmės prie duombazės.

function prisijungimas() {
    $prisijungimas1 = test_input($_GET['email']);
    $prisijungimas2 = test_input($_GET['password']);


    $email = mysqli_real_escape_string(getPrisijungimas(), $prisijungimas1);
    $password = mysqli_real_escape_string(getPrisijungimas(), $prisijungimas2);


$SQL = "SELECT * FROM nariai WHERE email = '$email'";
$rezultatai = mysqli_query(getPrisijungimas(), $SQL);

// IDEA: Jai pavyko paimti duomenis iš duombazės
if (mysqli_num_rows($rezultatai) > 0) {
                  $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);


    // IDEA: Jai paimti prisijungimo ir įvesties duomenys sutaps.
                  if (password_verify($password, $resultataiMasyvas['password'])) {
                        $_SESSION['email'] = $email;
                        $_SESSION['pass'] = $password;
                        $_SESSION['vardas'] = $resultataiMasyvas['vardas'];
                        $_SESSION['id'] = $resultataiMasyvas['id'];
                        setcookie("auth", "1", time()+60*60*7);
        // IDEA: sekmingai prisijungus pamaikino iš ekrano prisijungimoFormą

                         echo "<script>
                                        // document.getElementById('prisijungimoForma').style.visibility= 'hidden';
                                        document.getElementById('prisijungimoForma').innerHTML= '<h4>Laba diena sveikiname sėkmingai prisijungus</h4><br />';
                             </script>";
                        include_once("straipsniai.php");
        // IDEA: Išsisaugom prisijungimo sausainiukus ateičiai jai lankytojas pageidauja.
                        if (isset($_GET['prisimintiMane'])) {
                          setcookie('email', $email, time()+60*60*7);
                          setcookie('pass', $password, time()+60*60*7);
                        }

        // IDEA: Toliau vykdom prisijungimo skriptą.


                  } else {
                        echo "<br />slaptažodžaiai nesutampa";
                  }
              } else {
              echo "Tokio įrašo duomenu bazėje nėra";
              }
            }

            
      // IDEA: Scriptas baigesi.
?>

</aside><!--  end rov-->
</div><!--  end rov-->
</div><!--  end Container-->
</section>


<?php include_once "foter.php"; ?>
