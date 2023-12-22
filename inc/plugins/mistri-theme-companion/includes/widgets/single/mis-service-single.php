<?php
class Mistri_Service_Single extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_service_single';
	}

	public function get_title() {
		return esc_html__( 'Mistri Service Single', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'service', 'section', 'single', 'page'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_service_single_layout_section_head',
			[
				'label' => esc_html__( 'Service layout', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_service_single_layout_section_show',
			[
				'label' => esc_html__( 'Show Sidebar', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_single_best_section_head',
			[
				'label' => esc_html__( 'Best Service', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_service_single_best_service_image',
			[
				'label' => esc_html__( 'Choose Service Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_service_single_best_service_image_show',
			[
				'label' => esc_html__( 'Show Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_service_single_best_service_content',
			[
				'label' => esc_html__( 'Service Content', 'mistri' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing. Cras enim urna, interdum nec porttitor vitae, sollicitudin eu eros.', 'mistri' ),
                'separator' => 'before'
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_service_standard_section_head',
			[
				'label' => esc_html__( 'Service Standard', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_service_single_standard_one_image',
			[
				'label' => esc_html__( 'Choose Standard One Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_service_single_standard_one_image_show',
			[
				'label' => esc_html__( 'Show Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_service_single_standard_two_image',
			[
				'label' => esc_html__( 'Choose Standard Two Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator'    => 'before'
			]
		);

        $this->add_control(
			'mistri_service_single_standard_two_image_show',
			[
				'label' => esc_html__( 'Show Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_service_single_standard_two_content',
			[
				'label' => esc_html__( 'Service Content', 'mistri' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing. Cras enim urna, interdum nec porttitor vitae, sollicitudin eu eros.', 'mistri' ),
                'separator' => 'before'
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_widget_one_head',
			[
				'label' => esc_html__( 'Service Widget One', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_team_widget_one_title_one',
			[
				'label' => esc_html__( 'Widget Title One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Available', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_team_widget_one_title_two',
			[
				'label' => esc_html__( 'Widget Title Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'for any type of Service', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_team_widget_one_btn_text',
			[
				'label' => esc_html__( 'Widget Button Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Contact Us', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_team_widget_one_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'mistri' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);

        $this->add_control(
			'mistri_team_widget_one_bg_image',
			[
				'label' => esc_html__( 'Widget background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_service_widget_one_head_show',
			[
				'label' => esc_html__( 'Show Widget One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_widget_two_head',
			[
				'label' => esc_html__( 'Service Widget Two', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_team_widget_two_title_one',
			[
				'label' => esc_html__( 'Widget Title One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Have any questions?', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_team_widget_two_title_two',
			[
				'label' => esc_html__( 'Widget Title Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'call us today!', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_team_widget_two_phone',
			[
				'label' => esc_html__( 'Widget Phone Number', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+91 026 125 9870', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_team_widget_two_bg_image',
			[
				'label' => esc_html__( 'Widget background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_service_widget_two_head_show',
			[
				'label' => esc_html__( 'Show Widget Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);


        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_widget_three_head',
			[
				'label' => esc_html__( 'Service Widget Three', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_team_widget_three_title_one',
			[
				'label' => esc_html__( 'Widget Title One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Download Brochures', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_team_widget_three_desc_one',
			[
				'label' => esc_html__( 'Widget Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_team_widget_three_button_text_one',
			[
				'label' => esc_html__( 'Widget Button Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Download Brochures', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_team_widget_three_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'mistri' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);

        $this->add_control(
			'mistri_service_widget_three_head_show',
			[
				'label' => esc_html__( 'Show Widget Three', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_single_section_background_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_service_single_section_bg_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .service-single',
			]
		);

       
        $this->end_controls_section();

       

        $this->start_controls_section(
			'mistri_service_widget_one_head_style',
			[
				'label' => esc_html__( 'Service Widget One Style', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_service_widget_one_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-one h3' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_widget_title_one_typography',
				'selector' => '{{WRAPPER}} .service-single .right-item .item-one h3',
			]
		);

        $this->add_control(
			'mistri_service_widget_one_btn_text_color',
			[
				'label' => esc_html__( 'Button Text Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-one a' => 'color: {{VALUE}}',
				],
                'separator'     => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_service_widget_one_btn_bg_color',
				'types' => [ 'classic', 'gradient' ],
                'exclude'   => ['image'],
				'selector' => '{{WRAPPER}} .service-single .right-item .item-one a',
			]
		);

        $this->add_control(
			'mistri_service_widget_one_btn_icon_color',
			[
				'label' => esc_html__( 'Button Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-one a i' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'mistri_service_widget_one_btn_icon_bg_color',
			[
				'label' => esc_html__( 'Button Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-one a i' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_widget_one_btn_text_typography',
				'selector' => '{{WRAPPER}} .service-single .right-item .item-one a, .service-single .right-item .item-one a i',
			]
		);

        $this->add_control(
			'mistri_service_widget_one_btn_text_padding',
			[
				'label' => esc_html__( 'Button Padding', 'mistri' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-one a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
			'mistri_service_widget_one_btn_text_margin',
			[
				'label' => esc_html__( 'Button Margin', 'mistri' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-one a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
			'mistri_service_widget_one_btn_text_border_radiur',
			[
				'label' => esc_html__( 'Button Border Radius', 'mistri' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-one a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
			'mistri_service_widget_one_bg_head',
			[
				'label' => esc_html__( 'Widget Background', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_service_widget_one_bg_color',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .service-single .right-item .item-one',
                'exclude'   => ['image'],
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'mistri_service_widget_two_head_style',
			[
				'label' => esc_html__( 'Service Widget Two Style', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_service_widget_two_title_one_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-two i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'mistri_service_widget_two_title_icon_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-two i' => 'border-color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_widget_two_title_icon_typography',
				'selector' => '{{WRAPPER}} .service-single .right-item .item-two i',
			]
		);

		$this->add_control(
			'mistri_service_widget_two_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator'     => 'before',
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-two h3' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_widget_two_title_typography',
				'selector' => '{{WRAPPER}} .service-single .right-item .item-two h3',
			]
		);

		$this->add_control(
			'mistri_service_widget_two_border_line_color',
			[
				'label' => esc_html__( 'Line Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator'     => 'before',
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-two .line .sm_line, .service-single .right-item .item-two .line .big_line' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'mistri_service_widget_two_phone_color',
			[
				'label' => esc_html__( 'Number Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'separator'     => 'before',
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-two a' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_widget_two_number_typography',
				'selector' => '{{WRAPPER}} .service-single .right-item .item-two a',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_service_widget_two',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .service-single .right-item .item-two',
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'mistri_service_widget_three_head_style',
			[
				'label' => esc_html__( 'Service Widget Three Style', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_service_widget_three_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-three h3' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_widget_three_title_typography',
				'selector' => '{{WRAPPER}} .service-single .right-item .item-three h3',
			]
		);

		$this->add_control(
			'mistri_service_widget_three_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-three p' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_widget_three_desc_typography',
				'selector' => '{{WRAPPER}} .service-single .right-item .item-three p',
			]
		);

		$this->add_control(
			'mistri_service_widget_three_btn_text_color',
			[
				'label' => esc_html__( 'Button Text Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-three a' => 'color: {{VALUE}}',
				],
                'separator'     => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_service_widget_three_btn_bg_color',
				'types' => [ 'classic', 'gradient' ],
                'exclude'   => ['image'],
				'selector' => '{{WRAPPER}} .service-single .right-item .item-three a',
			]
		);

        $this->add_control(
			'mistri_service_widget_three_btn_icon_color',
			[
				'label' => esc_html__( 'Button Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-three a i' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'mistri_service_widget_three_btn_icon_bg_color',
			[
				'label' => esc_html__( 'Button Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-three a i' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_widget_three_btn_text_typography',
				'selector' => '{{WRAPPER}} .service-single .right-item .item-three a, .service-single .right-item .item-three a i',
			]
		);

        $this->add_control(
			'mistri_service_widget_three_btn_text_padding',
			[
				'label' => esc_html__( 'Button Padding', 'mistri' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-three a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
			'mistri_service_widget_three_btn_text_margin',
			[
				'label' => esc_html__( 'Button Margin', 'mistri' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-three a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
			'mistri_service_widget_three_btn_text_border_radiur',
			[
				'label' => esc_html__( 'Button Border Radius', 'mistri' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .service-single .right-item .item-three a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$mistri_service_single_best_service_image = $settings['mistri_service_single_best_service_image']['url'];
		$mistri_service_single_best_service_image_show = $settings['mistri_service_single_best_service_image_show'];
		$mistri_service_single_best_service_content = $settings['mistri_service_single_best_service_content'];
        
		$mistri_service_single_standard_one_image = $settings['mistri_service_single_standard_one_image']['url'];
		$mistri_service_single_standard_one_image_show = $settings['mistri_service_single_standard_one_image_show'];
		$mistri_service_single_standard_two_image = $settings['mistri_service_single_standard_two_image']['url'];
		$mistri_service_single_standard_two_image_show = $settings['mistri_service_single_standard_two_image_show'];
		$mistri_service_single_standard_two_content = $settings['mistri_service_single_standard_two_content'];

		$mistri_service_single_layout_section_show = $settings['mistri_service_single_layout_section_show'];
        
		$mistri_team_widget_one_title_one = $settings['mistri_team_widget_one_title_one'];
		$mistri_team_widget_one_title_two = $settings['mistri_team_widget_one_title_two'];
		$mistri_team_widget_one_btn_text = $settings['mistri_team_widget_one_btn_text'];
		$mistri_team_widget_one_btn_url = $settings['mistri_team_widget_one_btn_url']['url'];
		$mistri_team_widget_one_bg_image = $settings['mistri_team_widget_one_bg_image']['url'];
		$mistri_service_widget_one_head_show = $settings['mistri_service_widget_one_head_show'];
        
		$mistri_team_widget_two_title_one = $settings['mistri_team_widget_two_title_one'];
		$mistri_team_widget_two_title_two = $settings['mistri_team_widget_two_title_two'];
		$mistri_team_widget_two_phone = $settings['mistri_team_widget_two_phone'];
		$mistri_team_widget_two_bg_image = $settings['mistri_team_widget_two_bg_image']['url'];
		$mistri_service_widget_two_head_show = $settings['mistri_service_widget_two_head_show'];

		$mistri_team_widget_three_title_one = $settings['mistri_team_widget_three_title_one'];
		$mistri_team_widget_three_desc_one = $settings['mistri_team_widget_three_desc_one'];
		$mistri_team_widget_three_button_text_one = $settings['mistri_team_widget_three_button_text_one'];
		$mistri_team_widget_three_btn_url = $settings['mistri_team_widget_three_btn_url']['url'];
		$mistri_service_widget_three_head_show = $settings['mistri_service_widget_three_head_show'];
        
        $this->add_inline_editing_attributes('mistri_service_single_best_service_content','basic');
        $this->add_inline_editing_attributes('mistri_service_single_standard_two_content','basic'); 

        $this->add_inline_editing_attributes('mistri_team_widget_one_title_one','basic'); 
        $this->add_inline_editing_attributes('mistri_team_widget_one_title_two','basic'); 
        $this->add_inline_editing_attributes('mistri_team_widget_one_btn_text','basic'); 

        $this->add_inline_editing_attributes('mistri_team_widget_two_title_one','basic'); 
        $this->add_inline_editing_attributes('mistri_team_widget_two_title_two','basic'); 
        $this->add_inline_editing_attributes('mistri_team_widget_two_phone','basic'); 

        $this->add_inline_editing_attributes('mistri_team_widget_three_title_one','basic'); 
        $this->add_inline_editing_attributes('mistri_team_widget_three_desc_one','basic'); 
        $this->add_inline_editing_attributes('mistri_team_widget_three_button_text_one','basic'); 
        
        $this->add_render_attribute(
            'mistri_team_widget_one_title_two', 
            [
                'class' => 'text-capitalize mt-2 mb-30',
            ]
        );
        $this->add_render_attribute(
            'mistri_team_widget_two_title_one', 
            [
                'class' => 'text-capitalize',
            ]
        );
        $this->add_render_attribute(
            'mistri_team_widget_two_title_two', 
            [
                'class' => 'text-capitalize mt-2 mb-30',
            ]
        );
        ?>
        <section class="service-single section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="<?php echo $mistri_service_single_layout_section_show ? 'col-lg-8' :   'col-lg-12'; ?>">
                        <div class="left-item">
                            <?php if("yes" === $mistri_service_single_best_service_image_show): ?>
                                <?php if($mistri_service_single_best_service_image): ?>
                                    <div class="image">
                                        <img src="<?php echo esc_url($mistri_service_single_best_service_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <div <?php echo $this->get_render_attribute_string('mistri_service_single_best_service_content'); ?>> <?php echo wp_kses_post($mistri_service_single_best_service_content); ?></div>
                            <?php if($mistri_service_single_standard_one_image || $mistri_service_single_standard_two_image): ?>
                                <div class="row g-4">
                                    <?php if("yes" === $mistri_service_single_standard_one_image_show): ?>
                                        <div class="col-md-6">
                                            <?php if($mistri_service_single_standard_one_image): ?>
                                                <div class="image">
                                                    <img src="<?php echo esc_url($mistri_service_single_standard_one_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if("yes" === $mistri_service_single_standard_two_image_show): ?>
                                        <div class="col-md-6">
                                            <?php if($mistri_service_single_standard_two_image): ?>
                                                <div class="image">
                                                    <img src="<?php echo esc_url($mistri_service_single_standard_two_image); ?>"alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div <?php echo $this->get_render_attribute_string('mistri_service_single_standard_two_content'); ?>> <?php echo wp_kses_post($mistri_service_single_standard_two_content); ?></div>
                        </div>
                    </div>
                    <?php if("yes" === $mistri_service_single_layout_section_show): ?>
                    <div class="col-lg-4">
                        <div class="right-item">
                            <?php if("yes" === $mistri_service_widget_one_head_show): ?>
                                <div class="item-one mb-30 pb-30">
                                    <?php if($mistri_team_widget_one_bg_image): ?>
                                        <div class="image">
                                            <img src="<?php echo esc_url($mistri_team_widget_one_bg_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <h3 <?php echo $this->get_render_attribute_string('mistri_team_widget_one_title_one'); ?>><?php echo esc_html__($mistri_team_widget_one_title_one, 'mistri'); ?></h3>
                                    <h3  <?php echo $this->get_render_attribute_string('mistri_team_widget_one_title_two'); ?>><?php echo esc_html__($mistri_team_widget_one_title_two, 'mistri'); ?></h3>
                                    <a href="<?php echo esc_url($mistri_team_widget_one_btn_url); ?>" <?php echo $this->get_render_attribute_string('mistri_team_widget_one_btn_text'); ?>><?php echo esc_html__($mistri_team_widget_one_btn_text, 'mistri'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            <?php endif; ?>
                            <?php if("yes" === $mistri_service_widget_two_head_show): ?>
                                <div class="item-two bg-image mb-30" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(<?php echo esc_url($mistri_team_widget_two_bg_image ? $mistri_team_widget_two_bg_image : ' '); ?>);" >
                                    <i class="fa-solid fa-phone-volume ring-animation"></i>
                                    <h3 <?php echo $this->get_render_attribute_string('mistri_team_widget_two_title_one'); ?>><?php echo esc_html__($mistri_team_widget_two_title_one, 'mistri'); ?></h3>
                                    <h3 <?php echo $this->get_render_attribute_string('mistri_team_widget_two_title_two'); ?>><?php echo esc_html__($mistri_team_widget_two_title_two, 'mistri'); ?></h3>
                                    <div class="line"><span class="sm_line"></span> <span class="big_line"></span></div>
                                    <a href="tel:<?php echo esc_attr__($mistri_team_widget_two_phone, 'mistri'); ?>" <?php echo $this->get_render_attribute_string('mistri_team_widget_two_phone'); ?>><?php echo esc_html__($mistri_team_widget_two_phone, 'mistri'); ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if("yes" === $mistri_service_widget_three_head_show): ?>
                                <div class="item-three sub-bg">
                                    <div class="content">
                                        <h3 <?php echo $this->get_render_attribute_string('mistri_team_widget_three_title_one'); ?>><?php echo esc_html__($mistri_team_widget_three_title_one, 'mistri'); ?></h3>
                                        <p <?php echo $this->get_render_attribute_string('mistri_team_widget_three_desc_one'); ?>><?php echo esc_html__($mistri_team_widget_three_desc_one, 'mistri'); ?></p>
                                    </div>
                                    <a href="<?php echo esc_url($mistri_team_widget_three_btn_url); ?>" <?php echo $this->get_render_attribute_string('mistri_team_widget_three_button_text_one'); ?>><i class="fa-solid fa-arrow-down"></i><?php echo esc_html__($mistri_team_widget_three_button_text_one, 'mistri'); ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php 
	}

    protected function content_template() {
        ?>
        <#
            view.addInlineEditingAttributes('mistri_service_single_best_service_content','basic');
            view.addInlineEditingAttributes('mistri_service_single_standard_two_content', 'basic');


            view.addInlineEditingAttributes('mistri_team_widget_one_title_one', 'basic');
            view.addInlineEditingAttributes('mistri_team_widget_one_title_two', 'basic');
            view.addInlineEditingAttributes('mistri_team_widget_one_btn_text', 'basic');

            view.addInlineEditingAttributes('mistri_team_widget_two_title_one', 'basic');
            view.addInlineEditingAttributes('mistri_team_widget_two_title_two', 'basic');
            view.addInlineEditingAttributes('mistri_team_widget_two_phone', 'basic');


            view.addInlineEditingAttributes('mistri_team_widget_three_title_one', 'basic');
            view.addInlineEditingAttributes('mistri_team_widget_three_desc_one', 'basic');
            view.addInlineEditingAttributes('mistri_team_widget_three_button_text_one', 'basic');

            view.addRenderAttribute(
                'mistri_team_widget_one_title_two',
                {
                    'class': 'text-capitalize mt-2 mb-30',
                }
            );
            view.addRenderAttribute(
                'mistri_team_widget_two_title_one',
                {
                    'class': 'text-capitalize',
                }
            );
            view.addRenderAttribute(
                'mistri_team_widget_two_title_two',
                {
                    'class': 'text-capitalize mt-2 mb-30',
                }
            );

            if("yes" === settings.mistri_service_single_layout_section_show){
                var sidebarLayout = "col-lg-8" ;
            }else{
                var sidebarLayout = "col-lg-12" ;
            }
        #>
        <section class="service-single section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="{{{sidebarLayout}}}">
                        <div class="left-item">
                            <# if("yes" === settings.mistri_service_single_best_service_image_show){ #>
                                <# if(settings.mistri_service_single_best_service_image.url){ #>
                                    <div class="image">
                                        <img src="{{{settings.mistri_service_single_best_service_image.url}}}" alt="image">
                                    </div>
                                <# } #>
                            <# } #>
                            <div {{{view.getRenderAttributeString('mistri_service_single_best_service_content')}}}>{{{settings.mistri_service_single_best_service_content}}}</div>
                            <# if( settings.mistri_service_single_standard_one_image.url ||  settings.mistri_service_single_standard_two_image.url){ #>
                                <div class="row g-4">
                                    <# if("yes" === settings.mistri_service_single_standard_one_image_show){ #>
                                    <div class="col-md-6">
                                        <# if(settings.mistri_service_single_standard_one_image.url){ #>
                                            <div class="image">
                                                <img src="{{{settings.mistri_service_single_standard_one_image.url}}}" alt="image">
                                            </div>
                                        <# } #>
                                    </div>
                                    <# } #>
                                    <# if("yes" === settings.mistri_service_single_standard_two_image_show){ #>
                                    <div class="col-md-6">
                                        <# if(settings.mistri_service_single_standard_two_image.url){ #>
                                            <div class="image">
                                                <img src="{{{settings.mistri_service_single_standard_two_image.url}}}" alt="image">
                                            </div>
                                        <# } #>
                                    </div>
                                    <# } #>
                                </div>
                            <# } #>
                            <div {{{view.getRenderAttributeString('mistri_service_single_standard_two_content')}}}>{{{settings.mistri_service_single_standard_two_content}}}</div>
                        </div>
                    </div>
                    <# if("yes" === settings.mistri_service_single_layout_section_show){ #>
                        <div class="col-lg-4">
                            <div class="right-item">
                                <# if("yes" === settings.mistri_service_widget_one_head_show){ #>
                                    <div class="item-one mb-30 pb-30">
                                        <# if(settings.mistri_team_widget_one_bg_image.url){ #>
                                            <div class="image">
                                                <img src="{{{settings.mistri_team_widget_one_bg_image.url}}}" alt="image">
                                            </div>
                                        <# } #>
                                        <h3  {{{ view.getRenderAttributeString( 'mistri_team_widget_one_title_one' ) }}}>{{{settings.mistri_team_widget_one_title_one}}}</h3>
                                        <h3  {{{ view.getRenderAttributeString( 'mistri_team_widget_one_title_two' ) }}}>{{{settings.mistri_team_widget_one_title_two}}}</h3>
                                        <a href="{{{settings.mistri_team_widget_one_btn_url}}}"  {{{ view.getRenderAttributeString( 'mistri_team_widget_one_btn_text' ) }}}>{{{settings.mistri_team_widget_one_btn_text}}} <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                <# } #>
                                <# if("yes" === settings.mistri_service_widget_two_head_show){ #>
                                    <div class="item-two bg-image mb-30" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url({{{settings.mistri_team_widget_two_bg_image.url}}});">
                                        <i class="fa-solid fa-phone-volume ring-animation"></i>
                                        <h3 {{{ view.getRenderAttributeString( 'mistri_team_widget_two_title_one' ) }}}>{{{settings.mistri_team_widget_two_title_one}}}</h3>
                                        <h3 {{{ view.getRenderAttributeString( 'mistri_team_widget_two_title_two' ) }}}>{{{settings.mistri_team_widget_two_title_two}}}</h3>
                                        <div class="line"><span class="sm_line"></span> <span class="big_line"></span></div>
                                        <a href="tel:{{{settings.mistri_team_widget_two_phone}}}" {{{ view.getRenderAttributeString( 'mistri_team_widget_two_phone' ) }}}>{{{settings.mistri_team_widget_two_phone}}}</a>
                                    </div>
                                <# } #>
                                <# if("yes" === settings.mistri_service_widget_three_head_show){ #>
                                    <div class="item-three sub-bg">
                                        <div class="content">
                                            <h3  {{{ view.getRenderAttributeString( 'mistri_team_widget_three_title_one' ) }}}>{{{settings.mistri_team_widget_three_title_one}}}</h3>
                                            <p  {{{ view.getRenderAttributeString( 'mistri_team_widget_three_desc_one' ) }}}>{{{settings.mistri_team_widget_three_desc_one}}}</p>
                                        </div>
                                        <a href="{{{settings.mistri_team_widget_three_btn_url.url}}}"  {{{ view.getRenderAttributeString( 'mistri_team_widget_three_button_text_one' ) }}}><i class="fa-solid fa-arrow-down"></i> {{{settings.mistri_team_widget_three_button_text_one}}}</a>
                                    </div>
                                <# } #>
                            </div>
                        </div>
                    <#  } #>
                </div>
            </div>
        </section>
        <?php 
    }
}