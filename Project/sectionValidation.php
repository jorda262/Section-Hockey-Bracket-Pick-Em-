<?
session_start();
include 'databaseUtilities.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $game1 = $_POST['3game1'];
  $game2 = $_POST['3game2'];
  $game3 = $_POST['3game3'];
  $game4 = $_POST['3game4'];
  $game5 = $_POST['3game5'];
  $game6 = $_POST['3game6'];
  $game7 = $_POST['3game7'];
  if((isset($game1) && !empty($game1)) && (isset($game2) && !empty($game2)) && (isset($game3) && !empty($game3)) && (isset($game4)
  && !empty($game4)) && (isset($game5) && !empty($game5)) && (isset($game6) && !empty($game6)) && (isset($game7) && !empty($game7)))
  {
    $username = $_SESSION['username'];
    insertSectionTester($username, $game1, $game2, $game3, $game4, $game5, $game6, $game7);
    header('Location: section1AA.php');
  }
  else {
    echo "$game1";
  }
}
?>
