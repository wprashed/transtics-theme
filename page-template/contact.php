<?php 
/* Template Name: Contact */
get_header(); ?>
<!-- Contact Map -->
<section class="contact-map">
   	<h3 class="d-none">Home</h3>
    <div class="container-fluid">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663571303!2d89.56355961537385!3d22.813715829825384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1559280021106!5m2!1sen!2sbd" allowfullscreen></iframe>
        </div>
    </div>
</section>
<!-- Contact Map /-->

<!-- Contact Form -->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 contact-form-area">
                <h1>Get in touch</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-area">
                            <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home.png" alt="Image"> 
                            	<span class="text">
	                            	<?php
	                                    $address = ot_get_option('address');
	                                ?>
	                            	<?php echo $address; ?>
                            	</span>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-area">
                            <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png" alt="Image"> 
                            	<span class="text">
                            		<?php
                                        $phone_one = ot_get_option('phone_one');
                                    ?>
                                    <?php
                                        $phone_two = ot_get_option('phone_two');
                                    ?>
                            		<?php echo $phone_one; ?>
                            		<br><?php echo $phone_two; ?>
                            	</span>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-area">
                            <h4><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" alt="Image"> 
                            	<span class="text">
                            		<?php
                                        $email_one = ot_get_option('email_one');
                                    ?>
                                    <?php
                                        $email_two = ot_get_option('email_two');
                                    ?>
                            		<?php echo $email_one; ?>
                            		<br><?php echo $email_two; ?>
                            	</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row form-area">
                    <div class="col-md-12">
                        <h1>Leave us a message</h1>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xm-12">
                        <div class="form-group">
                            <label>Full Name <span>*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xm-12">
                        <div class="form-group">
                            <label>Email <span>*</span></label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xm-12">
                        <div class="form-group">
                            <label>Website</label>
                            <input type="url" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Write Comment <span>*</span></label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn">send message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form /-->

<?php get_footer(); ?>