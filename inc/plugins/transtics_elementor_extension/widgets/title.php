<?php


class Transtics_Title_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'title';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Title', 'transticsee' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-text-width';
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
				'label' => __( 'Title Controls', 'transticsee' ),
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Ship Smart with Transtics', 'transticsee' ),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
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
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .title',
			]
		);

		// Content

		$this->add_control(
			'content',
			[
				'label'     => __( 'Description', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::TEXTAREA,
				'rows'		=> '6',
				'placeholder' => __( 'Enter Section Description', 'transticsee' ),
				'default'     => __( 'All our efforts and investments are geared towards offering better solutions. Solving your supply chain needs from end to end, taking the complexity out of container shipping. We are at the forefront of developing innovation.', 'transticsee' ),
			]
		);

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Description Color', 'transticsee' ),
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
				'label'    => __( 'Description Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .description',
			]
		);

		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {

		$settings   = $this->get_settings_for_display();
		?>
		<!-- Title -->
		<section class="map">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
		                <h1 class="title"><?php echo $settings['title'] ?></h1>
		            </div>
		            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
		                <p class="description"><?php echo $settings['content'] ?></p>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Title /-->
		<?php
	}
}