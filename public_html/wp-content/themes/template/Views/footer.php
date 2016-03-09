	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="u-text-center item">
						<h4><i class="glyphicon glyphicon-map-marker"></i></h4>
						<?= $footer->getStreet(); ?>,
						<?= $footer->getPostalcode(); ?>,
						<?= $footer->getCity(); ?><br>
						The Netherlands
					</div>
				</div>
				<div class="col-sm-3">
					<div class="u-text-center item">
						<h4><i class="glyphicon glyphicon-envelope"></i></h4>
						<?= $footer->getEmail(); ?>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="u-text-center item">
						<h4><i class="glyphicon glyphicon-earphone"></i></h4>
						<?= $footer->getPhoneNumber(); ?>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="u-text-center item">
						<h4>F</h4>
						<a href="<?= $footer->getFacebook(); ?>" target="_blank">Facebook</a><br>
						<a href="<?= $footer->getLinkedin(); ?>" target="_blank">LinkedIn</a><br>
						<a href="<?= $footer->getTwitter(); ?>" target="_blank">Twitter</a>
					</div>
				</div>
			</div>
    	    <div class="row">
    	        <div class="col-xs-12">
    	            <div class="u-text-center">
    	                &copy; <?php echo date('Y'); ?> <a href="http://www.kukua.cc">kukua.cc</a>
    	            </div>
    	        </div>
    	    </div>
    	</div>
    </div>
	<script src="<?= $base; ?>/assets/dist/main.min.js"></script>
</body>
</html>
