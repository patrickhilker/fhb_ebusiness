<?php

$servername = "localhost";
$username = "stud99";
$password = "init";
$dbname = "stud99";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

$sql = 'SELECT name, email FROM tabelleerstellen';
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    ?>

    <html>

        <head>
            <title>Daten auslesen</title>
            <style>
                table, tr, td, th {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
            </style>
        </head>

        <body>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-Mail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo '<tr><td>'.$row['name'].'</td><td>'.$row['email'].'</td></tr>';
                        }

                    ?>
                </tbody>
            </table>

        </body>

    </html>

    <?php

} else {
    echo 'keine Daten in der Tabelle';
}

mysqli_close($conn);

?>