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

#Function for selecting a column from a table
function selectColumn($table, $column)
{
  $pdo = getPDO();
  $stmt = $pdo->prepare("SELECT $column FROM $table");
  $stmt->execute();
  $array = $stmt->fetchAll(PDO::FETCH_COLUMN);

  return $array;
}

#Function for inserting user into database
function insertUser($userName, $firstName, $lastName, $email,$password, $favoriteTeam)
{
  $pdo = getPDO();
  $sql = "insert into users (username, firstname, lastname, email, password, favoriteteam) values (:username, :firstname, :lastname, :email, :password, :favoriteteam)";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(":username" , $userName);
  $statement->bindValue(":firstname" , $firstName);
  $statement->bindValue(":lastname" , $lastName);
  $statement->bindValue(":email" , $email);
  $statement->bindValue(":password" , $password);
  $statement->bindValue(":favoriteteam", $favoriteTeam);
  $statement->execute();
}

#Function for inserting section picks into database
function insertSectionTester($section, $username, $game1, $game2, $game3, $game4, $game5, $game6, $game7)
{
  if(rowEmpty($section,$username))
  {
    $pdo = getPDO();
    $sql = "INSERT INTO $section (username, game1, game2, game3, game4, game5, game6, game7) values (:username, :game1, :game2, :game3, :game4, :game5, :game6, :game7)";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":username" , $username);
    $statement->bindValue(":game1" , $game1);
    $statement->bindValue(":game2" , $game2);
    $statement->bindValue(":game3" , $game3);
    $statement->bindValue(":game4" , $game4);
    $statement->bindValue(":game5" , $game5);
    $statement->bindValue(":game6" , $game6);
    $statement->bindValue(":game7" , $game7);
    $statement->execute();
  }
  else
  {
    $pdo = getPDO();
    $sql = "UPDATE $section SET username=:username, game1=:game1, game2=:game2 , game3=:game3, game4=:game4, game5=:game5, game6=:game6 , game7=:game7 WHERE 1";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":username" , $username);
    $statement->bindValue(":game1" , $game1);
    $statement->bindValue(":game2" , $game2);
    $statement->bindValue(":game3" , $game3);
    $statement->bindValue(":game4" , $game4);
    $statement->bindValue(":game5" , $game5);
    $statement->bindValue(":game6" , $game6);
    $statement->bindValue(":game7" , $game7);
    $statement->execute();
  }
}

#Function to validate user and password
function rowEmpty($section, $username)
{
  $pdo = getPDO();
  $sql = "SELECT * FROM $section WHERE username=:username";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":username" , $username);
  $stmt->execute();
  if($stmt->rowCount() < 1)
  {
    return true;
  }
  return false;
}

#Function to validate user and password
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

#Function for validating the user name and making sure the name isnt already in use by another person
function validateUserName($username)
{
  $pdo = getPDO();
  $sql = "SELECT * FROM users WHERE username=:username";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":username" , $username);
  $stmt->execute();
  if($stmt->rowCount() > 0)
  {
    return false;
  }
  return true;
}

#Function for validating email for sign up page
function validateEmail($email)
{
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    return false;
  }
  return true;
}

#Function for deleting a user account from the database
function deleteUser($username)
{
  $pdo = getPDO();
  $sql = "DELETE FROM users WHERE username=:username";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":username" , $username);
  $stmt->execute();
}

function updateAccount($username, $firstname, $lastname, $email, $password, $favoriteteam)
{
  $pdo = getPDO();
  $sql = "UPDATE users SET firstname=:firstname, lastname=:lastname, email=:email, password=:password, favoriteteam=:favoriteteam WHERE username=:username";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(":username" , $username);
  $statement->bindValue(":firstname" , $firstname);
  $statement->bindValue(":lastname" , $lastname);
  $statement->bindValue(":email" , $email);
  $statement->bindValue(":password" , $password);
  $statement->bindValue(":favoriteteam", $favoriteteam);
  $statement->execute();
}

function getRow($section, $username)
{
  $pdo = getPDO();
  $sql = "SELECT game1, game2, game3, game4, game5, game6, game7 FROM $section WHERE username= ?";
  $statement = $pdo->prepare($sql);
  $statement->execute(array($username));
  $array = $statement->fetchAll();//$result->fetchAll();
  return $array[0];
}
?>
