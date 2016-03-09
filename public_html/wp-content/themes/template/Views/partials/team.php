<div class="team <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<?php foreach ($members as $i => $member): ?>
				<?php if ($i %4 == 0): ?>
					</div>
					<div class="row">
				<?php endif; ?>
				<div class="col-sm-3 col-xs-6">
					<div class="member">
						<img src="<?=$member["image"]["url"]; ?>" class="img-responsive member__image">
						<h4 class="member__name"><?= $member["name"]; ?></h4>
						<p class="member__title"><?= $member["title"]; ?></p>
						<div class="member__social">
							<?php if ($member["facebook"]): ?>
								<a href="<?= $member["facebook"]; ?>" target="_blank">F</a>
							<?php endif; ?>

							<?php if ($member["twitter"]): ?>
								<a href="<?= $member["twitter"]; ?>" target="_blank">T</a>
							<?php endif; ?>

							<?php if ($member["linkedin"]): ?>
								<a href="<?= $member["linkedin"]; ?>" target="_blank">L</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
