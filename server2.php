<?php

    // $servername = "localhost";
    // $username = "root";
    // $password = "boss753142";
    // $dbname = "login"; 

    $servername = "us-cdbr-east-04.cleardb.com";
    $username = "b85f9d6e697478";
    $password = "dcbeb1dc";
    $dbname = "heroku_d048965f1125797"; 

    //Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname, "3306");

    //Check Connection
    if (!$conn) {
        die("Connection Failed" . mysqli_connect_error());
    }

?> 