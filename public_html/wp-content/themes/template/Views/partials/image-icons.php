<div class="image-icons <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<?php if ($background_image): ?>
					<div class="">
						<img src="<?= $background_image["url"]; ?>" class="img-responsive">
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php if ($text): ?>
			<div class="content">
				<?= $text; ?>
			</div>
		<?php endif; ?>
	</div>
</div>

