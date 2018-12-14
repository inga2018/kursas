<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../app/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style type="text/css">
  body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
  }
  main {
  flex: 1 0 auto;
  }
  #dropdown1 {
  top: 100% !important;
  }
  .fa-facebook {
  background: #3B5998;
  color: white;
  }
  .fa-youtube {
  background: #bb0000;
  color: white;
  }
  .fa-google {
  background: #dd4b39;
  color: white;
  }
  .fa {
  padding: 20px;
  font-size: 20px;
  width: 100%;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
  }
  header nav {
  width:100%;
  height:60px;
  background-color:#fff;
  }
  header .nav-login {
  display:flex;
  justify-content:flex-end;
  }
  header .nav-login form{
  padding-top:15px;
  }
  header .nav-login form input{
  width:140px;
  height:30px;
  padding: 0 10px;
  margin-right:10px;
  border:none;
  background-color:#ccc;
  font-family: arial;
  font-size: 14px;
  color: #111;
  line-height: 30px;
  }

  header .nav-login form button{
  width:60px;
  height:30px;
  margin-right:10px;
  border:none;
  background-color:#f3f3f3;
  font-family: arial;
  font-size: 14px;
  color: #111;
  cursor:pointer;
  }

  header .nav-login form button:hover{
  background-color:#ccc;
  }

  header .nav-login a {
  display:block;
  width:60px;
  height:60px;
  border:none;
  background-color:#fff;
  font-family: arial;
  font-size: 14px;
  color: #111;
  line-height:63px;
  cursor:pointer;   
  }

</style>
</head>
<body>
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="steel.php">PLIENAS</a></li>
    <li class="divider"></li>
    <li><a href="copper.php">VARIS</a></li>
    <li class="divider"></li>
    <li><a href="aluminum.php">ALIUMINIS</a></li>
  </ul>
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="steel.php">PLIENAS</a></li>
    <li class="divider"></li>
    <li><a href="copper.php">VARIS</a></li>
    <li class="divider"></li>
    <li><a href="aluminum.php">ALIUMINIS</a></li>
  </ul>
  <nav class="grey darken-2">
    <div class="nav-wrapper">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">PAGRINDINIS</a></li>
        <li><a class="dropdown-trigger" href="" data-target="dropdown1">METALAS<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="calculation.php">SKAIČIUOKLĖ</a></li>
        <li><a href="quiz.php">PASITIKRINK ŽINIAS</a></li>
      </ul>
    </div>
  </nav>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php">PAGRINDINIS</a></li>
        <li><a class="dropdown-trigger" href="" data-target="dropdown2">METALAS<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="calculation.php">SKAIČIUOKLĖ</a></li>
        <li><a href="quiz.php">PASITIKRINK ŽINIAS</a></li>
      </ul>
</body>
