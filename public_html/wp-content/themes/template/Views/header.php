<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $pageTitle ?></title>
	<link href='https://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= $base ?>/assets/dist/main.min.css">

	<meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/img/kukua-logo.jpg">
	<meta property="og:title" content="Kukua weather services">
	<meta property="og:description" content="Innovatively providing accurate and real-time weather information to the African continent, by installing automatic weather stations.">
	<meta property="og:url" content="https://www.kukua.cc">
	<meta property="og:type" content="website">
</head>
<body>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-64064681-2', 'auto');
		ga('send', 'pageview');
	</script>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#data-mobile-drop" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">
					<?php include(__DIR__ . "/logo.php"); ?>
				</a>
			</div>

			<?= \Template\Settings\Menu::render("Primary"); ?>
		</div>
	</nav>
