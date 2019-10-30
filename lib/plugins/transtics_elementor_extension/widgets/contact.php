<?php


class Transtics_Contact_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'contact';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Contact', 'transtics_elementor_extension' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-envelope-open';
	}

	//	Widget Categories

	public function get_categories() {
		return [ 'transticscategory' ];
	}

	// Register Widget Control

	protected function _register_controls() {

		$this->register_controls();

	}

	// Widget Controls 

	function register_controls() {

		// Main Controls

		$this->start_controls_section(
			'control_section',
			[
				'label' => __( 'Contact Controls', 'transtics_elementor_extension' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Background

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transtics_elementor_extension' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .contact-form',
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transtics_elementor_extension' ),
				'default'     => __( 'Get in touch', 'transtics_elementor_extension' ),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .title' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => __( 'Title Typography', 'transtics_elementor_extension' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .title',
			]
		);

		// Padding

		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'transtics_elementor_extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .contact-form' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// Contact Information

		$this->start_controls_section(
			'contact_section',
			[
				'label' => __( 'Contact Information', 'transtics_elementor_extension' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Address Section

		$this->add_control(
			'address_icon',
			[
				'label' => __( 'Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-home',
			]
		);

		// Address

		$this->add_control(
			'address',
			[
				'label'     => __( 'Address', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Address', 'transtics_elementor_extension' ),
				'default'     => __( 'Collins Street West Victoria 8007, Australia', 'transtics_elementor_extension' ),
			]
		);

		// Phone Section

		$this->add_control(
			'phone_icon',
			[
				'label' => __( 'Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-phone',
			]
		);

		// Phone One

		$this->add_control(
			'phone_one',
			[
				'label'     => __( 'Phone One', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Phone Number', 'transtics_elementor_extension' ),
				'default'     => __( '+124 (2486) 444', 'transtics_elementor_extension' ),
			]
		);

		// Phone Two

		$this->add_control(
			'phone_two',
			[
				'label'     => __( 'Phone Two', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Phone Number', 'transtics_elementor_extension' ),
				'default'     => __( '+133 (4444) 878', 'transtics_elementor_extension' ),
			]
		);

		// Email Section

		$this->add_control(
			'email_icon',
			[
				'label' => __( 'Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-paper-plane-o',
			]
		);

		// Email One

		$this->add_control(
			'email_one',
			[
				'label'     => __( 'Email One', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Email', 'transtics_elementor_extension' ),
				'default'     => __( 'mail@example.com', 'transtics_elementor_extension' ),
			]
		);

		// Email Two

		$this->add_control(
			'email_two',
			[
				'label'     => __( 'Email Two', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Email', 'transtics_elementor_extension' ),
				'default'     => __( 'info@mail.com', 'transtics_elementor_extension' ),
			]
		);

		// Contact Form Title

		$this->add_control(
			'form_title',
			[
				'label'     => __( 'Form Title', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Contact Form Title', 'transtics_elementor_extension' ),
				'default'     => __( 'Leave us a message', 'transtics_elementor_extension' ),
			]
		);

		// Contact Form

		$this->add_control(
			'contact_form',
			[
				'label'     => __( 'Contact Form Shortcode', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Contact Form Shortcode', 'transtics_elementor_extension' ),
				'default'     => __( '[contact-form-7 id="5" title="Contact form 1"]', 'transtics_elementor_extension' ),
			]
		);

		// Style Section

		$this->add_control(
			'icon_color',
			[
				'label'     => __( 'Icon Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#EC0101',
				'selectors' => [
					'{{WRAPPER}} .float-left' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_control(
			'information_color',
			[
				'label'     => __( 'Information Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#333b4c',
				'selectors' => [
					'{{WRAPPER}} .text' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'information_typography',
				'label'    => __( 'Information Typography', 'transtics_elementor_extension' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .text',
			]
		);

		$this->add_control(
			'form_title_color',
			[
				'label'     => __( 'Form Title Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .form-title' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'form_title_typography',
				'label'    => __( 'Form Title Typography', 'transtics_elementor_extension' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .form-title',
			]
		);

		$this->end_controls_section();


	}

	// Widget Render Output

	protected function render() {

		$settings   = $this->get_settings_for_display();
		?>
		<!-- Contact Form -->
		<section class="contact-form">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12 contact-form-area">
		                <h1 class="title"><?php echo $settings['title'] ?></h1>
		                <div class="row">
		                    <div class="col-md-4">
		                        <div class="contact-area">
		                            <h4><span class="float-left"><i class="<?php echo $settings['address_icon'] ?> fa-2x"></i> </span> <span class="text"> <?php echo $settings['address'] ?></span></h4>
		                        </div>
		                    </div>
		                    <div class="col-md-4">
		                        <div class="contact-area">
		                            <h4><span class="float-left"><i class="<?php echo $settings['phone_icon'] ?> fa-2x"></i> </span>  <span class="text"> <?php echo $settings['phone_one'] ?><br><?php echo $settings['phone_two'] ?></span></h4>
		                        </div>
		                    </div>
		                    <div class="col-md-4">
		                        <div class="contact-area">
		                            <h4><span class="float-left"><i class="<?php echo $settings['email_icon'] ?> fa-2x"></i> </span>  <span class="text"> <?php echo $settings['email_one'] ?><br><?php echo $settings['email_two'] ?></span></h4>
		                        </div>
		                    </div>
		                </div>
		                <div class="row form-area">
		                    <div class="col-md-12">
		                        <h1 class="form-title"><?php echo $settings['form_title'] ?></h1>
		                    </div>
		                    <?php echo $settings['contact_form'] ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Contact Form /-->
		<?php
	}

}