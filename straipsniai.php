<?php
include_once "header.php";
session_start();
echo $_SESSION['email'];
echo "<a href='atsijungti.php'>Atsijungti</a>";
if (isset($_COOKIE["email"])) {
  echo "<a href='#'>Įkelti Stripsnį</a><br />";
  echo "<a href='#'>Peržiūrėti savo traipsnius</a>";
}
if ($_COOKIE["auth"] =="1") {
   echo "<a href='#'>Įkelti Stripsnį</a><br />";
   echo "<a href='#'>Peržiūrėti savo traipsnius</a>";
}

include_once "foter.php";
 ?>
