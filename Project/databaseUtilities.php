<?php

#Function for retrieving PDO Object
function getPDO()
{
  $pdo = null;
  try{
    $connString = "mysql:host=localhost;dbname=CSCI2006PROJECT";
    $user = "root";
    $pass = "root";

    $pdo = new PDO($connString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e){
    die($e->getMessage());
  }
  return $pdo;
}

#Function for selecting everything from a table
function selectAll($table)
{
  $pdo = getPDO();
  $sql = "select * from $table";
  $result = $pdo->query($sql);
  $array = $result->fetchall();
  return $array;
}

function selectColumn($table, $column)
{
  $pdo = getPDO();
  $stmt = $pdo->prepare("SELECT $column FROM $table");
  $stmt->execute();
  $array = $stmt->fetchAll(PDO::FETCH_COLUMN);

  return $array;
}




#Function for inserting user into user-table
function insertUser($userName, $firstName, $lastName, $email,
                $password, $favoriteTeam)
{
  $pdo = getPDO();
  $sql = "insert into users (username, firstname, lastname, email, password, favoriteteam)
          values (:username, :firstname, :lastname, :email, :password, :favoriteteam)";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(":username" , $userName);
  $statement->bindValue(":firstname" , $firstName);
  $statement->bindValue(":lastname" , $lastName);
  $statement->bindValue(":email" , $email);
  $statement->bindValue(":password" , $password);
  $statement->bindValue(":favoriteteam", $favoriteTeam);
  $statement->execute();

}

function insertSectionTester($game1, $game2, $game3, $game4, $game5, $game6, $game7)
{
  $pdo = getPDO();
  $sql = "insert into section1 (game1, game2, game3, game4, game5, game6, game7)
          values (:game1, :game2, :game3, :game4, :game5, :game6, :game7)";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(":game1" , $game1);
  $statement->bindValue(":game2" , $game2);
  $statement->bindValue(":game3" , $game3);
  $statement->bindValue(":game4" , $game4);
  $statement->bindValue(":game5" , $game5);
  $statement->bindValue(":game6" , $game6);
  $statement->bindValue(":game6" , $game6);
  $statement->execute();

}

#function to validate user and user's password
function validateUser($username, $password)
{
$pdo = getPDO();
$sql = "SELECT * FROM users WHERE username=:username AND password=:password";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":username" , $username);
$stmt->bindValue(":password" , $password);
$stmt->execute();
if($stmt->rowCount() > 0)
{
  return true;
}
return false;
}

 ?>
