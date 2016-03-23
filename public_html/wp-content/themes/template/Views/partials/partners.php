<div class="partners <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Partners</h2>
				<div class="partner__container">
					<?php foreach ($partners as $i => $partner): ?>
						<div class="partner__image">
							<img src="<?=$partner["image"]["url"]; ?>" class="img-responsive">
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
