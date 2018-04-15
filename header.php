<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title><?php wp_title();?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="body" id="body">
		<!-- block heder -->
		<div class="header">
			<div class="content">
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="main-menu" id="header-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
				</div>
			</div>
		</div>
		<!-- block hesderMob -->
		<div class="headerMob">
			<div class="content">
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="main-menu">
					<div class="button">
						<img src="<?php echo get_template_directory_uri();?>/images/menu.svg" alt="button"  onclick="openrMenu(this)">
						<img src="<?php echo get_template_directory_uri();?>/images/close.svg" alt="button" onclick="closeMenu(this)">
					</div>
					<div class="menuMob" id="menuMob">
						<div class="wrapper" id="wrapperMob">
							<div class="menu">
								<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
							</div>
							<div class="social">
								<ul>
									<li><a href="<?php echo get_theme_mod('inst');?>"><img src="<?php echo get_template_directory_uri();?>/images/instagram.svg" alt="icon"></a></li>
									<li><a href="<?php echo get_theme_mod('fb');?>"><img src="<?php echo get_template_directory_uri();?>/images/facebook.svg" alt="icon"></a></li>
									<li><a href="<?php echo get_theme_mod('lin');?>"><img src="<?php echo get_template_directory_uri();?>/images/linkedin.svg" alt="icon"></a></li>
								</ul>
							</div>
							<div class="video">
								<ul>
									<li><img src='<?php echo get_template_directory_uri();?>/images/video.svg' alt='arrow' onclick="modalWindow()"></li>
									<li><span onclick="modalWindow()">Play our video</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>