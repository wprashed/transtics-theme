<?php


class Transtics_Client_widget extends \Elementor\Widget_Base {

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
		return 'client';
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
		return __( 'Client', 'transticsee' );
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
		return 'fa fa-handshake';
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
				'label' => __( 'Background', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transticsee' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .clients',
			]
		);

		$this->add_control(
			'total',
			[
				'label' => __( 'Total Item', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 5,
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
		$total = $settings['total'];
		$args=[
				'post_type' => 'client',
				'posts_per_page' => $total,
			];
		$client = new \WP_Query($args);
		?>
		<!-- Client -->
		<section class="clients">
		    <div class="container">
		        <div class="row">
					<?php if($client->have_posts()) : while($client->have_posts()) : $client->the_post(); ?>
					<div class="col align-self-center">
					    <p><?php the_post_thumbnail(); ?></p>
					</div>
					<?php endwhile; endif; wp_reset_postdata();?>
		        </div>
		    </div>
		</section>
		<!-- Client /-->
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
		$total = $settings['total'];
		$args=[
				'post_type' => 'client',
				'posts_per_page' => $total,
			];
		$client = new \WP_Query($args);
		?>
        <!-- Client -->
		<section class="clients">
		    <div class="container">
		        <div class="row">
					<?php if($client->have_posts()) : while($client->have_posts()) : $client->the_post(); ?>
					<div class="col align-self-center">
					    <p><?php the_post_thumbnail(); ?></p>
					</div>
					<?php endwhile; endif; wp_reset_postdata();?>
		        </div>
		    </div>
		</section>
		<!-- Client /-->
		<?php
	}

}