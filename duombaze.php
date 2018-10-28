<?php

$rodytiPrisijungima = true;

define('DB_NAME', "nariai");
define('DB_USER', "root");
define('DB_PASSWORD', "root");
define('DB_HOST', "localhost");

$prisijungimas = mysqli_connect( DB_NAME, DB_USER, DB_PASSWORD, DB_HOST );
mysqli_set_charset( $prisijungimas, 'utf8');




function getPrisijungimas() {
    global $prisijungimas;
    return $prisijungimas;
}


if ( $prisijungimas && $rodytiPrisijungima ) {
    echo "Sėkmingai prisijungėme prie duombazės". DB_NAME;
}
elseif ( $rodytiPrisijungima ) {
    echo "Nepavyko prisijungti prie duombazės";
}
