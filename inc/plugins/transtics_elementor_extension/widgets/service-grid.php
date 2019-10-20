<?php


class Transtics_ServiceGrid_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'service_grid';
	}

	// Widget Title

	public function get_title() {
		return __( 'Service Grid', 'transticsee' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-server';
	}

	// Widget Category

	public function get_categories() {
		return [ 'transticscategory' ];
	}

	// Register Widget Control

	protected function _register_controls() {

		$this->register_controls();

	}

	// Widget Controls

	function register_controls() {


		// Background

		$this->start_controls_section(
			'backgrount_section',
			[
				'label' => __( 'Service Controls', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transticsee' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .service-area',
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Service Section Title', 'transticsee' ),
				'default'     => __( 'We Serve Various Ways', 'transticsee' ),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .service_title' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .service_title',
			]
		);

		// Content

		$this->add_control(
			'content',
			[
				'label'     => __( 'Description', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::TEXTAREA,
				'rows'		=> '6',
				'placeholder' => __( 'Enter Service Section Description', 'transticsee' ),
				'default'     => __( 'Solving your supply chain needs from end to end, taking the complexity out of container shipping.We are at the forefront of developing innovation.', 'transticsee' ),
			]
		);

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Description Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#9fadbb',
				'selectors' => [
					'{{WRAPPER}} .service_description' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Description Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .service_description',
			]
		);

		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .service-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'total_count',
			[
				'label' => __( 'Total Item', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 2,
			]
		);

		$this->end_controls_section();

	}

	// Widget Render Output	

	protected function render() {

		$settings   = $this->get_settings_for_display();
		$total_count = $settings['total_count'];
		$args=[
				'post_type' => 'service',
				'posts_per_page' => $total_count,
			];
		$service = new \WP_Query($args);

		?>
		<!-- Service Area -->
		<section class="service-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <h1 class="service_title"><?php echo $settings['title'] ?></h1>
		                <p class="service_description"><?php echo $settings['content'] ?></p>
		            </div>
		        </div>
		        <div class="row">
		           <?php if($service->have_posts()) : while($service->have_posts()) : $service->the_post(); ?>
					<div class="col-md-6 col-12">
					    <div class="service-box">
					        <div class="service-img">
					            <?php the_post_thumbnail("transtics-service-thumb"); ?>
					            <div class="overlay">
					                <div class="text d-flex justify-content-center"><a href="<?php the_permalink(); ?>"><i class="fas fa-link fa-2x"></i></a></div>
					            </div>
					        </div>
					        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					        <?php the_excerpt(); ?>
					    </div>
					</div>
					<?php endwhile; endif; wp_reset_postdata();?>
		        </div>
		    </div>
		</section>
		<!-- Service Area /-->
		<?php


	}

	// Widget Output Content Template

	protected function _content_template() {
		$total_count = $settings['total_count'];
		$args=[
				'post_type' => 'service',
				'posts_per_page' => $total_count,
			];
		$service = new \WP_Query($args);
		?>
        <!-- Service Area -->
		<section class="service-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <h1 class="service_title">{{{ settings.title }}}</h1>
		                <p class="service_description">{{{ settings.content }}}</p>
		            </div>
		        </div>
		        <div class="row">
		           <?php if($service->have_posts()) : while($service->have_posts()) : $service->the_post(); ?>
					<div class="col-md-6 col-12">
					    <div class="service-box">
					        <div class="service-img">
					            <?php the_post_thumbnail("transtics-service-thumb"); ?>
					            <div class="overlay">
					                <div class="text d-flex justify-content-center"><a href="<?php the_permalink(); ?>"><i class="fas fa-link fa-2x"></i></a></div>
					            </div>
					        </div>
					        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					        <?php the_excerpt(); ?>
					    </div>
					</div>
					<?php endwhile; endif; wp_reset_postdata();?>
		        </div>
		    </div>
		</section>
		<!-- Service Area /-->
		<?php
	}

}