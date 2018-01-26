<?php

/*
  
@package rpgmobilefriendlyportfolio
-- Gallery Post Format
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rpgportfolio-format-gallery' ); ?>>
  <header class="entry-header">

    <?php if( rpg_portfolio_get_attachment() ): ?>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <?php 

            $attachments = rpg_portfolio_get_slides( rpg_portfolio_get_attachment(100) );
            foreach( $attachments as $attachment ):
          ?>


          <div class="item <?php echo $attachment['class']; ?>">
            <img src="<?php echo $attachment['url']; ?>">
<?php /* ?>
        <div class="item <?php echo $attachment['class']; ?>" style="background: url('<?php echo $attachment['url']; ?>') top center no-repeat;">
<?php */ ?>
            <div class="hide next-image-preview" data-image="<?php echo $attachment['next_img']; ?>"></div>
            <div class="hide prev-image-preview" data-image="<?php echo $attachment['prev_img']; ?>"></div>

            <div class="carousel-caption">
              <?php echo $attachment['caption']; ?>
            </div>
          </div> <!-- end of item -->

          <?php endforeach; ?>

        <!-- Controls -->
        <div class="preview-container">
          <span class="thumbnail-container background-image"></span>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><</span>
            <span class="sr-only">Previous</span>
          </a>
        </div>

        <div class="preview-container">
          <span class="thumbnail-container background-image"></span>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


        </div>  <!-- end of carousel-inner -->
      </div> <!-- end of carousel slide -->
    <?php // endif; ?>

    <?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>

    <div class="entry-meta">
      <?php echo rpg_portfolio_posted_meta(); ?>
    </div>
    
  <?php endif; ?>
  </header>

  <div class="entry-content">

    <div class="entry-excerpt">
      <?php the_excerpt(); ?>
    </div>

    <div class="button-container">
      <a href="<?php the_permalink(); ?>" class="btn-rpgportfolio"><?php _e( 'Read More' ); ?></a>
    </div>

  </div> <!-- .entry-content -->

  <footer class="entry-footer">
  <?php echo rpg_portfolio_tags(); ?>
  </footer>

</article>