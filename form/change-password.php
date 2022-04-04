<?php

session_start();
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $nome = $_SESSION['nome'];
  $cognome = $_SESSION['cognome'];
  $status = $_SESSION['status'];

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="settings.css">
    <title>Change Password</title>
</head>
<body>
<h1 id="back-dashboard"><a id="a-back-dashboard" href="dashboard.php">Edo's Network</a></h1>

    <div class="online-friends-dashboard">
      <p id="online-friends">Online friends:</p>
      <p id="online-friends-counter" >0</p>
    </div>

    <div class="center">
        <h1>Change your password</h1>
        <form method="post" action="change-password-2.php">
          <div class="txt_field">
            <input type="password"
             required = "required" 
            name="old_password">
            <span></span>
            <label>Old Password</label>
          </div>
          <div class="txt_field">
            <input type="password"
            name="new_password"
             required>
            <span></span>
            <label>New Password</label>
          </div>
          <div class="txt_field">
            <input type="password"
            name="new_password2"
             required>
            <span></span>
            <label>New Password</label>
          </div>
          <input type="submit" value="Change it!">
        </form>
      </div>
    
</body>
</html>