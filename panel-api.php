<?php
$handler = $_POST['funct'];

if($handler == "show")
{
	show();
}
elseif($handler == "update")
{
	update();
}
elseif($handler == "insert")
{
	insert();
}
elseif($handler == "delete")
{
	fdelete();
}
elseif($handler == "bm")
{
	showbm();
}
elseif($handler == "BMupdate")
{
	//updatebm();
}
elseif($handler == "BMInsert")
{
	//insertbm();
}
elseif($handler == "BMdelete")
{
	fdeleteBM();
}

function fdelete()
{
	$original=$_POST['original'];
    require('config.php');
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$sth = $dbh->prepare("DELETE FROM news WHERE title=? LIMIT 1");
	$sth->bindparam(1, $original);
	$sth->execute();
	$dbh=null;
	echo "done";
}

function fdeleteBM()
{
	$nume=$_POST['nume'];
	$prenume=$_POST['prenume'];
	$endday=intval($_POST['endday']);
	$startday=intval($_POST['startday']);
    require('config.php');
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$sth = $dbh->prepare("DELETE FROM reservations WHERE nume=? AND prenume=?");
	$sth->bindparam(1, $nume);
	$sth->bindparam(2, $prenume);
	$sth->execute();
	$sth = $dbh->prepare("UPDATE ocupation SET data=?");
	$suma=$endday-$startday;
	$sth->bindparam(1, $suma);
	$sth->execute();
	$dbh=null;
	echo "done";
}


function insert()
{
    $title=$_POST['title'];
	$content=$_POST['content'];
	$link=$_POST['link'];
    require('config.php');
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$sth = $dbh->prepare("INSERT INTO news (title, content, link) VALUES (?, ?, ?)");
	$sth->bindparam(1, $title);
	$sth->bindparam(2, $content);
	$sth->bindparam(3, $link);
	$sth->execute();
	$dbh=null;
	echo "done";
}

function update()
{
	$original=$_POST['original'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$link=$_POST['link'];
    require('config.php');
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare("UPDATE news SET title=?, content=?, link=? WHERE title=?");
	$sth->bindparam(1, $title);
	$sth->bindparam(2, $content);
	$sth->bindparam(3, $link);
	$sth->bindparam(4, $original);
	$sth->execute();
	$dbh=null;
	echo "done";
}

function show()
{
	require('config.php');
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$sth = $dbh->prepare('SELECT * FROM news'); 
	$sth->execute();                   
	$rows = $sth->fetchAll(PDO::FETCH_ASSOC);
	$array["length"] = count($rows);
	for($i=0;$i<count($rows);$i++)
	{
		$array[$i] = array(
			'title' => $rows[$i]['title'],
			'content' => $rows[$i]['content'],
			'link' => $rows[$i]['link']
		);
	}
	echo json_encode($array);
	$dbh = null;
}

function showbm()
{
	require('config.php');
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$sth = $dbh->prepare('SELECT * FROM reservations'); 
	$sth->execute();                   
	$rows = $sth->fetchAll(PDO::FETCH_ASSOC);
	$array["length"] = count($rows);
	for($i=0;$i<count($rows);$i++)
	{
		$array[$i] = array(
			'nume' => $rows[$i]['nume'],
			'prenume' => $rows[$i]['prenume'],
			'phone' => $rows[$i]['phone'],
			'email' => $rows[$i]['email'],
			'startday' => $rows[$i]['startday'],
			'startmonthyear' => $rows[$i]['startmonthyear'],
			'endday' => $rows[$i]['endday'],
			'endmonthyear' => $rows[$i]['endmonthyear'],
			'room' => $rows[$i]['room'],
			'overbook' => $rows[$i]['overbook'],
			'expireoverbook' => $rows[$i]['expireoverbook']
		);
	}
	echo json_encode($array);
	$dbh = null;
}

?>