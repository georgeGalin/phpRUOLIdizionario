<html>         
  <title>Dizionario</title>
  <h1>Cosa vuoi fare?</h1>
  <body>
      <form action="aggiungi.php" method="POST">          
        Parola : <input type="text" name="parola">   
        Significato : <input type="text" name="significato">
        <button type="submit"> Aggiungi </button>
      </form>


  
  
      <form action="modifica.php" method="POST">
        Parola : <input type="text" name="parola">
        Significato : <input type="text" name="significato">  
        <button type = "submit"> Modifica </button>
      </form>

      <form action="elimina.php" method="POST">
        Parola : <input type="text" name="parola">
        <button type = "submit"> Elimina </button>
      </form>
 

      <form action="visualizza.php" method="POST">    
        Parola : <input type="text" name="parola">   
        <button type = "submit"> Visualizza </button>
      </form>

      <form action="logout.php" method="POST">        
        <button type = "submit"> Logout </button>
      </form>
  </body>
</html>   