<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotel Durau - The Hotel of your dream !</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootswatch.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/map.js"></script>
<script type="text/javascript "src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzgdOiFagRujMB4kr-vyRTbPw3V6d1bWw"></script>
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
                    <li class="active"><a href="features.php">Features</a></li>
                    <li><a href="offers.php">Offers</a></li>
                    <li><a href="login.php">Administration</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row divtop">
              <div class="col-xs-6 col-md-6">
                  <h2>About Hotel Durau</h2>
                  <p>Situated in a remote location at the edge of the Ceahlau National Reservation in Durau, Romania, Hotel Durau offers you the best accomodation in the area. From here, tourists can climb the mountain, visit the local attractions that includes Durau Monastery</p>

                  <h2>How to find us</h2>
                  <p>Situated in a remote location at the edge of the Ceahlau National Reservation in Durau, Romania, Hotel Durau offers you the best accomodation in the area. From here, tourists can climb the mountain, visit the local attractions that includes Durau Monastery</p>
                  
              </div>
              <div class="col-xs-6 col-md-6">
                  <div id="map-canvas"/>
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