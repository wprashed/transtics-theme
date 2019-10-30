<?php


class Transtics_Team_widget extends \Elementor\Widget_Base {

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
		return 'team';
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
		return __( 'Team', 'transticsee' );
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
		return 'fa fa-user';
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

		// Team Background

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
				'selector' => '{{WRAPPER}} .team',
			]
		);

		$this->end_controls_section();

		// Slider Title

		$this->start_controls_section(
			'title_section',
			[
				'label' => __( 'Team Title', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

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
			'content',
			[
				'label'     => __( 'Description', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::TEXTAREA,
				'rows'		=> '6',
				'placeholder' => __( 'Enter Team Section Description', 'transticsee' ),
				'default'     => __( 'Solving your supply chain needs from end to end, taking the complexity out of container shipping. We are at the forefront of developing innovation.', 'transticsee' ),
			]
		);

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Color', 'transticsee' ),
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
				'label'    => __( 'Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .team_description',
			]
		);

		$this->end_controls_section();

		// Slider Button

		$this->start_controls_section(
			'button_section',
			[
				'label' => __( 'Button', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'button_text',
			[
				'label'     => __( 'Text', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Button Text', 'transticsee' ),
				'default'     => __( 'All Members', 'transticsee' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'button_typography',
				'label'    => __( 'Typography', '`' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .more',
			]
		);
		$this->add_control(
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
			'button_color',
			[
				'label'     => __( 'Color', 'transticsee' ),
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
				'label'     => __( 'Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#FF0000',
				'selectors' => [
					'{{WRAPPER}} .more' => 'background-color: {{VALUE}}'
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
		$target = $settings['button_url']['is_external'] ? ' target="_blank"' : '';
		$nofollow = $settings['button_url']['nofollow'] ? ' rel="nofollow"' : '';

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
		            	<?php query_posts( array(
						    'post_type' => 'team',
						    'post_per_page' => -1,
						  )); 
						?>
						<?php while (have_posts()) : the_post(); ?>
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
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
		            </div>
		            <p class="button abour-ha"><a href="<?php echo $settings['button_url']['url'] ?>" <?php echo $target  ?>  <?php $nofollow ?> class="btn more"><?php echo $settings['button_text'] ?></a></p>
		        </div>
		    </div>
		</section>
		<!-- Team /-->
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
		<#
		var target = settings.button_url.is_external ? ' target="_blank"' : '';
		var nofollow = settings.button_url.nofollow ? ' rel="nofollow"' : '';
		#>
        <!-- Team -->
		<section class="team" id="team">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-3 col-md-4">
		                <h1 class="team_title">{{{ settings.title }}}</h1>
		            </div>
		            <div class="col-lg-7 col-md-6">
		            	 <p class="team_description">{{{ settings.content }}}</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="owl-carousel owl-theme" id="team-carousel">
		            	<?php query_posts( array(
						    'post_type' => 'team',
						    'post_per_page' => -1,
						  )); 
						?>
						<?php while (have_posts()) : the_post(); ?>
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
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
		            </div>
		            <p class="button abour-ha"><a href="{{ settings.button_url.url }}" {{ target }}{{ nofollow }} class="btn more">{{{ settings.button_text }}}</a></p>
		        </div>
		    </div>
		</section>
		<!-- Team /-->
		<?php
	}

}