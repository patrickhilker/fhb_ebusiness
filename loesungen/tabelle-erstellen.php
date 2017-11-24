<?php

$servername = "localhost";
$username = "stud99";
$password = "init";
$dbname = "stud99";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

$sql = "CREATE TABLE `tabelleerstellen` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `name` VARCHAR(255) NOT NULL,
          `email` VARCHAR(255) NOT NULL,
          `datetime` DATETIME NOT NULL ,
        PRIMARY KEY (`id`));";

if (mysqli_query($conn, $sql)) {
    echo "Datenbank erstellt";
} else {
    echo "Fehler: " . mysqli_error($conn);
}

mysqli_close($conn);