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
        <div class="row divtop">
              <div class="col-xs-6 col-md-3">
              </div>
              <div class="col-xs-6 col-md-5">
                  <?php
                    require('config.php');
                    try {
                            $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                        }
                        catch(PDOException $e) {
                            echo $e->getMessage();
                        }
                    $sth = $dbh->query('SELECT ')
                  ?>
              </div>
              <div class="col-xs-6 col-md-4">
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