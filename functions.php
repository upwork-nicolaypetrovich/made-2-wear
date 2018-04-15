<?php

// start of the session
session_start();

// registering styles and scripts
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css' );
}


// registering navigation
register_nav_menus(array(
	'top'    => 'Top Manu'
));


// registering image dimensions
add_theme_support( 'post-thumbnails' );


// registering sidebars
register_sidebar( array( 'name' => 'Contacts Column 1', 'id' => "contacts-column-1" ) );
register_sidebar( array( 'name' => 'Contacts Column 2', 'id' => "contacts-column-2" ) );


// registering widgets
include('widgets/controller.php');


// registering logo
add_action('customize_register', 'themename_customize_register');
add_theme_support( 'custom-logo');


// form information sending
function send_email_to_admin() {
	if(isset($_POST['test']) && $_POST['test']=='' ){
		if (isset($_FILES['file']['tmp_name'])) {
			if (move_uploaded_file($_FILES['file']['tmp_name'], realpath(dirname(__FILE__)).'/../../form_uploads/'.$_FILES['file']['name']))
				$uploaded_file = realpath(dirname(__FILE__)).'/../../form_uploads/'.$_FILES['file']['name'];
		}
		//print_r($_POST); print_r($_FILES); die;
		$message = '';
	    if(isset($_POST['name'])) $message .= 'Name: '.$_POST['name']."\n\r";
	    if(isset($_POST['email'])) $message .= 'E-mail: '.$_POST['email']."\n\r";
	    if(isset($_POST['phone'])) $message .= 'Phone: '.$_POST['phone']."\n\r";
	    if(isset($_POST['comment'])) $message .= 'Comment: '.$_POST['comment']."\n\r";
	    if(isset($uploaded_file)) $message .= "\n\r".'File: http://'.$_SERVER['SERVER_NAME'].'/wp-content/form_uploads/'.$_FILES['file']['name']."\n\r";
	    $headers = 'From: Contact Form on Made2Wear <'.$_POST['email'].'>' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	    wp_mail( get_option('admin_email'), 'Contact Form on Made2Wear', $message, $headers);
	    //print_r($_POST); print_r($_FILES); die;
	    $_SESSION['popup'] = true;
	}
    wp_redirect( "/contact/");
    exit();
}
add_action( 'admin_post_nopriv_contact_form', 'send_email_to_admin' );
add_action( 'admin_post_contact_form', 'send_email_to_admin' );


// adding theme customization
function themename_customize_register($wp_customize){

	// video section
	$wp_customize->add_section(
		'video',
		array(
			'title' => 'Video',
	   		'description' => 'Video in popup window',
	   		'priority' => 2,
	   		)
  	);

	$wp_customize->add_setting(
		'video_iframe',
  		array('default' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Y421bWMelqE" frameborder="0" allowfullscreen></iframe>')
  	);
 	$wp_customize->add_control(
  		'video_iframe',
  		array(
   			'label' => 'Video',
   			'section' => 'video',
   			'type' => 'textarea',
   		)
  	);

	// socials section
	$wp_customize->add_section(
		'socials',
		array(
			'title' => 'Socials',
	   		'description' => 'Socials in header',
	   		'priority' => 3,
	   		)
  	);

	$wp_customize->add_setting(
		'inst',
  		array('default' => '#')
  	);
 	$wp_customize->add_control(
  		'inst',
  		array(
   			'label' => 'Instagram',
   			'section' => 'socials',
   			'type' => 'text',
   		)
  	);

	$wp_customize->add_setting(
		'fb',
  		array('default' => '#')
  	);
 	$wp_customize->add_control(
  		'fb',
  		array(
   			'label' => 'Facebook',
   			'section' => 'socials',
   			'type' => 'text',
   		)
  	);

	$wp_customize->add_setting(
		'lin',
  		array('default' => '#')
  	);
 	$wp_customize->add_control(
  		'lin',
  		array(
   			'label' => 'LinkedIn',
   			'section' => 'socials',
   			'type' => 'text',
   		)
  	);

}
 





