<?php
require('config.php');
$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$username = $_POST['inputuser'];
$password = $_POST['inputPassword'];

$sth = $dbh->prepare('SELECT password FROM users WHERE user=?'); 
$sth->bindparam(1, $username); 
$sth->execute();                   
$rows = $sth->fetch(PDO::FETCH_ASSOC);
if(password_verify($password, $rows['password']))
{
	session_start();
	$_SESSION['user']="admin";
	header("Location: panel.php");
}
else
{
	header("Location: login.php");
}
$dbh = null;
?>