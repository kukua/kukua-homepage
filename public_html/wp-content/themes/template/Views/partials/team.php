<div class="team <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<?php foreach ($members as $i => $member): ?>
				<?php if ($i %4 == 0): ?>
					</div>
					<div class="row">
				<?php endif; ?>
				<div class="col-sm-3 col-xs-6">
					<div class="member js-match-height">
						<img src="<?=$member["image"]["url"]; ?>" class="img-responsive member__image">
						<h4 class="member__name"><?= $member["name"]; ?></h4>
						<p class="member__title"><?= $member["title"]; ?></p>
						<div class="member__social">
							<ul class="list-inline">
								<?php if ($member["facebook"]): ?>
									<li>
										<a href="<?= $member["facebook"]; ?>" target="_blank">
											<img src="<?= get_template_directory_uri() ?>/assets/img/facebook_logo.png" class="img-responsive">
										</a>
									</li>
								<?php endif; ?>
								<?php if ($member["twitter"]): ?>
									<li>
										<a href="<?= $member["twitter"]; ?>" target="_blank">
											<img src="<?= get_template_directory_uri() ?>/assets/img/twitter_logo.png" class="img-responsive">
										</a>
									</li>
								<?php endif; ?>
								<?php if ($member["linkedin"]): ?>
									<li>
										<a href="<?= $member["linkedin"]; ?>" target="_blank">
											<img src="<?= get_template_directory_uri() ?>/assets/img/linkedin_logo.png" class="img-responsive">
										</a>
									</li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
