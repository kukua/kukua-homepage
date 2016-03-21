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
			<div class="col-sm-4">
				<h2>Newsletter</h2>
				<p>
					Prow scuttle parrel provost Sail ho shrouds spirits boom mizzenmast yardarm. Pinnace holystone mizzenmast quarter crow's nest nipperkin grog yardarm hempen halter furl. Swab barque interloper chantey doubloon starboard grog black jack gangway rutters.
				</p>
			</div>
			<div class="col-sm-6 col-sm-offset-2">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
