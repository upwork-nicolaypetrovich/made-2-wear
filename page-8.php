<?php get_header(); ?>
<?php the_post(); ?>

<!-- Block main content -->
		<div class="main-wrapper page3" id="main-wrapper">
			<div class="main-content">
				<img src="<?php echo get_template_directory_uri();?>/images/photo3.png" alt="photo" class="figure-page3" id="figure-page3">
				<div class="container" id="containerPage3">	
					<div class="block-left" id="block-left-page3">
						<div class="headline">
							<p class="main-headline"><span><?php echo get_post_meta( get_the_ID(), 'header', true ); ?></span> <span><?php echo get_post_meta( get_the_ID(), 'text', true ); ?></span></p>
						</div>
						<div class="block-form">
							<div class="form">
								<form name="contact_form" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" onsubmit="return validate_form ( );"  enctype="multipart/form-data">
									<input type="hidden" name="action" value="contact_form">
									<input type="hidden" name="test" value="">
									<div class="formDiv">
										<label for="formName"><span>Name</span></label>
										<input type="text" name="name" class="formEl" id="formName" placeholder="">
									</div>

									<div class="formDiv">
										<label for="formPhone"><span>Phone namber</span></label>
										<input type="tel" name="phone" class="formEl" id="formPhone" placeholder="" >
									</div>
									<div class="formDiv">
										<label for="formEmail"><span>Email:</span></label>
										<input type="email" name="email" class="formEl"  id="formEmail" placeholder="">
									</div>
									<div class="formDiv">
										<label for="comment"><span>Notes</span></label>
										<input type="text" name="comment" class="formComment formEl" id="comment" placeholder="">
									</div>
									<div class="formDiv">
										<input type="file" id="file" name="file" class="file">
										<span class="button-file1" id="button-file1"> <img src="<?php echo get_template_directory_uri();?>/images/file-icon.jpg" alt="Icon"> <span id="button-file2">Upload pictures of your product</span></span> 

									</div>
									<div class="formDiv">
										<input type="submit" name="submit" value="Send" class="formSubmit" onclick="formSubmit(this)">
									</div>
								</form>
							</div>
							<div class="information">
								<div class="box1">	
									<?php dynamic_sidebar( 'contacts-column-1' ); ?>
								</div>
								<div class="box2">
									<?php dynamic_sidebar( 'contacts-column-2' ); ?>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<!-- block footer -->
				<div class="footer">
					<div class="content">
						<ul>
							<li onclick="modalWindow()"><span>Play our video</span><img src='<?php echo get_template_directory_uri();?>/images/video.svg' alt='icon'></li>
							<li><a href="/">Find our process<img src='<?php echo get_template_directory_uri();?>/images/arrow_black_right.svg' alt='arrow'></a></li>
						</ul>
					</div>	
				</div>
				<div class="perto"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/logo_perto.svg" alt="perto"></a></div>
			</div>
		</div>

<?php get_footer(); ?>