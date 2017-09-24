<!doctype html>
<html lang="de">
    <head>

        <meta charset="utf-8">
        <title>Schleifen - 2</title>

        <style>

            tr, td, th, table {
                border: 1px solid black;
                border-collapse: collapse;
            }

            td, th {
                padding: 5px;
            }

        </style>

    </head>
    <body>

        <table>
            <thead>
                <tr>
                    <th>Zahl</th>
                    <th>Quadrat der Zahl</th>
                </tr>
            </thead>

            <tbody>

                <?php

                    for($i = 1; $i <= 10; $i++) {

                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.($i*$i).'</td>';
                        echo '</tr>';

                    }
                ?>

            </tbody>

        </table>

    </body>
</html>
