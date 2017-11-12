<!DOCTYPE>
<html>
<head>
	<title><?php echo $title; ?></title>
	<!-- Latest compiled and minified CSS resource from bootstrap CDN -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<div class="container-fluid">
<header>
	<nav class="navbar">
	    <div class="navbar-header">
			<img src="<?php echo base_url(); ?>assets/img/ucsd-logo.jpg" />
			<h1>Applicant Portal</h1>
	    </div>
<!-- 	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Page 1</a></li>
	      <li><a href="#">Page 2</a></li>
	    </ul>-->
	    <ul class="nav navbar-nav navbar-right">
	    	<li><a id="user_welcome">Hi <?php echo $user->forename; ?></a></li>
<!-- 			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
	    </ul>
	</nav>
</header>




<body>