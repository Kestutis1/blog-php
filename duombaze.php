<?php

$rodytiZinutes = false;
    // $debugMode = 1;
    // konstantos
    define('DB_NAME', "blogphp");
    define('DB_USER', "root");
    define('DB_PASSWORD', "root");
    define('DB_HOST', "localhost");
    $prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
     mysqli_set_charset($prisijungimas, 'utf8');

    function getPrisijungimas() {
        global $prisijungimas;
        return $prisijungimas;
    }

    // IDEA: trim budais švarinam vartotojo prisijungimo duomenis

    function test_input ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
