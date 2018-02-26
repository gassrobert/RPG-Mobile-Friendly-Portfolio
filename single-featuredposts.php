<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- pingback -->
		<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>	

		<?php wp_head(); ?>
	</head>

<body class="twoColumnBody">
<?php get_sidebar(); ?>
<div class="sidebar-overlay"></div>
<div id="container"> 
  <div id="mainContent">
    <?php get_header(); ?>
  	<div id="innerMainContent">
		<div id="articleContainer">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>

				<div class="text-center">
				<?php the_title('<h1>','</h1>' ); ?>
				</div>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>


					<div class="entry-meta">
						<div class="standard-entry-meta"><?php echo rpg_portfolio_posted_meta(); ?></div>
					</div>

					
					<div id="featuredContentBox">						
					
					<?php the_content(); ?>

					</div><!-- End of featuredContentBox -->
					
					<hr>

					<div class="row">
						<div class="col-xs-6 text-left" id="post-single-nav-left" style="display:inline;"><?php next_post_link('&laquo; %link'); ?></div>

						<?php if($link = get_previous_posts_link()) { ?>

						<div class="col-xs-6 text-right" id="post-single-nav-right" style="display:inline; float: right;"><?php previous_post_link('%link &raquo;'); ?></div>
						<?php } else { ?>
						
							<?php 		
								$last_result = get_most_recent_regular_post_id();

								if (isset($last_result)) {
									foreach ( $last_result as $last_result_row ) {
										$last_post_id = $last_result_row->id;
									}

									$last_regular_post_title = get_the_title($last_post_id);
									$last_regular_post_url = get_post_permalink($last_post_id);
								?>

								<div class="col-xs-6 text-right" id="post-single-nav-right" style="display:inline; float: right;"><a href="<?php echo $last_regular_post_url; ?>"><?php echo $last_regular_post_title; ?></a> &raquo;</div>
								
							<?php } else { ?>
								<div class="col-xs-6 text-right" id="post-single-nav-right" style="display:inline; float: right;">&nbsp;</div>
							<?php } // End of if (isset($last_result)) { ?>

						<?php } // End of if($link = get_previous_posts_link()) { ?>
					</div>
				
				</article>

			<?php endwhile;
			
		endif;
				
		?>
				
		</div>

    </div> <!-- End of #innerMainContent -->

	<!-- end #mainContent --></div>
	<br class="clearfloat" /><!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
	<?php get_footer(); ?>


</div><!-- end #container -->
<?php wp_footer(); ?>
</body>
</html>