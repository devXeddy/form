<?php

  session_start();
  $username = $_SESSION['username'];
  $nome = $_SESSION['nome'];
  $cognome = $_SESSION['cognome'];
  $status = $_SESSION['status'];


  echo "<link rel='stylesheet' type='text/css' href='path-to-css-file' />";

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="settings.css">
    <title>Settings</title>
</head>
<body>
    <h1 id="back-dashboard"><a id="a-back-dashboard" href="dashboard.php">Edo's Network</a></h1>


    <div class="online-friends-dashboard">
      <p id="online-friends">Online friends:</p>
      <p id="online-friends-counter" >0</p>
    </div>


    <div class="settings">
        <p id="settings-of">Settings of: <?php echo $username ?> </p>
        <p><a id="change-password" class="settings-style" href="change-password.php">Change Password</a></p>
        <br>
        <p><a id="change-email" class="settings-style" href="change-email.php">Change Email</a></p>
        <br>
        <p><a id="change-gender" class="settings-style" href="change-gender.php">Change Gender</a></p>
    </div>
        <div id="second-column">
            <p><a id="change-username" class="settings-style" href="change-username.php">Change username</a></p>
            <br>
            <p><a id="change-bio" class="settings-style" href="change-bio.php">Change Biography</a></p>
            <br>
            <p><a id="change-status" class="settings-style" href="change-status.php">Change status</a></p>
        </div>
    

</body>
</html>