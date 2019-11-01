<?php
/** 
 * Homepage Two Header
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transtics
 */

global $transtics;
?>
<!-- Header Top -->
<section class="header-top">
   <h4 class="d-none">header-top</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="float-left d-flex justify-content-between">
                    <span><i class="fas fa-envelope"></i>
                        <?php 
                            if(!empty($transtics['email']) ) {
                                echo esc_html($transtics['email']); 
                            } 
                        ?>
                    </span>
                    <span><i class="fas fa-phone"></i>
                        <?php 
                            if(!empty($transtics['phone']) ) {
                                echo esc_html($transtics['phone']); 
                            } 
                        ?>
                    </span>
                </p>
                <?php if(($transtics['get_language']) == 1) : ?>
                <p class="float-right right">
                    <?php echo do_shortcode($transtics['language_srcode']);?>
                </p>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
<!-- Header Top / -->

<!-- Header Bottom -->
<section class="header-bottom" id="navbar">
   <h3 class="d-none">navbar</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-4">
                <?php if(!empty($transtics['transtics_logo']) ) { ?>
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_url($transtics['transtics_logo']['url']); ?>" class="img-fluid" alt="Image"></a>
                <?php } ?>
            </div>
            <div class="col-md-10 col-sm-9 col-8">
                <?php get_template_part("template-parts/common/nav-one"); ?>
                <span class="right float-right">
                  <a class="search" onclick="openSearch()"><i class="fas fa-search"></i></a>
                  <?php if(($transtics['get_quote_button']) == 1) : ?> 
                  <?php if(!empty($transtics['get_quote_text']) ) { ?>
                  <a href="<?php echo esc_url($transtics['get_quote_url']); ?>" class="btn quate float-right"><?php echo esc_html($transtics['get_quote_text']); ?></a>
                  <?php } ?>
                  <?php endif ?>
                </span>
            </div>
        </div>
    </div>
</section>
<!-- Header Bottom / -->