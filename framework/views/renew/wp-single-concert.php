<?php

// =============================================================================
// VIEWS/RENEW/WP-SINGLE-CONCERT.PHP
// -----------------------------------------------------------------------------
// Single concert post output for Renew.
// =============================================================================

?>

<?php get_header(); ?>
  
  <div class="x-container max width offset">
    <div class="x-main full" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php x_get_view( 'renew', 'content', 'concert' ); ?>
      <?php endwhile; ?>

    </div>
  </div>

<?php get_footer(); ?>