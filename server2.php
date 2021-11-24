<?php

    $servername = "localhost";
    $username = "root";
    $password = "boss753142";
    $dbname = "login"; 

    //Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname, "3307");

    //Check Connection
    if (!$conn) {
        die("Connection Failed" . mysqli_connect_error());
    }

?> 