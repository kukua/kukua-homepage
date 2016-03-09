<?php /* Hero partial */ ?>

<?php
$backgroundCss = "";
if ($image):
	$backgroundCss = "background-image:
		linear-gradient(
			rgba(29, 29, 29, 0.6),
			rgba(29, 29, 29, 0.3)
		),
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
