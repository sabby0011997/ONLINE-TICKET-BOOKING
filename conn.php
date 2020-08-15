<?php

try {
    $con = new PDO( 'mysql:host=localhost;dbname=ticketing;charset=utf8', 'root', '' );
}

catch(Exception $e) {
    echo "No Connection";
}

?>
