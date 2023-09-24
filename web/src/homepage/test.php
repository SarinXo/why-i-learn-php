<?php

$host = "mySQL_database";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$database = "lab1";
$port = "9907";

    $link = new mysqli($host, $username, $password, $database, $port);
    if ($link->connect_error) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    $link->set_charset('utf8mb4');
    printf("Success... %s\n", $link->host_info);


