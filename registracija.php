<?php include_once "header.php"; ?>

<section>

  <div class="container">
    <div class="row">
      <article class="col-sm text-center aukstis-500">
        <h4> Registracija </h4>

        <form class="registracija" action="#" method="post">

          <label for="vardas"> Vardas </label> <br>
            <input type="text" name="vardas" value="" min="7" maxlength="70" title="įveskite vardą" required> <br>
          <label for="pavarde"> Pavardė </label> <br>
            <input type="text" name="pavarde" value="" min="7" maxlength="70" title="įveskite pavardę" required> <br>
          <label for="telefonas"> Telefono numeris </label> <br>
            <input type="text" name="telefonas" value="" min="8" maxlength="14" title="įveskite pavardę" required> <br>
          <label for="email"> Elektroninis paštas </label> <br>
            <input type="email" name="email" value="" min="7" maxlength="70" title="įveskite elektroninio pašto adresą" required> <br>
          <label for="password"> Slaptažodis </label> <br>
            <input type="password" name="password" value="" min="7" maxlength="70" title="įveskite slaptažodį mažiausiai 7 simbolius" required> <br>
          <label for="password"> Pakartokite slaptažodį </label> <br>
            <input type="password" name="password" value="" min="7" maxlength="70" title="įveskite slaptažodį mažiausiai 7 simbolius" required> <br>
          <label for="registruotis">  </label> <br>
            <input type="submit" name="registruotis" value="registruotis">
        </form>

      </article>

    </div><!--  end rov-->
  </div><!--  end Container-->

</section>


<?php include_once "foter.php"; ?>
