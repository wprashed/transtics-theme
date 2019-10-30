<?php


class Transtics_Feature_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'feature';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Feature', 'transticsee' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-bars';
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
				'label' => __( 'Client Controls', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Background

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transticsee' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .feature',
			]
		);

		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .feature' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Taking care of you and your business all the way', 'transticsee' ),
			]
		);

		// Subtitle

		$this->add_control(
			'subtitle',
			[
				'label'     => __( 'Subtitle', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Transtics Shipping corp', 'transticsee' ),
			]
		);

		// Description

		$this->add_control(
			'description',
			[
				'label'     => __( 'Description', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Solving your supply chain needs from end to end, taking the complexity out of container shipping. We are at the forefront of developing innovation.', 'transticsee' ),
			]
		);

		// Feature

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'icon',
			[
				'label' => __( 'Icon', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-ship',
			]
		);

		$repeater->add_control(
			'ftitle', [
				'label' => __( 'Tilte', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Secured Containers' , 'transticsee' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'content', [
				'label' => __( 'Content', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt' , 'transticsee' ),
				'rows'	=> 4,
			]
		);

		$repeater->add_control(
			'button_text',
			[
				'label'     => __( 'Button Text', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Button Text', 'transticsee' ),
				'default'     => __( 'Read More', 'transticsee' ),
			]
		);
		
		$repeater->add_control(
			'button_url',
			[
				'label'     => __( 'Button Url', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'transticsee' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);

		$this->add_control(
			'list',
			[
				'label' => __( 'Feature List', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);

		$this->end_controls_section();

		// Style

		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Client Controls', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Title

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032C56',
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

		// Subtitle

		$this->add_control(
			'subtitle_color',
			[
				'label'     => __( 'Subtitle Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ec0101',
				'selectors' => [
					'{{WRAPPER}} .subtitle' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'subtitle_typography',
				'label'    => __( 'Subtitle Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .subtitle',
			]
		);

		// Description

		$this->add_control(
			'description_color',
			[
				'label'     => __( 'Description Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#5f6a75',
				'selectors' => [
					'{{WRAPPER}} .description' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'description_typography',
				'label'    => __( 'Description Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .description',
			]
		);

		// Icon Color

		$this->add_control(
			'icon_color',
			[
				'label'     => __( 'Icon Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ff0543',
				'selectors' => [
					'{{WRAPPER}} .icon' => 'color: {{VALUE}}'
				]
			]
		);

		// Feature Title

		$this->add_control(
			'ftitle_color',
			[
				'label'     => __( 'Feature Title Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032C56',
				'selectors' => [
					'{{WRAPPER}} .ftitle' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'ftitle_typography',
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ftitle',
			]
		);

		// Feature Content

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Content Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#5f6a75',
				'selectors' => [
					'{{WRAPPER}} .content' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Content Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .content',
			]
		);

		// Button

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'button_typography',
				'label'    => __( 'Button Typography', '`' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .btn',
			]
		);

		$this->add_control(
			'button_color',
			[
				'label'     => __( 'Button Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#FF0000',
				'selectors' => [
					'{{WRAPPER}} .btn' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_control(
			'button_background_color',
			[
				'label'     => __( 'Button Background Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => 'transparent',
				'selectors' => [
					'{{WRAPPER}} .btn' => 'background-color: {{VALUE}}'
				]
			]
		);

		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {
		$target = $settings['button_url']['is_external'] ? ' target="_blank"' : '';
		$nofollow = $settings['button_url']['nofollow'] ? ' rel="nofollow"' : '';
		$settings   = $this->get_settings_for_display();
		?>
		<!-- Feature -->
		<section class="feature">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <h4 class="subtitle"><?php echo $settings['subtitle'] ?></h4>
		                <h1 class="title"><?php echo $settings['title'] ?></h1>
		                <p class="description"><?php echo $settings['description'] ?></p>
		            </div>
		        </div>
		        <div class="row feature-area">
		            <div class="col-md-12 text-center">
		                <div class="owl-carousel owl-theme" id="feature-carousel">
		                    <?php if ( $settings['list'] ) {
		                		foreach (  $settings['list'] as $item ) {
		                	?>
		                    <div class="item">
		                        <h5 class="icon"><i class="<?php echo $item['icon'] ?> fa-4x"></i></h5>
		                        <h4><?php echo $item['ftitle'] ?></h4>
		                        <p><?php echo $item['content'] ?></p>
		                        <h5><a class="btn" href="<?php echo $item['button_url']['url'] ?>" <?php echo $target  ?>  <?php $nofollow ?> ><?php echo $item['button_text'] ?></a></h5>
		                    </div>
		                    <?php } } ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Feature /-->
		<?php

	}
}