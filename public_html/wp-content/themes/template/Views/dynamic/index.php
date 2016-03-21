<?php if (function_exists("get_field")): ?>
	<div class="hue-<?= get_field("hue"); ?>">
<?php else: ?>
	<div class="hue-primary">
<?php endif; ?>

	<?php foreach($partials as $partial): ?>
	    <?php $partial->render(); ?>
	<?php endforeach; ?>
</div>
