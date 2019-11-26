<?php
/** 
 * Homepage One Header
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transtics
 */

global $transtics;
?>
<!-- Header -->
  <header class="header-area">

  <!-- Top Header -->
  <div class="top-header">
      <div class="container">
          <div class="d-flex justify-content-between">
              <ul>
                  <?php if(!empty($transtics['email']) ) { ?>
                  <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo esc_html($transtics['email']); ?>"><?php echo esc_html($transtics['email']); ?></a></li>
                  <?php } ?>
                  <?php if(!empty($transtics['phone']) ) { ?>
                  <li><i class="fa fa-phone"></i> <a href="tel:<?php echo esc_html($transtics['phone']); ?>"><?php echo esc_html($transtics['phone']); ?></a></li>
                  <?php } ?>
              </ul>
              <ul class="lang">
                <?php if(($transtics['get_language']) == 1) : ?>
                <?php echo do_shortcode($transtics['language_srcode']);?>
                <?php endif ?>
              </ul>
          </div>
      </div>
  </div>
  <!-- /Top Header -->

  <!-- Navbar Area -->
    <div class="navbar-area">
      <div class="container">
        <?php get_template_part("template-parts/common/nav-two"); ?>
      </div>
    </div>
  <!-- /Navbar Area -->

  </header>
  <!-- /Header -->
