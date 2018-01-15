<?php

/*
	
@package rpgmobilefriendlyportfolio
-- Image Post Format
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('rpgportfolio-format-image'); ?>>

		<div class="inner-rpgportfolio-format-image">

			<?php 
				$current_post_id = get_post_thumbnail_id();
				$image_attributes = wp_get_attachment_metadata($current_post_id); 
			?>
			<header class="entry-header background-image" style="background-image: url(<?php echo rpg_portfolio_get_attachment(); ?>); background-size: auto 100%; background-repeat: no-repeat; background-position: left top; height: <?php echo $image_attributes["height"]; ?>px; width: <?php echo $image_attributes["width"]; ?>px; ">

				<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>

				<div class="entry-meta">
					<?php echo rpg_portfolio_posted_meta(); ?>
				</div>

				<div class="entry-excerpt image-caption">
					<?php the_excerpt(); ?>
				</div>

				<div class="button-container">
					<a href="<?php the_permalink(); ?>" class="btn-rpgportfolio"><?php _e( 'Read More' ); ?></a>
				</div>
				
			</header>

		</div>	

	<footer class="entry-footer"></footer>

</article>
