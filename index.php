<?php
  session_start();
?>
<html>              
  <head>
    <title>login con ruoli GG </title>
  </head>
  <body>
      <form action="signup.php" method="POST">          
        Username : <input type="text" name="Nome">
        Password : <input type="password" name="Password">
        Ruolo : <select name="role">
          <option value=0>Admin</option>
          <option value=1>Utente</option>
          </select>
        <button type="submit"> Registrati </button>
      </form>
      <form action="login.php" method="POST">       
        Username : <input type="text" name="Nome">
        Password : <input type="password" name="Password">
        <button type="submit">Accedi</button> 
      </form>
  </body>
</html>