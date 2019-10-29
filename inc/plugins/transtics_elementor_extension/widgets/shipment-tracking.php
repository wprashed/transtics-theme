<?php


class Transtics_Shipment_Tracking_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'shipment-tracking';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Shipment & Schedule', 'transticsee' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-truck';
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
			'content_section',
			[
				'label' => __( 'Content', 'transticsee' ),
			]
		);

		// Background

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transticsee' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .schedule',
			]
		);

		// Shipment Icon

		$this->add_control(
			'shipment_icon',
			[
				'label' => __( 'Shipment Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-map-o',
			]
		);

		// Title

		$this->add_control(
			'shipment_title',
			[
				'label'     => __( 'Shipment Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Track My Shipment', 'transticsee' ),
			]
		);

		// Content

		$this->add_control(
			'shipment_shortcode',
			[
				'label'     => __( 'Shipment Form Shortcode', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::TEXTAREA,
				'rows'		=> '4',
				'placeholder' => __( 'Enter Section Description', 'transticsee' ),
				'default'     => __( '[contact-form-7 id="215" title="Track Shipment"]', 'transticsee' ),
			]
		);

		// Shipment Icon

		$this->add_control(
			'schdule_icon',
			[
				'label' => __( 'Schedule Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-calendar',
			]
		);

		// Title

		$this->add_control(
			'schdule_title',
			[
				'label'     => __( 'Schedule Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Get a Schedule', 'transticsee' ),
			]
		);

		// Content

		$this->add_control(
			'schdule_shortcode',
			[
				'label'     => __( 'Schedule Form Shortcode', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::TEXTAREA,
				'rows'		=> '4',
				'placeholder' => __( 'Enter Section Description', 'transticsee' ),
				'default'     => __( '[contact-form-7 id="216" title="Get a Schedule"]', 'transticsee' ),
			]
		);

		// Style

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

		$this->add_control(
			'icon_color',
			[
				'label'     => __( 'Icon Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .icon' => 'color: {{VALUE}}'
				]
			]
		);

		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {

		$settings   = $this->get_settings_for_display();
		?>
		<!-- Schedule -->
		<section class="schedule">
		   <h3 class="d-none">schedule</h3>
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <nav>
		                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
		                        <a class="nav-item nav-link active nav-one" id="shipment-tab" data-toggle="tab"
		                           href="#shipment" role="tab" aria-controls="shipment" aria-selected="true">
		                            <span class="icon"><i class="<?php echo $settings['shipment_icon'] ?> fa-1x"></i></span><span class="title"><?php echo $settings['shipment_title'] ?></span>
		                        </a>
		                        <a class="nav-item nav-link nav-two" id="schedule-tab" data-toggle="tab" href="#schedule"
		                           role="tab" aria-controls="schedule" aria-selected="false">
		                            <span class="icon"><i class="<?php echo $settings['schdule_icon'] ?> fa-1x"></i></span><span class="title"><?php echo $settings['schdule_title'] ?></span>
		                        </a>
		                    </div>
		                </nav>
		                
		                
		                <div class="tab-content" id="nav-tabContent1">
		                    <div class="tab-pane fade show active" id="shipment" role="tabpanel"
		                         aria-labelledby="shipment-tab">
		                        <?php echo $settings['shipment_shortcode'] ?>
		                    </div>
		                    <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
		                        <?php echo $settings['schdule_shortcode'] ?>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Schedule /-->
		<?php
	}
}