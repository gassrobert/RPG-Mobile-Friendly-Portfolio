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
					<?php 
						$current_post_id = get_the_ID();
						if (get_newer_post_id($current_post_id)) {
					?>
						<div class="col-xs-6 text-left" id="post-single-nav-left" style="display:inline;"><?php next_post_link('&laquo; %link'); ?></div>
					<?php } else { ?>

							<?php 		
								$first_result = get_oldest_featured_post_id();

								if (isset($first_result)) {
									foreach ( $first_result as $first_result_row ) {
										$first_post_id = $first_result_row->id;
									}

									$last_regular_post_title = get_the_title($first_post_id);
									$last_regular_post_url = get_post_permalink($first_post_id);
								?>

								<div class="col-xs-6 text-left" id="post-single-nav-left" style="display:inline; float: left;">&laquo; <a href="<?php echo $last_regular_post_url; ?>"><?php echo $last_regular_post_title; ?></a></div>
								
							<?php } else { ?>
								<div class="col-xs-6 text-left" id="post-single-nav-left" style="display:inline; float: left;">&nbsp;</div>
							<?php } // End of if (isset($last_result)) { ?>

					<?php } // End of if($link = get_previous_posts_link()) { ?>
						<div class="col-xs-6 text-right" id="post-single-nav-right" style="display:inline; float: right;"><?php previous_post_link('%link &raquo;'); ?></div>
					</div>
				
				</article>

			<?php endwhile;
			
		endif;
				
		?>
				
		</div> <!-- End off #articleContainer -->

    </div> <!-- End of #innerMainContent -->

	<!-- end #mainContent --></div>
	<br class="clearfloat" /><!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
	<?php get_footer(); ?>


</div><!-- end #container -->
<?php wp_footer(); ?>
</body>
</html>