<div class="text-image <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-4">
				<?php if ($image): ?>
					<img src="<?= $image["url"]; ?>" class="img-responsive">
				<?php endif; ?>
			</div>
			<div class="col-sm-3 col-sm-offset-2">
				<h2><?= $title; ?></h2>
				<p><?=  $text;  ?></p>
			</div>
		</div>
		<?php if ($button_link && $button_text): ?>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-4">
					<div class="button">
						<a href="<?=$button_link;?>" class="btn btn-quatenary btn-lg"><?= $button_text; ?></a>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
