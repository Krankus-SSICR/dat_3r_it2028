<?php
// údaje pro připojení k databázi 
$s = "localhost";
$u = "krankus";
$p = "databaze456";
$db = "it2028";

// připojení k databázi pomocí mysqli()
$conn = new mysqli($s, $u, $p, $db);

// uložíme si data z formuláře do proměnných
$autor = $_POST["autor"];
$kniha = $_POST["kniha"];
$zanr = $_POST["zanr"];

// sestavíme SQL dotaz
// knihovna = název tabulky
// (autor, nazev_knihy, zanr) = atributy (sloupce) tabulky
$sql = "INSERT INTO knihovna(autor, nazev_knihy, zanr) VALUES ('$autor', '$kniha', '$zanr')";

// pomocí funkce query() provedeme sql dotaz na připojené db
$pridatKnihu = $conn->query($sql);
?>