<?php include_once "header.php"; ?>

<section>

  <div class="container">
    <div class="row">
      <article class="col-sm text-center aukstis-500">
        <h1> Labas Pasauli </h1>
      </article>
      <aside class="col-sm text-center">
        <h4> Prisijungimas </h4>

        <form class="" action="#" method="post">
            <input type="email" name="email" value="" min="7" maxlength="70" title="įveskite elektroninio pašto adresą" required>
            <input type="password" name="password" value="" min="7" maxlength="70" title="įveskite slaptažodį mažiausiai 7 simbolius" required>
            <input type="submit" name="prisijungti" value="prisijungti">
        </form>

        <br />

        <a href="registracija.php"> Registrutis </a>

      </aside><!--  end rov-->
    </div><!--  end rov-->
  </div><!--  end Container-->

</section>


<?php include_once "foter.php"; ?>
