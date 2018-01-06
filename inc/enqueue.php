<?php

/*
	
@package RPG Portfolio
	
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/

function rpg_portfolio_load_scripts(){
	
	if (!is_admin()) {
		wp_enqueue_style( 'rpg_front_style', get_template_directory_uri() . '/css/rpg_front_style.css', array(), '1.0.3', 'all' );

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