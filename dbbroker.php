<?php
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $dbname = "kolokvijumi";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        error_log("Database connection error: " . $conn->connect_error);
        die("Trenutno imamo tehničke probleme. Molimo pokušajte kasnije.");
    }

?>