<div class="text-image <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<h2><?= $title; ?></h2>
				<p><?=$text_left; ?></p>
			</div>
			<div class="col-sm-5 col-sm-offset-2">
				<h2>&nbsp;</h2>
				<p><?= $text_right; ?></p>
			</div>
		</div>
	</div>
</div>
