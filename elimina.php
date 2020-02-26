<?php
    session_start();
    $parola = $_POST["parola"];   
    $significato =$_POST["significato"];
    $nome = $_SESSION["Nome"];
    $ruolo = $_SESSION["Role"];
    $connessione = new mysqli("remotemysql.com:3306", "eoC2i6ecss", "e82eOPGCxU", "eoC2i6ecss"); 
    if($ruolo == 0) {   
        $connessione->query("UPDATE `dbparola` SET `Parola`='$parola',`Significato`='$significato' WHERE Parola='$parola'");  
        echo "la parola inserita è stata eliminata";
    }elseif($ruolo > 0){
            echo "Non hai i poteri per eliminare o modificare";
        }
        
?>
    <form action="main.php" method="POST">       
        <button type="submit">OK!</button>
    </form>