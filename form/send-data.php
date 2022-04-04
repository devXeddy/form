<?php

use function PHPSTORM_META\sql_injection_subst;

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 


    $conn = new mysqli('127.0.0.1', 'root', '', 'credentials');
    if($conn->connect_error){
        die('connessione fallita: '.$conn->connect_error);

    }else{
        echo "connessione riuscita";
    }
 
    $pwd = hash("md5",$password);

    $sql = "INSERT INTO users (nome, cognome, username, email, password) VALUES ('$nome', '$cognome', '$username', '$email', '$pwd');";

    mysqli_query($conn, $sql);
    header("Location: login.html");
    $conn->close();
?>




