<?php if (function_exists("get_field")): ?>
	<div class="hue-<?= get_field("hue"); ?>">
<?php else: ?>
	<div class="hue-primary">
<?php endif; ?>

	<?php foreach($partials as $partial): ?>
	    <?php $partial->render(); ?>
	<?php endforeach; ?>

	<div class="articles">
		<div class="container">
			<div class="row">
				<?php foreach($articles as $i => $article): ?>
					<div class="col-sm-6">
						<article class="article">
							<header class="article__header">
								<img src="<?= $article->image["url"]; ?>" class="img-responsive">
							</header>
							<section class="article__body js-match-height">
								<h3 class="article__title"><a href="<?= $article->link; ?>"><?= $article->title; ?></a></h3>
								<h4 class="article__subtitle"><?= $article->subtitle; ?></h4>
								<p class="article__content"><?= $article->excerpt; ?></p>
							</section>
							<footer class="article__footer">
								<a class="article__link" href="<?= $article->link; ?>">More...</a>
							</footer>
						</article>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<div class="signup">
						<a href="/sign-up/" class="btn btn-default btn-block">Sign up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
