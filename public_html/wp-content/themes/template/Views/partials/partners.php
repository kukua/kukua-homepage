<div class="partners <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2>Partners</h2>
				<div class="partner__container">
					<?php foreach ($partners as $i => $partner): ?>
						<div class="partner__image">
							<a href="<?=$partner["url"];?>" target="_blank"><img src="<?=$partner["image"]["url"]; ?>" class=""></a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-sm-3">
				<h2>Awards</h2>
				<a href="http://www.rsm.nl/i-will/i-will-award/edition-2016/" target="_blank"><img src="<?=get_template_directory_uri(); ?>/assets/img/iwillaward.png" class="img-responsive"></a>
			</div>
		</div>
	</div>
</div>
