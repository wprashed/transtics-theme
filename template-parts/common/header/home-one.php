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
<section class="header" id="navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-4   col-xs-12 left">
                <?php if(!empty($transtics['transtics_logo']) ) { ?>
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_url($transtics['transtics_logo']['url']); ?>" class="img-fluid" alt="Image"></a>
                <?php } ?>
            </div>
            <div class="col-md-1   col-xs-12 midle"></div>
            <div class="col-md-7   col-xs-12 right">
                <div class="hitem hidd">
                    <p>
                        <span><i class="fas fa-envelope"></i>
                            <?php 
                                if(!empty($transtics['email']) ) {
                                    echo esc_html($transtics['email']); 
                                } 
                            ?>
                        </span>
                        <span class="m-r"><i class="fas fa-phone"></i> 
                            <?php 
                                if(!empty($transtics['phone']) ) {
                                    echo esc_html($transtics['phone']); 
                                } 
                            ?>
                        </span>
                        <span>
                            <?php if(($transtics['get_language']) == 1) : ?>
                            <?php echo do_shortcode($transtics['language_srcode']);?>
                            <?php endif ?>
                        </span>
                        <?php if(($transtics['get_quote_button']) == 1) : ?> 
                        <?php if(!empty($transtics['get_quote_text']) ) { ?>
                            <a href="<?php echo esc_url($transtics['get_quote_url']); ?>" class="btn btn-default"><?php echo esc_html($transtics['get_quote_text']); ?></a>
                        <?php } ?>
                        <?php endif ?>
                    </p>
                    <h4 class="d-none">get quote</h4>
                </div>
                <div class="all-k">
                    <div class="logo-te">
                        <?php if(!empty($transtics['transtics_logo']) ) { ?>
                            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_url($transtics['transtics_logo']['url']); ?>" class="img-fluid" alt="Image"></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="hitem" id="hitem">
                    <?php get_template_part("template-parts/common/nav-two"); ?>
                    <a class="search float-right alignrigh" onclick="openSearch()"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Header /-->
