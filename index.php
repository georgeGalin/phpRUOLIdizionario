<?php
  session_start();
?>
<html>              
  <head>
    <title>login con ruoli GG </title>
  </head>
  <body>

  <div style="width:100%;max-width:300px;border-radius:10px;border:1px red solid;overflow:hidden">
<div style="background-color:#eeeeee;padding:5px">


    <h2>Registrazione</h2>
      <form action="signup.php" method="POST">          
        Username : <input type="text" name="Nome">
        Password : <input type="password" name="Password"><br><br>
        Ruolo : <select name="role"><br>
          <option value=0>Admin</option>
          <option value=1>Utente</option>
          </select><br><br>
          <h2>Login</h2>
        <button type="submit"> Registrati </button>
      </form>
      <form action="login.php" method="POST">       
        Username : <input type="text" name="Nome">
        Password : <input type="password" name="Password">
        <button type="submit">Accedi</button> 
      </form>
      </div>
</div>
  </body>
</html>