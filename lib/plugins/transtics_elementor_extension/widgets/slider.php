<?php


class Transtics_Slider_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'slider';
	}

	// Widget Title

	public function get_title() {
		return __( 'Slider', 'transtics_elementor_extension' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-sliders';
	}

	// Widget Category

	public function get_categories() {
		return [ 'transticscategory' ];
	}

	// Register Widget Control

	protected function _register_controls() {

		$this->register_controls();

	}

	// Widget Control

	function register_controls() {

		// Slider Control

		$this->start_controls_section(
			'backgrount_section',
			[
				'label' => __( 'Slider Control', 'transtics_elementor_extension' ),
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
				'selector' => '{{WRAPPER}} .slider',
			]
		);

		// Post Count

		$this->add_control(
			'total',
			[
				'label' => __( 'Total Item', 'transtics_elementor_extension' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 2,
			]
		);

		// Title

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ff0000',
				'selectors' => [
					'{{WRAPPER}} .slider_title' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => __( 'Title Typography', 'transtics_elementor_extension' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .slider_title',
			]
		);

		// Content

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Description Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#fff',
				'selectors' => [
					'{{WRAPPER}} .slider_content' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Description Typography', 'transtics_elementor_extension' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .slider_content',
			]
		);

		// Button

		$this->add_control(
			'button_color',
			[
				'label'     => __( 'Button Text Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#fff',
				'selectors' => [
					'{{WRAPPER}} .btn' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_control(
			'button_background_color',
			[
				'label'     => __( 'Button Background Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#FF0000',
				'selectors' => [
					'{{WRAPPER}} .btn' => 'background-color: {{VALUE}}'
				]
			]
		);

		$this->end_controls_section();
	}

	// Widget Render Output	

	protected function render() {

		$settings   = $this->get_settings_for_display();
		$total = $settings['total'];
		$args=[
				'post_type' => 'slider',
				'posts_per_page' => $total,
			];
		$slider = new \WP_Query($args);
		?>
		<!-- Slider -->
			<section class="slider">
			    <div class="container">
			        <div class="row slider-item">
			            <div class="owl-carousel owl-theme" id="owl-demo">
			                <?php if($slider->have_posts()) : while($slider->have_posts()) : $slider->the_post(); ?>
			                <div class="item">
			                    <h1 class="slider_title"><?php the_title(); ?></h1>
			                    <h4 class="slider_content">
			                    	<?php
			                            if ( get_field( "slider_content" ) ) {
			                                 echo get_field( "slider_content" ) ;
			                            }
			                        ?>
			                    </h4>
			                    <a href="<?php if ( get_field( "button_url" ) ) { echo get_field( "button_url" ) ; } ?>" class="btn">
			                        <?php
			                            if ( get_field( "button_text" ) ) {
			                                 echo get_field( "button_text" ) ;
			                            }
			                        ?>
			                    </a>
			                </div>
			                <?php endwhile; endif; wp_reset_postdata();?>
			            </div>
			        </div>
			    </div>
			</section>
		<!-- Slider /-->
		<?php

	}
}