<?php


class Transtics_TeamSlider_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'team_slider';
	}

	// Widget Title

	public function get_title() {
		return __( 'Team Slider', 'transtics_elementor_extension' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-user';
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


		// Team Background

		$this->start_controls_section(
			'backgrount_section',
			[
				'label' => __( 'Team Slider Controls', 'transtics_elementor_extension' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transtics_elementor_extension' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .team',
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Team Section Title', 'transtics_elementor_extension' ),
				'default'     => __( 'Our Team', 'transtics_elementor_extension' ),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .team_title' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => __( 'Title Typography', 'transtics_elementor_extension' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .team_title',
			]
		);

		// Content

		$this->add_control(
			'content',
			[
				'label'     => __( 'Description', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::TEXTAREA,
				'rows'		=> '6',
				'placeholder' => __( 'Enter Team Section Description', 'transtics_elementor_extension' ),
				'default'     => __( 'Solving your supply chain needs from end to end, taking the complexity out of container shipping. We are at the forefront of developing innovation.', 'transtics_elementor_extension' ),
			]
		);

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Description Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#9fadbb',
				'selectors' => [
					'{{WRAPPER}} .team_description' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Description Typography', 'transtics_elementor_extension' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .team_description',
			]
		);

		// Button

		$this->add_control(
			'button_text',
			[
				'label'     => __( 'Button Text', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Button Text', 'transtics_elementor_extension' ),
				'default'     => __( 'All Members', 'transtics_elementor_extension' ),
			]
		);

		$this->add_control(
			'button_url',
			[
				'label'     => __( 'Button Url', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'transtics_elementor_extension' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'button_typography',
				'label'    => __( 'Button Typography', '`' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .more',
			]
		);

		$this->add_control(
			'button_color',
			[
				'label'     => __( 'Button Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#fff',
				'selectors' => [
					'{{WRAPPER}} .more' => 'color: {{VALUE}}'
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
					'{{WRAPPER}} .more' => 'background-color: {{VALUE}}'
				]
			]
		);

		$this->add_control(
			'total_count',
			[
				'label' => __( 'Total Item', 'transtics_elementor_extension' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 3,
			]
		);

		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'transtics_elementor_extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .team' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}

	// Render Widget Output	

	protected function render() {

		$settings   = $this->get_settings_for_display();
		$target = $settings['button_url']['is_external'] ? ' target="_blank"' : '';
		$nofollow = $settings['button_url']['nofollow'] ? ' rel="nofollow"' : '';
		$total_count = $settings['total_count'];
		$args=[
				'post_type' => 'team',
				'posts_per_page' => $total_count,
			];
		$team = new \WP_Query($args);

		?>
		<!-- Team -->
		<section class="team" id="team">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-3 col-md-4">
		                <h1 class="team_title"><?php echo $settings['title'] ?></h1>
		            </div>
		            <div class="col-lg-7 col-md-6">
		            	 <p class="team_description"><?php echo $settings['content'] ?></p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="owl-carousel owl-theme" id="team-carousel">
		            	<?php if($team->have_posts()) : while($team->have_posts()) : $team->the_post(); ?>
						<div class="item">
						    <div class="team-img">
						        <?php the_post_thumbnail("transtics-team-slider"); ?>
						        <div class="overlay">
						            <div class="text d-flex justify-content-center">
						                <a href="<?php if ( get_field( "facebook" ) ) { echo get_field( "facebook" ) ; } ?>"><i class="fab fa-facebook-f"></i></a>
						                <a href="<?php if ( get_field( "twitter" ) ) { echo get_field( "twitter" ) ; } ?>"><i class="fab fa-twitter"></i></a>
						                <a href="<?php if ( get_field( "linkedin" ) ) { echo get_field( "linkedin" ) ; } ?>"><i class="fab fa-linkedin-in"></i></a>
						            </div>
						        </div>
						    </div>
						    <div class="info">
						        <h4><?php the_title(); ?></h4>
						        <p>
						            <?php
						                if ( get_field( "designation" ) ) {
						                     echo get_field( "designation" ) ;
						                }
						            ?>
						        </p>
						    </div>
						</div>
						<?php endwhile; endif; wp_reset_postdata();?>
		            </div>
		            <p class="button abour-ha"><a href="<?php echo $settings['button_url']['url'] ?>" <?php echo $target  ?>  <?php $nofollow ?> class="btn more"><?php echo $settings['button_text'] ?></a></p>
		        </div>
		    </div>
		</section>
		<!-- Team /-->
		<?php

	}
}
