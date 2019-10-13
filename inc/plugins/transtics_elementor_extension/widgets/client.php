<?php


class Transtics_Client_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'client';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Client', 'transticsee' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-handshake';
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

	// Widget Render Output

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

	// Widget Output Content Template

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