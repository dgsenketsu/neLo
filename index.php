<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotel Durau - The Hotel of your dream !</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootswatch.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/website.js"></script>
<script type="text/javascript" src="js/promo.js"></script>
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
                <a class="navbar-brand" href="index.php">Hotel Durau</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="reservation.php">Make a Reservation!</a></li>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="features.php">Features</a></li>
                    <li><a href="offers.php">Offers</a></li>
                    <li><a href="login.php">Administration</a></li>
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
                            echo "<p><a class=\"btn btn-success\" href=\"".$link."\">Learn more</a></p>";
                        }
                        else
                        {
                            echo "<br /><br />";
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
                                    echo "<p><a class=\"btn btn-success\" href=\"".$rows[$i]['link']."\">Learn more</a></p>";
                                }
                                else
                                {
                                    echo "<br /><br />";
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
                    $dbh = null;
                    ?>
                </div>
            </div>
	    </div>
    </header>
    <div class="container">
        <div class="row">
              <div class="col-xs-6 col-md-3">
                  <img src="images/location.jpg" class="img-circle" alt="Circular Image">
              </div>
              <div class="col-xs-6 col-md-5">
                  <h2>About Hotel Durau</h2>
                  <p>Situated in a remote location at the edge of the Ceahlau National Reservation in Durau, Romania, Hotel Durau offers you the best accomodation in the area. Read now about our features that will make you feel like home.</p>
                  <p><a href="features.php" class="btn btn-success btn-medium">Learn More &raquo;</a></p>
              </div>
              <div class="col-xs-6 col-md-4">
                  <h2>LIVE Accomodation status</h2>
                  <p>Realtime reservation status over 1 month</p>
                  <div id="output2"></div>
                  <div id="output"></div>
            </div>
        </div>
        <div class="row">
        <hr>
            <div class="col-xs-6 col-md-6">
                <h2>100% Satisfaction !</h2>
                <p>We, at Hotel Durau, always place the customer and his needs before anything else and as such offer room service around the clock as well as a non-stop restaurant, a club and of course a pool !</p>
            </div>
            <div class="col-xs-6 col-md-6">
                <blockquote>
                  <p>Really happy with my tour of Romania, I specially want to mention Hotel Durau as it has one of the friendly staff I have ever met and they indeed offer everything they claim to. I will recommend this place to my friends!</p>
                  <small>Happy Customer, Joe Miller</small>
                </blockquote>
            </div>
        </div>
        <div class="row">
        <hr>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 divmid">
                    <h2>Features of Hotel Durau</h2>
                    <br />
                </div>
                <div class="col-md-4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-1">
                    <img src="images/asset1.png"></img>
                </div>
                <div class="col-md-1">
                    <img src="images/asset2.png"></img>
                </div>
                <div class="col-md-1">
                    <img src="images/asset3.png"></img>
                </div>
                <div class="col-md-1">
                    <img src="images/asset4.png"></img>
                </div>
                <div class="col-md-1">
                    <img src="images/asset5.png"></img>
                </div>
                <div class="col-md-1">
                    <img src="images/asset6.png"></img>
                </div>
                <div class="col-md-1">
                    <img src="images/asset7.png"></img>
                </div>
                <div class="col-md-1">
                    <img src="images/asset8.png"></img>
                </div>
                <div class="col-md-1">
                    <img src="images/asset9.png"></img>
                </div>
                <div class="col-md-1">
                    <img src="images/asset10.png"></img>
                </div>
                <div class="col-md-1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8 divmid">
                    <h3>These are only some of the features that awaits in this hotel </h3>
                    <h2><a class="btn btn-success btn-lg" href="reservation.php">Make your reservation!</a></h2>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
        <div class="row">
            <hr>
               <div class="col-xs-6 col-md-3"></div>
               <div class="col-xs-6 col-md-6 divmid">
                  <h2 class="h2-title">Contact support</h2>
                  <p>Have questions? Write us now today and we will get to you as soon as possible!</p>
                  <div class="alert alert-dismissable alert-info">
                     Get a response in less than 48 hours!
                  </div>
                  <div data-toggle="modal" data-target="#TModal"><p><a class="btn btn-success btn-lg">Write us!</a></p></div>
                  <div id="TModal" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title">Contact Support</h2>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" onsubmit="return makesubmit()">
                            <div id="modalmessage"></div>
                              <fieldset>
                                <div class="form-group">
                                  <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                  <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputPhone" class="col-lg-2 control-label">Phone</label>
                                  <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputPhone">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="textArea" class="col-lg-2 control-label">Comments</label>
                                  <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                                    <span class="help-block">Maximum of 500 characters</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                                  </div>
                                </div>
                              </fieldset>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-xs-6 col-md-3 divmid">
                  <img src="images/support.png" class="img-circle img-add" alt="Circular Image">
              </div>
        </div>

        <div class="row">
        <hr>
            <div class="col-sm-12 divmid">
                <footer>
                    <p>Copyleft &copy; 2014 Golita Aurelian</p>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>