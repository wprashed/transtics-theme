<?php


class Transtics_Slider_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'slider';
	}

	// Widget Title

	public function get_title() {
		return __( 'Slider', 'transticsee' );
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
				'label' => __( 'Slider Control', 'transticsee' ),
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
				'selector' => '{{WRAPPER}} .slider',
			]
		);

		// Title

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
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
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .slider_title',
			]
		);

		// Content

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Description Color', 'transticsee' ),
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
				'label'    => __( 'Description Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .slider_content',
			]
		);

		// Button

		$this->add_control(
			'button_color',
			[
				'label'     => __( 'Button Text Color', 'transticsee' ),
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
				'label'     => __( 'Button Background Color', 'transticsee' ),
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
		?>
		<!-- Slider -->
			<section class="slider">
			    <div class="container">
			        <div class="row slider-item">
			            <div class="owl-carousel owl-theme" id="owl-demo">
			                <?php query_posts( array(
			                    'post_type' => 'slider',
			                    'post_per_page' => -1,
			                  )); 
			                ?>
			                <?php while (have_posts()) : the_post(); ?>
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
			                <?php endwhile; ?>
			                <?php wp_reset_query(); ?>
			            </div>
			        </div>
			    </div>
			</section>
		<!-- Slider /-->
		<?php

	}
}