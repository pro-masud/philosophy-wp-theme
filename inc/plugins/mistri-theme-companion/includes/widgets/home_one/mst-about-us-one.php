<?php
class Mistri_About_Us_One extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_about_us_one';
	}

	public function get_title() {
		return esc_html__( 'Mistri About Us One', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'about', 'one', 'us', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_about_us_one_icons_head',
			[
				'label' => esc_html__( 'About Us Left', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_about_us_one_icons',
			[
				'label' => esc_html__( 'Get Icons', 'mistri' ),
                'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-play',
					'library' => 'fa-solid',
				],
			]
		);

        $this->add_control(
			'mistri_about_us_one_video_link',
			[
				'label' => esc_html__( 'YouTube Video Link', 'mistri' ),
                'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://www.youtube.com/watch?v=13qOE2N_AKs',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);

        $this->add_control(
			'mistri_about_us_one_since_text',
			[
				'label' => esc_html__( 'Since Text', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Since 1980',
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_about_us_one_image',
			[
				'label' => esc_html__( 'Choose Left Image', 'mistri' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'mistri_about_us_one_image_size',
				'default' => 'large',
			]
		);

        $this->add_control(
			'mistri_about_us_one_bg_heading',
			[
				'label' => esc_html__( 'Left Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[   
				'name' => 'mistri_about_us_one_left_bg',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bg-image',
			]
		);

        $this->end_controls_section();

		
		$this->start_controls_section(
			'mistri_about_us_one_section_head',
			[
				'label' => esc_html__( 'About Us heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_about_us_one_sub_tilte',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'ABOUT TO MISTR', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_home_about_us_one_tilte',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'We take you to the next level industry solutions', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_home_about_us_one_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing.', 'mistri' ),
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_one_services_head',
			[
				'label' => esc_html__( 'About Us Service', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $about_services = new \Elementor\Repeater();

        $about_services->add_control(
			'mistri_about_us_one_number_count',
			[
				'label' => esc_html__( 'Service Counter Number', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => 20,
			]
		);

        $about_services->add_control(
			'mistri_about_us_one_number_count_symble',
			[
				'label' => esc_html__( 'Service Counter Symble', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'M+', 'mistri' ),
			]
		);

        $about_services->add_control(
			'mistri_about_us_one_service_title',
			[
				'label' => esc_html__( 'Service title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Add New Service', 'mistri' ),
			]
		);

        $about_services->add_control(
			'mistri_about_us_one_animation_duration_time',
			[
				'label' => esc_html__( 'Animation Duration Time', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '1.3s', 'mistri' ),
			]
		);

        $about_services->add_control(
			'mistri_about_us_one_animation_delay_time',
			[
				'label' => esc_html__( 'Animation Delay Time', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '.3s', 'mistri' ),
			]
		);

        $this->add_control(
			'about_service_list',
			[
				'label' => esc_html__( 'Service List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $about_services->get_controls(),
				'default' => [
					[
						'mistri_about_us_one_number_count' => esc_html__( '22.8', 'mistri' ),
						'mistri_about_us_one_number_count_symble' => esc_html__( 'M+', 'mistri' ),
						'mistri_about_us_one_service_title' => esc_html__( 'Successful Training Completions ', 'mistri' ),
						'mistri_about_us_one_animation_duration_time' => esc_html__( '1.3s', 'mistri' ),
						'mistri_about_us_one_animation_delay_time' => esc_html__( '.3s', 'mistri' ),
                    ],
					[
						'mistri_about_us_one_number_count' => esc_html__( '1,379', 'mistri' ),
						'mistri_about_us_one_number_count_symble' => esc_html__( '', 'mistri' ),
						'mistri_about_us_one_service_title' => esc_html__( 'Training & Assessment Programs', 'mistri' ),
						'mistri_about_us_one_animation_duration_time' => esc_html__( '1.5s', 'mistri' ),
						'mistri_about_us_one_animation_delay_time' => esc_html__( '.5s', 'mistri' ),
                    ],
					[
						'mistri_about_us_one_number_count' => esc_html__( '1,105', 'mistri' ),
						'mistri_about_us_one_number_count_symble' => esc_html__( '', 'mistri' ),
						'mistri_about_us_one_service_title' => esc_html__( 'Accredited Organizations', 'mistri' ),
						'mistri_about_us_one_animation_duration_time' => esc_html__( '1.7s', 'mistri' ),
						'mistri_about_us_one_animation_delay_time' => esc_html__( '.7s', 'mistri' ),
                    ],
					[
						'mistri_about_us_one_number_count' => esc_html__( '6,986', 'mistri' ),
						'mistri_about_us_one_number_count_symble' => esc_html__( '', 'mistri' ),
						'mistri_about_us_one_service_title' => esc_html__( 'Points of Delivery for Training & Assessments', 'mistri' ),
						'mistri_about_us_one_animation_duration_time' => esc_html__( '1.9s', 'mistri' ),
						'mistri_about_us_one_animation_delay_time' => esc_html__( '.9s', 'mistri' ),
                    ],
				],
				'title_field' => '{{{ mistri_about_us_one_service_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_one_services_contact_head',
			[
				'label' => esc_html__( 'Contact Us', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'mistri_about_us_one_services_contact_btn_heading',
			[
				'label' => esc_html__( 'Contact Button', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

        $this->add_control(
			'mistri_about_us_one_contact_button_text',
			[
				'label' => esc_html__( 'Button Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Contact Us', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_about_us_one_contact_button_url',
			[
				'label' => esc_html__( 'Button Link', 'mistri' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        $this->add_control(
			'mistri_about_us_one_services_contact_heading',
			[
				'label' => esc_html__( 'Contact Info', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_about_us_one_services_contact_icons',
			[
				'label' => esc_html__( 'Get Icons', 'mistri' ),
                'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-phone-volume',
					'library' => 'fa-solid',
				],
			]
		);
      
        $this->add_control(
			'mistri_about_us_one_contact_text',
			[
				'label' => esc_html__( 'Contact Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'call any time', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_about_us_one_contact_address',
			[
				'label' => esc_html__( 'Contact Address', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '+91 2659 302 003', 'mistri' ),
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_one_right_shape_image_head',
			[
				'label' => esc_html__( 'Shape Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_about_us_one_left_shape_image_left',
			[
				'label' => esc_html__( 'Choose Left Shape Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_about_us_one_shape_switcher',
			[
				'label' => esc_html__('Show Image', 'mistri'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('Show', 'mistri'),
				'label_off' => esc_html__('Hide', 'mistri'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_about_us_one_shape_right_image_right',
			[
				'label' => esc_html__( 'Choose Right Shape Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_about_us_two_shape_switcher',
			[
				'label' => esc_html__('Show Image', 'mistri'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('Show', 'mistri'),
				'label_off' => esc_html__('Hide', 'mistri'),
				'return_value' => 'yes',
				'default' => 'yes',
               
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_one_style_icon_head',
			[
				'label' => esc_html__( 'Icons', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_about_us_one_icons_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about a.video-popup '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_control(
			'mistri_about_us_one_icons_bg_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about a.video-popup'  => 'background-color: {{VALUE}}'
                ]
			]
		);

        $this->add_control(
			'mistri_about_us_one_icons_border_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about .video-pulse::after, .about .video-pulse::before'  => 'border-color: {{VALUE}}'
                ],
                
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_one_style_about_head',
			[
				'label' => esc_html__( 'About Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_about_us_one_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about .section-header h5 '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_one_sub_title_fonts',
				'selector' => '{{WRAPPER}} .about .section-header h5',
			]
		);

        $this->add_control(
			'mistri_about_us_one_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about .section-header h2 '  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_one_title_fonts',
				'selector' => '{{WRAPPER}} .about .section-header h2',
                
			]
		);

        $this->add_control(
			'mistri_about_us_one_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about .section-header p'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_one_desc_fonts',
				'selector' => '{{WRAPPER}} .about .section-header p',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_one_style_about_us_service_head',
			[
				'label' => esc_html__( 'About Us Service', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_about_us_one_number_color',
			[
				'label' => esc_html__( 'Number Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .info h3, .about .about-wrp .right-item .content .info h3 > span, .about .about-wrp .right-item .content .info h3 > span.count '  => 'color: {{VALUE}}'
                ],
                // 'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_one_number_fonts',
                'selector' => '{{WRAPPER}} .info h3, .about .about-wrp .right-item .content .info h3 > span',
			]
		);

        $this->add_control(
			'mistri_about_us_one_number_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about .about-wrp .right-item .content .info p '  => 'color: {{VALUE}}'
                ],
                // 'separator' => 'before',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_one_style_contact_us_head',
			[
				'label' => esc_html__( 'Contact Us', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

         $this->add_control(
			'mistri_about_us_one_contact_us_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about .about_info .info i'  => 'color: {{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'mistri_about_us_one_contact_us_icon_border_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about .about_info .info > i'  => 'border-color:{{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'mistri_about_us_one_contact_us_text_color',
			[
				'label' => esc_html__( 'Text Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about .about_info .info .about_info_con span'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_about_us_one_contact_us_address_color',
			[
				'label' => esc_html__( 'Address Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about .about_info .info .about_info_con a span'  => 'color: {{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'mistri_about_us_one_contact_us_btn_bg',
			[
				'label' => esc_html__( 'Button ', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_about_us_one_contact_us_tabs'
		);
            /* normal Backgournd*/ 
            $this->start_controls_tab(
                'mistri_about_us_one_contact_us_btn_bg_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_about_us_one_contact_us_btn_color',
                [
                    'label' => esc_html__( 'Button Text Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{{WRAPPER}}} .about .about_info .btn-one span, .about .about_info .btn-one i'  => 'color: {{VALUE}}'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'about_us_btn_bg_normal_color',
                    'types' => [ 'classic'],
                    'selector' => '{{WRAPPER}} .about .about_info .btn-one',
                ]
            );

            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_about_us_one_contact_us_btn_bg_hover',
                [
                    'label' => esc_html__( 'Hover', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_about_us_one_contact_us_btn_bg_color',
                [
                    'label' => esc_html__( 'Button Text Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{{WRAPPER}}} .about .about_info .btn-one:hover span, .about .about_info .btn-one:hover i'  => 'color: {{VALUE}}'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'about_us_btn_bg_hover_color',
                    'types' => [ 'classic'],
                    'selector' => '{{WRAPPER}} .about .about_info .btn-one::before',
                ]
            );
            
            $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_about_us_one_video_link = $settings['mistri_about_us_one_video_link']['url'];
        $mistri_about_us_one_since_text = $settings['mistri_about_us_one_since_text'];
        $mistri_about_us_one_left_shape_image_left = $settings['mistri_about_us_one_left_shape_image_left']['url'];

        $this->add_inline_editing_attributes('mistri_about_us_one_since_text', 'basic');

        $this->add_render_attribute(
            'mistri_about_us_one_since_text',
            [   
                'class' => 'd-none d-xl-block since_text',
            ]
        );

        $mistri_about_us_one_sub_tilte = $settings['mistri_about_us_one_sub_tilte'];
        $mistri_home_about_us_one_tilte = $settings['mistri_home_about_us_one_tilte'];
        $mistri_home_about_us_one_desc = $settings['mistri_home_about_us_one_desc'];
        $about_service_list = $settings['about_service_list'];
        $mistri_about_us_one_services_contact_icons = $settings['mistri_about_us_one_services_contact_icons'];
        $mistri_about_us_one_contact_text = $settings['mistri_about_us_one_contact_text'];
        $mistri_about_us_one_contact_address = $settings['mistri_about_us_one_contact_address'];
        $mistri_about_us_one_contact_button_text = $settings['mistri_about_us_one_contact_button_text'];
        $mistri_about_us_one_contact_button_url = $settings['mistri_about_us_one_contact_button_url']['url'];
        $mistri_about_us_one_shape_right_image_right = $settings['mistri_about_us_one_shape_right_image_right']['url'];
        $mistri_about_us_one_shape_switcher = $settings['mistri_about_us_one_shape_switcher'];
        $mistri_about_us_two_shape_switcher = $settings['mistri_about_us_two_shape_switcher'];

        $this->add_inline_editing_attributes('mistri_about_us_one_sub_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_home_about_us_one_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_home_about_us_one_desc', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_one_contact_text', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_one_contact_address', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_one_contact_button_text', 'basic');
 
        $this->add_render_attribute(
            'mistri_about_us_one_sub_tilte',
            [   
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay' => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_home_about_us_one_tilte',
            [   
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay' => '.6s',
            ]
        );
        $this->add_render_attribute(
            'mistri_home_about_us_one_desc',
            [   
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.9s',
                'data-wow-delay' => '.9s',
            ]
        );
        ?>
         <section class="about section-padding">
            <?php if("yes" === $mistri_about_us_one_shape_switcher): ?>
            <div class="shape1">
                <img src="<?php echo esc_url($mistri_about_us_one_left_shape_image_left); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <?php if("yes" === $mistri_about_us_two_shape_switcher): ?>
            <div class="shape2">
                <img src="<?php echo esc_url($mistri_about_us_one_shape_right_image_right); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <div class="about-wrp">
                <div class="bg-image inline d-none d-lg-block"></div>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="left-item">
                                <div class="video-btn-wrp">
                                    <?php if($mistri_about_us_one_video_link): ?>
                                    <div class="video video-pulse">
                                        <a class="video-popup secondary-bg"
                                            href="<?php echo esc_url( $mistri_about_us_one_video_link); ?>">
                                            <?php \Elementor\Icons_Manager::render_icon( $settings['mistri_about_us_one_icons'], [ 'class' => 'about_icon','aria-hidden' => 'true' ] ); ?>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="image wow bounceInLeft">
                                    <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'mistri_about_us_one_image_size', 'mistri_about_us_one_image' ); ?>
                                </div>
                                <?php if($mistri_about_us_one_since_text): ?>
                                <h2 <?php echo $this->get_render_attribute_string('mistri_about_us_one_since_text'); ?> ><?php echo esc_html__($mistri_about_us_one_since_text, 'mistri'); ?></h2>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-item">
                                <div class="section-header">
                                    <?php if($mistri_about_us_one_sub_tilte): ?>
                                    <h5 <?php echo $this->get_render_attribute_string('mistri_about_us_one_sub_tilte'); ?>><?php echo esc_html__($mistri_about_us_one_sub_tilte, 'mistri'); ?></h5>
                                    <?php endif; ?>
                                    <?php if($mistri_home_about_us_one_tilte): ?>
                                    <h2 <?php echo $this->get_render_attribute_string('mistri_home_about_us_one_tilte'); ?> ><?php echo esc_html__($mistri_home_about_us_one_tilte, 'mistri'); ?></h2>
                                    <?php endif; ?>
                                    <?php if($mistri_home_about_us_one_desc): ?>
                                    <p <?php echo $this->get_render_attribute_string('mistri_home_about_us_one_desc'); ?> ><?php echo esc_textarea($mistri_home_about_us_one_desc); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="content pb-65 bor-bottom">
                                    <div class="row g-4">
                                        <?php 
                                            if($about_service_list){
                                                foreach($about_service_list as $index => $single_about_service){
                                                    $mistri_about_us_one_service_title_setting_key = $this->get_repeater_setting_key( 'mistri_about_us_one_service_title', 'about_service_list', $index );
                                                    $mistri_about_us_one_number_count_setting_key = $this->get_repeater_setting_key( 'mistri_about_us_one_number_count', 'about_service_list', $index );
                                                    $mistri_about_us_one_number_count_symble_setting_key = $this->get_repeater_setting_key( 'mistri_about_us_one_number_count_symble', 'about_service_list', $index );
                                                    // inline editing method
                                                    $this->add_inline_editing_attributes($mistri_about_us_one_service_title_setting_key);
                                                    $this->add_inline_editing_attributes($mistri_about_us_one_number_count_setting_key);
                                                    $this->add_inline_editing_attributes($mistri_about_us_one_number_count_symble_setting_key);

                                                    $this->add_render_attribute(
                                                        $mistri_about_us_one_number_count_setting_key,
                                                        [   
                                                            'class' => 'count',
                                                        ]
                                                    );
                                                    $title = $settings['about_service_list'][$index]['mistri_about_us_one_service_title'];
                                                    $count = $settings['about_service_list'][$index]['mistri_about_us_one_number_count'];
                                                    $symble = $settings['about_service_list'][$index]['mistri_about_us_one_number_count_symble'];
                                        ?>
                                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="<?php echo esc_attr__($single_about_service['mistri_about_us_one_animation_duration_time'], 'mistri'); ?>" data-wow-delay="<?php echo esc_attr__($single_about_service['mistri_about_us_one_animation_delay_time'], 'mistri'); ?>">
                                            <div class="info">
                                                <?php if($count || $symble): ?>
                                                <h3><span <?php $this->print_render_attribute_string( $mistri_about_us_one_number_count_setting_key ); ?>><?php echo esc_html__( $count , 'mistri'); ?></span> <span <?php $this->print_render_attribute_string( $mistri_about_us_one_number_count_symble_setting_key ); ?>> <?php echo esc_html__( $symble, 'mistri'); ?></span></h3>
                                                <?php endif; ?>
                                                <?php if($title): ?>
                                                <p <?php $this->print_render_attribute_string( $mistri_about_us_one_service_title_setting_key ); ?> ><?php echo esc_html__( $title, 'mistri'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php } } ?>
                                    </div>
                                </div>
                                <div class="about_info pt-65 wow fadeInUp" data-wow-duration="1.9s"
                                    data-wow-delay=".9s">
                                    <div class="info">
                                        <?php \Elementor\Icons_Manager::render_icon( $mistri_about_us_one_services_contact_icons, [ 'class' => 'ring-animation','aria-hidden' => 'true' ] ); ?>
                                        <div class="about_info_con">
                                            <?php if($mistri_about_us_one_contact_text): ?>
                                            <span <?php echo $this->get_render_attribute_string('mistri_about_us_one_contact_text'); ?>><?php echo esc_html__( $mistri_about_us_one_contact_text , 'mistri'); ?></span>
                                            <?php endif; ?>
                                            <?php if($mistri_about_us_one_contact_address): ?>
                                            <a href="tel:<?php echo esc_url( $mistri_about_us_one_contact_address); ?>"><span <?php echo $this->get_render_attribute_string('mistri_about_us_one_contact_address'); ?> ><?php echo esc_html__( $mistri_about_us_one_contact_address , 'mistri'); ?></span></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <span class="d-none d-sm-inline">Or</span>
                                    <?php if($mistri_about_us_one_contact_button_text): ?>
                                    <a href="<?php echo esc_url($mistri_about_us_one_contact_button_url); ?>" class="btn-one"><span <?php echo $this->get_render_attribute_string('mistri_about_us_one_contact_button_text'); ?>><?php echo esc_html__($mistri_about_us_one_contact_button_text, 'mistri'); ?></span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
	}

    protected function content_template() {
        ?>
        <#
            var mistri_about_us_one_icon = elementor.helpers.renderIcon( view, settings.mistri_about_us_one_icons, { 'class': 'about_icon','aria-hidden': true }, 'i' , 'object' );
            
            if ( settings.mistri_about_us_one_image.url ) {
                var mistri_about_us_one_image_link = {
                    id: settings.mistri_about_us_one_image.id,
                    url: settings.mistri_about_us_one_image.url,
                    size: settings.mistri_about_us_one_image_size_size,
                    dimension: settings.mistri_about_us_one_image_size_custom_dimension,
                    model: view.getEditModel()
                };

                var mistri_about_us_one_image_url = elementor.imagesManager.getImageUrl( mistri_about_us_one_image_link );

                if ( ! mistri_about_us_one_image_url ) {
                    return;
                }
            }
            view.addInlineEditingAttributes( 'mistri_about_us_one_since_text', 'basic' );
            view.addRenderAttribute(
                'mistri_about_us_one_since_text',
                {
                    'class': 'd-none d-xl-block',
                }
            );

            var mistri_about_us_one_services_contact_icon = elementor.helpers.renderIcon( view, settings.mistri_about_us_one_services_contact_icons, { 'class': 'about_icon','aria-hidden': true }, 'i' , 'object' );

            view.addInlineEditingAttributes( 'mistri_about_us_one_sub_tilte', 'basic' );
            view.addInlineEditingAttributes( 'mistri_home_about_us_one_tilte', 'basic' );
            view.addInlineEditingAttributes( 'mistri_home_about_us_one_desc', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_one_contact_text', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_one_contact_address', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_one_contact_button_text', 'basic' );

            view.addRenderAttribute(
                'mistri_about_us_one_sub_tilte',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.3s',
                    'data-wow-delay': '.3s',
                }
            );
            view.addRenderAttribute(
                'mistri_home_about_us_one_tilte',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.6s',
                    'data-wow-delay': '.6s',
                }
            );
            view.addRenderAttribute(
                'mistri_home_about_us_one_desc',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.9s',
                    'data-wow-delay': '.9s',
                }
            );
        #>
        <section class="about section-padding">
            <# if( "yes" === settings.mistri_about_us_one_shape_switcher){ #>
            <div class="shape1">
                <img src="{{{settings.mistri_about_us_one_left_shape_image_left.url}}}" alt="image">
            </div>
            <# } #>
            <# if("yes" === settings.mistri_about_us_two_shape_switcher){ #>
            <div class="shape2">
                <img src="{{{settings.mistri_about_us_one_shape_right_image_right.url}}}" alt="image">
            </div>
            <# } #>
            <div class="about-wrp">
                <div class="bg-image inline d-none d-lg-block"></div>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="left-item">
                                <div class="video-btn-wrp">
                                    <# if(settings.mistri_about_us_one_video_link.url){ #>
                                    <div class="video video-pulse">
                                        <a class="video-popup secondary-bg"
                                            href="{{{settings.mistri_about_us_one_video_link.url}}}">
                                            {{{mistri_about_us_one_icon.value}}}
                                        </a>
                                    </div>
                                    <# } #>
                                </div>
                                <div class="image wow bounceInLeft">
                                    <img src="{{mistri_about_us_one_image_url}}" alt="image">
                                </div>
                                <# if(settings.mistri_about_us_one_since_text){ #>
                                <h2 {{{ view.getRenderAttributeString( 'mistri_about_us_one_since_text' )}}}>{{{settings.mistri_about_us_one_since_text}}}</h2>
                                <# } #>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-item">
                                <div class="section-header">
                                    <# if(settings.mistri_about_us_one_sub_tilte){ #>
                                    <h5 {{{ view.getRenderAttributeString( 'mistri_about_us_one_sub_tilte' )}}} >{{{settings.mistri_about_us_one_sub_tilte}}}</h5>
                                    <# } #>
                                    <# if(settings.mistri_home_about_us_one_tilte){ #>
                                    <h2 {{{ view.getRenderAttributeString( 'mistri_home_about_us_one_tilte' )}}} >{{{settings.mistri_home_about_us_one_tilte}}}</h2>
                                    <# } #>
                                    <# if(settings.mistri_home_about_us_one_desc){ #>
                                    <p {{{ view.getRenderAttributeString( 'mistri_home_about_us_one_desc' )}}} >{{{settings.mistri_home_about_us_one_desc}}} </div>
                                    <# } #>
                                <div class="content pb-65 bor-bottom">
                                    <div class="row g-4">
                                        <#
                                        if ( settings.about_service_list.length ) { 
                                            _.each( settings.about_service_list, function( single_about_service, index ) {

                                                var mistri_about_us_one_service_title_setting_key = view.getRepeaterSettingKey( 'mistri_about_us_one_service_title', 'about_service_list', index );
                                                var mistri_about_us_one_number_count_setting_key = view.getRepeaterSettingKey( 'mistri_about_us_one_number_count', 'about_service_list', index );
                                                var mistri_about_us_one_number_count_symble_setting_key = view.getRepeaterSettingKey( 'mistri_about_us_one_number_count_symble', 'about_service_list', index );

                                                view.addInlineEditingAttributes( mistri_about_us_one_service_title_setting_key );
                                                view.addInlineEditingAttributes( mistri_about_us_one_number_count_setting_key );
                                                view.addInlineEditingAttributes( mistri_about_us_one_number_count_symble_setting_key );

                                                view.addRenderAttribute(
                                                    mistri_about_us_one_number_count_setting_key,
                                                    {
                                                        'class': 'count',
                                                    }
                                                );
                                        #>
                                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="{{{single_about_service.mistri_about_us_one_animation_duration_time}}}" data-wow-delay="{{{single_about_service.mistri_about_us_one_animation_delay_time}}}">
                                            <div class="info">
                                                <# if(single_about_service.mistri_about_us_one_number_count || single_about_service.mistri_about_us_one_number_count_symble ){ #>
                                                <h3><span {{{ view.getRenderAttributeString( mistri_about_us_one_number_count_setting_key ) }}}>{{{single_about_service.mistri_about_us_one_number_count}}}</span> <span {{{ view.getRenderAttributeString( mistri_about_us_one_number_count_symble_setting_key ) }}}> {{{single_about_service.mistri_about_us_one_number_count_symble}}}</span></h3>
                                                <# } #>
                                                <# if(single_about_service.mistri_about_us_one_service_title){ #>
                                                <p {{{ view.getRenderAttributeString( mistri_about_us_one_service_title_setting_key ) }}}>{{{single_about_service.mistri_about_us_one_service_title}}}</p>
                                                <# } #>
                                            </div>
                                        </div>
                                        <# });  }  #>
                                    </div>
                                </div>
                                <div class="about_info pt-65 wow fadeInUp" data-wow-duration="1.9s"
                                    data-wow-delay=".9s">
                                    <div class="info">
                                        {{{mistri_about_us_one_services_contact_icon.value}}}
                                        <div class="about_info_con">
                                            <# if(settings.mistri_about_us_one_contact_text){ #>
                                            <span {{{ view.getRenderAttributeString( 'mistri_about_us_one_contact_text' )}}}> {{{settings.mistri_about_us_one_contact_text}}}</span>
                                            <# } #>
                                            <# if(settings.mistri_about_us_one_contact_address){ #>
                                            <a href="tel: {{{settings.mistri_about_us_one_contact_address}}}"> <span {{{ view.getRenderAttributeString( 'mistri_about_us_one_contact_address' )}}} >{{{settings.mistri_about_us_one_contact_address}}}</span></a>
                                            <# } #>
                                        </div>
                                    </div>
                                    <span class="d-none d-sm-inline">Or</span>
                                    <# if(settings.mistri_about_us_one_contact_button_text){ #>
                                    <a href="{{{settings.mistri_about_us_one_contact_button_url.url}}}" class="btn-one"><span {{{ view.getRenderAttributeString( 'mistri_about_us_one_contact_button_text' )}}}>{{{settings.mistri_about_us_one_contact_button_text}}}</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                    <# } #>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
    }
}