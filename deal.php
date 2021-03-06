<?php
  include 'package_vars.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>OCDetailing - Packages</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<div class="container text-center">
  <h2>Package of the Month</h2>
  <div class = "row">
    <div class = "col-sm-12">
      <div class = "well">
        <h2 style="color:red;"><?= $package_title ?></h2>
        <ul>
          <?php
          foreach ($package_items as $item) {
            echo '<li>'.$item.'</li>';
          }
          ?>
        </ul>
      </div>
      </div>
    </div>
<footer class="container-fluid text-center">
  <p>OCDetailing &copy; 2017</p>
</footer>

</body>
</html>
