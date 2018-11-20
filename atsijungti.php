<?php

session_start();
session_destroy();

// IDEA: Sunaikinam slapukus;
// if (isset($_COOKIE["email"]) && isset($_COOKIE["pass"])) {
//         $email = $_COOKIE["email"];
//         $password = $_COOKIE["pass"];
//         setcookie('email', $email, time()-1);
//         setcookie('pass', $password, time()-1);
// }

echo "<a href='index.php' >Prisijungti ir vėl</a>";

?>
