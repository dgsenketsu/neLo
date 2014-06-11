<?php
session_start();
if(!isset($_SESSION['user']))
{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotel Durau - The Hotel of your dream !</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootswatch.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/panel.js"></script>
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
                    <li><a href="offers.php">Offers</a></li>
                    <li class="active"><a href="login.php">Administration</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row ">
        	<h2>News Editor</h2>
        	<div class="col-md-1"></div>
        	<div class="col-md-10 divtop">
        	  <div class="form-group">
			      <label for="select" class="col-lg-2 control-label">Manage News</label>
			      <div class="col-lg-10">
			        <select class="form-control" id="selectnews">			          
			        </select>
			        <br />
			      </div>
			    </div>
        	 <div class="form-group">
		      <label for="inputtitle" class="col-lg-2 control-label">Title</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" id="inputTitle">
		        <span class="help-block"></span>
		      </div>
		    </div>
		    <br />
        	<div class="form-group">
		      <label for="textArea" class="col-lg-2 control-label">Content</label>
		      <div class="col-lg-10">
		        <textarea class="form-control" rows="3" id="textArea"></textarea>
		        <span class="help-block">Link is not obligatory!</span>
		      </div>
		    </div>
		      <div class="form-group">
		      <label for="inputlink" class="col-lg-2 control-label">Link</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" id="inputLink" placeholder="link.php">
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		      <br />
		        <button type="submit" class="btn btn-primary" id="btnUpdate">Update</button>
		        <button type="submit" class="btn btn-primary" id="btnDelete">Delete</button>
		        <button type="submit" class="btn btn-primary" id="btnInsert">Insert</button>
		      </div>
		    </div>
		    </div>
		    <div class="col-md-1"></div>
        </div>
        <div class="row ">
        	<h2>Booking Manager</h2>
        	<div class="col-md-1"></div>
        	<div class="col-md-10 divtop">
        	  <div class="form-group">
			      <label for="select" class="col-lg-2 control-label">Manage News</label>
			      <div class="col-lg-10">
			        <select class="form-control" id="selectbooking">			          
			        </select>
			        <br />
			      </div>
			    </div>

        	<div class="form-group">
        		<label class="col-lg-2 control-label">Nume</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="nume">
		        <span class="help-block"></span>
		        </div>
		    </div>


        	<div class="form-group">
        		<label class="col-lg-2 control-label">Prenume</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="prenume">
		        <span class="help-block"></span>
		        </div>
		    </div>

        	<div class="form-group">
        		<label class="col-lg-2 control-label">Phone</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="phone">
		        <span class="help-block"></span>
		        </div>
		    </div>
        	<div class="form-group">
        		<label class="col-lg-2 control-label">Email</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="email">
		        <span class="help-block"></span>
		        </div>
		    </div>

        	<div class="form-group">
        		<label class="col-lg-2 control-label">Starting Day</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="startday">
		        <span class="help-block"></span>
		        </div>
		    </div>

        	<div class="form-group">
        		<label class="col-lg-2 control-label">Starting Month/Year</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="startmonthyear">
		        <span class="help-block"></span>
		        </div>
		    </div>

        	<div class="form-group">
        		<label class="col-lg-2 control-label">End Day</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="endday">
		        <span class="help-block"></span>
		        </div>
		    </div>

        	<div class="form-group">
        		<label class="col-lg-2 control-label">End Month/Year</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="endmonthyear">
		        <span class="help-block"></span>
		        </div>
		    </div>

        	<div class="form-group">
        		<label class="col-lg-2 control-label">Room</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="room">
		        <span class="help-block"></span>
		        </div>
		    </div>

        	<div class="form-group">
        		<label class="col-lg-2 control-label">Overbook</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="overbook">
		        <span class="help-block"></span>
		        </div>
		    </div>

        	<div class="form-group">
        		<label class="col-lg-2 control-label">ExpireDay Overbook</label>
        		<div class="col-lg-10">
		        <input type="text" class="form-control" id="expireoverbook">
		        <span class="help-block"></span>
		        </div>
		    </div>

		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		      <br />
		        <button type="submit" class="btn btn-primary" id="btnBMUpdate">Update</button>
		        <button type="submit" class="btn btn-primary" id="btnBMDelete">Delete</button>
		        <button type="submit" class="btn btn-primary" id="btnBMInsert">Insert</button>
		      </div>
		    </div>
		    </div>
		    <div class="col-md-1"></div>
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