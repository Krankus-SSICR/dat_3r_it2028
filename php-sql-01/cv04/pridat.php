<?php 
$conn = new mysqli("localhost", "krankus", "databaze456", "it2028");

$jmeno = $_POST["jmeno"];
$frakce = $_POST["frakce"];

$sql = "INSERT INTO postavy_wow(jmeno_postavy, frakce) VALUES ('$jmeno', '$frakce')";
$pridat = $conn->query($sql);
?>