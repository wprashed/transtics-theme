<?php


class Transtics_Gallery_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'gallery';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Gallery', 'transtics_elementor_extension' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-picture-o';
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
				'label' => __( 'Gallery Controls', 'transtics_elementor_extension' ),
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
				'selector' => '{{WRAPPER}} .gallery-area',
			]
		);

		// Button

		$this->add_control(
			'button_text',
			[
				'label'     => __( 'Button Text', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Button Text', 'transtics_elementor_extension' ),
				'default'     => __( 'Get Quote', 'transtics_elementor_extension' ),
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
				'selector' => '{{WRAPPER}} .btn',
			]
		);

		$this->add_control(
			'button_color',
			[
				'label'     => __( 'Button Color', 'transtics_elementor_extension' ),
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

		// Total

		$this->add_control(
			'total',
			[
				'label' => __( 'Total Item', 'transtics_elementor_extension' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 6,
			]
		);

		// Padding

		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'transtics_elementor_extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .gallery-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
				'post_type' => 'gallery',
				'posts_per_page' => $total,
			];
		$gallery = new \WP_Query($args);
		?>
		<!-- Gallery Area -->
		<section class="gallery-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="wraper">
		                    <div class="iso-nav">
		                        <ul>
		                            <?php
		                            $categories = get_categories('taxonomy=gallery_category&post_type=gallery'); ?>
		                            <li class="active" data-filter="*"><?php echo _e('All','transtics');?></li>
		                            <?php foreach ($categories as $category) : ?>
		                            <li data-filter=".<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></li>
		                            <?php endforeach; ?>
		                        </ul>
		                    </div>

		                    <div class="row main-iso">
		                        <?php 
		                            if($gallery->have_posts()) : while($gallery->have_posts()) : $gallery->the_post();
		                            $terms = get_the_terms ($args->ID, 'gallery_category');
		                            if ( !is_wp_error($terms) && !empty($terms)) : 
		                            $slugs = wp_list_pluck($terms, 'slug');

		                            $slug = implode(" ", $slugs); 
		                        ?>
		                        <div class="item col-lg-4 col-md-6 col-sm-6 <?php echo esc_attr($slug);?>">
		                        <?php else: ?>
		                        <?php
		                            endif;
		                        ?>
		                            <div class="single-gallery">
		                                <?php the_post_thumbnail("transtics-gallery"); ?>
		                                <div class="overlay">
		                                    <div class="text d-flex justify-content-center">
		                                        <!-- <a href=""><i class="fas fa-link"></i></a> -->
		                                        <?php 
		                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
		                                            echo '<a data-fancybox="gallery" href="'.esc_url($featured_img_url).'">'; 
		                                            echo '<i class="fas fa-search"></i>';
		                                            echo '</a>';
		                                        ?>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <?php endwhile; endif; wp_reset_postdata();?>
		                        <?php wp_reset_query(); ?>
		                    </div>
		                </div>
		                <h5><a href="<?php echo $settings['button_url']['url'] ?>" <?php echo $target  ?>  <?php $nofollow ?> class="btn"><?php echo $settings['button_text'] ?></a></h5>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Gallery Area / -->
		<?php

	}
}