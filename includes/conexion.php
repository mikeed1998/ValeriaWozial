<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "valeria";

    $conn = mysqli_connect($host, $user, $password, $db);

    if(!$conn) {
        echo "Error, no se pudo establecer la conexión: ". $mysqli_error($conn);
    }

