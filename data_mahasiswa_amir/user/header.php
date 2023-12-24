<?php
include("akses_user.php");
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $title; ?></title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-datepicker.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
    <link href="../style.css" rel="stylesheet">
	<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
	</script>
  </head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-left">
			<li<?php if ($thisPage=="Dashboard") echo " class=\"active\""; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			</ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<a href="../logout.php" data-toggle="tooltip" data-placement="bottom" title="Logout" class="btn btn-danger navbar-btn" role="button"><span class="glyphicon glyphicon-off"></span> Logout</a>
	      </ul>
		</div>
	  </div>
	</nav>