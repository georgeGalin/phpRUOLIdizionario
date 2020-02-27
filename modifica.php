<?php
    session_start();
    $parola = $_POST["parola"];       
    $significato =$_POST["significato"];
    $nome = $_SESSION["Nome"];
    $ruolo = $_SESSION["Role"];

    $connessione = new mysqli("remotemysql.com:3306", "eoC2i6ecss", "e82eOPGCxU", "eoC2i6ecss");

if($ruolo == 0) {
    $connessione->query("UPDATE `dbparola` SET `Parola`='$parola',`Significato`='$significato' WHERE Parola='$parola'");  
    exit("la parola inserita è stata modificata");
    
}elseif($ruolo == 1){
    $connessione->query("UPDATE `dbparola` SET `Parola`='$parola',`Significato`='$significato' WHERE Parola='$parola'  AND Username = '$nome'");
        exit("Non hai i poteri per eliminare o modificare");
       
    }
       
?>