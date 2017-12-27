<?php

/*
	
@package RPG Portfolio
	
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/

function rpg_portfolio_load_scripts(){
	
	wp_enqueue_style( 'rpg_front_style', get_template_directory_uri() . '/css/rpg_front_style.css', array(), '1.0.1', 'all' );

	wp_enqueue_style( 'rpg_front_custom_scroll_style', get_template_directory_uri() . '/custom-styling/customScrollbar.css', array(), '1.0.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'rpg_portfolio_load_scripts' );


/********************************************************/
// Adding Dashicons in WordPress Front-end
/********************************************************/
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );