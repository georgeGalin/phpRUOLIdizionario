<?php
session_start();     
$parola = $_POST["parola"];
$significato = $_POST["significato"];
$connessione = new mysqli("remotemysql.com:3306", "eoC2i6ecss", "e82eOPGCxU", "eoC2i6ecss");
$nome = $_SESSION["Nome"];
$connessione->query("INSERT INTO dbparola (Parola, Significato, Username) VALUES ('$parola', '$significato', '$nome');");
echo "parola inserita nel database";
?>
<form action="main.php" method="POST">
    <button type="submit">OK</button>
</form>