<?php 
    require "database.php";
    // SQL příkaz pro výběr dat
    $sql = "SELECT * FROM knihovna";
    $knihy = $conn->query($sql);
    print_r($knihy);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpis dat - cv01</title>
</head>
<body>
    
</body>
</html>