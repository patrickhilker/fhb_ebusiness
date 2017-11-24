<?php

$servername = "localhost";
$username = "stud99";
$password = "init";
$dbname = "stud99";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

$sql = "INSERT INTO `tabelleerstellen` (`name`, `email`, `datetime`) VALUES 
        ('Donald Duck', 'Donald.Duck@Entenhausen.de', now()),
        ('Lucky Luke', 'LL@saloon.com', now()),
        ('Daniel Düsentrieb', 'Erfinder@Entenhausen.de', now()),
        ('Obelix', 'Obelix@Gallien.fr', now())
";

if (mysqli_query($conn, $sql)) {
    echo "Daten eingefügt";
} else {
    echo "Fehler: " . mysqli_error($conn);
}

mysqli_close($conn);