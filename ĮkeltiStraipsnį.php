<?php include_once "header.php";
      include "duombaze.php";
       session_start();

    ?>

<section>

<article class="">


<h1>Įkelkite Straipsnį</h1>
<form class="" action="echo htmlspecialchars($_SERVER["PHP_SELF"]);" method="get">
<label> Pavadinimas </label><br />
<input type="text" name="Antraštė" value=""><br />
<label for="Postas"> Straipsnis </label><br/>
<textarea name="Postas" rows="8" cols="40"></textarea><br /><br />
<button type="button" name="ĮkeltiStraipsnį"> Iįkelti </button>
</form>


</article>

</section>

<?php include_once "foter.php"; ?>
