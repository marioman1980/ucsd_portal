<?php $logged_in = 0; ?>
<!DOCTYPE>
<html>
<head>
	<title><?php echo $title; ?></title>
	<!-- Latest compiled and minified CSS resource from bootstrap CDN -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Below two javascript links can be included at the bottom of page, just before </body> to improve performance -->
	<!-- jQuery library by Google-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>

	<!-- JavaScript from bootstrap CDN -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async></script>

	<!-- notice async usage in links, this is to make sure html pages continue to load while external JS resource are loading -->

	<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<div id="container" class="container-fluid">
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
	    	<li><a id="user_welcome"><?php if($logged_in == 1) { echo 'Hi '.$user->forename; } ?></a></li>
<!-- 			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
	    </ul>
	</nav>
</header>




<body>