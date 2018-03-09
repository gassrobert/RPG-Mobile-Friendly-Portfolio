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
            // Obtain the current page of the pagination
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // Check if it's at the beginning of the pagination and the page isn't a category or an archive

            if(1 == $paged && !is_category() && !is_archive() && !is_search() ):
              $args = array(
                  'post_type' => 'featuredPosts',
                  'orderby' => 'ID',
                  'order' => 'DESC',
              );

              // if it's the first page and it's not a category or n archive then display any featured posts first
              $featuredPosts = new WP_Query($args);

                if ( $featuredPosts->have_posts() ):
                  while( $featuredPosts->have_posts() ): $featuredPosts->the_post(); 
              ?>
                  <?php get_template_part( 'template-contents/content', get_post_format() ); ?>         
              <?php 
                  endwhile;
                endif;
                
              wp_reset_postdata();
            endif; // End of if(1 == $paged) {




            // Get the featured posts by category if a category is selected
            if (is_category() && 1 == $paged):

              $category_id = $wp_query->get_queried_object_id();

              $args = array(
                  'post_type' => 'featuredPosts', 
                  'cat' => $category_id, 
                  'orderby' => 'ID',
                  'order' => 'DESC'
              );

              $featuredPosts = new WP_Query($args);

                if ( $featuredPosts->have_posts() ):
                  while( $featuredPosts->have_posts() ): $featuredPosts->the_post(); 
                    if (has_category( $category_id ) ):
              ?> 
                  <?php get_template_part( 'template-contents/content', get_post_format() ); ?>         
              <?php 
                    endif;  // End of if (has_category( $category_id ) ) {              
                  endwhile; 

                  $featuredPostExists = 1;
                else:
                  $featuredPostExists = 0;
                endif; 
                
              wp_reset_postdata();
            endif; // End of if (is_category()) {

              

            // Get the featured posts by date if an archive selected
            if (is_archive() && 1 == $paged && !is_category() && !is_search()):
 
              $year     = get_query_var('year');
              $monthnum = get_query_var('monthnum');

              $args = array(
                  'post_type' => 'featuredPosts', 
                  'date_query' => array(
                    array(
                      'year'  => $year,
                      'month' => $monthnum
                    ),
                  ),
                  'orderby' => 'ID',
                  'order' => 'DESC'
              );

              $featuredPosts = new WP_Query($args);

                if ( $featuredPosts->have_posts() ):
                  while( $featuredPosts->have_posts() ): $featuredPosts->the_post(); 
                    if ($featuredPosts):
              ?> 
                  <?php get_template_part( 'template-contents/content', get_post_format() ); ?>         
              <?php 
                    endif; // End of if ($featuredPosts):       
                  endwhile; // End of while( $featuredPosts->have_posts()

                  $featuredPostExists = 1;
                else:
                  $featuredPostExists = 0;
                endif; // End of if ( $featuredPosts->have_posts() ):
                
              wp_reset_postdata();

            endif; // End of if (is_archive()) {   

              

            // display regular posts
            if ( have_posts() ):

              while( have_posts() ): the_post();

                get_template_part( 'template-contents/content', get_post_format() );

              endwhile;
          ?>

              <div class="post-nav-left">
                <?php previous_posts_link('<< Newer Posts'); ?>
              </div>
              <div class="post-nav-right">
                <?php next_posts_link('Older Posts >>'); ?>
              </div>


          <?php 
            wp_reset_postdata();
            
            elseif( !have_posts() && ($featuredPostExists == 0) ):

              echo "<br><br><br><br><br><h1>No Posts were Found.</h1><br><br><br><br><br>";

            endif;

          ?>
          
      </div> <!-- End of #articleContainer -->

    </div> <!-- End of #innerMainContent -->

  </div><!-- end #mainContent -->
  <br class="clearfloat" /><!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  <?php get_footer(); ?>


</div><!-- end #container -->
<?php wp_footer(); ?>
</body>
</html>