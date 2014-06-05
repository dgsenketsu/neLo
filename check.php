<?php
require('config.php');
$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$sth = $dbh->query('SELECT data FROM ocupation');                     
$rows = $sth->fetch(PDO::FETCH_ASSOC);
echo " ".$rows['data'];
$dbh = null;
?>