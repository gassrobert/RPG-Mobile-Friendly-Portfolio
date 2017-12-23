<?php

/* Activate Nav Menu Option */
function rpg_portfolio_register_nav_menu() {
	register_nav_menu( 'rpg-profile-primary-menu', 'Header Navigation Menu' );
}
add_action( 'init', 'rpg_portfolio_register_nav_menu' );

/* Sidebar Functions */
function rpg_portfolio_sidebar_init() {

	register_sidebar(
		array(
			'name' => esc_html__( 'Portfolio Sidebar', 'rpgportfoliotheme'),
			'id' => 'rpg-portfolio-sidebar',
			'description' => 'Mobile Friendly Left Sidebar',
			'before_widget' => '<section id="%1$s" class="rpg-portfolio-widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="rpg-portfolio-widget-title">',
			'after_title' => '</h2>'
		)
	);
}
add_action( 'widgets_init', 'rpg_portfolio_sidebar_init' );