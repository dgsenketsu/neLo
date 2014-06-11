<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotel Durau - The Hotel of your dream !</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootswatch.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/promo.js"></script>
<script type="text/javascript" src="js/reserve.js"></script>
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
                    <li class="active"><a href="reservation.php">Make a Reservation!</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="features.php">Features</a></li>
                    <li><a href="offers.php">Offers</a></li>
                    <li><a href="login.php">Administration</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
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
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form action="submit_reservation.php" class="form-horizontal" method="POST">
            <fieldset>
              <legend><h2 class="divmid">Make a reservation!</h2></legend>
              <!-- Nume -->
              <div class="form-group">
                <label for="inputNume" class="col-lg-2 control-label">Nume</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputNume" name="inputNume" required>
                </div>
              </div>
              <!-- Prenume -->
              <div class="form-group">
                <label for="inputPrenume" class="col-lg-2 control-label">Prenume</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputPrenume" name="inputPrenume" required>
                </div>
              </div>
              <!-- Telefon -->
              <div class="form-group">
                <label for="inputPhone" class="col-lg-2 control-label">Phone</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputPhone" name="inputPhone" required>
                </div>
              </div>
              <!-- Email -->
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputEmail" name="inputEmail" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputDaysNumber" class="col-lg-2 control-label"># of days</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputDaysNumber" name="inputDaysNumber" required>
                </div>
              </div>
              <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Room</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="selectroom" name="selectroom">
                        <option value="1">Room with 2 beds</option>
                        <option value="2">Room with 3 beds</option>
                        <option value="3">Apartment with 2 rooms, 4 beds</option>
                      </select>
                     </div>
                  </div>
              <div class="form-group">
                <label for="fromMonth" class="col-lg-2 control-label">Month/Year</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="fromMonth" name="fromMonth" placeholder="06/2014" required>
                  <span class="help-block mid">
                    <div id="nonumber"></div>
                    <div class="checkbox">
                          <label id="overlabel">
                            <input type="checkbox" id="overbookcheck" name="overbookcheck"> Overbooking - You agree with terms
                          </label>
                    </div>
                    <button id="minibtn" type="button" class="btn btn-primary btn-xs">Show</button>
                  </span>
                </div>
              </div>
              <div id="showDate"></div>
              <div id="show"></div>
            </fieldset>
          </form>
          </div>
          <div class="col-md-3"></div>
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