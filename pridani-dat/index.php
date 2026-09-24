<?php 
if (isset($_POST["pridatStudenta"])) {
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];

    $sql = "INSERT INTO studenti(jmeno, prijmeni) VALUES ('$jmeno', '$prijmeni')";

    $sqlServer = "localhost";
    $login = "krankus";
    $heslo = "databaze456";
    $dbNazev = "it2028";
    
    $db = new mysqli($sqlServer, $login, $heslo, $dbNazev);

    $pridat = $db->query($sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" placeholder="Jméno studenta:" name="jmeno"><br>
        <input type="text" placeholder="Příjmení studenta:" name="prijmeni"><br>
        <input type="submit" value="Přidat studenta" name="pridatStudenta">
    </form>
</body>
</html>