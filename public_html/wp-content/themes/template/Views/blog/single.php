<div class="hue-secondary">
	<?php
	$backgroundCss = "";
	if ($article->image):
		$backgroundCss = "background-image:
			url('" . $article->image["url"] . "');";
	endif; ?>

	<article class="articles">
		<header class="hero small" style="<?= $backgroundCss; ?>">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<h1><?=$article->title;?></h1>
					</div>
				</div>
			</div>
		</header>
		<section class="article">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="article__subtitle"><?= $article->subtitle; ?></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<a href="/blog" class="btn btn-infk">&laquo; Back</a>
					</div>
				</div>
			</div>
		</section>
		<section class="article">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 article__content">
						<p><?= $article->content; ?></p>
					</div>
				</div>
			</div>
		</section>
	</article>
</div>
