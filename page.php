<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
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

						<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						</header>

						<div class="entry-content">
				<?php
    				while ( have_posts() ) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
				?>
						</div>

		</div>

    </div> <!-- End of #innerMainContent -->

  </div><!-- end #mainContent -->
	<br class="clearfloat" /><!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
	<?php get_footer(); ?>


<!-- end #container --></div>
<?php wp_footer(); ?>
</body>
</html>