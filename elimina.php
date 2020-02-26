    <?php
    session_start();
    $parola = $_POST["parola"];  
    $significato =$_POST["significato"];
    $nome = $_SESSION["Nome"];
    $ruolo = $_SESSION["Role"];
    $connessione = new mysqli("remotemysql.com:3306", "eoC2i6ecss", "e82eOPGCxU", "eoC2i6ecss");
    if($ruolo == 0){
        $connessione->query("DELETE FROM `dbparola` WHERE Parola = '$parola'");   
    }
    else{
        $connessione->query("DELETE FROM `dbparola` WHERE Parola = '$parola' AND Username = $nome");
    }
        echo "parola eliminata";
?>
    <form action="main.php" method="POST">       
        <button type="submit">OK!</button>
    </form>