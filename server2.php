<?php

    // $servername = "localhost";
    // $username = "root";
    // $password = "boss753142";
    // $dbname = "login"; 

    $servername = "us-cdbr-east-04.cleardb.com";
    $username = "b85f9d6e697478";
    $password = "dcbeb1dc";
    $dbname = "heroku_d048965f1125797"; 
    $api_key_value = "f431e9d9-e0e2-4c1a-8a0c-c2c125409fe1";

    //Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname, "3306");

    //Check Connection
    if (!$conn) {
        die("Connection Failed" . mysqli_connect_error());
    }

?> 