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
<div id="container"> 
  <div id="mainContent">
    <?php get_header(); ?>
  	<div id="innerMainContent">
		<div id="pageContainer">
				<?php

					if ( have_posts() ):

						while( have_posts() ): the_post();

				?>

						<header class="entry-header">
						<?php the_title( '<h1 class="entry-title"></h1>' ); ?>

						</header>

						<div class="entry-content">
				<?php

						the_content();
				?>
						</div>
				<?php
						endwhile;

					endif;

				?>
		</div>

    </div> <!-- End of #innerMainContent -->

	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
	<?php get_footer(); ?>


<!-- end #container --></div>
<?php wp_footer(); ?>
</body>
</html>