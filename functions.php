<?php 

require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/function-admin.php';

/* Activate Nav Menu Option */
function rpg_portfolio_register_nav_menu() {
	register_nav_menu( 'primary', 'Header Navigation Menu' );
}
add_action( 'after_setup_theme', 'rpg_portfolio_register_nav_menu' );