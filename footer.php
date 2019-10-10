<!-- Footer Top -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xm-12 ">
                <?php
                    if ( is_active_sidebar( "footer-one" ) ) {
                        dynamic_sidebar( "footer-one" );
                    }
                ?>
            </div>
            <div class="col-md-3 col-sm-6 col-xm-12 cl-to">
                <?php
                    if ( is_active_sidebar( "footer-two" ) ) {
                        dynamic_sidebar( "footer-two" );
                    }
                ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xm-12">
                <?php
                    if ( is_active_sidebar( "footer-three" ) ) {
                        dynamic_sidebar( "footer-three" );
                    }
                ?>
            </div>
            <div class="col-md-2 col-sm-6 col-xm-12 cl-to">
                <?php
                    if ( is_active_sidebar( "footer-four" ) ) {
                        dynamic_sidebar( "footer-four" );
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="credit text-center">
                    <h5>
                        <?php
                            $copyright_text = ot_get_option('copyright_text');
                        ?>
                        <?php echo $copyright_text; ?>
                    </h5>
                </div>
            </div>
        </div>
    </div> 
</section>
<!-- Footer Top /-->

<!-- Scroll to Top -->
<button onclick="topFunction()" id="myBtn" class="btn" title="Go to top"><i
        class="fas fa-angle-up fa-2x"></i></button>
<!-- Scroll to Top /-->
<?php wp_footer(); ?>
</body>
</html>