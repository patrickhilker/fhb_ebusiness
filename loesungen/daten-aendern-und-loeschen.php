<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fhb_ebusiness";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

$sql = 'UPDATE tabelleerstellen SET name = "Der Dicke" WHERE name = "Obelix"';
$result = mysqli_query($conn, $sql);

if($result) {
    echo 'Name geändert';
} else {
    echo "Fehler beim Ändern: " . mysqli_error($conn);
}

echo '<br>';

$sql = 'DELETE FROM tabelleerstellen WHERE name = "Lucky Luke"';
$result = mysqli_query($conn, $sql);

if($result) {
    echo 'Eintrag gelöscht';
} else {
    echo "Fehler beim Löschen: " . mysqli_error($conn);
}



mysqli_close($conn);

?>