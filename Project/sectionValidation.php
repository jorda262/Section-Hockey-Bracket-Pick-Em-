<?php
include 'databaseUtilities.php';
echo ($_POST["insert"]);
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  if(isset($_POST['game1']) && !empty($_POST['game1']))
      {
        $game1 = $_POST['game1'];
        echo "ok";
      }
  if(isset($_POST['game2']) && !empty($_POST['game2']))
    {
      $game2 = $_POST['game2'];
    }
  if(isset($_POST['game3']) && !empty($_POST['game3']))
    {
      $game3 = $_POST['game3'];
    }
  if(isset($_POST['game4']) && !empty($_POST['game4']))
    {
      $game4 = $_POST['game4'];
    }
  if(isset($_POST['game5']) && !empty($_POST['game5']))
    {
      $game5 = $_POST['game5'];
    }
  if(isset($_POST['game6']) && !empty($_POST['game6']))
      {
        $game6 = $_POST['game6'];
      }
  if(isset($_POST['game7']) && !empty($_POST['game7']))
      {
        $game7 = $_POST['game7'];
        insertSectionTester($game1, $game2, $game3, $game4, $game5, $game6, $game7);
      }

  }

 ?>
