<?php
require('config.php');
$email=$_POST['email'];
$phone=$_POST['phone'];
$content=$_POST['textArea'];

if(strlen($content) > 500)
{
	echo "3";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	echo "2";
}
else
{
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$sth = $dbh->prepare('INSERT INTO feedback (email, phone, content) VALUES (?, ?, ?)');                     
	$sth->bindParam(1, $email);
	$sth->bindParam(2, $phone);
	$sth->bindParam(3, $content);

	$sth->execute();
	echo "1";
	$dbh = null;
}
?>