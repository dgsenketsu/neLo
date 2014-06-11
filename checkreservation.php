<?php
require('config.php');
$month=intval($_POST['month']);
$year=intval($_POST['year']);
$nrDays=intval($_POST['days']);
$room=intval($_POST['room']);
$overbook = intval($_POST['overbook']);
$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

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

$aluna = array_fill(1,$luna, 0);
$aluna2 = array_fill(1,$luna2, 0);

$param1="".$month."/".$year;
	if($month==12)
	{
		$param2="1/".($year+1);
	}
	else
	{
		$param2="".($month+1).'/'.$year;
	}
$param3 = "".$room;
$response = "";
$sth=$dbh->prepare("SELECT startday, endday FROM reservations WHERE endmonthyear=? AND room=?");
$sth->bindparam(1, $param1);
$sth->bindparam(2, $param3);
$sth->execute();
while($row = $sth->fetch(PDO::FETCH_ASSOC))
{
	for($i=$row['startday'];$i<$row['endday'];$i++)
	{
		$aluna[$i]=1;
	}
}
$sth=$dbh->prepare("SELECT startday, endday FROM reservations WHERE endmonthyear=? AND room=?");
$sth->bindparam(1, $param2);
$sth->bindparam(2, $param3);
$sth->execute();
while($row = $sth->fetch(PDO::FETCH_ASSOC))
{
	for($i=$row['startday'];$i<$row['endday'];$i++)
	{
		$aluna2[$i]=1;
	}
	if($row['startday']>$row['endday'])
	{
		for($i=$row['startday'];$i<=$luna;$i++)
		{
			$aluna2[$i]=1;
		}
		for($i=1;$i<=$row['endday'];$i++)
		{
			$aluna2[$luna+$i]=1;
		}
	}
}

for($i=$luna+1;$i<=$luna+$luna2;$i++)
{
	$aluna[$i]=$aluna2[$i-$luna];
}

if($overbook == 0)
{
	$currentday = date('j');
	for($i=$currentday; $i<=$luna;$i++)
	{
		$bool = true;
		for($j=1; $j<=$nrDays;$j++)
		{
			if($aluna[$i+$j]==1)
			{
				$bool=false;
			}
		}
		if($bool==true)
		{
			if($i==$luna)
			{
				$temp="".($i)."/".$month."/".$year;
				$response=$response."<option value=\"".($i)."\">".$temp."</option>";
		    }
		    else
		    {
		    	$temp="".($i+1)."/".$month."/".$year;
			    $response=$response."<option value=\"".($i+1)."\">".$temp."</option>";
		    }
		}
	}
}
elseif($overbook == 1)
{
	$currentday = date('j');
	for($i=$currentday; $i<=$luna;$i++)
	{
		$bool = true;
		if($bool==true)
		{
			if($i==$luna)
			{
				$temp="".($i)."/".$month."/".$year;
				$response=$response."<option value=\"".($i)."\">".$temp."</option>";
		    }
		    else
		    {
		    	$temp="".($i+1)."/".$month."/".$year;
			    $response=$response."<option value=\"".($i+1)."\">".$temp."</option>";
		    }
		}
	}
}
echo $response;
//$dbh = null;
?>