<?php
class Mistri_Slider_Three extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_slider_three';
	}

	public function get_title() {
		return esc_html__( 'Mistri Slider Three', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-facebook-comments';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'slider', 'section', 'three'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_slider_three_head',
			[
				'label' => esc_html__( 'Bannar Slider', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $sliders = new \Elementor\Repeater();

        $sliders->add_control(
			'mistri_slider_three_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Add New Title' , 'mistri' ),
				'label_block' => true,
			]
		);

        $sliders->add_control(
			'mistri_slider_three_line_image',
			[
				'label' => esc_html__( 'Choose Line Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $sliders->add_control(
			'mistri_slider_three_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Formed as a result of industrial enterprises in any field of activity (metallurgy, oil production, oil refining, food industry)' , 'mistri' ),
				'label_block' => true,
			]
		);

        $sliders->add_control(
			'mistri_slider_three_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Solutions' , 'mistri' ),
				'label_block' => true,
			]
		);

        $sliders->add_control(
			'mistri_slider_three_btn_url',
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

        $sliders->add_control(
			'mistri_slider_three_bg_image',
			[
				'label' => esc_html__( 'Choose Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_slider_three_list',
			[
				'label' => esc_html__( 'Slider List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $sliders->get_controls(),
				'default' => [
					[
						'mistri_slider_three_title' => esc_html__( 'We Provide All Industri Solutions', 'mistri' )
                    ],
					[
						'mistri_slider_three_title' => esc_html__( 'We Provide All Industri Solutions', 'mistri' )
                    ],
					[
						'mistri_slider_three_title' => esc_html__( 'We Provide All Industri Solutions', 'mistri' )
                    ],
				],
				'title_field' => '{{{ mistri_slider_three_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_home_three_shape_head',
			[
				'label' => esc_html__( 'Bannar Shape Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_slider_three_shape_image_one',
			[
				'label' => esc_html__( 'Choose Shape Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_slider_three_shape_image_show',
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
			'mistri_slider_three_shape_image_two',
			[
				'label' => esc_html__( 'Choose Shape Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator'  => 'before'
			]
		);

        $this->add_control(
			'mistri_slider_three_shape_image_two_show',
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
			'mistri_slider_three_soft_start_image_one',
			[
				'label' => esc_html__( 'Choose Soft Start Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator'  => 'before'
			]
		);

        $this->add_control(
			'mistri_slider_three_soft_start_image_one_show',
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
			'mistri_slider_three_soft_start_image_two',
			[
				'label' => esc_html__( 'Choose Soft Start Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator'  => 'before'
			]
		);

        $this->add_control(
			'mistri_slider_three_soft_start_image_two_show',
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
			'mistri_home_three_contact_form_head',
			[
				'label' => esc_html__( 'Bannar Contact Form', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_home_three_contact_form_shortcode',
			[
				'label' => esc_html__( 'Enter Your Form Shortcode', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( '' , 'mistri' ),
				'label_block' => true,
			]
		);

        $this->add_control(
			'mistri_home_three_contact_form_shortcode_show',
			[
				'label' => esc_html__( 'Show Contact Form', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_slider_three_style_head',
			[
				'label' => esc_html__( 'Bannar Slider', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_slider_three_style_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .banner-three .content h1'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_slider_three_style_title_fonts',
				'selector' => '{{WRAPPER}} .banner-three .content h1',
			]
		);

		$this->add_control(
			'mistri_slider_three_style_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .banner-three .content p '  => 'color: {{VALUE}}'
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_slider_three_style_desc_fonts',
				'selector' => '{{WRAPPER}} .banner-three .content p ',
			]
		);

        $this->add_control(
			'mistri_slider_three_style_btn_style',
			[
				'label' => esc_html__( 'Slider Button', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_slider_three_contact_us_tabs'
		);
            /* normal Backgournd*/ 
            $this->start_controls_tab(
                'mistri_slider_three_contact_us_btn_bg_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_slider_three_contact_us_btn_color',
                [
                    'label' => esc_html__( 'Button Text Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{{WRAPPER}}} .banner-three .btn-one span, .banner-three .btn-one i'  => 'color: {{VALUE}}'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'mistri_slider_three_btn_bg_normal_color',
                    'types' => [ 'classic'],
                    'selector' => '{{WRAPPER}} .banner-three .btn-one',
                ]
            );
            

            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_slider_three_contact_us_btn_bg_hover',
                [
                    'label' => esc_html__( 'Hover', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_slider_three_contact_us_btn_bg_color',
                [
                    'label' => esc_html__( 'Button Text Color', 'mistri' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{{WRAPPER}}} .banner-three .btn-one:hover span, .banner-three .btn-one:hover i'  => 'color: {{VALUE}}'
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'mistri_slider_three_btn_bg_hover_color',
                    'types' => [ 'classic'],
                    'selector' => '{{WRAPPER}} .banner-three .btn-one::before',
                ]
            );
            
            $this->end_controls_tab();

        $this->end_controls_tabs();


        $this->add_control(
			'mistri_slider_three_two_slider_dot_color_head',
			[
				'label' => esc_html__( 'Dots Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'mistri_slider_three_two_slider_dot_normal_color',
			[
				'label' => esc_html__( 'Normal Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner-three .dot.theme .swiper-pagination-bullet::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .banner-three .dot.theme .swiper-pagination-bullet' => 'border-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'mistri_slider_three_two_slider_dot_active_color',
			[
				'label' => esc_html__( 'Active Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner-three .dot.theme .swiper-pagination-bullet.swiper-pagination-bullet-active::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .banner-three .dot.theme .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'border-color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_slider_three_list = $settings['mistri_slider_three_list'];

        $mistri_slider_three_shape_image_one = $settings['mistri_slider_three_shape_image_one']['url'];
        $mistri_slider_three_shape_image_show = $settings['mistri_slider_three_shape_image_show'];
        $mistri_slider_three_shape_image_two = $settings['mistri_slider_three_shape_image_two']['url'];
        $mistri_slider_three_shape_image_two_show = $settings['mistri_slider_three_shape_image_two_show'];
        $mistri_slider_three_soft_start_image_one = $settings['mistri_slider_three_soft_start_image_one']['url'];
        $mistri_slider_three_soft_start_image_one_show = $settings['mistri_slider_three_soft_start_image_one_show'];
        $mistri_slider_three_soft_start_image_two = $settings['mistri_slider_three_soft_start_image_two']['url'];
        $mistri_slider_three_soft_start_image_two_show = $settings['mistri_slider_three_soft_start_image_two_show'];

        $formShortCode = $settings['mistri_home_three_contact_form_shortcode'];
        $formShortCode = do_shortcode( shortcode_unautop( $formShortCode ) );
        $mistri_home_three_contact_form_shortcode_show = $settings['mistri_home_three_contact_form_shortcode_show'];

        ?>
        <section class="banner-three">
            <div class="slider-info">
                <div class="dot banner-dot d-none d-sm-block theme"></div>
            </div>
            <?php if("yes" === $mistri_slider_three_soft_start_image_one_show): ?>
            <div class="soft-start scale-animation">
                <img src="<?php echo esc_url($mistri_slider_three_soft_start_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <?php if("yes" === $mistri_slider_three_soft_start_image_two_show): ?>
            <div class="soft-start-light scale-animation">
                <img src="<?php echo esc_url($mistri_slider_three_soft_start_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <?php if("yes" === $mistri_slider_three_shape_image_show): ?>
            <div class="gaps-theme d-none d-sm-block float-bob-x">
                <img src="<?php echo esc_url($mistri_slider_three_shape_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <?php if("yes" === $mistri_slider_three_shape_image_two_show): ?>
            <div class="gaps-light d-none d-sm-block float-bob-x">
                <img src="<?php echo esc_url($mistri_slider_three_shape_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <div class="swiper banner-slider3">
                <div class="swiper-wrapper">
                    <?php foreach($mistri_slider_three_list as $index => $single_banner){ 

                        $bannar_line_image = $single_banner['mistri_slider_three_line_image']['url'];
                        $background_image = $single_banner['mistri_slider_three_bg_image']['url'];

                        $mistri_slider_three_title_setting_key = $this->get_repeater_setting_key( 'mistri_slider_three_title', 'mistri_slider_three_list', $index );
                        $mistri_slider_three_desc_setting_key = $this->get_repeater_setting_key( 'mistri_slider_three_desc', 'mistri_slider_three_list', $index );
                        $mistri_slider_three_btn_text_setting_key = $this->get_repeater_setting_key( 'mistri_slider_three_btn_text', 'mistri_slider_three_list', $index );

                        $this->add_inline_editing_attributes($mistri_slider_three_title_setting_key);
                        $this->add_inline_editing_attributes($mistri_slider_three_desc_setting_key);
                        $this->add_inline_editing_attributes($mistri_slider_three_btn_text_setting_key);

                        $this->add_render_attribute(
                            $mistri_slider_three_title_setting_key,
                            [
                                'data-animation'    => 'fadeInUp',
                                'data-delay'        => '1s'
                            ]
                        );
                        $this->add_render_attribute(
                            $mistri_slider_three_desc_setting_key,
                            [
                                'data-animation'    => 'fadeInUp',
                                'data-delay'        => '1.3s'
                            ]
                        );

                        $title = $settings['mistri_slider_three_list'][$index]['mistri_slider_three_title'];
                        $description = $settings['mistri_slider_three_list'][$index]['mistri_slider_three_desc'];
                        $button_text = $settings['mistri_slider_three_list'][$index]['mistri_slider_three_btn_text'];
                    ?>
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="<?php echo esc_url($background_image); ?>"></div>
                        <div class="container">
                            <div class="content">
                                <h1 <?php $this->print_render_attribute_string($mistri_slider_three_title_setting_key); ?>><?php echo wp_kses_post($title); ?>
                                    <img src="<?php echo esc_url($bannar_line_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                </h1>
                                <p <?php $this->print_render_attribute_string($mistri_slider_three_desc_setting_key); ?>><?php echo wp_kses_post($description); ?></p>
                                <a class="btn-one mt-65" href="<?php echo esc_url($single_banner['mistri_slider_three_btn_url']['url']); ?>" data-animation="fadeInUp" data-delay="1.8s"><span <?php $this->print_render_attribute_string($mistri_slider_three_btn_text_setting_key); ?>><?php echo esc_html__($button_text, 'mistri'); ?></span> <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="banner-form wow bounceInRight d-none d-lg-block bg-white">
                <?php if("yes" === $mistri_home_three_contact_form_shortcode_show): ?>
                <div class="item ">
                    <?php echo $formShortCode; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        
        <div class="banner-form-lg d-block d-lg-none section-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="item sub-bg">
                            <?php echo $formShortCode; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
	}

    protected function content_template() {
		
        ?>
        <section class="banner-three">
            <div class="slider-info">
                <div class="dot banner-dot d-none d-sm-block theme"></div>
            </div>
            <# if("yes" === settings.mistri_slider_three_soft_start_image_one_show){  #>
            <div class="soft-start scale-animation">
                <img src="{{{settings.mistri_slider_three_soft_start_image_one.url}}}" alt="image">
            </div>
            <# } #>
            <# if("yes" === settings.mistri_slider_three_soft_start_image_two_show){  #>
            <div class="soft-start-light scale-animation">
                <img src="{{{settings.mistri_slider_three_soft_start_image_two.url}}}" alt="image">
            </div>
            <# } #>
            <# if("yes" === settings.mistri_slider_three_shape_image_show){  #>
            <div class="gaps-theme d-none d-sm-block float-bob-x">
                <img src="{{{settings.mistri_slider_three_shape_image_one.url}}}" alt="image">
            </div>
            <# } #>
            <# if("yes" === settings.mistri_slider_three_shape_image_two_show){  #>
            <div class="gaps-light d-none d-sm-block float-bob-x">
                <img src="{{{settings.mistri_slider_three_shape_image_two.url}}}" alt="image">
            </div>
            <# } #>
            <div class="swiper banner-slider3">
                <div class="swiper-wrapper">
                <#
                _.each( settings.mistri_slider_three_list, function( single_banner, index ) {

                    // inline editing method and properties
                    var mistri_slider_three_title_setting_key = view.getRepeaterSettingKey( 'mistri_slider_three_title', 'mistri_slider_three_list', index );
                    var mistri_slider_three_desc_setting_key = view.getRepeaterSettingKey( 'mistri_slider_three_desc', 'mistri_slider_three_list', index );
                    var mistri_slider_three_btn_text_setting_key = view.getRepeaterSettingKey( 'mistri_slider_three_btn_text', 'mistri_slider_three_list', index );

                    view.addInlineEditingAttributes( mistri_slider_three_title_setting_key );
                    view.addInlineEditingAttributes( mistri_slider_three_desc_setting_key );
                    view.addInlineEditingAttributes( mistri_slider_three_btn_text_setting_key );

                    view.addRenderAttribute(
                        'mistri_slider_three_title_setting_key',
                        {
                            'data-animation'     : 'fadeInUp',
                            'data-delay'          : '1s',
                        }
                    );
                    view.addRenderAttribute(
                        'mistri_slider_three_desc_setting_key',
                        {
                            'data-animation'     : 'fadeInUp',
                            'data-delay'          : '1.3s',
                        }
                    );
                    view.addRenderAttribute(
                        'mistri_slider_three_btn_text_setting_key',
                        {
                            'class'              : 'btn-one mt-65',
                            'data-animation'     : 'fadeInUp',
                            'data-delay'         : '1.8s',
                        }
                    );
                #>
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="{{{ single_banner.mistri_slider_three_bg_image.url}}}"></div>
                        <div class="container">
                            <div class="content">
                                <h1 {{{ view.getRenderAttributeString( mistri_slider_three_title_setting_key ) }}}>{{{single_banner.mistri_slider_three_title}}}
                                    <img src="{{{ single_banner.mistri_slider_three_line_image.url}}}" alt="image">
                                </h1>
                                <p {{{ view.getRenderAttributeString( mistri_slider_three_desc_setting_key ) }}}>{{{single_banner.mistri_slider_three_desc}}}</p>
                                <a href="{{{single_banner.mistri_slider_three_btn_url.url}}}" {{{ view.getRenderAttributeString( mistri_slider_three_btn_text_setting_key ) }}}><span>{{{single_banner.mistri_slider_three_btn_text}}}</span> <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <#  } ); #>
                </div>
            </div>
        </section>
        <?php 
    }
}
