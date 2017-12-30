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

/* Footer Functions */
function rpg_portfolio_footer_one_init() {

	register_sidebar(
		array(
			'name' => esc_html__( 'Portfolio Footer One', 'rpgportfoliotheme'),
			'id' => 'rpg-portfolio-footer-one',
			'description' => 'Mobile Friendly Footer Widget Area One',
			'before_widget' => '<section id="%1$s" class="rpg-portfolio-widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="rpg-portfolio-widget-title">',
			'after_title' => '</h2>'
		)
	);
}
add_action( 'widgets_init', 'rpg_portfolio_footer_one_init' );

function rpg_portfolio_footer_two_init() {

	register_sidebar(
		array(
			'name' => esc_html__( 'Portfolio Footer Two', 'rpgportfoliotheme'),
			'id' => 'rpg-portfolio-footer-two',
			'description' => 'Mobile Friendly Footer Widget Area Two',
			'before_widget' => '<section id="%1$s" class="rpg-portfolio-widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="rpg-portfolio-widget-title">',
			'after_title' => '</h2>'
		)
	);
}
add_action( 'widgets_init', 'rpg_portfolio_footer_two_init' );

function rpg_portfolio_footer_three_init() {

	register_sidebar(
		array(
			'name' => esc_html__( 'Portfolio Footer Three', 'rpgportfoliotheme'),
			'id' => 'rpg-portfolio-footer-three',
			'description' => 'Mobile Friendly Footer Widget Area Three',
			'before_widget' => '<section id="%1$s" class="rpg-portfolio-widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="rpg-portfolio-widget-title">',
			'after_title' => '</h2>'
		)
	);
}
add_action( 'widgets_init', 'rpg_portfolio_footer_three_init' );
