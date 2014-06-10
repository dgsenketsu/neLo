<?php
require('config.php');
$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$username = "admin";
$password = crypt("12345");

$sth = $dbh->prepare('INSERT INTO users (user, password) VALUES (?, ?)'); 
$sth->bindparam(1, $username); 
$sth->bindparam(2, $password); 
$sth->execute();                   

$dbh = null;
?>