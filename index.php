<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Twitter Bootstrap 3 Responsive Layout Example</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootswatch.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Hotel Amnesia</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" target="_blank">Home</a></li>
                    <li><a href="#" target="_blank">About</a></li>
                    <li><a href="#" target="_blank">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
	    <div class="page-header">
            <div class="container">
                <div class="jumbotron">
                    <?php
                        require('config.php');
                        try {
                            $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                        }
                        catch(PDOException $e) {
                            echo $e->getMessage();
                        }
                        $sth = $dbh->query('SELECT title, content, link FROM news');
                        # Setting the fetch mode
                        # $sth->setFetchMode(PDO::FETCH_ASSOC);
                        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
                        $nr_news=count($rows);
                        echo "<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">";
                        if($nr_news != null)
                        {
                            echo "<ol class=\"carousel-indicators\">
                            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\">
                            </li>
                            ";
                        }
                        for($i=1; $i<$nr_news; $i++)
                        {
                            echo "<li data-target=\"#myCarousel\" data-slide-to=\"".$i."\">
                            </li>
                            ";
                        }
                        echo "</ol>
                        <div class=\"carousel-inner\">
                        <div class=\"active item\">";
                        $title=$rows[0]['title'];
                        $content=$rows[0]['content'];
                        $link=$rows[0]['link'];
                        echo "<h2 class=\"h2-carousel\">".$title."</h2>
                        <div class=\"carousel-caption\">
                        <p>".$content."</p>";
                        if($link != null)
                        {
                            echo "<p><a class=\"btn btn-primary btn-lg\" href=\"".$link."\">Learn more</a></p>";
                        }
                        echo "</div>
                        </div>
                        ";
                        if($nr_news > 1)
                        {
                            for($i=1; $i<$nr_news;$i++)
                            {
                                echo "<div class=\"item\">
                                <h2 class=\"h2-carousel\">".$rows[$i]['title']."</h2>
                                <div class=\"carousel-caption\">
                                <p>".$rows[$i]['content']."</p>
                                ";
                                if($rows[$i]['link'] != null)
                                {
                                    echo "<p><a class=\"btn btn-primary btn-lg\" href=\"".$rows[$i]['link']."\">Learn more</a></p>";
                                }
                                echo "</div>
                                </div>
                                ";
                            }
                        }
                        echo "</div>
                        <a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">
                            <span class=\"glyphicon glyphicon-chevron-left\"></span>
                        </a>
                        <a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">
                            <span class=\"glyphicon glyphicon-chevron-right\"></span>
                        </a>
                    </div>";
                    ?>
                </div>
            </div>
	    </div>
    </header>
    <div class="container">
        <div class="row">
        <hr>
            <div class="col-sm-12">
                <footer>
                    <p>&copy; Copyright 2014</p>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>