<?php get_header(); ?>

		<div class="main-wrapper page1" id="main-wrapper">
			<div class="main-content">
				<div class="slider single-item" id="slider">

					<?php $slide_main = new WP_Query( array( 'post_type' => 'slide_main', 'posts_per_page'=> -1 ) ); ?>
					<?php if ( $slide_main->have_posts() ) { ?>
					<?php while ( $slide_main->have_posts() ) { $slide_main->the_post(); ?>
					<div>
						<div class="container">	
							<div class="block-left">
								<div class="headline">
									<p class="main-headline"><span><?php echo get_the_title(); ?></span><span><?php echo get_post_meta( get_the_ID(), 'number', true ); ?></span></p>
									<div class="text">
										<?php echo preg_replace("/\r\n|\r|\n/",'<br/>', get_post_meta( get_the_ID(), 'main_text', true )); ?>
									</div>
									<p class="progress"><span class="processClickRight">Find our process <img src='<?php echo get_template_directory_uri();?>/images/arrow_black_right.svg' alt='arrow'></span></p>

									<p class="progress progress2"><a href="<?php echo get_page_link(8); ?>"><span>Contact us<img src='<?php echo get_template_directory_uri();?>/images/arrow_black_right.svg' alt='arrow'></span></a></p>
								</div>
							</div>
							<div class="block-right">
								<p><?php echo get_post_meta( get_the_ID(), 'slide_text', true ); ?><span><?php echo get_post_meta( get_the_ID(), 'slide_text_y', true ); ?></span></p>
								<img src='<?php echo wp_get_attachment_image_src( get_post_meta( get_the_ID(), 'slide_image', true ), 'large', true )[0]; ?>' alt='photo' class="img">
								<?php if (strpos(wp_get_attachment_image_src( get_post_meta( get_the_ID(), 'slide_image_2', true ), 'large', true )[0], '/default.png') == false){ ?>
								<img src='<?php echo wp_get_attachment_image_src( get_post_meta( get_the_ID(), 'slide_image_2', true ), 'large', true )[0]; ?>' alt='photo' class="img">
								<?php } ?>
							</div>
						</div>
					</div>
					<?php } ?>
					<?php } ?>


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
							<li><a href="<?php echo get_page_link(8); ?>"><span>Contact us</span><img src='<?php echo get_template_directory_uri();?>/images/closed-envelope-circle.svg' alt='icon'></a></li>
						</ul>
					</div>	
				</div>
				<div class="perto"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/logo_perto.svg" alt="perto"></a></div>
			</div>
		</div>

<?php get_footer(); ?>