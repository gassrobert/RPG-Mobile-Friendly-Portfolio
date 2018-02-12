<?php

/*
	
@package RPG Mobile Friendly Portfolio
	
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/

function rpg_portfolio_load_scripts(){
	
	if (!is_admin()) {
		// load css
		wp_enqueue_style( 'rpg_carousel_style', get_template_directory_uri() . '/css/carousel-style.css', array(), '3.3.5', 'all' );

		wp_enqueue_style( 'rpg_front_style', get_template_directory_uri() . '/css/rpg_front_style.css', array(), '1.0.3', 'all' );

		// load js
		wp_enqueue_script( 'rpg_carousel_js', get_template_directory_uri() . '/js/carousel.js', array('jquery'), '3.3.5', true );

		wp_register_script( 'rpg-portfolio-front-script', get_template_directory_uri() . '/js/rpgprofile.front.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'rpg-portfolio-front-script' );
	}

}
add_action( 'wp_enqueue_scripts', 'rpg_portfolio_load_scripts' );


/********************************************************/
// Adding Dashicons in WordPress Front-end
/********************************************************/
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );

/********************************************************/
// Adding Favicons in WordPress Front-end
/********************************************************/
// Create a function that includes the path to the favicon
function add_favicon() {
    $favicon_url = get_template_directory_uri() . '/portfolio-favicon.png';
    echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
// Make sure function runs on the login page and admin pages  
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon'); 
add_action('wp_head', 'add_favicon');