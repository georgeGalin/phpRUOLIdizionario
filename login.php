<?php
session_start();         
$username = $_POST["Nome"];
$password = $_POST["Password"];      
if (!$username) {
  exit("Inserisci un username per accedere!");
}
if (!$password) {                                
  exit("la password non è corretta, riprova!");
}
$connessione = new mysqli("remotemysql.com:3306", "eoC2i6ecss", "e82eOPGCxU", "eoC2i6ecss"); 
$sql = "SELECT * FROM Users where username='$username' and password='$password'";
$result = mysqli_query($connessione, $sql);   
if ($result || mysqli_num_rows($result) == 0) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION["Nome"] = $username;
  $_SESSION["Role"] = $row["role"];
  ob_start();
  header('Location: main.php');  
  ob_end_flush();
  exit();
} else {
  session_destroy();
  exit("Utente non trovato!");
}
?>
<!--fine login -->