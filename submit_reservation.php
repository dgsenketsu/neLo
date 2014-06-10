<?php
require('config.php');

$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$nume=$_POST['inputNume'];
$prenume=$_POST['inputPrenume'];
$phone=$_POST['inputPhone'];
$email=$_POST['inputEmail'];
$days=$_POST['inputDaysNumber'];
$room= intval($_POST['selectroom']);
$from=$_POST['selectdate'];
$frommonth=$_POST['fromMonth'];
$aux=preg_split("(/)", $frommonth);
$month = intval($aux[0]);
$year = intval($aux[1]);

//Luna
if($month == 2)
{
	$luna=28;
	$luna2=31;
}
elseif($month==1)
{
	$luna=31;
	$luna2=28;
}
elseif($month==12)
{
	$luna=31;
	$luna2=31;
}
elseif($month==3 ||$month==5 ||$month==7 ||$month==8||$month==10)
{
	$luna=31;
	$luna2=3;
}
else
{
	$luna=30;
	$luna2=31;
}
$param="".$month."/".$year;
if($from+$days>$luna)
{
	$endday = $days-($luna-$from); 
	if($month==12)
	{
		$param2="1/".($year+1);
	}
	else
	{
		$param2="".($month+1).'/'.$year;
	}
}
else
{
	$endday=$from+$days;
	$param2="".$month."/".$year;
}
$aux1=0;
$aux2=0;

$sth = $dbh->prepare("INSERT INTO reservations (nume, prenume, phone, email, startday, startmonthyear, endday, endmonthyear, room, overbook, expireoverbook) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$sth->bindparam(1, $nume);
$sth->bindparam(2, $prenume);
$sth->bindparam(3, $phone);
$sth->bindparam(4, $email);
$sth->bindparam(5, $from);
$sth->bindparam(6, $param);
$sth->bindparam(7, $endday);
$sth->bindparam(8, $param2);
$sth->bindparam(9, $room);
$sth->bindparam(10, $aux1);
$sth->bindparam(11, $aux2);
$result = $sth -> execute(); 

$sth2=$dbh->prepare("UPDATE ocupation SET `data`=`data`+? WHERE 1");
$sth2->bindparam(1, $days);
$result=$sth2->execute();
$dbh=null;

header("Location: index.php");

?>