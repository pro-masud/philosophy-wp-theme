<?php
class Mistri_Our_Portfolio extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_our_portfolio';
	}

	public function get_title() {
		return esc_html__( 'Mistri Our Portfolio', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-user-circle-o';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'home', 'portfolio', 'section', 'our'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_portfolio_head',
			[
				'label' => esc_html__( 'Portfolio Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_portfolio_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'MISTRI TOP CASE STUDY', 'mistri' ),
                'label_block' => true,
			]
		);

        $this->add_control(
			'mistri_portfolio_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Portfolio ', 'mistri' ),
                'label_block' => true,
			]
		);

        $this->add_control(
			'mistri_portfolio_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing.', 'mistri' ),
                'label_block' => true,
			]
		);

        $this->add_control(
			'mistri_portfolio_heading_show',
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
			'mistri_portfolio_accordion_head',
			[
				'label' => esc_html__( 'Portfolio Accordion', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'mistri_portfolio_accordion_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Gas and oil industry' , 'mistri' ),
				'label_block' => true,
			]
		);

        $repeater->add_control(
			'mistri_portfolio_accordion_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed.' , 'mistri' ),
				'label_block' => true,
			]
		);

        $repeater->add_control(
			'mistri_portfolio_accordion_image',
			[
				'label' => esc_html__( 'Choose Accordion Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $repeater->add_control(
			'mistri_portfolio_accordion_active',
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
			'mistri_portfolio_accordion_list',
			[
				'label' => esc_html__( 'Accordion List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mistri_portfolio_accordion_title' => esc_html__( 'Gas and oil industry', 'mistri' ),
                    ],
					[
						'mistri_portfolio_accordion_title' => esc_html__( 'Atomic energy', 'mistri' ),
                    ],
					[
						'mistri_portfolio_accordion_title' => esc_html__( 'Wood process industry', 'mistri' ),
                    ],
					[
						'mistri_portfolio_accordion_title' => esc_html__( 'Chemical research', 'mistri' ),
                    ],
					[
						'mistri_portfolio_accordion_title' => esc_html__( 'Renewable energy', 'mistri' ),
                    ],
				],
				'title_field' => '{{{ mistri_portfolio_accordion_title }}}',
			]
		);
        
        $this->end_controls_section();

        
        $this->start_controls_section(
			'mistri_portfolio_shape_image_head',
			[
				'label' => esc_html__( 'Shape Image', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'mistri_portfolio_shape_image_one',
			[
				'label' => esc_html__( 'Choose Shape Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_portfolio_shape_image_one_show',
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
			'mistri_portfolio_shape_image_two',
			[
				'label' => esc_html__( 'Choose Shape Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_portfolio_shape_image_two_show',
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
			'mistri_portfolio_bg_image_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_portfolio_bg_image',
			[
				'label' => esc_html__( 'Choose Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_portfolio_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .portfolio',
			]
		);

        $this->end_controls_section();

        
        $this->start_controls_section(
			'mistri_portfolio_style_head',
			[
				'label' => esc_html__( 'Portfolio Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_portfolio_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .portfolio .section-header h5 '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_sub_title_fonts',
				'selector' => '{{WRAPPER}}  .portfolio .section-header h5',
			]
		);

        $this->add_control(
			'mistri_portfolio_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .portfolio .section-header h2 '  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_title_fonts',
				'selector' => '{{WRAPPER}}  .portfolio .section-header h2',
                
			]
		);

        $this->add_control(
			'mistri_portfolio_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .portfolio p'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_desc_fonts',
				'selector' => '{{WRAPPER}} .portfolio p',
			]
		);


        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_portfolio_accordion_style_head',
			[
				'label' => esc_html__( 'Portfolio Accordion', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_portfolio_accordion_normal_style_head',
			[
				'label' => esc_html__( 'Normal Accordion', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_portfolio_accordion_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#0e0e0e',
                'selectors' => [
                    '{{{WRAPPER}}}  .portfolio .accordion .accordion-item .accordion-header .accordion-button.collapsed span'  => 'color: {{VALUE}}'
                ],
			]
		);

        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
			[
                'name' => 'mistri_portfolio_accordion_title_fonts',
				'selector' => '{{WRAPPER}} .portfolio .accordion .accordion-item .accordion-header .accordion-button.collapsed',
                ]
            );
            
        $this->add_control(
            'mistri_portfolio_accordion_icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'mistri' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ee332b',
                'selectors' => [
                    '{{{WRAPPER}}}  .portfolio .accordion .accordion-item .accordion-header .accordion-button.collapsed::before'  => 'color: {{VALUE}}'
                ],
            ]
        );

        $this->add_control(
			'mistri_portfolio_accordion_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .portfolio .accordion .accordion-item .accordion-header .accordion-button.collapsed'  => 'background-color: {{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'mistri_portfolio_accordion_active_style_head',
			[
				'label' => esc_html__( 'Active Accordion', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_portfolio_accordion_active_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
                    '{{{WRAPPER}}}  .portfolio .accordion .accordion-item .accordion-header .accordion-button span'  => 'color: {{VALUE}}'
                ],
			]
		);
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
			[
                'name' => 'mistri_portfolio_accordion_active_title_fonts',
                'selector' => '{{WRAPPER}} .portfolio .accordion .accordion-item .accordion-header .accordion-button span',
            ]
        );
            
        $this->add_control(
            'mistri_portfolio_accordion_active_icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'mistri' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
                    '{{{WRAPPER}}} .portfolio .accordion .accordion-item .accordion-header .accordion-button::before'  => 'color: {{VALUE}}'
                ],
            ]
        );
        
        $this->add_control(
			'mistri_portfolio_accordion_active_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .portfolio .accordion .accordion-item .accordion-header .accordion-button'  => 'background-color: {{VALUE}}',
                    '{{{WRAPPER}}}  .portfolio .accordion .accordion-item .accordion-body'  => 'border-color: {{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'mistri_portfolio_accordion_description_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .portfolio .accordion .accordion-item .accordion-body'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before'
			]
		);

        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
			[
                'name' => 'mistri_portfolio_accordion_description_fonts',
                'selector' => '{{WRAPPER}} .portfolio .accordion .accordion-item .accordion-body',
            ]
        );

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_portfolio_sub_title = $settings['mistri_portfolio_sub_title'];
        $mistri_portfolio_title = $settings['mistri_portfolio_title'];
        $mistri_portfolio_desc = $settings['mistri_portfolio_desc'];
        $mistri_portfolio_heading_show = $settings['mistri_portfolio_heading_show'];
        $mistri_portfolio_accordion_list = $settings['mistri_portfolio_accordion_list'];
        $mistri_portfolio_shape_image_one = $settings['mistri_portfolio_shape_image_one']['url'];
        $mistri_portfolio_shape_image_one_show = $settings['mistri_portfolio_shape_image_one_show'];
        $mistri_portfolio_shape_image_two = $settings['mistri_portfolio_shape_image_two']['url'];
        $mistri_portfolio_shape_image_two_show = $settings['mistri_portfolio_shape_image_two_show'];
        $mistri_portfolio_bg_image = $settings['mistri_portfolio_bg_image']['url'];

        $this->add_inline_editing_attributes('mistri_portfolio_sub_title' , 'basic');
        $this->add_inline_editing_attributes('mistri_portfolio_title' , 'basic');
        $this->add_inline_editing_attributes('mistri_portfolio_desc' , 'basic');

        $this->add_render_attribute(
            'mistri_portfolio_sub_title',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay'    => '.3s',

            ]
        );
        $this->add_render_attribute(
            'mistri_portfolio_title',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay'    => '.6s',

            ]
        );
        $this->add_render_attribute(
            'mistri_portfolio_desc',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.9s',
                'data-wow-delay'    => '.9s',

            ]
        );
        ?>
        <section class="portfolio bg-image section-padding" style="background-image: url(<?php echo esc_url($mistri_portfolio_bg_image)?>); ">
            <div class="container">
                <div class="pb-65">
                    <div class="row g-5 align-items-center">
                        <?php if("yes" === $mistri_portfolio_heading_show): ?>
                        <div class="col-lg-5">
                            <div class="section-header mb-0">
                                <h5 <?php echo $this->get_render_attribute_string('mistri_portfolio_sub_title'); ?> ><?php echo esc_html__($mistri_portfolio_sub_title, 'mistri'); ?></h5>
                                <h2 <?php echo $this->get_render_attribute_string('mistri_portfolio_title'); ?>><?php echo esc_html__($mistri_portfolio_title, 'mistri'); ?></h2>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <p <?php echo __($this->get_render_attribute_string('mistri_portfolio_desc')); ?>><?php echo wp_kses_post($mistri_portfolio_desc); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="left-item">
                            <div class="accordion" id="accordionExample">
                                <?php 
                                    $i = 0; 
                                    foreach($mistri_portfolio_accordion_list as $index => $single_accordion){
										$mistri_portfolio_accordion_title_setting_key = $this->get_repeater_setting_key( 'mistri_portfolio_accordion_title', 'mistri_portfolio_accordion_list', $index );
										$mistri_portfolio_accordion_desc_setting_key = $this->get_repeater_setting_key( 'mistri_portfolio_accordion_desc', 'mistri_portfolio_accordion_list', $index );

                                        $this->add_inline_editing_attributes($mistri_portfolio_accordion_title_setting_key);
                                        $this->add_inline_editing_attributes($mistri_portfolio_accordion_desc_setting_key);

                                        $this->add_render_attribute(
                                            $mistri_portfolio_accordion_desc_setting_key,
                                            [
                                                'class' => 'accordion-body',
                                            ]
                                        );

                                        $title = $settings['mistri_portfolio_accordion_list'][$index]['mistri_portfolio_accordion_title'];
                                        $description = $settings['mistri_portfolio_accordion_list'][$index]['mistri_portfolio_accordion_desc'];

                                        if( 'yes' === $single_accordion['mistri_portfolio_accordion_active']){ 
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
                                        <button class="accordion-button changeImage <?php echo esc_attr__($collapse, 'mistri'); ?>"
                                            data-image="<?php echo esc_url($single_accordion['mistri_portfolio_accordion_image']['url']); ?>" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr__($i, 'mistri'); ?>" aria-expanded="<?php echo esc_attr__($expanded, 'mistri'); ?>"
                                            aria-controls="collapse<?php echo esc_attr__($i, 'mistri'); ?>">
                                            <span <?php $this->print_render_attribute_string( $mistri_portfolio_accordion_title_setting_key ); ?>><?php echo esc_html__($title, 'mistri'); ?></span>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo esc_attr__($i, 'mistri'); ?>" class="accordion-collapse <?php echo esc_attr__($showHide, 'mistri'); ?>"
                                        aria-labelledby="heading<?php echo esc_attr__($i, 'mistri'); ?>" data-bs-parent="#accordionExample">
                                        <div <?php $this->print_render_attribute_string( $mistri_portfolio_accordion_desc_setting_key ); ?>>
                                            <?php echo wp_kses_post($description); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="image">
                            <img id="myImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/01.jpg" alt="<?php echo esc_attr__('image', 'mistir'); ?>">
                            <?php if("yes" === $mistri_portfolio_shape_image_two_show): ?>
                            <div class="gaps-light d-none d-sm-block float-bob-x">
                                <img src="<?php echo esc_url($mistri_portfolio_shape_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistir'); ?>">
                            </div>
                            <?php endif; ?>
                            <?php if("yes" === $mistri_portfolio_shape_image_one_show): ?>
                            <div class="gaps-light2 d-none d-sm-block float-bob-x">
                                <img src="<?php echo esc_url($mistri_portfolio_shape_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistir'); ?>">
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
            view.addInlineEditingAttributes('mistri_portfolio_sub_title', 'basic');
            view.addInlineEditingAttributes('mistri_portfolio_title', 'basic');
            view.addInlineEditingAttributes('mistri_portfolio_desc', 'basic');

            view.addRenderAttribute(
                'mistri_portfolio_sub_title',
                {
                    'class'             : 'wow fadeInUp',
                    'data-wow-duration' : '1.3s',
                    'data-wow-delay'    : '.3s',
                }
            );
            view.addRenderAttribute(
                'mistri_portfolio_title',
                {
                    'class'             : 'wow fadeInUp',
                    'data-wow-duration' : '1.6s',
                    'data-wow-delay'    : '.6s',
                }
            );
            view.addRenderAttribute(
                'mistri_portfolio_desc',
                {
                    'class'             : 'wow fadeInUp',
                    'data-wow-duration' : '1.9s',
                    'data-wow-delay'    : '.9s',
                }
            );
        #>
        <section class="portfolio bg-image section-padding" style="background-image: url({{{settings.mistri_portfolio_bg_image.url}}});">
            <div class="container">
                <div class="pb-65">
                    <div class="row g-5 align-items-center">
                        <# if("yes" === settings.mistri_portfolio_heading_show){ #>
                        <div class="col-lg-5">
                            <div class="section-header mb-0">
                                <h5 {{{ view.getRenderAttributeString( 'mistri_portfolio_sub_title' ) }}}>{{{settings.mistri_portfolio_sub_title}}}</h5>
                                <h2 {{{ view.getRenderAttributeString( 'mistri_portfolio_title' ) }}}>{{{settings.mistri_portfolio_title}}} </h2>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <p {{{ view.getRenderAttributeString( 'mistri_portfolio_desc' ) }}}>W{{{settings.mistri_portfolio_desc}}}</p>
                        </div>
                        <# } #>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="left-item">
                            <div class="accordion" id="accordionExample">
                            <#
                                var i = 0; 
                                 _.each( settings.mistri_portfolio_accordion_list, function( single_accordion, index ) { 
                                     var mistri_portfolio_accordion_title_setting_key = view.getRepeaterSettingKey( 'mistri_portfolio_accordion_title', 'mistri_portfolio_accordion_list', index );
                                     var mistri_portfolio_accordion_desc_setting_key = view.getRepeaterSettingKey( 'mistri_portfolio_accordion_desc', 'mistri_portfolio_accordion_list', index );

                                     view.addInlineEditingAttributes( mistri_portfolio_accordion_title_setting_key );
                                     view.addInlineEditingAttributes( mistri_portfolio_accordion_desc_setting_key );

                                     view.addRenderAttribute(
                                            'mistri_portfolio_accordion_desc_setting_key',
                                            {
                                                'class': 'accordion-body',
                                            }
                                        );

                                        if('yes' === single_accordion.mistri_portfolio_accordion_active){
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
                                        <button class="accordion-button changeImage"
                                            data-image="{{{single_accordion.mistri_portfolio_accordion_image.url}}}" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse{{{i}}}" aria-expanded="{{{expanded}}}"
                                            aria-controls="collapse{{{i}}}">
                                           <span {{{ view.getRenderAttributeString( mistri_portfolio_accordion_title_setting_key ) }}}> {{{single_accordion.mistri_portfolio_accordion_title}}}</span>
                                        </button>
                                    </h2>
                                    <div id="collapse{{{i}}}" class="accordion-collapse {{{showHide}}}"
                                        aria-labelledby="heading{{{i}}}" data-bs-parent="#accordionExample">
                                        <div {{{ view.getRenderAttributeString( mistri_portfolio_accordion_desc_setting_key ) }}}>
                                            {{{single_accordion.mistri_portfolio_accordion_desc}}}
                                        </div>
                                    </div>
                                </div>
                            <# }); #>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="image">
                            <img id="myImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/01.jpg" alt="image">
                            <# if("yes" === settings.mistri_portfolio_shape_image_two_show){ #>
                            <div class="gaps-light d-none d-sm-block float-bob-x">
                                <img src="{{{settings.mistri_portfolio_shape_image_two.url}}}" alt="image">
                            </div>
                            <# } #>
                            <# if("yes" === settings.mistri_portfolio_shape_image_one_show){ #>
                            <div class="gaps-light2 d-none d-sm-block float-bob-x">
                                <img src="{{{settings.mistri_portfolio_shape_image_one.url}}}" alt="image">
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