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
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div id="featuredContentBox">						
					
					<?php the_content(); ?>

					</div><!-- End of featuredContentBox -->
					
					<hr>

					<div class="row">
						<div class="col-xs-6 text-left" style="display:inline;"><?php previous_post_link(); ?></div>
						<div class="col-xs-6 text-right" style="display:inline; float: right;"><?php next_post_link(); ?></div>
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