    <?php
    session_start();
    $parola = $_POST["parola"];  
    $nome = $_SESSION["Nome"];
    $ruolo = $_SESSION["Role"];
    $connessione = new mysqli("remotemysql.com:3306", "eoC2i6ecss", "e82eOPGCxU", "eoC2i6ecss");
    //definisco variabile esito, con valore iniziale negativo
    if($ruolo == 0){
        $connessione->query("DELETE FROM dbparola WHERE Parola = '$parola'");
        //devo valutare esito $esito = contaRighe();
        exit("parola eliminata");
    }
    else{
        $connessione->query("DELETE FROM dbparola WHERE Parola = '$parola' AND Username = '$nome'");
        //devo valutare esito $esito = contaRighe();
        exit("non hai i poteri per modificare o eliminare");
    }
    /*
    Seèèèèè la query è andata bene (righe affette > 0) stampo messaggio di OK
    Altrimenti stampo messaggio di KO
    */
    
?>
    <form action="main.php" method="POST">       
        <button type="submit">OK!</button>
    </form>