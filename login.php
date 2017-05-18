<?php
  session_start();

  $user = 'admin';
  $pass = '$2y$10$tapEFv0GQcurTi1H/B0rCuR0ONJz161Avbi5boi8MpBRBvJNsWvbW';

  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header("Location: admin.php");
  }

  if(isset($_POST['username']) && isset($_POST['password'])) {
    if($_POST['username'] == $user && password_verify($_POST['password'], $pass)) {
      $_SESSION['logged_in'] = true;
      header("Location: admin.php");
    }
  }

?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>OCDetailing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="images/favicon.png" type="image/png">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">OCDetailing</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="packages.html">Packages</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="deal.php">Package of the Month</a></li>
      </ul>
    </div>
  </div>
</nav>

<form class="well form-horizontal" style="margin-top: 20px" action="" method="post"  id="contact_form">
<fieldset>
  <div class="form-group">
    <label class="col-md-4 control-label">Username</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="username" placeholder="Username" class="form-control"  type="text">
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label">Password</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input  name="password" placeholder="Password" class="form-control"  type="password">
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
      <button type="submit" class="btn btn-success" >Login <span class="glyphicon glyphicon-send"></span></button>
    </div>
  </div>

</fieldset>
</form>


<footer class="container-fluid text-center">
  <p>OCDetailing &copy; 2017</p>
</footer>

</body>
</html>
