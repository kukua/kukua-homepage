<?php /* Hero partial */ ?>

<?php
$backgroundCss = "";
if ($image):
	$backgroundCss = "background-image:
		url('" . $image["url"] . "');";
endif; ?>

<div class="hero <?= $size; ?>" style="<?= $backgroundCss; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h1><?=$title;?></h1>
				<?php if ($subtitle): ?>
					<p><?= $subtitle; ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
