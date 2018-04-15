		<!-- block modal-window -->
		<div class="modal-window" id="modal-window">	
			<div class="player">	
				<div class="thumb-wrap">
					<?php echo get_theme_mod('video_iframe');?>
				</div>
			</div>
			<div class="close-plaaer" onclick="closeModalWindow()">	
				 <img src='<?php echo get_template_directory_uri();?>/images/close.svg' alt='icon'>
			</div>	
		</div>
	</div>

	<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
	<?php if(isset($_SESSION['popup']) && $_SESSION['popup']){ ?>
	<script>
		alert('Message is sent.');
	</script>
	<?php $_SESSION['popup'] = false; } ?>
</body>
</html>