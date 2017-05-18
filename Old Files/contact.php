<!DOCTYPE html>
<html lang="en">
<head>
  <title>OCDetailing - Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
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
    </div>
  </div>
</nav>

<div class="container">

<?php
  $action=$_REQUEST['action'];
  if ($action=="")
      {
?>

<form class="well form-horizontal" style="margin-top: 20px" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Contact Us Today!</legend>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">First Name</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="fname" placeholder="First Name" class="form-control"  type="text">
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Last Name</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="lname" placeholder="Last Name" class="form-control"  type="text">
  </div>
</div>
</div>

<!-- Text input-->
     <div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
  </div>
</div>
</div>


<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Phone #</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
  </div>
</div>
</div>


<!-- radio boxes
<div class="form-group">
                      <label class="col-md-4 control-label">Future Radio Boxes??</label>
                      <div class="col-md-4">
                          <div class="radio">
                              <label>
                                  <input type="radio" name="radio" value="yes" /> Yes
                              </label>
                          </div>
                          <div class="radio">
                              <label>
                                  <input type="radio" name="radio" value="no" /> No
                              </label>
                          </div>
                      </div>
                  </div>

 end future radio boxes.. hehe -->

<div class="form-group">
<label class="col-md-4 control-label">Message</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
</div>
</div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
  <button type="submit" class="btn btn-success" >Send <span class="glyphicon glyphicon-send"></span></button>
</div>
</div>

</fieldset>
</form>
<?php
    }
else
    {
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{
	    $from="From: $fname $lname <$email> ($phone)\r\nReturn-path: $email";
        $subject="OCDetailing Message";
		  mail("austin.meier@hotmail.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }
?>

</div>
  </div><!-- /.container -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

<script src="js/index.js"></script>



<footer class="container-fluid text-center">
  <p>OCDetailing</p>
</footer>

</body>
</html>
