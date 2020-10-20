<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "db_ti95";

    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        die("Error MySQL connect: " . mysqli_connect_error() . " - " . mysql_connect_errno());
    } else {
        echo("Conexão criada");
    }
?>