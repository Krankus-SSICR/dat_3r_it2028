<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knihovna - přidání knihy</title>
</head>

<body>
    <form action="pridat.php" method="POST">
        <input type="text" placeholder="Jméno autora" name="autor"><br>
        <input type="text" placeholder="Název knihy" name="kniha"><br>
        <label>Žánr:</label>
        <select name="zanr">
            <option value="Historický">Historický</option>
            <option value="Komedie">Komedie</option>
            <option value="Fantasy">Fantasy</option>
        </select>
        <input type="submit" name="pridatKnihu">
    </form>
</body>

</html>