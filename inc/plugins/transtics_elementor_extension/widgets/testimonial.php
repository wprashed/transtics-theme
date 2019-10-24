<?php


class Transtics_Testimonial_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'testimonial';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Testimonial', 'transticsee' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-comments-o';
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
			'backgrount_section',
			[
				'label' => __( 'Controls', 'transticsee' ),
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
				'selector' => '{{WRAPPER}} .testimonial',
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Clients Review', 'transticsee' ),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .title' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => __( 'Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .title',
			]
		);

		// Button

		$this->add_control(
			'button_text',
			[
				'label'     => __( 'Button Text', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Button Text', 'transticsee' ),
				'default'     => __( 'All Review', 'transticsee' ),
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
				'label'     => __( 'Button Color', 'transticsee' ),
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
				'label'     => __( 'Button Background Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#FF0000',
				'selectors' => [
					'{{WRAPPER}} .more' => 'background-color: {{VALUE}}'
				]
			]
		);

		$this->add_control(
			'total',
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
					'{{WRAPPER}} .testimonial' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {

		$settings   = $this->get_settings_for_display();
		$target = $settings['button_url']['is_external'] ? ' target="_blank"' : '';
		$nofollow = $settings['button_url']['nofollow'] ? ' rel="nofollow"' : '';
		$total = $settings['total'];
		$args=[
				'post_type' => 'testimonial',
				'posts_per_page' => $total,
			];
		$testimonial = new \WP_Query($args);
		?>
		<!-- Testimonial -->
		<section class="testimonial">
		    <div class="container">
		        <div class="row testimonial-area">
		            <div class="col-md-12">
		                <h1 class="title"><?php echo $settings['title'] ?></h1>
		            </div>
		            <div class="col-md-12">
		                <div class="owl-carousel owl-theme" id="testimonial-carousel">
		                    <?php if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post(); ?>
							<div class="item">
							    <i class="fas fa-quote-right fa-3x float-right"></i>
							    <div class="testimonial-box">
							        <p><?php the_content(); ?></p>
							        <div class="d-flex justify-content-between client">
							            <div class="c-image">
							                <?php the_post_thumbnail("transtics-testimonial"); ?>
							            </div>
							            <div class="c-details">
							                <h5><?php the_title(); ?></h5>
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
							</div>
							<?php endwhile; endif; wp_reset_postdata();?>
		                </div>
		                <p class="button"><a href="<?php echo $settings['button_url']['url'] ?>" <?php echo $target  ?>  <?php $nofollow ?> class="btn more"><?php echo $settings['button_text'] ?></a></p>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Testimonial /-->
		<?php


	}

	// Widget Output Content Template

	protected function _content_template() {
		$total = $settings['total'];
		$args=[
				'post_type' => 'testimonial',
				'posts_per_page' => $total,
			];
		$testimonial = new \WP_Query($args);
		?>
		<#
		var target = settings.button_url.is_external ? ' target="_blank"' : '';
		var nofollow = settings.button_url.nofollow ? ' rel="nofollow"' : '';
		#>
        <!-- Testimonial -->
		<section class="testimonial">
		    <div class="container">
		        <div class="row testimonial-area">
		            <div class="col-md-12">
		                <h1 class="title">{{{ settings.title }}}</h1>
		            </div>
		            <div class="col-md-12">
		                <div class="owl-carousel owl-theme" id="testimonial-carousel">
		                    <?php if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post(); ?>
							<div class="item">
							    <i class="fas fa-quote-right fa-3x float-right"></i>
							    <div class="testimonial-box">
							        <p><?php the_content(); ?></p>
							        <div class="d-flex justify-content-between client">
							            <div class="c-image">
							                <?php the_post_thumbnail("transtics-testimonial"); ?>
							            </div>
							            <div class="c-details">
							                <h5><?php the_title(); ?></h5>
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
							</div>
							<?php endwhile; endif; wp_reset_postdata();?>
		                </div>
		                <p class="button"><a href="{{ settings.button_url.url }}"  {{ target }}{{ nofollow }}  class="btn more">{{{ settings.button_text }}}</a></p>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Testimonial /-->
		<?php
	}

}