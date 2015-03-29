<?php

// =============================================================================
// VIEWS/GLOBAL/_NAVBAR.PHP
// -----------------------------------------------------------------------------
// Outputs the navbar.
// =============================================================================

$navbar_position = x_get_navbar_positioning();
$logo_nav_layout = x_get_logo_navigation_layout();
$is_one_page_nav = x_is_one_page_navigation();

?>

<?php if ( ( $navbar_position == 'static-top' || $navbar_position == 'fixed-top' || $is_one_page_nav ) && $logo_nav_layout == 'stacked' ) : ?>

  <div class="x-logobar">
    <div class="x-logobar-inner">
      <div class="x-container max width">
        <?php x_get_view( 'global', '_brand' ); ?>
<!--
        <div class="date-place">
        	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cmf2015-date_place.jpg">
        </div>
-->
        <div class="socials">
	        <a href="https://www.facebook.com/chofumusicfestival" class="facebook" title="Facebook" target="_blank"><i class="x-icon-facebook"></i></a>
	        <a href="https://twitter.com/cmf_pr" class="twitter" title="Twitter" target="_blank"><i class="x-icon-twitter"></i></a>
<!--
	        <a href="http://line.naver.jp/ti/p/%40ccmf"><img style="width: 90px; important!" alt="友だち追加" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_ja.png"></a><br>
	        <a class="twitter-follow-button" href="https://twitter.com/cmf_2014" data-show-count="false" data-lang="ja" data-size="medium" data-show-screen-name="false">@cmf_2014さんをフォロー</a>
<script type="text/javascript">// <![CDATA[
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
// ]]></script><br>
-->
<!--
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://chofumusicfestival.com/" data-text="調布音楽祭2014 ウェブサイトリニューアル！" data-via="cmf_2014" data-lang="ja" data-size="medium" data-related="cmf_2014">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><br>
-->
<!-- 		<iframe style="border: none; overflow: hidden; width: 100px; height: 24px;" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fchofumusicfestival.com%2F&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;font=lucida+grande&amp;colorscheme=light&amp;action=like&amp;height=21" height="24" width="150" frameborder="0" scrolling="no"></iframe> -->
        </div>
      </div>
    </div>
  </div>

  <div class="x-navbar-wrap">
    <div class="<?php x_navbar_class(); ?>">
      <div class="x-navbar-inner">
        <div class="x-container max width">
          <?php x_get_view( 'global', '_nav', 'primary' ); ?>
        </div>
      </div>
    </div>
  </div>

<?php else : ?>

  <div class="x-navbar-wrap">
    <div class="<?php x_navbar_class(); ?>">
      <div class="x-navbar-inner">
        <div class="x-container max width">
          <?php x_get_view( 'global', '_brand' ); ?>
          <?php x_get_view( 'global', '_nav', 'primary' ); ?>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>