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
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <h1>Edo's Network</h1>
    
    <div class="profile-presentation">

      <p class="dashboard" id="wback-username">Welcome Back <?php echo $username; ?>!</p>
        <img id="profile-pic-presentation" src="https://support.logmeininc.com/assets/images/care/topnav/default-user-avatar.jpg" alt="profile pic">
        <p id="name-presentation"><?php echo $nome ?> </p>
        <p id="surname-presentation"><?php echo $cognome ?> </p>
        <p id="status-presentation">status: </p>
        <p id="status-php" ><?php echo $status; ?></p>

    </div>

    <div id="left-menu">

      <p class="dashboard"><a id="my-profile1" href="#">My Profile</a></p>

      <p class="dashboard"><a id="my-friends1" href="dash-friends.html">My friends</a> </p>

      <p class="dashboard"><a id="Messages1" href="direct-messages.html">Messages (#)</a> </p>

      <p class="dashboard"><a id="notifications1" href="notifications.html">Notifications (#)</a></p>

      <p class="dashboard"><a id="settings1" href="settings.php">settings</a></p>

    </div>

    <div class="online-friends-dashboard">
      <p id="online-friends">Online friends:</p>
      <p id="online-friends-counter" >0</p>
    </div>
      
</body>
</html>