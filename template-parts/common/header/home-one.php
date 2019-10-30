<!-- Header -->
<section class="header" id="navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-4   col-xs-12 left">
                <?php
                  $logo = ot_get_option('logo');
                ?>
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $logo; ?>" class="img-fluid" alt="Image"></a>
            </div>
            <div class="col-md-1   col-xs-12 midle"></div>
            <div class="col-md-7   col-xs-12 right">
                <div class="hitem hidd">
                    <p>
                        <span><i class="fas fa-envelope"></i>
                            <?php
                                $email = ot_get_option('email');
                            ?>
                            <?php echo $email; ?>
                        </span>
                        <span class="m-r"><i class="fas fa-phone"></i> 
                            <?php
                                $phone = ot_get_option('phone');
                            ?> 
                            <?php echo $phone; ?>
                        </span>
                        <span><a href="" class="active">ENG</a></span>
                        <span><a href="">FR</a></span>
                        <a href="" class="btn btn-default">get quote</a>
                    </p>
                    <h4 class="d-none">get quote</h4>
                </div>
                <div class="all-k">
                    <div class="logo-te">
                        <?php
                          $logo = ot_get_option('logo');
                        ?>
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $logo; ?>" class="img-fluid" alt="Image"></a>
                    </div>
                </div>
                <div class="hitem" id="hitem">
                    <?php get_template_part("template-parts/common/nav-two"); ?>
                    <a class="search float-right" onclick="openSearch()"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Header /-->
