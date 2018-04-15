<ul class="social">
	<li><?php echo apply_filters( 'widget_title', $instance['title'] ); ?></li>
	<li><a href="<?php echo htmlspecialchars_decode( $instance['social1'] ,ENT_QUOTES ); ?>"><img src="<?php echo get_template_directory_uri();?>/images/instagram.svg" alt="instagram"></a></li>
	<li><a href="<?php echo htmlspecialchars_decode( $instance['social2'] ,ENT_QUOTES ); ?>"><img src="<?php echo get_template_directory_uri();?>/images/facebook.svg" alt="facebook"></a></li>
	<li><a href="<?php echo htmlspecialchars_decode( $instance['social3'] ,ENT_QUOTES ); ?>"><img src="<?php echo get_template_directory_uri();?>/images/linkedin.svg" alt="linkedin"></a></li>
</ul>