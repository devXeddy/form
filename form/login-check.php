<?php

    use function PHPSTORM_META\sql_injection_subst;

    $conn = new mysqli('127.0.0.1', 'root', '', 'credentials');
    if($conn->connect_error){
        die('connessione fallita: '.$conn->connect_error);
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pwd = hash("md5",$password);

    $sql="SELECT * FROM users WHERE username='$username' AND Password='$pwd'";

        $result=mysqli_query($conn,$sql);
        $conta=mysqli_num_rows($result);
        if($conta==1){


            session_start();

            $row = $result->fetch_assoc();
            $name = $row['nome'];
            $cognome = $row['cognome'];
            $email = $row['email'];
            $status = $row['status'];

            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['nome'] = $name;
            $_SESSION['cognome'] = $cognome;
            $_SESSION['email'] = $email;
            $_SESSION['status'] = $status;

            
            /*autenticazione riuscita!*/
            header("Location: dashboard.php");

        }else{
            header("Location: login.html");
        }

?>