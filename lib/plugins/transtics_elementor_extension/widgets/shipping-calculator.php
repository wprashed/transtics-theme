<?php


class Transtics_Shipping_Calculator_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'shippingcalculator';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Shipping Calculator', 'transtics_elementor_extension' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-ship';
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

		// Controls

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'transtics_elementor_extension' ),
			]
		);

		// Background

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transtics_elementor_extension' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .service',
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
					'{{WRAPPER}} .service' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transtics_elementor_extension' ),
				'default'     => __( 'Service Calculator', 'transtics_elementor_extension' ),
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

		// Content

		$this->add_control(
			'content',
			[
				'label'     => __( 'Description', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::TEXTAREA,
				'rows'		=> '6',
				'placeholder' => __( 'Enter Section Description', 'transtics_elementor_extension' ),
				'default'     => __( 'Solving your supply chain needs from end to end, taking the complexity out of container shipping. We are at the forefront of developing innovative supply chain solutions.', 'transtics_elementor_extension' ),
			]
		);

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Description Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#9fadbb',
				'selectors' => [
					'{{WRAPPER}} .description' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Description Typography', 'transtics_elementor_extension' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .description',
			]
		);

		// Calculator Form

		$this->add_control(
			'form_shortcode',
			[
				'label'     => __( 'Calculator Form Shortcode', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Title', 'transtics_elementor_extension' ),
				'default'     => __( '[contact-form-7 id="197" title="Shipping Calculator"]', 'transtics_elementor_extension' ),
			]
		);

		// Image

		$this->add_control(
			'image',
			[
				'label' => __( 'Image', 'transtics_elementor_extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {

		$settings   = $this->get_settings_for_display();
		?>
		<!-- Shipping Calculator -->
		<section class="service">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
		                <h1 class="title"><?php echo $settings['title'] ?></h1>
		                <p class="description"><?php echo $settings['content'] ?></p>
		                <div class="form">
		                    <?php echo $settings['form_shortcode'] ?>
		                </div>
		            </div>
		            <div class="col-lg-6 col-md-12 col-sm-12 col-12 align-self-center">
		                <img src="<?php echo $settings['image']['url'] ?>" class="img-fluid float-right" alt="Image">
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Shipping Calculator /-->
		<?php
	}
}