<?php /* Hero partial */ ?>

<?php
$backgroundCss = "";
if ($image):
	$backgroundCss = "background-image:
		url('" . $image["url"] . "');";
endif; ?>

<div class="hero <?= $size; ?>" style="<?= $backgroundCss; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h1><?=$title;?></h1>
				<?php if ($subtitle): ?>
					<p><?= $subtitle; ?></p>
				<?php endif; ?>
			</div>
		</div>
		<?php if ($eu_reference): ?>
			<div class="eu_reference clearfix">
				<div class="image">
					<img src="<?=get_template_directory_uri(); ?>/assets/img/eu-logo.png" class="img-responsive">
				</div>
				<div class="content">
					Kukua has received a grant from the European Union to roll out an initial 70 weather stations in Nigeria.
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
