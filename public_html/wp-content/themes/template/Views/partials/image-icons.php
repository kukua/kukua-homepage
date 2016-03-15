<div class="image-icons <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php if ($background_image): ?>
					<img src="<?= $background_image["url"]; ?>" class="img-responsive">
				<?php endif; ?>
			</div>
		</div>

		<div class="row">
			<?php foreach($icons as $i => $icon): ?>
				<?php if ($i %3 == 0): ?>
					</div>
					<div class="row">
				<?php endif; ?>

				<div class="col-sm-4">
					<h4 class="icon__title"><?= $icon["title"]; ?></h4>
					<p class="icon__image"><img src="<?= $icon["icon"]["url"]; ?>" class="img-responsive"></p>
				</div>

			<?php endforeach; ?>
		</div>
	</div>
</div>
