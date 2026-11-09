<?php 
    require "database.php";
    // SQL příkaz pro výběr dat
    $sql = "SELECT * FROM knihovna";
    $knihy = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpis dat - cv01</title>
    <style>
        table {
            width: 75%;
            border: 3px solid black;
            margin: 1em auto;
        }
        td {
            padding: 0.5em;
            border-bottom: 1px solid red;
        }
    </style>
</head>
<body>
    <h2>Přehled knih</h2>
    <table>
        <tr>
            <th>Autor</th>
            <th>Kniha</th>
        </tr>
        <?php foreach($knihy as $kniha):?>
            <tr>
                <td><?= $kniha["autor"];?></td>
                <td><?= $kniha["nazev_knihy"];?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>