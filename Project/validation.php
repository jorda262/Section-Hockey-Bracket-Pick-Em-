<?php
include 'databaseUtilities.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $username = $_POST["username"];
  $password = $_POST["password"];
  if(validateUser($username, $password))
  {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    if(isset($_SESSION['username']))
    {
      header("location: section1AA.php");
    }
  }
  else
  {
    header("location: signIn.php");
  }
 }
?>
