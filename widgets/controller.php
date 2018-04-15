<?php


// widget of contacts
class Made2Wear_Contacts extends WP_Widget {
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'Made2Wear_Contacts',
			'description' => 'Contacts list widget',
		);
		parent::__construct( 'Made2Wear_Contacts', 'Made2Wear Contacts', $widget_ops );
	}
	public function widget( $args, $instance ) {
		include 'view/contacts.php';
	}
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Contacts', 'text_domain' );
		$contact1 = ! empty( $instance['contact1'] ) ? $instance['contact1'] : esc_html__( 'contact', 'text_domain' );
		$contact2 = ! empty( $instance['contact2'] ) ? $instance['contact2'] : esc_html__( 'contact', 'text_domain' );
		$contact3 = ! empty( $instance['contact3'] ) ? $instance['contact3'] : esc_html__( 'contact', 'text_domain' );
		$contact4 = ! empty( $instance['contact4'] ) ? $instance['contact4'] : esc_html__( 'contact', 'text_domain' );
		include 'view/contacts_admin.php';
	}
	public function update( $new_instance, $old_instance ) {
		$instance           = array();
		$instance['title']  = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['contact1']  = ( ! empty( $new_instance['contact1'] ) ) ? strip_tags( $new_instance['contact1'] ) : '';
		$instance['contact2']  = ( ! empty( $new_instance['contact2'] ) ) ? strip_tags( $new_instance['contact2'] ) : '';
		$instance['contact3']  = ( ! empty( $new_instance['contact3'] ) ) ? strip_tags( $new_instance['contact3'] ) : '';
		$instance['contact4']  = ( ! empty( $new_instance['contact4'] ) ) ? strip_tags( $new_instance['contact4'] ) : '';
		return $instance;
	}
}
add_action( 'widgets_init', function(){
	register_widget( 'Made2Wear_Contacts' );
});


// widget of adress
class Made2Wear_Adress extends WP_Widget {
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'Made2Wear_Adress',
			'description' => 'Adress list widget',
		);
		parent::__construct( 'Made2Wear_Adress', 'Made2Wear Adress', $widget_ops );
	}
	public function widget( $args, $instance ) {
		include 'view/adress.php';
	}
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Adress', 'text_domain' );
		$adress1 = ! empty( $instance['adress1'] ) ? $instance['adress1'] : esc_html__( 'adress', 'text_domain' );
		$adress2 = ! empty( $instance['adress2'] ) ? $instance['adress2'] : esc_html__( 'adress', 'text_domain' );
		$adress3 = ! empty( $instance['adress3'] ) ? $instance['adress3'] : esc_html__( 'adress', 'text_domain' );
		include 'view/adress_admin.php';
	}
	public function update( $new_instance, $old_instance ) {
		$instance           = array();
		$instance['title']  = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['adress1']  = ( ! empty( $new_instance['adress1'] ) ) ? strip_tags( $new_instance['adress1'] ) : '';
		$instance['adress2']  = ( ! empty( $new_instance['adress2'] ) ) ? strip_tags( $new_instance['adress2'] ) : '';
		$instance['adress3']  = ( ! empty( $new_instance['adress3'] ) ) ? strip_tags( $new_instance['adress3'] ) : '';
		return $instance;
	}
}
add_action( 'widgets_init', function(){
	register_widget( 'Made2Wear_Adress' );
});


// widget of social
class Made2Wear_Social extends WP_Widget {
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'Made2Wear_Social',
			'description' => 'Social list widget',
		);
		parent::__construct( 'Made2Wear_Social', 'Made2Wear Social', $widget_ops );
	}
	public function widget( $args, $instance ) {
		include 'view/social.php';
	}
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Social', 'text_domain' );
		$social1 = ! empty( $instance['social1'] ) ? $instance['social1'] : esc_html__( 'link', 'text_domain' );
		$social2 = ! empty( $instance['social2'] ) ? $instance['social2'] : esc_html__( 'link', 'text_domain' );
		$social3 = ! empty( $instance['social3'] ) ? $instance['social3'] : esc_html__( 'link', 'text_domain' );
		include 'view/social_admin.php';
	}
	public function update( $new_instance, $old_instance ) {
		$instance           = array();
		$instance['title']  = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['social1']  = ( ! empty( $new_instance['social1'] ) ) ? strip_tags( $new_instance['social1'] ) : '';
		$instance['social2']  = ( ! empty( $new_instance['social2'] ) ) ? strip_tags( $new_instance['social2'] ) : '';
		$instance['social3']  = ( ! empty( $new_instance['social3'] ) ) ? strip_tags( $new_instance['social3'] ) : '';
		return $instance;
	}
}
add_action( 'widgets_init', function(){
	register_widget( 'Made2Wear_Social' );
});