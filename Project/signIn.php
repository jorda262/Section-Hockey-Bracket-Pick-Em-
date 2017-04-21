<?php
session_start();
include 'databaseUtilities.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
    <link href='http://fonts.googleapis.com/css?family=Cookie|Cuprum' rel='stylesheet' type='text/css'>
    <link href="bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">
    <link href="assign2.css" rel="stylesheet">
    <link href ="sign.css" rel ="stylesheet">
</head>

<body>
<header>
   <div id="topHeaderRow" >
      <div class="container">
         <nav class="navbar navbar-inverse " role="navigation">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <p class="navbar-text">Welcome to <strong><a href ="section1AA.php" class="navbar-link">MN Puck Picks</a></strong>, <a href="signIn.php" class="navbar-link">Login</a> or <a href="signUp.php" class="navbar-link">Create new account</a></p>
            </div>
         </nav>
      </div>
   </div>

   <div id="logoRow" >
      <div class="container">
         <div class="row">
            <div class="col-md-8">
                <h1>Section Tournament Challenge</h1>
            </div>
            <div class="col-md-4">
            </div>
         </div>
      </div>
   </div>
</header>

<div class="box">
  <div id = "verticalSpace">
    <form id="signup" role="search" method="POST" action="validation.php">
        <div class="header">
            <h3>Sign In</h3
        </div>
        <div class="sep"></div>
        <div class="inputs">
            <input type="text" name="username" placeholder="User Name" autofocus style="width:100%;"/>
            <input type="password" name="password" placeholder="Password" style="width:100%;"/>
            <button type="submit" class="btn btn-primary" style="width:100%; background-color:black; border-color:black;">SIGN IN</button>
        </div>
    </form>
  </div>
</div>

​
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
