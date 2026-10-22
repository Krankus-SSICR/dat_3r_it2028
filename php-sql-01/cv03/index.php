<?php 
    $conn = new mysqli("localhost", "krankus", "databaze456", "it2028");

    if (isset($_POST["pridat"])) {
        $pokrm = $_POST["pokrm"];
        $volba = $_POST["volba"];
        $sql = "INSERT INTO jidelna(pokrm, volba) VALUES ('$pokrm', '$volba')";
        $pridatPokrm = $conn->query($sql);   
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
    <?php if (isset($pridatPokrm) && $pridatPokrm === TRUE):?>
        <p>Pokrm úspěšně přidán</p>
    <?php endif;?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" placeholder="Pokrm" name="pokrm">
        </div>
        <div>
            <label for="">Volba</label>
            <select name="volba" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <input type="submit" value="Přidat pokrm" name="pridat">
    </form>
</body>
</html>