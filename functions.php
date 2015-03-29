<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

// Navbar Searchform Popup
// =============================================================================
/*

if ( ! function_exists( 'x_navbar_searchform_overlay' ) ) :
  function x_navbar_searchform_overlay() {

    if ( x_get_option( 'x_header_search_enable', '' ) == '1' ) :

      ?>

      <div class="x-searchform-overlay">
        <div class="x-searchform-overlay-inner">
          <div class="x-container max width">
            <form method="get" id="searchform" class="form-search center-text" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <label for="s" class="cfc-h-tx tt-upper"><?php _e( '検索キーワードを入力して &ldquo;エンターキー&rdquo; を押してください。', '__x__' ); ?></label>
              <input type="text" id="s" class="search-query cfc-h-tx center-text tt-upper" name="s">
            </form>
          </div>
        </div>
      </div>

      <?php

    endif;

  }
  add_action( 'x_before_site_end', 'x_navbar_searchform_overlay' );
endif;
*/


add_action( 'after_setup_theme', 'my_child_theme_setup' );
function my_child_theme_setup() {
    load_child_theme_textdomain( '__x__', get_stylesheet_directory() . '/framework/lang' );
}