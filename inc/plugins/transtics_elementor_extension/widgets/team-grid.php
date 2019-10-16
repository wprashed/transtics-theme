<?php


class Transtics_TeamGrid_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'team_grid';
	}

	// Widget Title

	public function get_title() {
		return __( 'Team Grid', 'transticsee' );
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

		// Team Control

		$this->start_controls_section(
			'backgrount_section',
			[
				'label' => __( 'Team Grid Options', 'transticsee' ),
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
				'selector' => '{{WRAPPER}} .team',
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Team Section Title', 'transticsee' ),
				'default'     => __( 'Our Team', 'transticsee' ),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Color', 'transticsee' ),
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
				'label'    => __( 'Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .team_title',
			]
		);

		$this->add_control(
			'total_count',
			[
				'label' => __( 'Total Item', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 3,
			]
		);

		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'transticsee' ),
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
		$total_count = $settings['total_count'];
		$args=[
				'post_type' => 'team',
				'posts_per_page' => $total_count,
			];
		$team = new \WP_Query($args);
		?>
		<!-- Team-->
		<section class="team" id="teamm">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <h1 class="team_title"><?php echo $settings['title'] ?></h1>
		            </div>
		        </div>
		        <div class="row">
		            
					<?php if($team->have_posts()) : while($team->have_posts()) : $team->the_post(); ?>
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					    <div class="item">
					        <div class="team-img">
					            <?php the_post_thumbnail("transtics-team-archive"); ?>
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
					</div>
					<?php endwhile; endif; wp_reset_postdata();?>
		        </div>
		    </div>
		</section>
		<!-- Team/-->
		<?php


	}

	// Widget Output Content Template

	protected function _content_template() {
		
		$total_count = $settings['total_count'];
		$args=[
				'post_type' => 'team',
				'posts_per_page' => $total_count,
			];
		$team = new \WP_Query($args);
		?>
        <!-- Team-->
		<section class="team" id="teamm">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <h1 class="team_title">{{{ settings.title }}}</h1>
		            </div>
		        </div>
		        <div class="row">
					<?php if($team->have_posts()) : while($team->have_posts()) : $team->the_post(); ?>
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					    <div class="item">
					        <div class="team-img">
					            <?php the_post_thumbnail("transtics-team-archive"); ?>
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
					</div>
					<?php endwhile; endif; wp_reset_postdata();?>
		        </div>
		    </div>
		</section>
		<!-- Team/-->
		<?php
	}

}