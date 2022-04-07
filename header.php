<?php
    include 'functions/user-functions.php';
?>

<?php
    session_start();
?>
<!--maybe put session_start(); twice @ 1:36:38-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css"> 
<script src="https://kit.fontawesome.com/f0d7a30a28.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Feet Pics</title>
  </head>
  <body>
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-black">
        <div class="container">
            <a href="#" class="navbar-brand"><span><i class="fas fa-socks"></i>Feet Pics</span></a>
            <button class="navbar-toggler" data-toggle="collapse"
            data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"></li>
                <a href="index.php" Class="nav-link">Home</a>
                <li class="nav-item">
                  <a href="header.php" class="nav-link">Header</a>
                </li>
                <li class="nav-item">
                  <a href="switch.php" class="nav-link">Switch</a>
                </li> 
                <li class="nav-item">
                  <a href="calendar.php" class="nav-link">Calendar</a>
                </li>
                <li class="nav-item">
                  <a href="calculator.php" class="nav-link">Calculator</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-arrow-alt-circle-down fa-2x"></i>
                  </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <header>
        <nav class="nav-header-main">
          <a class="header-logo" href="index.php">
            <img src="images/chickenpic.jpg" alt="logo">
          </a>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">about me</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </nav>
        <div class="header-login">
          <?php 
            if (isset($_SESSION['userId'])) {
              echo ' <form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
            </form>';
            }
            else {
              echo '<form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Username/E-mail..">
              <input type="text" name="pwd" placeholder="password">
              <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>';
            }
          ?>
          
        </div>
    </header>





  <?php
  $_SESSION['username'] = "LailaHouston";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
  echo "\nYou are not logged in!";
}   else{
      echo "\nYou are logged in!";
}
  ?>
