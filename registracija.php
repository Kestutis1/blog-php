<?php include_once "header.php"; ?>

<section>

  <div class="container">
    <div class="row">
      <article class="col-sm text-center aukstis-500">
        <h4> Registracija </h4>

        <form class="registracija" action="poRegistracijos.php" method="post">

          <label for="vardas"> Vardas </label> <br>
            <input type="text" name="vardas" value="" maxlength="70" title="įveskite vardą"
            required oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti nemažiau septyniais simboliais')" oninput="this.setCustomValidity('')"> <br>
          <label for="pavarde"> Pavardė </label> <br>
          <input type="text" name="pavarde" value="" maxlength="70" title="įveskite pavardę" required
            oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti nemažiau septyniais simboliais')" oninput="this.setCustomValidity('')"> <br>
          <label for="telefonas"> Telefono numeris </label> <br>
            <input type="text" name="telefonas" value="" maxlength="14" title="įveskite telefono numerį" required
            oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti nemažiau septyniais simboliais')" oninput="this.setCustomValidity('')"> <br>
          <label for="email"> Elektroninis paštas </label> <br>
            <input type="email" name="email" value="" maxlength="70" title="įveskite elektroninio pašto adresą" required
            oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti nemažiau aštuoniai simboliais')" oninput="this.setCustomValidity('')"> <br>
          <label for="password"> Slaptažodis </label> <br>
            <input type="password" name="password" value="" maxlength="70" title="įveskite slaptažodį mažiausiai 7 simbolius" required
            oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti nemažiau septyniais simboliais')" oninput="this.setCustomValidity('')"> <br>
          <label for="password2"> Pakartokite slaptažodį </label> <br>
            <input type="password" name="password2" value="" maxlength="70" title="įveskite slaptažodį mažiausiai 7 simbolius" required
            oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti nemažiau septyniais simboliais')" oninput="this.setCustomValidity('')"> <br>
          <label for="registruotis">  </label> <br>
            <input type="submit" name="registruotis" value="registruotis">
        </form>

      </article>

    </div><!--  end rov-->
  </div><!--  end Container-->

</section>


<?php include_once "foter.php"; ?>
