<?php
//print "<pre>"; print_r($_POST); print "</pre>"; exit;
	register_sidebar( array(
		'name'          => __( 'Company Submenu', 'havalife-child' ),
		'id'            => 'company-submenu',
		'description'   => __( 'Appears in the company submenu.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

function hava_scripts() {		

	wp_enqueue_style( 'havalife-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), null );
	
	wp_enqueue_style( 'havalife-bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css', array(), null );	

	wp_enqueue_style( 'havalife-style', get_stylesheet_directory_uri().'/css/style.css', array(), null );

	//wp_enqueue_script( 'havalife-jquery', get_stylesheet_directory_uri() . '/js/jquery.js', array(), null, true );

	wp_enqueue_script( 'havalife-bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.js', array(), null, true );
	
}
add_action( 'wp_enqueue_scripts', 'hava_scripts' );
?>
<?php 
require_once('autoload/acf-repeater/acf-repeater.php');
require_once('autoload/acf-options-page/acf-options-page.php');
require_once('wp_bootstrap_navwalker.php');
?>
<?php 

if( function_exists('acf_set_options_page_menu') )
{
    acf_set_options_page_menu( __('Havalife') );
}
?>
<?php
/*add_image_size( 'hero-slider', 627, 290, true );
add_image_size( 'portfolio-img', 380, 266, true );
add_image_size( 'blog-img', 273, 191, true );
add_image_size( 'portfolio-detail-img', 1140, 452, true );*/
?>