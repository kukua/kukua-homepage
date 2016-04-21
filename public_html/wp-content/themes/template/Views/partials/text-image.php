<div class="text-image <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2><?= $title; ?></h2>
				<p><?=	$text;	?></p>
				<?php if ($button_text): ?>
					<div class="button">
						<?php if ($modalbox): ?>
							<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#theModal"><?= $button_text; ?></a>
						<?php else: ?>
							<a href="<?=$button_link;?>" class="btn btn-primary btn-lg"><?= $button_text; ?></a>
						<?php endif; ?>

						<?php if ($button_link_2): ?>
							<a href="<?=$button_link_2;?>" class="btn btn-primary btn-lg"><?= $button_text_2; ?></a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-sm-offset-2 col-sm-4">
				<?php if ($image): ?>
					<img src="<?= $image["url"]; ?>" class="img-responsive">
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="theModal" tabindex="-1" role="dialog" aria-labelledby="theModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="embed">
					<?php if ($video): ?>
						<?= $video ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
