<?php
session_start();
include 'databaseUtilities.php';
$username = $_SESSION['username'];

deleteUser($username);
session_unset();
session_destroy();
header('Location: signIn.php');
?>
