<?php
class Mistri_About_Us_Three extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_home_about_us_three';
	}

	public function get_title() {
		return esc_html__( 'Mistri About Us Three', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'about', 'us', 'section', 'three'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_about_us_three_section_head',
			[
				'label' => esc_html__( 'About Us Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_about_us_three_sub_tilte',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'ABOUT TO MISTR', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_about_us_three_tilte',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'We take you to the next level industry solutions', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_about_us_three_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing.', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_about_us_three_section_head_show',
			[
				'label' => esc_html__( 'Show Heading', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'about_service_devider_one',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


        $about_service_one = new \Elementor\Repeater();

        $about_service_one->add_control(
			'mistri_about_us_service_one_icon',
			[
				'label' => esc_html__( 'Get Service Icon', 'mistri' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-cog',
					'library' => 'fa-solid',
				]
			]
		);

        $about_service_one->add_control(
			'mistri_about_us_service_one_title',
			[
				'label' => esc_html__( 'Service title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Best Quality Support', 'mistri' ),
			]
		);

        $this->add_control(
			'about_service_list_one',
			[
				'label' => esc_html__( 'Service List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $about_service_one->get_controls(),
				'default' => [
					[
						'mistri_about_us_service_one_title' => esc_html__( 'Best Quality Support ', 'mistri' ),
                    ],
					[
						'mistri_about_us_service_one_title' => esc_html__( '100% Quality Design  ', 'mistri' ),
                    ],
					[
						'mistri_about_us_service_one_title' => esc_html__( 'Professional Expertise ', 'mistri' ),
                    ],
					[
						'mistri_about_us_service_one_title' => esc_html__( '24/7 On Time Support ', 'mistri' ),
                    ],
				],
				'title_field' => '{{{ mistri_about_us_service_one_title }}}',
			]
		);

        $this->add_control(
			'about_service_list_one_show',
			[
				'label' => esc_html__( 'Show Service Item', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);


        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_about_us_services_contact_head',
			[
				'label' => esc_html__( 'Contact Us', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'mistri_about_us_services_contact_btn_heading',
			[
				'label' => esc_html__( 'Contact Button', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

        $this->add_control(
			'mistri_about_us_contact_button_text',
			[
				'label' => esc_html__( 'Button Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Contact Us', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_about_us_contact_button_url',
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
			'mistri_about_us_services_contact_heading',
			[
				'label' => esc_html__( 'Contact Info', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_about_us_services_contact_icons',
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
			'mistri_about_us_contact_text',
			[
				'label' => esc_html__( 'Contact Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'call any time', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_about_us_contact_address',
			[
				'label' => esc_html__( 'Contact Address', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '+91 2659 302 003', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_about_us_services_contact_head_show',
			[
				'label' => esc_html__( 'Show Contact us', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();



        $this->start_controls_section(
			'mistri_about_us_three_media_head',
			[
				'label' => esc_html__( 'About Us Media', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_about_us_three_icons',
			[
				'label' => esc_html__( 'Get Icon', 'mistri' ),
                'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-play',
					'library' => 'fa-solid',
				],
			]
		);

        $this->add_control(
			'mistri_about_us_three_video_link',
			[
				'label' => esc_html__( 'YouTube Video Link', 'mistri' ),
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
			'mistri_about_us_three_bg_image',
			[
				'label' => esc_html__( 'Choose Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_about_us_three_media_head_show',
			[
				'label' => esc_html__( 'Show Media', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_about_us_counter_head',
			[
				'label' => esc_html__( 'About Counters', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_about_us_stroke_text',
			[
				'label' => esc_html__( 'Stroke Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'since 1980', 'mistri' ),
				'label_block'	=> true,
			]
		);

        $this->add_control(
			'mistri_about_us_stroke_text_show',
			[
				'label' => esc_html__( 'Show Stroke Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'mistri_about_us_counter_one_heading',
			[
				'label' => esc_html__( 'Counter', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

		$this->add_control(
			'mistri_about_us_counter_one_number',
			[
				'label' => esc_html__( 'Counter Number', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '25', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_about_us_counter_one_symbol',
			[
				'label' => esc_html__( 'Counter Symbol', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_about_us_counter_one_title',
			[
				'label' => esc_html__( 'Counter Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Years Experience', 'mistri' ),
				'label_block'	=> true,
			]
		);

        $this->add_control(
			'mistri_about_us_counter_head_show',
			[
				'label' => esc_html__( 'Show Counter', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_about_us_three_counter_bg_image',
			[
				'label' => esc_html__( 'Choose Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_about_us_three_counter_bg_image_show',
			[
				'label' => esc_html__( 'Show Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_about_us_shape_image_head',
			[
				'label' => esc_html__( 'Shape Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_about_us_three_shape_image_one',
			[
				'label' => esc_html__( 'Choose Shape Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_about_us_three_shape_image_one_show',
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
			'mistri_about_us_three_shape_image_two',
			[
				'label' => esc_html__( 'Choose Shape Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_about_us_three_shape_image_two_show',
			[
				'label' => esc_html__( 'Show Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_about_us_three_section_bg_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_about_us_three_section_bg_head',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .page-about',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_three_style_head',
			[
				'label' => esc_html__( 'About Us Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_about_us_three_sub_title_color',
			[
				'label' => esc_html__('Sub Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .page-about .section-header h5' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_three_sub_typography',
				'selector' => '{{WRAPPER}} .page-about .section-header h5',
			]
		);

        $this->add_control(
			'mistri_about_us_three_title_color',
			[
				'label' => esc_html__('Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .page-about .section-header h2' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_three_title_typography',
				'selector' => '{{WRAPPER}} .page-about .section-header h2',
			]
		);

        $this->add_control(
			'mistri_about_us_three_desc_color',
			[
				'label' => esc_html__('Description Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}}  .page-about .section-header p' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_three_desc_typography',
				'selector' => '{{WRAPPER}} .page-about .section-header p',
			]
		);

        $this->add_control(
			'mistri_about_us_three_service_title_color',
			[
				'label' => esc_html__('Service Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}}  .page-about .right-item ul li' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_three_service_title_typography',
				'selector' => '{{WRAPPER}} .page-about .right-item ul li',
			]
		);
        $this->add_control(
			'mistri_about_us_three_service_icon_color',
			[
				'label' => esc_html__('Service Icon Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}}  .page-about ul li i.primary-color' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_three_service_icon_typography',
				'selector' => '{{WRAPPER}} .page-about ul li i',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_about_us_three_style_contact_us_head',
			[
				'label' => esc_html__( 'Contact Us', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

         $this->add_control(
			'mistri_about_us_three_contact_us_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .page-about .info i'  => 'color: {{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'mistri_about_us_three_contact_us_icon_border_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .page-about .info > i'  => 'border-color:{{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'mistri_about_us_three_contact_us_text_color',
			[
				'label' => esc_html__( 'Text Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .page-about .info .about_info_con span'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_about_us_three_contact_us_address_color',
			[
				'label' => esc_html__( 'Address Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .page-about .info .about_info_con a'  => 'color: {{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'mistri_about_us_three_contact_us_btn_bg',
			[
				'label' => esc_html__( 'Button ', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_about_us_three_contact_us_tabs'
		);
            /* normal Backgournd*/ 
            $this->start_controls_tab(
                'mistri_about_us_three_contact_us_btn_bg_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_about_us_three_contact_us_btn_color',
                [
                    'label' => esc_html__( 'Button Text Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{{WRAPPER}}} .page-about .btn-one span, .page-about .btn-one i'  => 'color: {{VALUE}}'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'about_us_btn_bg_normal_color',
                    'types' => [ 'classic'],
                    'selector' => '{{WRAPPER}} .page-about .btn-one',
                ]
            );

            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_about_us_three_contact_us_btn_bg_hover',
                [
                    'label' => esc_html__( 'Hover', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_about_us_three_contact_us_btn_bg_color',
                [
                    'label' => esc_html__( 'Button Text Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{{WRAPPER}}} .page-about .btn-one:hover span, .page-about .btn-one:hover i'  => 'color: {{VALUE}}'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'about_us_threee_btn_bg_hover_color',
                    'types' => [ 'classic'],
                    'selector' => '{{WRAPPER}} .page-about .btn-one::before',
                ]
            );
            
            $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_about_us_three_style_media_head',
			[
				'label' => esc_html__( 'About Us Media', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_about_us_three_icons_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .page-about a.video-popup '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_control(
			'mistri_about_us_three_icons_bg_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .page-about a.video-popup'  => 'background-color: {{VALUE}}'
                ]
			]
		);

        $this->add_control(
			'mistri_about_us_three_icons_border_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .page-about .video-pulse::after, .page-about .video-pulse::before'  => 'border-color: {{VALUE}}'
                ],
                
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_about_us_three_style_counter_head',
			[
				'label' => esc_html__( 'About Us Counters', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_about_us_three_style_stroke_text_color',
			[
				'label' => esc_html__( 'Stroke Text Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .page-about .image .stroke-text h2' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_three_style_stroke_text_typography',
				'selector' => '{{WRAPPER}}  .page-about .image .stroke-text h2',
			]
		);

        $this->add_control(
			'mistri_about_us_three_style_counter_number_color',
			[
				'label' => esc_html__( 'Counter Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .page-about .image .info h2 span' => 'color: {{VALUE}}',
					'{{WRAPPER}}   .page-about .image .info h2 ' => 'color: {{VALUE}}',
				],
                'separator'		=> 'before'
			]
		);
        

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_three_style_counter_number_typography',
				'selector' => '{{WRAPPER}}  .page-about .image .info h2',
			]
		);

		$this->add_control(
			'mistri_about_us_three_style_counter_title_color',
			[
				'label' => esc_html__( 'Counter Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}   .page-about .image .info > span' => 'color: {{VALUE}}',
				],
				'separator'		=> 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_three_style_counter_title_typography',
				'selector' => '{{WRAPPER}}  .page-about .image .info > span',
			]
		);

		$this->add_control(
			'mistri_about_us_three_border_color',
			[
				'label' => esc_html__( 'Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .page-about .image .info' => 'border-color: {{VALUE}}'
				],
				'separator'		=> 'before'
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_about_us_three_sub_tilte = $settings['mistri_about_us_three_sub_tilte'];
        $mistri_about_us_three_tilte = $settings['mistri_about_us_three_tilte'];
        $mistri_about_us_three_desc = $settings['mistri_about_us_three_desc'];
        $mistri_about_us_three_section_head_show = $settings['mistri_about_us_three_section_head_show'];

        $about_service_list_one = $settings['about_service_list_one'];
        $about_service_list_one_show = $settings['about_service_list_one_show'];

        $mistri_about_us_services_contact_icons = $settings['mistri_about_us_services_contact_icons'];
        $mistri_about_us_contact_text = $settings['mistri_about_us_contact_text'];
        $mistri_about_us_contact_address = $settings['mistri_about_us_contact_address'];
        $mistri_about_us_contact_button_text = $settings['mistri_about_us_contact_button_text'];
        $mistri_about_us_contact_button_url = $settings['mistri_about_us_contact_button_url']['url'];
        $mistri_about_us_services_contact_head_show = $settings['mistri_about_us_services_contact_head_show'];
        
        $mistri_about_us_three_video_link = $settings['mistri_about_us_three_video_link']['url'];
        $mistri_about_us_three_bg_image = $settings['mistri_about_us_three_bg_image']['url'];
        $mistri_about_us_three_media_head_show = $settings['mistri_about_us_three_media_head_show'];

        $mistri_about_us_stroke_text = $settings['mistri_about_us_stroke_text'];
        $mistri_about_us_stroke_text_show = $settings['mistri_about_us_stroke_text_show'];
		$mistri_about_us_counter_one_number = $settings['mistri_about_us_counter_one_number'];
		$mistri_about_us_counter_one_symbol = $settings['mistri_about_us_counter_one_symbol'];
		$mistri_about_us_counter_one_title = $settings['mistri_about_us_counter_one_title'];
		$mistri_about_us_counter_head_show = $settings['mistri_about_us_counter_head_show'];
		$mistri_about_us_three_counter_bg_image = $settings['mistri_about_us_three_counter_bg_image']['url'];
		$mistri_about_us_three_counter_bg_image_show = $settings['mistri_about_us_three_counter_bg_image_show'];

        
		$mistri_about_us_three_shape_image_one = $settings['mistri_about_us_three_shape_image_one']['url'];
		$mistri_about_us_three_shape_image_one_show = $settings['mistri_about_us_three_shape_image_one_show'];
		$mistri_about_us_three_shape_image_two = $settings['mistri_about_us_three_shape_image_two']['url'];
		$mistri_about_us_three_shape_image_two_show = $settings['mistri_about_us_three_shape_image_two_show'];

        $this->add_inline_editing_attributes('mistri_about_us_three_sub_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_three_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_three_desc', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_contact_button_text', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_contact_text', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_contact_address', 'basic');

        $this->add_inline_editing_attributes('mistri_about_us_stroke_text', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_counter_one_number', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_counter_one_title', 'basic');

        $this->add_render_attribute(
            'mistri_about_us_three_sub_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay'    => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_about_us_three_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay'    => '.6s',
            ]
        );
        $this->add_render_attribute(
            'mistri_about_us_three_desc',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.9s',
                'data-wow-delay'    => '.9s',
            ]
        );
        $this->add_render_attribute(
            'mistri_about_us_contact_text',
            [
                'class'             => 'd-block text-capitalize',
            ]
        );
        $this->add_render_attribute(
            'mistri_about_us_counter_one_number',
            [
                'class'             => 'count',
            ]
        );
        ?>
        <section class="page-about about-us-three section-padding">
            <?php if("yes" ===  $mistri_about_us_three_shape_image_one_show): ?>
            <div class="shape1 d-none d-lg-block float-bob-y">
                <img src="<?php echo esc_url($mistri_about_us_three_shape_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <?php if("yes" ===  $mistri_about_us_three_shape_image_two_show): ?>
            <div class="shape2 d-none d-lg-block float-bob-y">
                <img src="<?php echo esc_url($mistri_about_us_three_shape_image_two); ?>"  alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="image">
                            <?php if("yes" ===  $mistri_about_us_three_counter_bg_image_show): ?>
                            <img src="<?php echo esc_url($mistri_about_us_three_counter_bg_image); ?>"  alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                            <?php endif; ?>
                            <?php if("yes" ===  $mistri_about_us_three_media_head_show): ?>
                            <div class="sm-image d-none d-sm-block">
                                <img src="<?php echo esc_url($mistri_about_us_three_bg_image); ?>"  alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                            </div>
                            <div class="video-btn-wrp d-none d-sm-block">
                                <div class="video video-pulse">
                                    <a class="video-popup secondary-bg" href="<?php echo esc_url($mistri_about_us_three_video_link); ?>">
                                        <?php \Elementor\Icons_Manager::render_icon( $settings['mistri_about_us_three_icons'], [ 'class' => 'about_icon','aria-hidden' => 'true' ] ); ?>
                                    </a>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if("yes" ===  $mistri_about_us_counter_head_show): ?>
                            <div class="info d-none d-sm-block">
                                <h2><span <?php echo $this->get_render_attribute_string('mistri_about_us_counter_one_number'); ?>><?php echo esc_html__($mistri_about_us_counter_one_number, 'mistri'); ?></span><?php echo esc_html__($mistri_about_us_counter_one_symbol, 'mistri'); ?></h2>
                                <span <?php echo $this->get_render_attribute_string('mistri_about_us_counter_one_title'); ?>><?php echo esc_html__($mistri_about_us_counter_one_title, 'mistri'); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if("yes" ===  $mistri_about_us_stroke_text_show): ?>
                            <div class="stroke-text d-none d-sm-block">
                                <h2 <?php echo $this->get_render_attribute_string('mistri_about_us_stroke_text'); ?>><?php echo esc_html__($mistri_about_us_stroke_text, 'mistri'); ?></h2>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-item">
                            <?php if("yes" ===  $mistri_about_us_three_section_head_show): ?>
                            <div class="section-header mb-5">
                                <h5 <?php echo $this->get_render_attribute_string('mistri_about_us_three_sub_tilte'); ?>><?php echo esc_html__($mistri_about_us_three_sub_tilte, 'mistri'); ?></h5>
                                <h2 <?php echo $this->get_render_attribute_string('mistri_about_us_three_tilte'); ?> ><?php echo esc_html__($mistri_about_us_three_tilte, 'mistri'); ?></h2>
                                <p <?php echo $this->get_render_attribute_string('mistri_about_us_three_desc'); ?> ><?php echo esc_textarea($mistri_about_us_three_desc); ?></p>
                            </div>
                            <?php endif; ?>
                            <div class="row g-4">
                                <div class="col-12 wow fadeInLeft" data-wow-duration="1.6s" data-wow-delay=".6s">
                                    <?php if("yes" ===  $about_service_list_one_show): ?>
                                    <ul>
                                        <?php 
                                            foreach($about_service_list_one as $index => $single_item){
                                                $mistri_about_us_service_one_title_setting_key = $this->get_repeater_setting_key( 'mistri_about_us_service_one_title', 'about_service_list_one', $index );
                                                $this->add_inline_editing_attributes($mistri_about_us_service_one_title_setting_key);
                                                $title = $settings['about_service_list_one'][$index]['mistri_about_us_service_one_title'];
                                        ?>
                                        <li <?php $this->print_render_attribute_string( $mistri_about_us_service_one_title_setting_key ); ?>><?php __(\Elementor\Icons_Manager::render_icon( $single_item['mistri_about_us_service_one_icon'], [ 'aria-hidden' => 'true', 'class' => 'primary-color mb-4 me-2'  ]), 'mistri'); ?> <?php echo esc_html__($title, 'mistri'); ?> </li>
                                        <?php } ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if("yes" ===  $mistri_about_us_services_contact_head_show): ?>
                            <div class="about_info d-flex align-items-center pt-65 wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">
                                <a href="<?php echo esc_url($mistri_about_us_contact_button_url); ?>" class="btn-one"><span <?php echo $this->get_render_attribute_string('mistri_about_us_contact_button_text'); ?> ><?php echo esc_html__($mistri_about_us_contact_button_text, 'mistri'); ?></span> <i class="fa-solid fa-arrow-right"></i></a>
                                <span class="bor-left d-none d-sm-block mx-4"></span>
                                <div class="info d-flex flex-wrap align-items-center">
                                    <?php \Elementor\Icons_Manager::render_icon( $mistri_about_us_services_contact_icons, [ 'class' => 'ring-animation','aria-hidden' => 'true' ] ); ?>
                                    <div class="about_info_con">
                                        <span <?php echo $this->get_render_attribute_string('mistri_about_us_contact_text'); ?>><?php echo esc_html__($mistri_about_us_contact_text, 'mistri'); ?></span>
                                        <a href="tel:<?php echo esc_url($mistri_about_us_contact_address); ?>" <?php echo $this->get_render_attribute_string('mistri_about_us_contact_address'); ?>><?php echo esc_html__($mistri_about_us_contact_address, 'mistri'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
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

            view.addInlineEditingAttributes( 'mistri_about_us_three_sub_tilte', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_three_tilte', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_three_desc', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_contact_button_text', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_contact_text', 'basic' );

            view.addInlineEditingAttributes( 'mistri_about_us_stroke_text', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_counter_one_number', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_counter_one_title', 'basic' );

            view.addRenderAttribute(
                'mistri_about_us_three_sub_tilte',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.3s',
                    'data-wow-delay': '.3s',
                }
            );
            view.addRenderAttribute(
                'mistri_about_us_three_tilte',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.6s',
                    'data-wow-delay': '.6s',
                }
            );
            view.addRenderAttribute(
                'mistri_about_us_three_desc',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.9s',
                    'data-wow-delay': '.9s',
                }
            );
            view.addRenderAttribute(
                'mistri_about_us_contact_text',
                {
                    'class': 'd-block text-capitalize'
                }
            );
            view.addRenderAttribute(
                'mistri_about_us_counter_one_number',
                {
                    'class': 'count'
                }
            );

            var video_icon = elementor.helpers.renderIcon( view, settings.mistri_about_us_three_icons, { 'aria-hidden': true }, 'i' , 'object' );
            var contact_icon = elementor.helpers.renderIcon( view, settings.mistri_about_us_services_contact_icons, { 'class' : 'ring-animation', 'aria-hidden': true }, 'i' , 'object' );
        #>
        <section class="page-about section-padding">
            <# if("yes" === settings.mistri_about_us_three_shape_image_one_show){ #>
            <div class="shape1 d-none d-lg-block float-bob-y">
                <img src="{{{settings.mistri_about_us_three_shape_image_one.url}}}" alt="image">
            </div>
            <# } #>
            <# if("yes" === settings.mistri_about_us_three_shape_image_two_show){ #>
            <div class="shape2 d-none d-lg-block float-bob-y">
                <img src="{{{settings.mistri_about_us_three_shape_image_two.url}}}" alt="image">
            </div>
            <# } #>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="image">
                            <# if("yes" === settings.mistri_about_us_three_counter_bg_image_show){ #>
                            <img src="{{{settings.mistri_about_us_three_counter_bg_image.url}}}" alt="image">
                            <# } #>
                            <# if("yes" === settings.mistri_about_us_three_media_head_show){ #>
                            <div class="sm-image d-none d-sm-block">
                                <img src="{{{settings.mistri_about_us_three_bg_image.url}}}" alt="image">
                            </div>
                            <div class="video-btn-wrp d-none d-sm-block">
                                <div class="video video-pulse">
                                    <a class="video-popup secondary-bg" href="{{{settings.mistri_about_us_three_video_link.url}}}">
                                        {{{video_icon.value}}}
                                    </a>
                                </div>
                            </div>
                            <# } #>
                            <# if("yes" === settings.mistri_about_us_counter_head_show){ #>
                            <div class="info d-none d-sm-block">
                                <h2><span  {{{ view.getRenderAttributeString( 'mistri_about_us_counter_one_number' )}}}>{{{settings.mistri_about_us_counter_one_number}}}</span>{{{settings.mistri_about_us_counter_one_symbol}}}</h2>
                                <span  {{{ view.getRenderAttributeString( 'mistri_about_us_counter_one_title' )}}} >{{{settings.mistri_about_us_counter_one_title}}}</span>
                            </div>
                            <# } #>
                            <# if("yes" === settings.mistri_about_us_stroke_text_show){ #>
                            <div class="stroke-text d-none d-sm-block">
                                <h2 {{{ view.getRenderAttributeString( 'mistri_about_us_stroke_text' )}}} >{{{settings.mistri_about_us_stroke_text}}}</h2>
                            </div>
                            <# } #>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-item">
                            <# if("yes" === settings.mistri_about_us_three_section_head_show){ #>
                            <div class="section-header mb-5">
                                <h5 {{{ view.getRenderAttributeString( 'mistri_about_us_three_sub_tilte' )}}} >{{{settings.mistri_about_us_three_sub_tilte}}}</h5>
                                <h2 {{{ view.getRenderAttributeString( 'mistri_about_us_three_tilte' )}}} >{{{settings.mistri_about_us_three_tilte}}}</h2>
                                <p {{{ view.getRenderAttributeString( 'mistri_about_us_three_desc' )}}} >{{{settings.mistri_about_us_three_desc}}} </div>
                            </div>
                            <# } #>
                            <div class="row g-4">
                                <div class="col-6 wow fadeInLeft" data-wow-duration="1.6s" data-wow-delay=".6s">
                                <# if("yes" === settings.about_service_list_one_show){ #>
                                <ul>
                                    <#
                                        _.each( settings.about_service_list_one, function( single_item, index ) {
                                            var mistri_about_us_service_one_title_setting_key = view.getRepeaterSettingKey( 'mistri_about_us_service_one_title', 'about_service_list', index );
                                            var listIcons = elementor.helpers.renderIcon( view, single_item.mistri_about_us_service_one_icon, { 'aria-hidden': true, 'class': 'primary-color mb-4 me-2' }, 'i' , 'object' );
                                            view.addInlineEditingAttributes( mistri_about_us_service_one_title_setting_key );
                                    #>
                                        <li {{{ view.getRenderAttributeString( mistri_about_us_service_one_title_setting_key )}}}>{{{listIcons.value}}}{{{single_item.mistri_about_us_service_one_title}}} </li>
                                        <# }); #>
                                    </ul>
                                    <# } #>
                                </div>
                            </div>
                            <# if("yes" === settings.mistri_about_us_services_contact_head_show){ #>
                            <div class="about_info d-flex align-items-center pt-65 wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">
                                <a href="{{{settings.mistri_about_us_contact_button_url.url}}}" class="btn-one"><span {{{ view.getRenderAttributeString( 'mistri_about_us_contact_button_text' )}}}>{{{settings.mistri_about_us_contact_button_text}}}</span> <i class="fa-solid fa-arrow-right"></i></a>
                                <span class="bor-left d-none d-sm-block mx-4"></span>
                                <div class="info d-flex flex-wrap align-items-center">
                                    {{{contact_icon.value}}}
                                    <div class="about_info_con">
                                        <span  {{{ view.getRenderAttributeString( 'mistri_about_us_contact_text' )}}}>{{{settings.mistri_about_us_contact_text}}}</span>
                                        <a href="tel:{{{ view.getRenderAttributeString( 'mistri_about_us_contact_address' )}}}" {{{ view.getRenderAttributeString( 'mistri_about_us_contact_address' )}}}>{{{ settings.mistri_about_us_contact_address}}}</a>
                                    </div>
                                </div>
                            </div>
                            <# } #>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
    }
}