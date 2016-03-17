<div class="text-image-vertical <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2><?= $title; ?></h2>
				<p><?=  $text;  ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<?php if ($image): ?>
					<img src="<?= $image["url"]; ?>" class="img-responsive">
				<?php endif; ?>
			</div>
		</div>
		<?php if ($button_link && $button_text): ?>
			<div class="row">
				<div class="col-sm-12">
					<div class="button">
						<a href="<?=$button_link;?>" class="btn btn-primary btn-lg"><?= $button_text; ?></a>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
