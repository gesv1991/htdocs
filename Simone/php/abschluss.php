<!DOCTYPE html>
<html>
    <head>
        <title>Bestellbestätigung</title>
        <meta charset="utf-8" />
    </head>
    <style>
        table, td, th {
            width: 250px;
            border: 1px dotted black;
        }

    </style>
    <body>
        <table> 
            <caption><h3>Uebermittelte Daten</h3></caption>

            <?php
//            echo implode(",", $_POST["artikel"]);
            
            echo "<tr>";
            echo "<td>" . $_POST["vname"] . "</td>";
            echo "<td> " . $_POST["nname"] . "</td>";
            echo "<td>" . $_POST["strasse"] . "</td>";
            echo "<td> " . $_POST["plz"] . "</td>";
            echo "<td>" . $_POST["stadt"] . "</td>";
            echo "<td> " . $_POST["email"] . "</td>";
            echo "</tr>";
            echo "<tr>"."<td>". "Folgende Artikel wurden bestellt"."</td>"."<br>";
//           echo "<td>" . implode(",", $_POST["artikel"]) . "</td>";
            echo "</tr>";
            ?>
        </table>
    </body>
</html>