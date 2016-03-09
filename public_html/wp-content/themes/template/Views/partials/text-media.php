<div class="text-media <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<h2><?= $title; ?></h2>
				<p><?=  $text;  ?></p>
			</div>
			<div class="col-sm-8 col-sm-offset-1">
				<div class="embed">
					<?php if ($media): ?>
						<?= $media ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
