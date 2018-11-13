<?php

$rodytiZinutes = true;
    // $debugMode = 1;
    // konstantos
    define('DB_NAME', "blogphp");
    define('DB_USER', "root");
    define('DB_PASSWORD', "root");
    define('DB_HOST', "localhost");
    $prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
    mysqli_set_charset($prisijungimas, 'utf8');
    if ( $prisijungimas && $rodytiZinutes ) {
        echo "Prisijungem prie DB: " . DB_NAME . " sekmingai :)";
    } elseif( $rodytiZinutes )  {
        echo "ERROR: nepavyko prisijungti prie DB: " . mysqli_connect_error();
    }
    function getPrisijungimas() {
        global $prisijungimas;
        return $prisijungimas;
    }
