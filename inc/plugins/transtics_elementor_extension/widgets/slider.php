<?php


class Transtics_Slider_widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Blank widget name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_name() {
		return 'slider';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Blank widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_title() {
		return __( 'Slider', 'transticsee' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Blank widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_icon() {
		return 'fa fa-sliders';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Blank widget belongs to.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_categories() {
		return [ 'transticscategory' ];
	}

	/**
	 * Register Blank widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->register_controls();

	}

	/**
	 * Register Blank widget content ontrols.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	function register_controls() {

		// Slider Background

		$this->start_controls_section(
			'backgrount_section',
			[
				'label' => __( 'Slider Background', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'plugin-domain' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .slider',
			]
		);

		$this->end_controls_section();

		// Slider Title

		$this->start_controls_section(
			'title_section',
			[
				'label' => __( 'Slider Title', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Color', 'transticsee' ),
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
				'label'    => __( 'Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .slider_title',
			]
		);

		$this->end_controls_section();

		// Slider Content

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Slider Content', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Color', 'transticsee' ),
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
				'label'    => __( 'Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .slider_content',
			]
		);

		$this->end_controls_section();

		// Slider Button

		$this->start_controls_section(
			'button_section',
			[
				'label' => __( 'Slider Button', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'button_color',
			[
				'label'     => __( 'Color', 'transticsee' ),
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
				'label'     => __( 'Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#FF0000',
				'selectors' => [
					'{{WRAPPER}} .btn' => 'background-color: {{VALUE}}'
				]
			]
		);

		$this->end_controls_section();
	}

	

	/**
	 * Render Blank widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
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

	/**
	 * Render Blank widget output on the frontend.
	 *
	 * Written in JS and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _content_template() {
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