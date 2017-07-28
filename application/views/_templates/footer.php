<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>


	<!-- modal -->
	<div id="modal">
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
				<p class="modal-card-title">Modal title</p>
				<button class="delete" data-izimodal-close="" data-izimodal-transitionout="bounceOutDown"></button>
			</header>
			<section class="modal-card-body">
			
			</section>
			<footer class="modal-card-foot">
				<a class="button is-success" name="">Save changes</a>
				<a class="button" id="close-modal" data-izimodal-close="" data-izimodal-transitionout="bounceOutDown">Cancel</a>
			</footer>
		</div>
	</div>


    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    <script src="<?php echo URL; ?>public/js/jquery-2.1.1.min.js"></script>

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
		var url = "<?php echo URL_WITH_INDEX_FILE; ?>";
    </script>

    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>public/node_modules/izimodal/js/iziModal.js"></script>
    <script src="<?php echo URL; ?>public/js/pace.min.js"></script>
    <script src="<?php echo URL; ?>public/js/application.js"></script>
</body>
</html>
