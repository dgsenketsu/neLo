<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotel Durau - The Hotel of your dream !</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootswatch.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
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
                <a class="navbar-brand" href="index.php">Hotel Durau</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="reservation.php">Make a Reservation!</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="features.php">Features</a></li>
                    <li class="active"><a href="offers.php">Offers</a></li>
                    <li><a href="login.php">Administration</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row divmid">
              <div class="col-xs-6 col-md-2">
              </div>
              <div class="col-xs-6 col-md-8">
                  <?php
                    require('config.php');
                    try {
                            $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                        }
                        catch(PDOException $e) {
                            echo $e->getMessage();
                        }
                    $sth = $dbh->query('SELECT code, effect FROM promo');
                    $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
                    $nr_promo = count($rows);
                    if($nr_promo != null)
                    {
                      for($i = 0; $i < $nr_promo; $i++)
                      {
                          echo "<div class=\"alert alert-dismissable alert-info divtop\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            Use the promo code: <strong>". $rows[$i]['code'] ."</strong> and <strong>".$rows[$i]['effect']."</strong>
                          </div>";
                      }
                    }
                    $dbh = null;
                  ?>
              </div>
              <div class="col-xs-6 col-md-2">
            </div>
        </div>
        <div class="row divtop">
              <div class="col-xs-6 col-md-2">
              </div>
              <div class="col-xs-6 col-md-8">
                <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Prices</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <span class="badge">10$/night</span>
                        1 room, 2 beds
                      </li>
                      <li class="list-group-item">
                        <span class="badge">20$/night</span>
                        1 room, 3 beds
                      </li>
                      <li class="list-group-item">
                        <span class="badge">50$/night</span>
                        Apartment with 2 rooms, 4 beds
                      </li>
                    </ul>
                </div>
              </div>
              </div>
              <div class="col-xs-6 col-md-2">
            </div>
        </div>
        <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8 divmid">
                    <h2><a class="btn btn-success btn-lg" href="reservation.php">Make your reservation!</a></h2>
                </div>
                <div class="col-md-2">
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
</body>
</html>