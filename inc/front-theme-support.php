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

/* Post Content Functions */
function rpg_portfolio_posted_meta() {
	$posted_on = human_time_diff( get_the_time('U'), current_time('timestamp') );
	$categories = get_the_category();
	$separator = ', ';
	$output = '';
	$i = 1;

	if( !empty($categories) ):
		foreach( $categories as $category ):

			if ( $i > 1 ): $output .= $separator; endif;

			$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( 'View all posts in %s', $category->name ) . '">' . esc_html( $category->name ) . '</a>';
			$i++;
		endforeach;
	endif;

	return '<span class="posted-on"> Posted <a href="' . esc_url( get_permalink() ) . '">' . $posted_on . '</a> ago</span> / <span class="posted-in">' . $output . '</span>';
}

function rpg_portfolio_get_attachment( $num = 1 ){
	$output = '';
	if( has_post_thumbnail() && $num == 1): 
		$output = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	else: 
		$attachments = get_posts( array( 
			'post_type' => 'attachment',
			'posts_per_page' => $num,
			'post_parent' => get_the_ID() 
		) );

		if ( $attachments && $num == 1 ):
			foreach ( $attachments as $attachment ):
				$output = wp_get_attachment_url( $attachment->ID );
			endforeach;
		elseif ( $attachments && $num > 1 ):
			$output = $attachments;
		endif;	

		wp_reset_postdata();

	endif; 
	return $output;
}

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

