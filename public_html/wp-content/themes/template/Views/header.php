<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $pageTitle ?></title>
	<link href='https://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= $base ?>/assets/dist/main.min.css">
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">
					<img src="<?= $base ?>/assets/img/kukua-logo-small.png" alt="Kukua B.V.">
				</a>
			</div>
	
			<?= \Template\Settings\Menu::render("header-menu"); ?>
		</div>
	</nav>

	<?php
		$image = $header->getImage();
		$backgroundCss = "background-image:
			linear-gradient(
				rgba(29, 29, 29, 0.6),
				rgba(29, 29, 29, 0.3)
			),
			url('" . $image["url"] . "');";
	?>
	<div class="header" style="<?= $backgroundCss; ?>">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="text-center"><?= $header->getTitle() ?></h1>
					<p class="text-center lead"><?= $header->getSubtitle() ?></p>
				</div>
			</div>
		</div>
	</div>
