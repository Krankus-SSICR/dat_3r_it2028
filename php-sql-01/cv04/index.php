<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidání postavy</title>
</head>
<body>
    <h2>Přidat postavu</h2>
    <form action="pridat.php" method="POST">
        <div>
            <input name="jmeno" type="text" placeholder="Jméno postavy:">
        </div>
        <div>
            <label>Frakce</label>
            <select name="frakce">
                <option value="Horda">Horda</option>
                <option value="Aliance">Aliance</option>
                <option value="Neutral">Neutrální</option>
            </select>
        </div>
        <input type="submit" value="Přidat postavu">
    </form>
</body>
</html>