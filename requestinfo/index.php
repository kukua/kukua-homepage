<?php require_once("sendmail.php"); ?>

<!DOCTYPE html>
<html lang="en" class="signup">
	<head>
		<meta charset="utf8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Kukua Weather services</title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery.vegas.min.css">
		<link rel="stylesheet" href="css/animate.min.css">
		
		<link rel="stylesheet" href="assets/icon-fonts/styles.css"> 
		<link rel="stylesheet" href="css/pixeden-icons.css"> 
		
		<!-- CUSTOM STYLES -->
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/responsive.css">

		<!-- WEBFONT -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>
	</head>
	<body class="full-page">
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-64064681-2', 'auto');
			ga('send', 'pageview');
		</script>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/" title="Home">
						<img src="images/logo.png" alt="Kukua Weather services">
					</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav pull-right">
						<li><a href="/#home">Home</a></li>
						<li><a href="/#focus">Focus</a></li>
						<li><a href="/#video">Video</a></li>
						<li><a href="/#team">Team</a></li>
						<li><a href="http://dashboard.kukua.cc">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<header id="home" class="header">
			<div class="container">
				<div class="row row-spacing">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">
						<h1 class="intro">Weather services for African Farmers</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">
						<?php if (isset($_SESSION["error"])): ?>
							<div class="alert alert-danger"><?=$_SESSION["error"];?></div>
						<?php elseif (isset($_SESSION["success"])): ?>
							<div class="alert alert-success"><?=$_SESSION["success"]; ?></div>
						<?php endif; ?>

						<form class="form" method="post" action="/requestinfo">
							<label class="sr-only" for="exampleInputEmail3">Your name</label>
							<input type="text" name="name" class="input-lg form-control" placeholder="Your name">

							<label class="sr-only" for="exampleInputEmail3">Email address</label>
							<input type="email" name="email" class="input-lg form-control" placeholder="e-mail address">

							<label class="sr-only" for="exampleInputEmail3">Request</label>
							<input type="submit" value="Request info" class="btn green-btn btn-lg btn-block" onclick="ga('send', 'event', { eventCategory: 'Signup', eventAction: 'Information request', eventLabel: 'Signup'});" >
						</form>
					</div>
				</div>
			</div>
		</header>
	</body>
</html>
<?php 
unset($_SESSION["success"]); 
unset($_SESSION["error"]); 
?>
