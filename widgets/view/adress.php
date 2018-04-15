<ul>
	<li><?php echo apply_filters( 'widget_title', $instance['title'] ); ?></li>
	<li><a href="tel:<?php echo htmlspecialchars_decode( $instance['adress1'] ,ENT_QUOTES ); ?>"><?php echo htmlspecialchars_decode( $instance['adress1'] ,ENT_QUOTES ); ?></a></li>
	<li><a href="tel:<?php echo htmlspecialchars_decode( $instance['adress2'] ,ENT_QUOTES ); ?>"><?php echo htmlspecialchars_decode( $instance['adress2'] ,ENT_QUOTES ); ?></a></li>
	<li><a href="<?php echo htmlspecialchars_decode( $instance['adress3'] ,ENT_QUOTES ); ?>"><?php echo htmlspecialchars_decode( $instance['adress3'] ,ENT_QUOTES ); ?></a></li>
</ul>