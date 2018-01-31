<?php

/*
	
@package rpgmobilefriendlyportfolio
-- Link Post Format
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rpgportfolio-format-link' ); ?>>
	<header class="entry-header">

		<?php 
			$link = rpg_portfolio_grab_url();
			the_title( '<h1 class="entry-title"><a href="' . $link . '" target="_blank">', '<div class="link-icon"><span class="dashicons-before dashicons-admin-links"></div></a></h1>' ); 
		?>
		
	</header>

	<footer class="entry-footer">
		<?php echo rpg_portfolio_tags(); ?>			
	</footer>

</article>
