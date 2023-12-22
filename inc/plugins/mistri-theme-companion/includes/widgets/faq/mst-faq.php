<?php
class Mistri_FAQ extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_faq';
	}

	public function get_title() {
		return esc_html__( 'Mistri FAQ', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-history';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'faq', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_faq_section_head',
			[
				'label' => esc_html__( 'FAQ Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_faq_sub_tilte',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'FAQ QUESTIONS ', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_faq_tilte',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Questions & Answers', 'mistri' ),
			]
		);
        $this->add_control(
			'mistri_faq_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy.', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_faq_heading_switcher',
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
			'mistri_faq_accordion_head',
			[
				'label' => esc_html__( 'FAQ Accordions', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_faq_alignment',
			[
				'label' => esc_html__( 'Accordion Alignment', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => esc_html__( 'Left Accordion', 'mistri' ),
					'right' => esc_html__( 'Right Accordion', 'mistri' ),
				],
			]
		);

        $this->add_control(
			'mistri_faq_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
			'mistri_faq_image',
			[
				'label' => esc_html__( 'Choose Accordion Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_faq_image_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'mistri_faq_accordion_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title #1' , 'mistri' ),
				'label_block' => true,
			]
		);

        $repeater->add_control(
			'mistri_faq_accordion_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'The foundation of any road is the subgrade, which provides a stable base for the road layers above. Proper compaction of the subgrade is crucial to prevent settling and ensure long-term road stability. Compaction involves using heavy machinery to compress the soil and create a solid foundation.' , 'mistri' ),
				'label_block' => true,
			]
		);

        $repeater->add_control(
			'mistri_faq_accordion_active',
			[
				'label' => esc_html__( 'Show Accordion', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->add_control(
			'mistri_faq_accordion_list',
			[
				'label' => esc_html__( 'Accordion List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mistri_faq_accordion_title' => esc_html__( 'What\'s the purpose of a road base?', 'mistri' ),
                    ],
					[
						'mistri_faq_accordion_title' => esc_html__( 'What is project scheduling in construction?', 'mistri' ),
                    ],
					[
						'mistri_faq_accordion_title' => esc_html__( 'How does technology like BIM impact construction?', 'mistri' ),
                    ],
					[
						'mistri_faq_accordion_title' => esc_html__( 'How are building permits obtained?', 'mistri' ),
                    ],
					[
						'mistri_faq_accordion_title' => esc_html__( ' the subgrade is crucial to prevent settling', 'mistri' ),
                    ],
				],
				'title_field' => '{{{ mistri_faq_accordion_title }}}',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_faq_shpae_image_head',
			[
				'label' => esc_html__( 'Shape Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_faq_shpae_image_one',
			[
				'label' => esc_html__( 'Choose Shape Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_faq_shpae_image_one_show',
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
			'mistri_faq_shpae_image_two',
			[
				'label' => esc_html__( 'Choose Shape Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator' => 'before'
			]
		);

        $this->add_control(
			'mistri_faq_shpae_image_two_show',
			[
				'label' => esc_html__( 'Show image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_faq_background_head',
			[
				'label' => esc_html__( 'FAQ Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_faq_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .faq ',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_faq_style_head',
			[
				'label' => esc_html__( 'FAQ Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_faq_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .faq .section-header h5 '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_faq_sub_title_fonts',
				'selector' => '{{WRAPPER}}  .faq .section-header h5',
			]
		);

        $this->add_control(
			'mistri_faq_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .faq .section-header h2 '  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_faq_title_fonts',
				'selector' => '{{WRAPPER}}  .faq .section-header h2',
                
			]
		);

        $this->add_control(
			'mistri_faq_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .faq p'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_faq_desc_fonts',
				'selector' => '{{WRAPPER}} .faq p',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_faq_accordion_style_head',
			[
				'label' => esc_html__( 'FAQ Style', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_faq_accordion_normal_style_head',
			[
				'label' => esc_html__( 'Normal Accordion', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_faq_accordion_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#0e0e0e',
                'selectors' => [
                    '{{{WRAPPER}}} .faq .accordion .accordion-item .accordion-header .accordion-button.collapsed span'  => 'color: {{VALUE}}'
                ],
			]
		);
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
			[
                'name' => 'mistri_faq_accordion_title_fonts',
				'selector' => '{{WRAPPER}} .faq .accordion .accordion-item .accordion-header .accordion-button.collapsed span',
                ]
            );
            
        $this->add_control(
            'mistri_faq_accordion_icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'mistri' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ee332b',
                'selectors' => [
                    '{{{WRAPPER}}}  .faq .accordion .accordion-item .accordion-header .accordion-button.collapsed::before'  => 'color: {{VALUE}}'
                ],
            ]
        );

        $this->add_control(
			'mistri_faq_accordion_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .faq .accordion .accordion-item .accordion-header .accordion-button.collapsed'  => 'background-color: {{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'mistri_faq_accordion_active_style_head',
			[
				'label' => esc_html__( 'Active Accordion', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_faq_accordion_active_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
                    '{{{WRAPPER}}}  .faq .accordion .accordion-item .accordion-header .accordion-button span'  => 'color: {{VALUE}}'
                ],
			]
		);

        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
			[
                'name' => 'mistri_faq_accordion_active_title_fonts',
                'selector' => '{{WRAPPER}} .faq .accordion .accordion-item .accordion-header .accordion-button span',
            ]
        );
            
        $this->add_control(
            'mistri_faq_accordion_active_icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'mistri' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
                    '{{{WRAPPER}}} .faq .accordion .accordion-item .accordion-header .accordion-button::before'  => 'color: {{VALUE}}'
                ],
            ]
        );
        
        $this->add_control(
			'mistri_faq_accordion_active_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .faq .accordion .accordion-item .accordion-header .accordion-button'  => 'background-color: {{VALUE}}',
                    '{{{WRAPPER}}}  .faq .accordion .accordion-item .accordion-body'  => 'border-color: {{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'mistri_faq_accordion_description_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .faq .accordion .accordion-item .accordion-body'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before'
			]
		);
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
			[
                'name' => 'mistri_faq_accordion_description_fonts',
                'selector' => '{{WRAPPER}} .faq .accordion .accordion-item .accordion-body',
            ]
        );

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_faq_sub_tilte = $settings['mistri_faq_sub_tilte'];
        $mistri_faq_tilte = $settings['mistri_faq_tilte'];
        $mistri_faq_desc = $settings['mistri_faq_desc'];
        $mistri_faq_heading_switcher = $settings['mistri_faq_heading_switcher'];
        $mistri_faq_alignment = $settings['mistri_faq_alignment'];
        $mistri_faq_image = $settings['mistri_faq_image']['url'];
        $mistri_faq_accordion_list = $settings['mistri_faq_accordion_list'];
        
        $mistri_faq_shpae_image_one = $settings['mistri_faq_shpae_image_one']['url'];
        $mistri_faq_shpae_image_one_show = $settings['mistri_faq_shpae_image_one_show'];
        $mistri_faq_shpae_image_two = $settings['mistri_faq_shpae_image_two']['url'];
        $mistri_faq_shpae_image_two_show = $settings['mistri_faq_shpae_image_two_show'];

        $this->add_inline_editing_attributes('mistri_faq_sub_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_faq_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_faq_desc', 'basic');

        $this->add_render_attribute(
            'mistri_faq_sub_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay'    => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_faq_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay'    => '.6s',
            ]
        );
        $this->add_render_attribute(
            'mistri_faq_desc',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.9s',
                'data-wow-delay'    => '.9s',
            ]
        );
        ?>
        <section class="faq section-padding">
            <?php if("yes" === $mistri_faq_shpae_image_one_show): ?>
            <div class="shape1 d-none d-lg-block float-bob-y">
                <img src="<?php echo esc_url($mistri_faq_shpae_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <?php if("yes" === $mistri_faq_shpae_image_two_show): ?>
            <div class="shape2 d-none d-lg-block float-bob-y">
                <img src="<?php echo esc_url($mistri_faq_shpae_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <?php if("yes" === $mistri_faq_heading_switcher): ?>
            <div class="section-header text-center">
                <h5  <?php echo $this->get_render_attribute_string('mistri_faq_sub_tilte'); ?>><?php echo esc_html__($mistri_faq_sub_tilte, 'mistri'); ?></h5>
                <h2  <?php echo $this->get_render_attribute_string('mistri_faq_tilte'); ?>><?php echo esc_html__($mistri_faq_tilte, 'mistri'); ?></h2>
                <p  <?php echo $this->get_render_attribute_string('mistri_faq_desc'); ?>><?php echo wp_kses_post($mistri_faq_desc); ?></p>
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="row g-4">
                    <?php if('right' == $mistri_faq_alignment): ?>
                    <div class="col-lg-6">
                        <div class="image">
                            <img src="<?php echo esc_url($mistri_faq_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample3">
                        <?php 
                            $i = 0;
                            foreach($mistri_faq_accordion_list as $index => $single_accordion){
                                $mistri_faq_accordion_title_setting_key = $this->get_repeater_setting_key( 'mistri_faq_accordion_title', 'mistri_faq_accordion_list', $index );
                                $mistri_faq_accordion_desc_setting_key = $this->get_repeater_setting_key( 'mistri_faq_accordion_desc', 'mistri_faq_accordion_list', $index );

                                $this->add_inline_editing_attributes($mistri_faq_accordion_title_setting_key);
                                $this->add_inline_editing_attributes($mistri_faq_accordion_desc_setting_key);

                                $this->add_render_attribute(
                                $mistri_faq_accordion_desc_setting_key,
                                [
                                    'class' => 'accordion-body',
                                ]
                            );

                            $title = $settings['mistri_faq_accordion_list'][$index]['mistri_faq_accordion_title'];
                            $description = $settings['mistri_faq_accordion_list'][$index]['mistri_faq_accordion_desc'];

                            if( 'yes' === $single_accordion['mistri_faq_accordion_active']){ 
                                $showHide =  "collapse show"; 
                                $expanded = 'false';
                                $collapse = ' ';
                            }else{ 
                                $showHide =  "collapse "; 
                                $expanded = 'true';
                                $collapse = 'collapsed';
                            }

                            $i++;
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo esc_attr__($i, 'mistri'); ?>">
                                    <button class="accordion-button <?php echo esc_attr__($collapse, 'mistri'); ?>" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr__($i, 'mistri'); ?>" aria-expanded="<?php echo esc_attr__($expanded, 'mistri'); ?>"
                                        aria-controls="collapse<?php echo esc_attr__($i, 'mistri'); ?>">
                                        <span <?php $this->print_render_attribute_string( $mistri_faq_accordion_title_setting_key ); ?>><?php echo esc_html__($title, 'mistri'); ?></span>
                                    </button>
                                    
                                </h2>
                                <div id="collapse<?php echo esc_attr__($i, 'mistri'); ?>" class="accordion-collapse <?php echo esc_attr__($showHide, 'mistri'); ?>"
                                    aria-labelledby="heading<?php echo esc_attr__($i, 'mistri'); ?>" data-bs-parent="#accordionExample3">
                                    <div <?php $this->print_render_attribute_string( $mistri_faq_accordion_desc_setting_key ); ?>>
                                        <?php echo wp_kses_post($description); ?>
                                    </div>
                                </div>
                            </div>
                            <?php  } ?>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample3">
                            <?php 
                                $i = 0; 
                                foreach($mistri_faq_accordion_list as $index => $single_accordion){
                                        $mistri_faq_accordion_title_setting_key = $this->get_repeater_setting_key( 'mistri_faq_accordion_title', 'mistri_faq_accordion_list', $index );
                                        $mistri_faq_accordion_desc_setting_key = $this->get_repeater_setting_key( 'mistri_faq_accordion_desc', 'mistri_faq_accordion_list', $index );

                                        $this->add_inline_editing_attributes($mistri_faq_accordion_title_setting_key);
                                        $this->add_inline_editing_attributes($mistri_faq_accordion_desc_setting_key);

                                        $this->add_render_attribute(
                                        $mistri_faq_accordion_desc_setting_key,
                                        [
                                            'class' => 'accordion-body',
                                        ]
                                    );

                                    $title = $settings['mistri_faq_accordion_list'][$index]['mistri_faq_accordion_title'];
                                    $description = $settings['mistri_faq_accordion_list'][$index]['mistri_faq_accordion_desc'];

                                    if( 'yes' === $single_accordion['mistri_faq_accordion_active']){ 
                                        $showHide =  "collapse show"; 
                                        $expanded = 'false';
                                        $collapse = ' ';
                                    }else{ 
                                        $showHide =  "collapse "; 
                                        $expanded = 'true';
                                        $collapse = 'collapsed';
                                    }

                                    $i++;
                                ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo esc_attr__($i, 'mistri'); ?>">
                                        <button class="accordion-button <?php echo esc_attr__($collapse, 'mistri'); ?>" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr__($i, 'mistri'); ?>" aria-expanded="<?php echo esc_attr__($expanded, 'mistri'); ?>"
                                            aria-controls="collapse<?php echo esc_attr__($i, 'mistri'); ?>">
                                            <span <?php $this->print_render_attribute_string( $mistri_faq_accordion_title_setting_key ); ?>><?php echo esc_html__($title, 'mistri'); ?></span>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo esc_attr__($i, 'mistri'); ?>" class="accordion-collapse <?php echo esc_attr__($showHide, 'mistri'); ?>"
                                        aria-labelledby="heading<?php echo esc_attr__($i, 'mistri'); ?>" data-bs-parent="#accordionExample3">
                                        <div <?php $this->print_render_attribute_string( $mistri_faq_accordion_desc_setting_key ); ?>>
                                            <?php echo wp_kses_post($description); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image">
                            <img src="<?php echo esc_url($mistri_faq_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
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
            view.addInlineEditingAttributes( 'mistri_faq_sub_tilte', 'basic' );
            view.addInlineEditingAttributes( 'mistri_faq_tilte', 'basic' );
            view.addInlineEditingAttributes( 'mistri_faq_desc', 'basic' );

			view.addRenderAttribute(
				'mistri_faq_sub_tilte',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.3s',
					'data-wow-delay': '.3s',
				}
			);
			view.addRenderAttribute(
				'mistri_faq_tilte',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.6s',
					'data-wow-delay': '.6s',
				}
			);
			view.addRenderAttribute(
				'mistri_faq_desc',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.9s',
					'data-wow-delay': '.9s',
				}
			);
		#>
        <section class="faq section-padding">
            <# if("yes" === settings.mistri_faq_shpae_image_one_show){ #>
            <div class="shape1 d-none d-lg-block float-bob-y">
                <img src="{{{settings.mistri_faq_shpae_image_one.url}}}" alt="image">
            </div>
            <# } #>
            <# if("yes" === settings.mistri_faq_shpae_image_two_show){ #>
            <div class="shape2 d-none d-lg-block float-bob-y">
                <img src="{{{settings.mistri_faq_shpae_image_two.url}}}" alt="image">
            </div>
            <# } #>
            <# if("yes" === settings.mistri_faq_heading_switcher){ #>
            <div class="section-header text-center">
                <h5 {{{ view.getRenderAttributeString( 'mistri_faq_sub_tilte' )}}}>{{{settings.mistri_faq_sub_tilte}}}</h5>
                <h2 {{{ view.getRenderAttributeString( 'mistri_faq_tilte' )}}}>{{{settings.mistri_faq_tilte}}}</h2>
                <p {{{ view.getRenderAttributeString( 'mistri_faq_desc' )}}}>{{{settings.mistri_faq_desc}}}</p>
            </div>
            <# } #>
            <div class="container">
                <div class="row g-4">
                    <# 
                        if('right' === settings.mistri_faq_alignment){
                    #>
                    <div class="col-lg-6">
                        <div class="image">
                            <img src="{{{settings.mistri_faq_image.url}}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample3">
                        <# 
                            var i = 0; 
                            _.each( settings.mistri_faq_accordion_list, function( single_accordion, index ) { 
                                var mistri_faq_accordion_title_setting_key = view.getRepeaterSettingKey( 'mistri_faq_accordion_title', 'mistri_faq_accordion_list', index );
                                var mistri_faq_accordion_desc_setting_key = view.getRepeaterSettingKey( 'mistri_faq_accordion_desc', 'mistri_faq_accordion_list', index );

                                view.addInlineEditingAttributes( mistri_faq_accordion_title_setting_key );
                                view.addInlineEditingAttributes( mistri_faq_accordion_desc_setting_key );

                                view.addRenderAttribute(
                                    'mistri_faq_accordion_desc_setting_key',
                                    {
                                        'class': 'accordion-body',
                                    }
                                );

                                if('yes' === single_accordion.mistri_faq_accordion_active){
                                    var showHide = "collapse show";
                                    var expanded = "true";
                                }else{
                                    var showHide = "collapse";
                                    var expanded = "false";
                                }
                                i++;
                        #>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{{i}}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{{i}}}" aria-expanded="{{{expanded}}}"
                                            aria-controls="collapse{{{i}}}">
                                           <span {{{ view.getRenderAttributeString( mistri_faq_accordion_title_setting_key ) }}}> {{{single_accordion.mistri_faq_accordion_title}}}</span>
                                        </button>
                                    </h2>
                                    <div id="collapse{{{i}}}" class="accordion-collapse {{{showHide}}}"
                                        aria-labelledby="heading{{{i}}}" data-bs-parent="#accordionExample">
                                        <div {{{ view.getRenderAttributeString( mistri_faq_accordion_desc_setting_key ) }}}>
                                            {{{single_accordion.mistri_faq_accordion_desc}}}
                                        </div>
                                    </div>
                                </div>
                            <#  }); #>
                        </div>
                    </div>
                    <#  }else{ #>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample3">
                        <# 
                        var i = 0; 
                            _.each( settings.mistri_faq_accordion_list, function( single_accordion, index ) { 
                                var mistri_faq_accordion_title_setting_key = view.getRepeaterSettingKey( 'mistri_faq_accordion_title', 'mistri_faq_accordion_list', index );
                                var mistri_faq_accordion_desc_setting_key = view.getRepeaterSettingKey( 'mistri_faq_accordion_desc', 'mistri_faq_accordion_list', index );

                                view.addInlineEditingAttributes( mistri_faq_accordion_title_setting_key );
                                view.addInlineEditingAttributes( mistri_faq_accordion_desc_setting_key );

                                view.addRenderAttribute(
                                    'mistri_faq_accordion_desc_setting_key',
                                    {
                                        'class': 'accordion-body',
                                    }
                                );

                                if('yes' === single_accordion.mistri_faq_accordion_active){
                                    var showHide = "collapse show";
                                    var expanded = "true";
                                }else{
                                    var showHide = "collapse";
                                    var expanded = "false";
                                }

                                i++;
                            #>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{{i}}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{{i}}}" aria-expanded="{{{expanded}}}"
                                            aria-controls="collapse{{{i}}}">
                                           <span {{{ view.getRenderAttributeString( mistri_faq_accordion_title_setting_key ) }}}> {{{single_accordion.mistri_faq_accordion_title}}}</span>
                                        </button>
                                    </h2>
                                    <div id="collapse{{{i}}}" class="accordion-collapse {{{showHide}}}"
                                        aria-labelledby="heading{{{i}}}" data-bs-parent="#accordionExample">
                                        <div {{{ view.getRenderAttributeString( mistri_faq_accordion_desc_setting_key ) }}}>
                                            {{{single_accordion.mistri_faq_accordion_desc}}}
                                        </div>
                                    </div>
                                </div>
                            <# }); #>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image">
                            <img src="{{{settings.mistri_faq_image.url}}}" alt="image">
                        </div>
                    </div>
                    <# } #>
                </div>
            </div>
        </section>
         <?php 
    }
}