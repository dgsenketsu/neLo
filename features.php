<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotel Durau - The Hotel of your dream !</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootswatch.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript "src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZUlxtnvtREdtbIKnNh67EvDALyg_nGJc"></script>
<script type="text/javascript" src="js/map.js"></script>
<script type="text/javascript" src="js/galleria-1.3.5.min.js"></script>
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

                  <h2>Photo gallery</h2>
                  <p>Use the image gallery below to see what the rooms look like to get a better ideea of what awaits you !</p>
                  
              </div>
              <div class="col-xs-6 col-md-6">
                  <div class="map" id="map-canvas">
                  </div>
              </div>
        </div>
        <div class="row">
          <hr>
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div id="galleria" class="galleria">
                    <img src="images/g1.jpg">
                    <img src="images/g2.jpg">
                    <img src="images/g3.jpg">
                    <img src="images/g4.jpg">
                    <img src="images/g5.jpg">
                </div>
                <script>
                    Galleria.loadTheme('js/galleria.classic.min.js');
                    Galleria.run('.galleria');
                    Galleria.ready(function() {
                    var gallery = this;
                    this.addElement('fscr');
                    this.appendChild('stage','fscr');
                    var fscr = this.$('fscr')
                        .click(function() {
                            gallery.toggleFullscreen();
                        });
                    this.addIdleState(this.get('fscr'), { opacity:0 });
                    });             
                </script>
              </div>
              <div class="col-sm-2"></div>
        </div>
        <div class="row">
          <hr>
          <div class="col-md-2"></div>
          <div class="col-md-8 divmid">
          <h2>Complete features list !</h2>
          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Free 150Mbps Wi-fi</td>
                <td>Pets allowed!</td>
                <td>Parking Lot</td>
              </tr>
              <tr>
                <td>Barbeque Pit</td>
                <td>Kids playground</td>
                <td>Restaurant</td>
              </tr>
              <tr>
                <td>Pool</td>
                <td>24/7 Room Service</td>
                <td>Big yard with grass</td>
              </tr>
              <tr>
                <td>TV</td>
                <td>Free soap?</td>
                <td>Bathroom in each room</td>
              </tr>
            </tbody>
          </table> 
          </div>
          <div class="col-md-2"></div>
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