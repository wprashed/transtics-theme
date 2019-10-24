<?php


class Transtics_Blog_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'blog';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Blog', 'transticsee' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-file-text-o';
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

		$args = array(
			'orderby' => 'name',
			'order' => 'ASC'
		);

		$categories=get_categories($args);
		$cate_array = array();
		$arrayCateAll = array( 'all' => 'All categories ' );
		if ($categories) {
			foreach ( $categories as $cate ) {
				$cate_array[$cate->cat_name] = $cate->slug;
			}
		} else {
			$cate_array["No content Category found"] = 0;
		}

		// Controls

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Blog Controls', 'transticsee' ),
			]
		);

		// Background

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transticsee' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .blogs',
			]
		);

		// Padding

		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .blogs' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Recent News', 'transticsee' ),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
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
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .title',
			]
		);

		// Content

		$this->add_control(
			'content',
			[
				'label'     => __( 'Description', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::TEXTAREA,
				'rows'		=> '6',
				'placeholder' => __( 'Enter Section Description', 'transticsee' ),
				'default'     => __( 'All our efforts and investments are geared towards offering better solutions. Solving your supply chain needs from end to end, taking the complexity out of container shipping. We are at the forefront of developing innovation.', 'transticsee' ),
			]
		);

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Description Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#9fadbb',
				'selectors' => [
					'{{WRAPPER}} .description' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Description Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .description',
			]
		);

		// Button

		$this->add_control(
			'button_text',
			[
				'label'     => __( 'Button Text', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Button Text', 'transticsee' ),
				'default'     => __( 'More News', 'transticsee' ),
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
				'selector' => '{{WRAPPER}} .btn',
			]
		);

		$this->add_control(
			'button_color',
			[
				'label'     => __( 'Button Color', 'transticsee' ),
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

		// Category

		$this->add_control(
			'category',
			[
				'label' => __( 'Category', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'all',
				'options' => array_merge($arrayCateAll,$cate_array),
			]
		);

		// Total Count

		$this->add_control(
			'total_count',
			[
				'label' => __( 'Total Post', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 3,
			]
		);

		// Order By

		$this->add_control(
			'order_by',
			[
				'label' => __('Order By', 'transticsee'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'desc',
				'options' => [
					'asc' => __('ASC', 'transticsee'),
					'desc' => __('DESC', 'transticsee'),
				]
			]
		);

		// Meta Condition

		$this->add_control(
			'show_author',
			[
				'label' => __( 'Show Author', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'transticsee' ),
				'label_off' => __( 'Hide', 'transticsee' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_category',
			[
				'label' => __( 'Show Date', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'transticsee' ),
				'label_off' => __( 'Hide', 'transticsee' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		// Blog Title Color

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Title Color', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h3.btitle a' => 'color : {{VALUE}} ;'
				],
				'default' => '#032c56'
				
			]
		);
		$this->add_control(
			'title_color_hover',
			[
				'label' => __( 'Title Color Hover', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h3.btitle a:hover' => 'color : {{VALUE}} ;'
				],
				'default' => '#FF0000',
				'separator' => 'after',
				
			]
		);

		// Meta Color

		$this->add_control(
			'meta_color',
			[
				'label' => __( 'Author & Date Color', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .meta' => 'color : {{VALUE}}!important;'
				],
				'default' => '#878d9c'
				
			]
		);


		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {

		$settings   = $this->get_settings_for_display();
		
		$target = $settings['button_url']['is_external'] ? ' target="_blank"' : '';
		$nofollow = $settings['button_url']['nofollow'] ? ' rel="nofollow"' : '';

		$category = $settings['category'];
		$total_count = $settings['total_count'];
		$order = $settings['order_by'];

		$args = [];
		if ($category == 'all') {
			$args=[
				'post_type' => 'post',
				'posts_per_page' => $total_count,
				'order' => $order,
			];
		} else {
			$args=[
				'post_type' => 'post', 
				'category_name'=>$category,
				'posts_per_page' => $total_count,
				'order' => $order,
			];
		}

		$blog = new \WP_Query($args);

		?>
		<!-- Blog -->
		<section class="blogs">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
		                <h1 class="title"><?php echo $settings['title'] ?></h1>
		                <p class="description"><?php echo $settings['content'] ?></p>
		            </div>
		        </div>
		        <div class="row">
		        	<?php
						if($blog->have_posts()) : while($blog->have_posts()) : $blog->the_post();
					?>
		            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
		                <div class="blog-box">
		                	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("transtics-news-grid"); ?></a>
		                    <h3 class="btitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		                    <h5 class="meta">
		                    	<?php if ($settings['show_author']) : ?>
		                    	<strong>By:</strong> <?php the_author(); ?> | 
		                    	<?php endif ?>
			                    <?php 
						            $archive_year  = get_the_time('y'); 
						            $archive_month = get_the_time('m'); 
						            $archive_day   = get_the_time('d'); 
					            ?>
					            <?php if ($settings['show_category']) : ?>
		                    	<?php echo esc_html( get_the_date() ); ?> <?php the_time('g:i a'); ?>
		                    	<?php endif ?>
		                    </h5>
		                </div>
		            </div>
		            <?php
						endwhile; endif; wp_reset_postdata();
					?>
		        </div>
		        <p class="more"><a href="<?php echo $settings['button_url']['url'] ?>" <?php echo $target  ?>  <?php $nofollow ?> class="btn btnn"><?php echo $settings['button_text'] ?></a></p>
		    </div>
		</section>
		<!-- Blog /-->
		<?php
	}
	}