<?php 

        $conn = new mysqli('127.0.0.1', 'root', '', 'credentials');
        if($conn->connect_error){
            die('connessione fallita: '.$conn->connect_error);

        }else{
            echo "connessione riuscita";
        }
        session_start();
        $password = $_SESSION['password'];
        $username = $_SESSION['username'];
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $new_password2 = $_POST['new_password2'];



        if ($old_password == $password){
            if ($new_password == $new_password2){
                $password = $new_password;
                $password_updated = hash("md5",$new_password);
                $sql = "UPDATE users SET password = '$password_updated' WHERE username = '$username'";
                mysqli_query($conn, $sql);
                $var = "Password cambiata con successo!";
                header("location: change-password.php");
            }
            else{
                $var = "Le nuove password devono coincidere!";
                header("location: change-password.php");
            }

        }else{
            $var = "Hai inserito la password errata!";
        }
      ?>