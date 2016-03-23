<?php
	$backgroundCss = "background-image:
		url('/wp-content/themes/template/assets/img/default.jpg');";
?>

<div class="hero small" style="<?= $backgroundCss; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="default">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
