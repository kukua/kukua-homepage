<div class="hue-<?= get_field("hue"); ?>">
	<?php foreach($partials as $partial): ?>
	    <?php $partial->render(); ?>
	<?php endforeach; ?>
</div>

<div class="articles">
	<div class="container">
		<div class="row">
			<?php foreach($articles as $article): ?>
				<div class="col-xs-12">
					<article>
						<h1><?= $article->title; ?></h1>
						<p><?=  $article->content; ?></p>
						<a href="<?= $article->link; ?>">More...</a>
					</article>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
