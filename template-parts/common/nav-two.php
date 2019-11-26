<?php
global $transtics;
?>
<nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pr-lg-0">
  <?php if(!empty($transtics['transtics_logo']) ) { ?>
    <a class="navbar-brand mr-lg-5" href="<?php echo get_home_url(); ?>"><img class="img-fluid" src="<?php echo esc_url($transtics['transtics_logo']['url']); ?>" alt=""></a>
  <?php } ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
        wp_nav_menu( array(
            'theme_location'    => 'topmenu',
            'depth'             => 3,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarText',
            'menu_class'        => 'navbar-nav mr-auto main-menu',
            'fallback_cb'       => 'Transtics_Navwalker::fallback',
            'walker'            => new Transtics_Navwalker(),
        ) );
    ?>

    <div class="navbar-text">
      <a href="#" class="btn btn-primary btn-white text-uppercase font-weight-bold">Get Quote</a>
    </div>
</nav>