<?php


class Transtics_Pricing_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'pricing';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Pricing', 'transticsee' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-table';
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
			'pricing_section',
			[
				'label' => __( 'Pricing Controls', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Pricing', 'transticsee' ),
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
					'{{WRAPPER}} .pricing-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// Pricing Table One

		$this->start_controls_section(
			'table_one',
			[
				'label' => __( 'Table One', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Title

		$this->add_control(
			'table_one_title',
			[
				'label'     => __( 'Table Name', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Basic', 'transticsee' ),
			]
		);

		// Price

		$this->add_control(
			'table_one_price',
			[
				'label'     => __( 'Price', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Price', 'transticsee' ),
				'default'     => __( '$24', 'transticsee' ),
			]
		);

		// element

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'table_one_element', [
				'label' => __( 'Item', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Warehouse Facility' , 'transticsee' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'table_one_list',
			[
				'label' => __( 'Table element', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);

		// Button

		$this->add_control(
			'table_one_button_text',
			[
				'label'     => __( 'Button Text', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Button Text', 'transticsee' ),
				'default'     => __( 'Sign Up', 'transticsee' ),
			]
		);

		$this->add_control(
			'table_one_button_url',
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

		$this->end_controls_section();

		// Pricing Table Two

		$this->start_controls_section(
			'table_two',
			[
				'label' => __( 'Table Two', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Title

		$this->add_control(
			'table_two_title',
			[
				'label'     => __( 'Table Name', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Regular', 'transticsee' ),
			]
		);

		// Price

		$this->add_control(
			'table_two_price',
			[
				'label'     => __( 'Price', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Price', 'transticsee' ),
				'default'     => __( '$24', 'transticsee' ),
			]
		);

		// element

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'table_two_element', [
				'label' => __( 'Item', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Warehouse Facility' , 'transticsee' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'table_two_list',
			[
				'label' => __( 'Table element', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);

		// Button

		$this->add_control(
			'table_two_button_text',
			[
				'label'     => __( 'Button Text', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Button Text', 'transticsee' ),
				'default'     => __( 'Sign Up', 'transticsee' ),
			]
		);

		$this->add_control(
			'table_two_button_url',
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

		$this->end_controls_section();	

		// Pricing Table Three

		$this->start_controls_section(
			'table_three',
			[
				'label' => __( 'Table Three', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Title

		$this->add_control(
			'table_three_title',
			[
				'label'     => __( 'Table Name', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Premium', 'transticsee' ),
			]
		);

		// Price

		$this->add_control(
			'table_three_price',
			[
				'label'     => __( 'Price', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Price', 'transticsee' ),
				'default'     => __( '$24', 'transticsee' ),
			]
		);

		// element

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'table_three_element', [
				'label' => __( 'Item', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Warehouse Facility' , 'transticsee' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'table_three_list',
			[
				'label' => __( 'Table element', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);

		// Button

		$this->add_control(
			'table_three_button_text',
			[
				'label'     => __( 'Button Text', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Button Text', 'transticsee' ),
				'default'     => __( 'Sign Up', 'transticsee' ),
			]
		);

		$this->add_control(
			'table_three_button_url',
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

		$this->end_controls_section();			

	}

	// Widget Render Output

	protected function render() {

		$target_one = $settings['table_one_button_url']['is_external'] ? ' target="_blank"' : '';
		$nofollow_one = $settings['table_one_button_url']['nofollow'] ? ' rel="nofollow"' : '';

		$target_two = $settings['table_two_button_url']['is_external'] ? ' target="_blank"' : '';
		$nofollow_two = $settings['table_two_button_url']['nofollow'] ? ' rel="nofollow"' : '';

		$target_three = $settings['table_three_button_url']['is_external'] ? ' target="_blank"' : '';
		$nofollow_three = $settings['table_three_button_url']['nofollow'] ? ' rel="nofollow"' : '';

		$settings   = $this->get_settings_for_display();
		?>
		<div class="pricing-area">
			<h1>Pricing</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="pricing-table text-center">
                        <h5><?php echo $settings['table_one_title'] ?></h5>
                        <div class="price"><h5><?php echo $settings['table_one_price'] ?></h5></div>
                        <ul>
                        	<?php if ( $settings['table_one_list'] ) {
		                		foreach (  $settings['table_one_list'] as $item ) {
		                	?>
                            <li><?php echo $item['table_one_element'] ?></li>
                            <?php } } ?>
                        </ul>
                        <h6><a href="<?php echo $settings['table_one_button_url']['url'] ?>"<?php echo $target_one  ?>  <?php $nofollow_one ?>  class="btn button"><?php echo $settings['table_one_button_text'] ?></a></h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="pricing-table text-center" id="active">
                        <h5><?php echo $settings['table_one_title'] ?></h5>
                        <div class="price"><h5><?php echo $settings['table_two_price'] ?></h5></div>
                        <ul>
                            <?php if ( $settings['table_two_list'] ) {
		                		foreach (  $settings['table_two_list'] as $item ) {
		                	?>
                            <li><?php echo $item['table_two_element'] ?></li>
                            <?php } } ?>
                        </ul>
                        <h6><a href="<?php echo $settings['table_two_button_url']['url'] ?>"<?php echo $target_two  ?>  <?php $nofollow_two ?>  class="btn button"><?php echo $settings['table_two_button_text'] ?></a></h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="pricing-table text-center">
                        <h5><?php echo $settings['table_three_title'] ?></h5>
                        <div class="price"><h5><?php echo $settings['table_three_price'] ?></h5></div>
                        <ul>
                            <?php if ( $settings['table_three_list'] ) {
		                		foreach (  $settings['table_three_list'] as $item ) {
		                	?>
                            <li><?php echo $item['table_three_element'] ?></li>
                            <?php } } ?>
                        </ul>
                        <h6><a href="<?php echo $settings['table_three_button_url']['url'] ?>"<?php echo $target_three  ?>  <?php $nofollow_three ?>  class="btn button"><?php echo $settings['table_three_button_text'] ?></a></h6>
                    </div>
                </div>
            </div>
		</div>
		<?php


	}

	// Widget Output Content Template

	protected function _content_template() {
		
		?>
		<#
		var target_one = settings.table_one_button_url.is_external ? ' target="_blank"' : '';
		var nofollow_one = settings.table_one_button_url.nofollow ? ' rel="nofollow"' : '';
		#>
		<#
		var target_two = settings.table_two_button_url.is_external ? ' target="_blank"' : '';
		var nofollow_two = settings.table_two_button_url.nofollow ? ' rel="nofollow"' : '';
		#>
		<#
		var target_three = settings.table_three_button_url.is_external ? ' target="_blank"' : '';
		var nofollow_three = settings.table_three_button_url.nofollow ? ' rel="nofollow"' : '';
		#>
		<div class="pricing-area">
			<h1 class="title">{{{ settings.title }}}</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="pricing-table text-center">
                        <h5>{{{ settings.table_one_title }}}</h5>
                        <div class="price"><h5>{{{ settings.table_one_price }}}</h5></div>
                        <ul>
                        	<# if ( settings.table_one_list.length ) { #>
		                	<# _.each( settings.table_one_list, function( item ) { #>
                            <li>{{{ item.table_one_element }}}</li>
                            <# }); #>
		                    <# } #>
                        </ul>
                        <h6><a href="{{ settings.table_one_button_url.url }}" {{ target_one }}{{ nofollow_one }} class="btn button">{{{ settings.table_one_button_text }}}</a></h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="pricing-table text-center" id="active">
                        <h5>{{{ settings.table_two_title }}}</h5>
                        <div class="price"><h5>{{{ settings.table_two_price }}}</h5></div>
                        <ul>
                        	<# if ( settings.table_two_list.length ) { #>
		                	<# _.each( settings.table_two_list, function( item ) { #>
                            <li>{{{ item.table_two_element }}}</li>
                            <# }); #>
		                    <# } #>
                        </ul>
                        <h6><a href="{{ settings.table_two_button_url.url }}" {{ target_two }}{{ nofollow_two }} class="btn button">{{{ settings.table_two_button_text }}}</a></h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                    <div class="pricing-table text-center">
                        <h5>{{{ settings.table_three_title }}}</h5>
                        <div class="price"><h5>{{{ settings.table_three_price }}}</h5></div>
                        <ul>
                        	<# if ( settings.table_three_list.length ) { #>
		                	<# _.each( settings.table_three_list, function( item ) { #>
                            <li>{{{ item.table_three_element }}}</li>
                            <# }); #>
		                    <# } #>
                        </ul>
                        <h6><a href="{{ settings.table_three_button_url.url }}" {{ target_three }}{{ nofollow_three }} class="btn button">{{{ settings.table_three_button_text }}}</a></h6>
                    </div>
                </div>
            </div>
		</div>
		<?php
	}

}