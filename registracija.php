<?php include_once "header.php"; ?>

<section>

  <div class="container">
    <div class="row">
      <article class="col-sm text-center aukstis-500">
        <h4> Registracija </h4>


        <form name="registracijosForma" class="registracija" method="post"  action="<?php echo htmlspecialchars('poRegistracijos.php');?>">

          <label for="vardas"> Vardas </label> <br>
                <input type="text" id="ivestiesVardas"  name="vardas" value="" maxlength="40" pattern="[A-Za-z]+"/> <br>

         <label for="pavarde"> Pavardė </label> <br>
          <input type="text" id="pavar" name="pavarde" value="" maxlength="70" title="" required> <br>

          <label for="telefonas"> Telefono numeris </label> <br>
                <input type="text" id="tele" name="telefonas" value="" placeholder="8665608140" maxlength="14" title="" required pattern="[0-9]+"/> <br>

          <label for="vardas"> Elpaštas </label> <br>
                <input type="email" title="" class="" placeholder="pavyzdys@yahoo.com" id="mail" name="email" required> <br>

          <label for="password"> Slaptažodis </label> <br>
                <input type="password" id="slapt" name="password" maxlength="30" value="" title="" required > <br>

          <label for="password2"> Pakartokite slaptažodį </label> <br>
                <input type="password" id="pakartotSlap" name="password2" value="" maxlength="30" value="" title="" required> <br>
                 <br>

            <button type="submit" onclick="patikSlaptažodSutap(); pakeiciamIdidziajaRaide();" name="registruotis"> Registruotis </button>


        </form>




      </article>

    </div><!--  end rov-->
  </div><!--  end Container-->

</section>


<?php include_once "foter.php"; ?>
