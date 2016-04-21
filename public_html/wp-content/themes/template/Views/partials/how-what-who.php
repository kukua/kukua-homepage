<div class="how-what-who <?= isset($background) ? $background : ""; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h2 class="text-center"><?=$title_how;?></h2>
				<h3 class="text-center"><?=$subtitle_how;?></h3>
				<p><?=$content_how;?></p>
			</div>
			<div class="col-sm-4">
				<h2 class="text-center"><?=$title_what;?></h2>
				<h3 class="text-center"><?=$subtitle_what;?></h3>
				<p><?=$content_what;?></p>
			</div>
			<div class="col-sm-4">
				<h2 class="text-center"><?=$title_who;?></h2>
				<h3 class="text-center"><?=$subtitle_who;?></h3>
				<p><?=$content_who;?></p>
			</div>
		</div>
	</div>
</div>
