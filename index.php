<?php include_once "header.php";
      include "duombaze.php"       ?>

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

        <a href="registracija.php"> Registrutis </a>

      </aside><!--  end rov-->
    </div><!--  end rov-->
  </div><!--  end Container-->


<?php
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

}





?>
  <!-- if(password_verify($password, $hashed_password)) {
      // If the password inputs matched the hashed password in the database
      // Do something, you know... log them in.
  }

  // Else, Redirect them back to the login page. -->


</section>


<?php include_once "foter.php"; ?>
