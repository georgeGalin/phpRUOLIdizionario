<?php
    $username = $_POST["Nome"];
    $password =$_POST["Password"];
    $role=$_POST["role"];
    if(!$username){
      exit("Inserisci un username!");
    }
    if(!$password){
      exit("Inserisci una password!");
    }
    $connessione = new mysqli("remotemysql.com:3306", "eoC2i6ecss", "e82eOPGCxU", "eoC2i6ecss");  
    $sql = "SELECT username FROM Users WHERE username='$username'";
    $result = mysqli_query($connessione,$sql);
    if (mysqli_num_rows($result) == true) {
      exit("Username già registrato");
      
    }
    $sql = "INSERT INTO Users (username, password, role)
            VALUES ('$username', '$password', '$role')";
    if (mysqli_query($connessione, $sql)) {
        echo "<h1>Congratulazioni $username registrazione compleatata</h1> ";
    } else {
        echo "Errore: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($connessione);
?>