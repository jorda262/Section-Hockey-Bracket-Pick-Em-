<?php
include 'databaseUtilities.php';
session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $un = $_POST['userName'];
      $fn = $_POST['firstName'];
      $ln = $_POST['lastName'];
      $e = $_POST['email'];
      $p = $_POST['password'];
      $pc = $_POST['passwordConfirm'];
      $ft = $_POST['favoriteTeam'];

      if((isset($un) && !empty($un)) && (isset($fn) && !empty($fn)) && (isset($ln) && !empty($ln)) && (isset($e) && !empty($e)) &&
      (isset($p) && !empty($p)) && (isset($pc) && !empty($pc)) && (isset($ft) && !empty($ft)))
      {
        if($p == $pc)
        {
          if(validateEmail($e))
          {
            if(validateUserName($un))
            {
              insertUser($un,$fn,$ln,$e,$p,$ft);
              $_SESSION['username'] = $un;
              $_SESSION['password'] = $p;
              if(isset($_SESSION['username']))
              {
                header("location: section1AA.php");
              }

            }
            else{echo "That username already exists";}
          }
          else{echo "Invalid email address";}
        }
        else{echo "Passwords do not match";}

      }
      else {echo "All fields required";}
    }
?>
