<?php

/*
	
@package rpgmobilefriendlyportfolio
-- Standard Post Format
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-center">
		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>

		<div class="entry-meta">
			<?php echo rpg_portfolio_posted_meta(); ?>
		</div>

	</header>

	<div class="entry-content">
		<?php echo "<h1>This is a test</h1>"; ?>

	</div>

</article>