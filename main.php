<html>         
  <title>Dizionario</title>
  <h1>Dizionario</h1>
  <body>
  <div style="width:100%;max-width:300px;border-radius:10px;border:1px red solid;overflow:hidden">
<div style="background-color:#eeeeee;padding:5px">

  
      <form action="aggiungi.php" method="POST">          
        Parola : <input type="text" name="parola"><br>   
        Significato : <input type="text" name="significato">
        <button type="submit"> Aggiungi </button><br><br>
      </form>


  
  
      <form action="modifica.php" method="POST">
        Parola : <input type="text" name="parola"><br>
        Significato : <input type="text" name="significato">  
        <button type = "submit"> Modifica </button>
      </form><br><br>

      <form action="elimina.php" method="POST">
        Parola : <input type="text" name="parola"><br>
        <button type = "submit"> Elimina </button>
      </form><br>
 

      <form action="visualizza.php" method="POST">    
        Parola : <input type="text" name="parola">   
        <button type = "submit"> Visualizza </button>
      </form><br><br>

      <form action="logout.php" method="POST">        
        <button type = "submit"> Logout </button>
      </form>

      
</div>
</div>
  </body>
</html>   