<?php
$parola = $_POST["parola"];  
$connessione = new mysqli("remotemysql.com:3306", "eoC2i6ecss", "e82eOPGCxU", "eoC2i6ecss");
$sql = "SELECT * FROM `dbparola` WHERE parola = '$parola'";    
$result = mysqli_query($connessione, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Parola mancante nel database";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["Significato"];      
    }
}
mysqli_close($connessione);             
?>
<form action="main.php" method="POST">
    <button type="submit">OK!</button>
</form>

