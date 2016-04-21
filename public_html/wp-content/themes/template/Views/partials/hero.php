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
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="eu_reference clearfix">
						<table>
							<tr>
								<td>
									<img src="<?=get_template_directory_uri(); ?>/assets/img/eu-logo.png">
								</td>
								<td>
									Kukua has received a grant from the European Union to roll out an initial 70 weather stations in Nigeria.
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
