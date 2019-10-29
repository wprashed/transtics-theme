<?php


class Transtics_Advantages_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'advantages';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Advantages', 'transticsee' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-american-sign-language-interpreting';
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

		$this->start_controls_section(
			'control_section',
			[
				'label' => __( 'Advantages Control', 'transticsee' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Background

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transticsee' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .advantages',
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Advantages Section Title', 'transticsee' ),
				'default'     => __( 'Our Advantages', 'transticsee' ),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#fff',
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

		$this->end_controls_section();



		$this->start_controls_section(
			'item_section',
			[
				'label' => __( 'Items', 'transticsee' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'icon_one',
			[
				'label' => __( 'Icon', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-facebook',
			]
		);

		$repeater->add_control(
			'title_one', [
				'label' => __( 'Tilte', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Warehouse Facility' , 'transticsee' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'content_one', [
				'label' => __( 'Content', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor unde om' , 'transticsee' ),
				'rows'	=> 4,
			]
		);

		$repeater->add_control(
			'icon_two',
			[
				'label' => __( 'Icon', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-facebook',
			]
		);

		$repeater->add_control(
			'title_two', [
				'label' => __( 'Tilte', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Customer Satisfaction' , 'transticsee' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'content_two', [
				'label' => __( 'Content', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor unde om' , 'transticsee' ),
				'rows'	=> 4,
			]
		);

		$repeater->add_control(
			'icon_three',
			[
				'label' => __( 'Icon', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-facebook',
			]
		);

		$repeater->add_control(
			'title_three', [
				'label' => __( 'Tilte', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Real-time Cargo Tracking' , 'transticsee' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'content_three', [
				'label' => __( 'Content', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor unde om' , 'transticsee' ),
				'rows'	=> 4,
			]
		);

		$this->add_control(
			'list',
			[
				'label' => __( 'Advantages List', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);

		// Title Style

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .atitle' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .atitle',
			]
		);

		// Content

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Description Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .adetails' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Description Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .adetails',
			]
		);

		// Icon

		$this->add_control(
			'icon_color',
			[
				'label'     => __( 'Icon Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .iconf' => 'color: {{VALUE}}'
				]
			]
		);

		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {

		$settings   = $this->get_settings_for_display();
		?>
		<!-- Advantages -->
		<section class="advantages">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6 content">
		                <h2 class="title"><?php echo $settings['title'] ?></h2>
		                <div class="owl-carousel owl-theme" id="content-carousel">
		                	<?php if ( $settings['list'] ) {
		                		foreach (  $settings['list'] as $item ) {
		                	?>
		                    <div class="item">
		                        <div class="d-flex justify-content-between aditem">
		                            <div class="icons">
		                                <div class="icon d-flex justify-content-center">
		                                	<span class="iconf"><i class="<?php echo $item['icon_one'] ?>"></i></span>
		                                </div>
		                            </div>
		                            <div class="text">
		                                <h4 class="atitle"><?php echo $item['title_one'] ?></h4>
		                                <h6 class="adetails"><?php echo $item['content_one'] ?></h6>
		                            </div>
		                        </div>
		                        <div class="d-flex justify-content-between aditem aditem">
		                            <div class="icons">
		                                <div class="icon d-flex justify-content-center">
		                                    <span class="iconf"><i class="<?php echo $item['icon_two'] ?>"></i></span>
		                                </div>
		                            </div>
		                            <div class="text">
		                                <h4 class="atitle"><?php echo $item['title_two'] ?></h4>
		                                <h6 class="adetails"><?php echo $item['content_two'] ?></h6>
		                            </div>
		                        </div>
		                        <div class="d-flex justify-content-between aditem aditem">
		                            <div class="icons">
		                                <div class="icon d-flex justify-content-center">
		                                    <span class="iconf"><i class="<?php echo $item['icon_three'] ?>"></i></span>
		                                </div>
		                            </div>
		                            <div class="text">
		                                <h4 class="atitle"><?php echo $item['title_three'] ?></h4>
		                                <h6 class="adetails"><?php echo $item['content_three'] ?></h6>
		                            </div>
		                        </div>
		                    </div>
		                    <?php } } ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Advantages /-->
		<?php
	}

}