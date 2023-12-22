<?php
class Mistri_Service_Two extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_service_two';
	}

	public function get_title() {
		return esc_html__( 'Mistri Service Two', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-instagram-comments';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'home', 'service', 'section', 'two'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_service_head',
			[
				'label' => esc_html__( 'Service Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_service_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'OUR AWESOME SERVICES', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_service_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'We provide all type of services in architecture & constrcutio', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_service_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'DISCORVER MORE ', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_service_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'mistri' ),
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
			'mistri_service_heading_show',
			[
				'label' => esc_html__( 'Show Heading', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_accordion_head',
			[
				'label' => esc_html__( 'Service Accordions', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $accordions = new \Elementor\Repeater();

        $accordions->add_control(
			'mistri_service_accordion_icon',
			[
				'label' => esc_html__( 'Get Icon', 'mistri' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-building',
					'library' => 'fa-solid',
				],
			]
		);

        $accordions->add_control(
			'mistri_service_accordion_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Add Title #1', 'mistri' ),
                'label_block'   => true,
			]
		);

        $accordions->add_control(
			'mistri_service_accordion_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according', 'mistri' ),
                'label_block'   => true,
			]
		);

        $accordions->add_control(
			'mistri_service_accordion_active',
			[
				'label' => esc_html__( 'Show Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->add_control(
			'mistri_service_accordion_list',
			[
				'label' => esc_html__( 'Repeater List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $accordions->get_controls(),
				'default' => [
					[
						'mistri_service_accordion_title' => esc_html__( 'Commercial Building', 'mistri' ),
                    ],
					[
						'mistri_service_accordion_title' => esc_html__( 'Residential Building', 'mistri' ),
                    ],
					[
						'mistri_service_accordion_title' => esc_html__( 'Multipurpose Building', 'mistri' ),
                    ],
					[
						'mistri_service_accordion_title' => esc_html__( 'Hotel / Ressort building', 'mistri' ),
                    ],
				],
				'title_field' => '{{{ mistri_service_accordion_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_accordion_shpae_head',
			[
				'label' => esc_html__( 'Shape Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_service_accordion_shpae_image_one',
			[
				'label' => esc_html__( 'Choose Shape Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_service_accordion_shpae_one_show',
			[
				'label' => esc_html__( 'Show Shape Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_service_accordion_shpae_image_two',
			[
				'label' => esc_html__( 'Shape Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator' => "before",
			]
		);

        $this->add_control(
			'mistri_service_accordion_shpae_two_show',
			[
				'label' => esc_html__( 'Show Shape Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_accordion_section_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_service_accordion_section_bg',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .service-two.sub-bg',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_heading_style',
			[
				'label' => esc_html__( 'Service Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_service_heading_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-two .section-header h5' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_heading_sub_title_typography',
				'selector' => '{{WRAPPER}} .service-two .section-header h5',
			]
		);


        $this->add_control(
			'mistri_service_heading_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .service-two .section-header h2' => 'color: {{VALUE}}',
				],
                'separator' => 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_heading_title_typography',
				'selector' => '{{WRAPPER}} .service-two .section-header h2',
			]
		);

        $this->add_control(
			'mistri_service_heading_btn_heading',
			[
				'label' => esc_html__( 'Button Color', 'msirit' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_service_heading_tabs'
		);

            $this->start_controls_tab(
                'mistri_service_heading_btn_bg_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_service_heading_btn_text_color',
                [
                    'label' => esc_html__( 'Button Text Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service-two .right-item a' => 'color: {{VALUE}}',
                    ],
                    'separator' => 'before'
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_service_heading_btn_text_typography',
                    'selector' => '{{WRAPPER}} .service-two .right-item a',
                ]
            );

            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_service_heading_btn_bg_hover',
                [
                    'label' => esc_html__( 'Hover', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_service_heading_btn_hover_text_color',
                [
                    'label' => esc_html__( 'Button Text Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service-two .right-item a:hover' => 'color: {{VALUE}}',
                    ],
                    'separator' => 'before'
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_service_heading_btn_hover_text_typography',
                    'selector' => '{{WRAPPER}} .service-two .right-item a:hover',
                ]
            );
            
            $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_control(
			'mistri_service_heading_icon_head',
			[
				'label' => esc_html__( 'icon Color', 'msirit' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'mistri_service_heading_icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'mistri' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-two .right-item a i' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'mistri_service_heading_icon_bg_color',
            [
                'label' => esc_html__( 'Icon Background Color', 'mistri' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-two .right-item a i' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_accordion_style',
			[
				'label' => esc_html__( 'Service Accordion', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_service_accordion_header_style',
			[
				'label' => esc_html__( 'Accordion Style', 'msirit' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_service_accordion_tabs'
		);

            $this->start_controls_tab(
                'mistri_service_accordion_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_service_accordion_icon_color',
                [
                    'label' => esc_html__( 'Icon Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service-two .left-item .accordion-item .accordion-button.collapsed i' => 'color: {{VALUE}}',
                    ],
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_service_accordion_icon_typography',
                    'selector' => '{{WRAPPER}} .service-two .left-item .accordion-item .accordion-button.collapsed i',
                ]
            );

            $this->add_control(
                'mistri_service_accordion_title_color',
                [
                    'label' => esc_html__( 'Title Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}}  .service-two .left-item .accordion-item .accordion-button.collapsed' => 'color: {{VALUE}}',
                    ],
                    'separator' => 'before'
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_service_accordion_title_typography',
                    'selector' => '{{WRAPPER}}  .service-two .left-item .accordion-item .accordion-button.collapsed',
                ]
            );

            $this->add_control(
                'mistri_service_accordion_desc_color',
                [
                    'label' => esc_html__( 'Title Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service-two .right-item a' => 'color: {{VALUE}}',
                    ],
                    'separator' => 'before'
                ]
            );

            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_service_accordion_hover',
                [
                    'label' => esc_html__( 'Active', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_service_accordion_icon_hover_color',
                [
                    'label' => esc_html__( 'Icon Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service-two .left-item .accordion-item .accordion-header button i' => 'color: {{VALUE}}',
                    ],
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_service_accordion_icon_hover_typography',
                    'selector' => '{{WRAPPER}} .service-two .left-item .accordion-item .accordion-header button i',
                ]
            );

            $this->add_control(
                'mistri_service_accordion_title_hover_color',
                [
                    'label' => esc_html__( 'Title Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service-two .left-item .accordion-item .accordion-header button > span' => 'color: {{VALUE}}',
                    ],
                    'separator' => 'before'
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_service_accordion_title_hover_typography',
                    'selector' => '{{WRAPPER}} .service-two .left-item .accordion-item .accordion-header button > span',
                ]
            );

            $this->add_control(
                'mistri_service_accordion_desc_hover_color',
                [
                    'label' => esc_html__( 'Title Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service-two .right-item a' => 'color: {{VALUE}}',
                    ],
                    'separator' => 'before'
                ]
            );
            
            $this->end_controls_tab();

        $this->end_controls_tabs();


        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$mistri_service_sub_title = $settings['mistri_service_sub_title'];
		$mistri_service_title = $settings['mistri_service_title'];
		$mistri_service_btn_text = $settings['mistri_service_btn_text'];
		$mistri_service_btn_url = $settings['mistri_service_btn_url']['url'];
		$mistri_service_heading_show = $settings['mistri_service_heading_show'];
		$mistri_service_accordion_list = $settings['mistri_service_accordion_list'];
        
		$mistri_service_accordion_shpae_image_one = $settings['mistri_service_accordion_shpae_image_one']['url'];
		$mistri_service_accordion_shpae_one_show = $settings['mistri_service_accordion_shpae_one_show'];
		$mistri_service_accordion_shpae_image_two = $settings['mistri_service_accordion_shpae_image_two']['url'];
		$mistri_service_accordion_shpae_two_show = $settings['mistri_service_accordion_shpae_two_show'];

		$this->add_inline_editing_attributes('mistri_service_sub_title', 'basic');
		$this->add_inline_editing_attributes('mistri_service_title', 'basic');
		$this->add_inline_editing_attributes('mistri_service_btn_text', 'basic');

        $this->add_render_attribute(
            'mistri_service_sub_title',
            [   
                'class' => 'wow fadeInUp',
                ' data-wow-duration' => '1.3s',
                'data-wow-delay' => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_service_title',
            [   
                'class' => 'wow fadeInUp',
                ' data-wow-duration' => '1.6s',
                'data-wow-delay' => '.6s',
            ]
        );
        $this->add_render_attribute(
            'mistri_service_btn_text',
            [   
                'class' => 'wow fadeInUp',
                ' data-wow-duration' => '1.9s',
                'data-wow-delay' => '.9s',
            ]
        );
        ?>
        <section class="service-two section-padding sub-bg">
            <?php if("yes" === $mistri_service_accordion_shpae_two_show): ?>
            <div class="bulding d-none d-lg-block">
                <img src="<?php echo esc_url($mistri_service_accordion_shpae_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="item-wrp">
                            <div class="left-item">
                                <div class="accordion" id="accordionExample">
                                <?php 
                                    $i = 0;
                                    foreach($mistri_service_accordion_list as $index => $single_accordion){ 
                                    
                                    $mistri_service_accordion_title_setting_key = $this->get_repeater_setting_key( 'mistri_service_accordion_title', 'mistri_service_accordion_list', $index );
                                    $mistri_service_accordion_desc_setting_key = $this->get_repeater_setting_key( 'mistri_service_accordion_desc', 'mistri_service_accordion_list', $index );


                                    $this->add_inline_editing_attributes($mistri_service_accordion_title_setting_key);
                                    $this->add_inline_editing_attributes($mistri_service_accordion_desc_setting_key);

                                    $title = $settings['mistri_service_accordion_list'][$index]['mistri_service_accordion_title'];
                                    $description = $settings['mistri_service_accordion_list'][$index]['mistri_service_accordion_desc'];

                                    if( 'yes' === $single_accordion['mistri_service_accordion_active']){ 
                                        $showHide =  "collapse show"; 
                                    }else{ 
                                        $showHide =  "collapse "; 
                                    }
                                    $i++;
                                ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header py-4" id="heading<?php echo esc_attr__($i, 'mistri'); ?>">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr__($i, 'mistri'); ?>" aria-expanded="true"   aria-controls="collapse<?php echo esc_attr__($i, 'mistri'); ?>"> <?php \Elementor\Icons_Manager::render_icon( $single_accordion['mistri_service_accordion_icon'], [ 'aria-hidden' => 'true' ] ); ?> <span  <?php $this->print_render_attribute_string( $mistri_service_accordion_title_setting_key ); ?>><?php echo esc_html__($title, 'mistri'); ?></span> </button>
                                        </h2>
                                        <div id="collapse<?php echo esc_attr__($i, 'mistri'); ?>" class="accordion-collapse <?php echo esc_attr__($showHide, 'mistri'); ?> ?>"
                                            aria-labelledby="heading<?php echo esc_attr__($i, 'mistri'); ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p <?php $this->print_render_attribute_string( $mistri_service_accordion_desc_setting_key ); ?>><?php echo esc_html__($description, 'mistri'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php ?>
                            <?php if("yes" === $mistri_service_accordion_shpae_one_show): ?>
                            <div class="shape d-none d-xl-block">
                                <img src="<?php echo esc_url($mistri_service_accordion_shpae_image_one); ?>" <?php echo esc_attr__('image', 'mistri'); ?>>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php if("yes" === $mistri_service_heading_show): ?>
                        <div class="right-item">
                            <div class="section-header">
                                <h5 <?php echo $this->get_render_attribute_string('mistri_service_sub_title'); ?>><?php echo esc_html__($mistri_service_sub_title, 'mistri'); ?></h5>
                                <h2 <?php echo $this->get_render_attribute_string('mistri_service_title'); ?>><?php echo wp_kses_post($mistri_service_title); ?></h2>
                            </div>
                            <a <?php echo $this->get_render_attribute_string('mistri_service_btn_text'); ?> href="<?php echo esc_url($mistri_service_btn_url); ?>">
                                <i class="fa-solid fa-plus"></i>
                                <?php echo wp_kses_post($mistri_service_btn_text); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php 
	}

    protected function content_template() {
        ?>
        <#
             /**
             * content_template(), addInlineEditingAttributes() trust service section inline editing methond and property
             * */ 
             view.addInlineEditingAttributes( 'mistri_service_sub_title', 'basic' );
             view.addInlineEditingAttributes( 'mistri_service_title', 'basic' );
             view.addInlineEditingAttributes( 'mistri_service_btn_text', 'basic' );

             view.addRenderAttribute(
                'mistri_service_sub_title',
                {
                    'class'              : 'wow fadeInUp',
                    'data-wow-duration'  : '1.3s',
                    'data-wow-delay'     : '.3s',
                }
             );
             view.addRenderAttribute(
                'mistri_service_title',
                {
                    'class'              : 'wow fadeInUp',
                    'data-wow-duration'  : '1.6s',
                    'data-wow-delay'     : '.6s',
                }
             );
             view.addRenderAttribute(
                'mistri_service_btn_text',
                {
                    'class'              : 'wow fadeInUp',
                    'data-wow-duration'  : '1.9s',
                    'data-wow-delay'     : '.9s',
                }
             );

        #>
        <section class="service-two section-padding sub-bg">
            <# if("yes" === settings.mistri_service_accordion_shpae_two_show){ #>
            <div class="bulding d-none d-lg-block">
                <img src="{{{settings.mistri_service_accordion_shpae_image_two.url}}}" alt="">
            </div>
            <# } #>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="item-wrp">
                            <div class="left-item">
                                <div class="accordion" id="accordionExample">
                                    <#
                                        _.each( settings.mistri_service_accordion_list, function( single_accordion, index ) { 

                                            // inline edition property and method 
                                            var mistri_service_accordion_title_setting_key = view.getRepeaterSettingKey( 'mistri_service_accordion_title', 'mistri_service_accordion_list', index );
                                            var mistri_service_accordion_desc_setting_key = view.getRepeaterSettingKey( 'mistri_service_accordion_desc', 'mistri_service_accordion_list', index );

                                            view.addInlineEditingAttributes( mistri_service_accordion_title_setting_key );
                                            view.addInlineEditingAttributes( mistri_service_accordion_desc_setting_key );

                                            // get icon accordion
                                            var getIcon = elementor.helpers.renderIcon( view, single_accordion.mistri_service_accordion_icon, { 'aria-hidden': true }, 'i' , 'object' );

                                            // accordion show and hide condition
                                            if('yes' === single_accordion.mistri_service_accordion_active){
                                                var showHide = "collapse show";
                                            }else{
                                                var showHide = "collapse";
                                            }
                                   #>
                                    <div class="accordion-item" >
                                        <h2 class="accordion-header pt-4" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"  aria-controls="collapseOne"> {{{getIcon.value}}} <span {{{ view.getRenderAttributeString( 'mistri_service_accordion_title_setting_key' )}}}>{{{single_accordion.mistri_service_accordion_title}}}</span></button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse {{{showHide}}}"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p {{{ view.getRenderAttributeString( 'mistri_service_accordion_desc_setting_key' )}}}>{{{single_accordion.mistri_service_accordion_desc}}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <# }); #>
                                </div>
                            </div>
                            <# if("yes" === settings.mistri_service_accordion_shpae_one_show){ #>
                            <div class="shape d-none d-xl-block">
                                <img src="{{{settings.mistri_service_accordion_shpae_image_one.url}}}" alt="">
                            </div>
                            <# } #>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <# if("yes" === settings.mistri_service_heading_show){ #>
                        <div class="right-item">
                            <div class="section-header">
                                <h5 {{{ view.getRenderAttributeString( 'mistri_service_sub_title' )}}}>{{{settings.mistri_service_sub_title}}}</h5>
                                <h2 {{{ view.getRenderAttributeString( 'mistri_service_title' )}}}>{{{settings.mistri_service_title}}}</h2>
                            </div>
                            <a href="{{{settings.mistri_service_btn_url.url}}}" {{{ view.getRenderAttributeString( 'mistri_service_btn_text' )}}}  >
                                <i class="fa-solid fa-plus"></i> {{{settings.mistri_service_btn_text}}}
                            </a>
                        </div>
                        <# } #>
                    </div>
                </div>
            </div>
        </section>
        <?php 
    }
}