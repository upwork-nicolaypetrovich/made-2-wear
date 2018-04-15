<?php get_header(); ?>
<?php the_post(); ?>

		<!-- Block main content -->
		<div class="main-wrapper page2" id="main-wrapper">
			<div class="main-content">
				<div class="container">
					<div class="block-left">
						<div class="headline">
							<p class="main-headline"> <span>About  us</span> <span></span></p>
							<div class="text">
								<?php echo get_the_content(); ?>
							</div>
							<p class="progress"><span> <a href="index.html">Find our process <img src='<?php echo get_template_directory_uri();?>/images/arrow_black_right.svg' alt='arrow'></a></span></p>
						</div>
					</div>
					<div class="block-right">
						<div class="slider single-item" id="slider">

							<?php $slide_main = new WP_Query( array( 'post_type' => 'about_slide', 'posts_per_page'=> -1 ) ); ?>
							<?php if ( $slide_main->have_posts() ) { ?>
							<?php while ( $slide_main->have_posts() ) { $slide_main->the_post(); ?>
							<div>
								<p><?php echo preg_replace("/\r\n|\r|\n/",'<br/>', get_post_meta( get_the_ID(), 'slide_text', true )); ?></p>
								<img src='<?php echo wp_get_attachment_image_src( get_post_meta( get_the_ID(), 'slide_image', true ), 'large', true )[0]; ?>' alt='photo'>
							</div>
							<?php } ?>
							<?php wp_reset_postdata(); } ?>


						</div>
					</div>
				</div>		
				<!-- block arrow slider -->
				<div class="arrow-slider">
					<div>
						<span class="processClickLeft"><img src='<?php echo get_template_directory_uri();?>/images/arrow_black_left.svg' alt='arrow'></span>
						<span class="processClickRight"><img src='<?php echo get_template_directory_uri();?>/images/arrow_black_right.svg' alt='arrow'></span>	
					</div>
				</div>
				<!-- block footer -->
				<div class="footer">
					<div class="content">
						<ul>
							<li onclick="modalWindow()"><span>Play our video</span><img src='<?php echo get_template_directory_uri();?>/images/video.svg' alt='icon'></li>
							<li></li>
						</ul>
					</div>	
				</div>
				<div class="perto"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/logo_perto.svg" alt="perto"></a></div>
			</div>
		</div>

<?php get_footer(); ?>