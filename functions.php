<?php 

// Stylesheets
function kuru_theme_styles() {
	wp_enqueue_style( 'aos_css', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css' );
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Droid+Serif:700i|PT+Sans:400,700' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts','kuru_theme_styles' );

// Scripts
function kuru_theme_scripts() {
	wp_enqueue_script('bootstrap_js','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script('aos_js','https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js','','',true);
	wp_enqueue_script('main_js',get_template_directory_uri() . '/js/main.js',array('jquery', 'bootstrap_js'),'',true);
}
add_action('wp_enqueue_scripts','kuru_theme_scripts' );

// Menu

add_theme_support('menus');

function register_theme_menus(){
	register_nav_menus(
		array(
			'header-menu'	=>__('Header Menu')
		)
	 );
}
add_action('init','register_theme_menus');
?>