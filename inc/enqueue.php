<?php

/*
	
@package RPG Portfolio
	
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/

function rpg_portfolio_load_scripts(){
	
	wp_enqueue_style( 'rpg_front_style', get_template_directory_uri() . '/css/rpg_front_style.css', array(), '1.0.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'rpg_portfolio_load_scripts' );