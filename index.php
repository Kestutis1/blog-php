<?php include_once "header.php";
      include "duombaze.php";
      session_start();  ?>

<section>

  <div class="container">
    <div class="row">
      <article class="col-sm text-center aukstis-500">
        <h1> Labas Pasauli </h1>
      </article>
      <aside class="col-sm text-center">
        <h4> Prisijungimas </h4>

        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
            <input type="email" name="email" value="" min="7" maxlength="70" title="įveskite elektroninio pašto adresą" required>
            <input type="password" name="password" value="" min="7" maxlength="70" title="įveskite slaptažodį mažiausiai 7 simbolius" required>
            <input type="submit" name="prisijungti" value="prisijungti">
        </form>

        <br />

      <button type="button" name="button"><a href="registracija.php"> Registrutis </a></button>

      </aside><!--  end rov-->
    </div><!--  end rov-->
  </div><!--  end Container-->


<?php

$msg = "Nulis";


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
    echo $email ."<br />";
    echo $password ."<br />";

$SQL = "SELECT password FROM nariai WHERE email = '$email'";
$rezultatai = mysqli_query(getPrisijungimas(), $SQL);

if (mysqli_num_rows($rezultatai) > 0) {
                  $resultataiMasyvas = mysqli_fetch_assoc($rezultatai);
                  echo $resultataiMasyvas['password'];
                  if (password_verify($password, $resultataiMasyvas['password'])) {
                        $_SESSION['email'] = $email;
                        setcookie('email', $_SESSION['email'], time()+60*60*7);
                        setcookie("auth", "1", time()+60*60*7);
                        echo "<a href='#'>Įkelti Stripsnį</a><br />";
                        echo "<a href='straipsniai.php'>Peržiūrėti savo traipsnius</a>";
                         echo "<br /> slaptažodžiai sutapo <br />" . $_SESSION['email'];
                  } else {
                        echo "<br />slaptažodžaiai nesutampa";
                  }
              } else {
              echo "Tokio įrašo duomenu bazėje nėra";
              }
            }



// if (isset($_SESSION["email"])) {
//    echo "<a href='#'>Įkelti Stripsnį</a><br />";
//    echo "<a href='#'>Peržiūrėti savo traipsnius</a>";
// }

// session_destroy();
// unset($_SESSION["email"]);


echo "<br />" . $msg;

?>


</section>


<?php include_once "foter.php"; ?>
