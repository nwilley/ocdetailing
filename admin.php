<?php
  session_start();
  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
    header("Location: login.php");
  }

  include "package_vars.php";

  if (isset($_POST["items"])) {
    $new_file = '<?php
$package_title = <<<EOF
'.$_POST["name"].'
EOF;

$package_items = json_decode(<<<EOF
'.json_encode($_POST["items"]).'
EOF
);';
    file_put_contents("package_vars.php", $new_file);
  }

  include "package_vars.php";
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
    <label class="col-md-4 control-label">Package Name</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <input  name="name" placeholder="Package Name" value="<?= $package_title ?>" class="form-control"  type="text">
      </div>
    </div>
  </div>


  <?php
  foreach ($package_items as $item) {
    echo '
  <div class="form-group">
    <label class="col-md-4 control-label">Item</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <input  name="items[]" placeholder="Item name" value="'.$item.'" class="form-control" type="text">

      </div>
    </div>
    <i class="glyphicon glyphicon-trash remove-icon" style="cursor: pointer; color:red; font-size: 20px; margin-top: 5px;"></i>
  </div>';
  }
  ?>

  <div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
      <button type="submit" class="btn btn-default" id="add-icon" >Add <span class="glyphicon glyphicon-plus"></span></button>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
      <button type="submit" class="btn btn-success" >Submit <span class="glyphicon glyphicon-send"></span></button>
    </div>
  </div>

</fieldset>
</form>

<footer class="container-fluid text-center">
  <p>OCDetailing &copy; 2017</p>
</footer>

</body>

<script>
$(".remove-icon").click(function() {
  $(this).parent().remove()
});

$("#add-icon").click(function(e) {
  $(this).parent().parent().before('\
<div class="form-group">\
  <label class="col-md-4 control-label">Item</label>\
  <div class="col-md-4 inputGroupContainer">\
    <div class="input-group">\
      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>\
        <input  name="items[]" placeholder="Item name" value="" class="form-control" type="text">\
\
    </div>\
  </div>\
  <i class="glyphicon glyphicon-trash remove-icon" style="cursor: pointer; color:red; font-size: 20px; margin-top: 5px;"></i>\
</div>');

  /// dont submit form
  e.preventDefault();
  return false;
});
</script>

</html>
