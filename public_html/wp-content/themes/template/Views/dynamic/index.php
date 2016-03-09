<div class="hue-<?= get_field("hue"); ?>">
	<?php foreach($partials as $partial): ?>
	    <?php $partial->render(); ?>
	<?php endforeach; ?>
</div>
