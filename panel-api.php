<?php
$handler = $_POST['funct'];

if(preg_match("(show)",$handler))
{
	show();
}
elseif(preg_match("(update)",$handler))
{
	update();
}
elseif(preg_match("(insert)",$handler))
{
	insert();
}
elseif(preg_match("(delete)",$handler))
{
	fdelete();
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

?>