<?php

/*
	
@package rpgmobilefriendlyportfolio
-- Audio Post Format
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rpgportfolio-format-audio' ); ?>>
	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>

		<div class="entry-meta">
			<?php echo rpg_portfolio_posted_meta(); ?>
		</div>
		
	</header>

	<div class="entry-content">

		<?php
		echo rpg_portfolio_get_embedded_media( array('audio','iframe') );
		?>
	</div> <!-- .entry-content -->

		<?php if (!empty(the_excerpt())) { ?>
			<div class="entry-excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php } // End of if (!empty(the_excerpt())) { ?>

		<div class="button-container">
			<a href="<?php the_permalink(); ?>" class="btn btn-rpgportfolio"><?php _e( 'View More' ); ?></a>
		</div>


	<footer class="entry-footer">
		<?php echo rpg_portfolio_tags(); ?>	
	</footer>

</article>
