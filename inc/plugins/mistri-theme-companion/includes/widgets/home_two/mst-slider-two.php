<?php
class Mistri_Slider_Two extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_slider_two';
	}

	public function get_title() {
		return esc_html__( 'Mistri Slider Two', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-facebook-comments';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'slider', 'two', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_slider_two_head',
			[
				'label' => esc_html__( 'Bannar Slider', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $bannar_slider = new \Elementor\Repeater();

        $bannar_slider->add_control(
			'mistri_slider_two_slider_title',
			[
				'label' => esc_html__( 'Slider Title', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Add New Service Title',
                'label_block'   => true,
			]
		);

        $bannar_slider->add_control(
			'mistri_slider_two_slider_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'DISCOVER MORE',
                'label_block'   => true,
			]
		);

        $bannar_slider->add_control(
			'mistri_slider_two_slider_btn_link',
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

        $bannar_slider->add_control(
			'mistri_slider_two_slider_image',
			[
				'label' => esc_html__( 'Choose Slider Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_slider_two_slider_list',
			[
				'label' => esc_html__( 'bannar Slider List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $bannar_slider->get_controls(),
				'default' => [
					[
						'mistri_slider_two_slider_title' => esc_html__( 'Building Renovation', 'mistri' ),
                    ],
					[
						'mistri_slider_two_slider_title' => esc_html__( 'Building Renovation', 'mistri' ),
                    ],
					[
						'mistri_slider_two_slider_title' => esc_html__( 'Building Renovation', 'mistri' ),
                    ]
				],
				'title_field' => '{{{ mistri_slider_two_slider_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_slider_two_brand_head',
			[
				'label' => esc_html__( 'Bannar Brands', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $bannar_brand = new \Elementor\Repeater();

        $bannar_brand->add_control(
			'mistri_slider_two_brand_image',
			[
				'label' => esc_html__( 'Choose Brand Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_slider_two_brand_list',
			[
				'label' => esc_html__( 'Bannar Brand Images List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $bannar_brand->get_controls(),
                'default' => [
					[
						'list_title' => esc_html__( 'Add New Image #1 ', 'mistri' ),
					]
				],
			]
		);

        $this->add_control(
			'mistri_slider_two_brand_showing',
			[
				'label' => esc_html__( 'Show Brand', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_slider_two_shape_image_head',
			[
				'label' => esc_html__( 'Shape Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_slider_two_stroke_image',
			[
				'label' => esc_html__( 'Choose Stroke Text Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_slider_two_stroke_showing',
			[
				'label' => esc_html__( 'Show Stroke Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_slider_two_section_one_image',
			[
				'label' => esc_html__( 'Choose Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator' => "before"
			]
		);

        $this->add_control(
			'mistri_slider_two_section_one_showing',
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
			'mistri_slider_two_bg_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_slider_two_section_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .banner-two',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_slider_two_bannar_head',
			[
				'label' => esc_html__('Bannar Slider', 'mistri'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_slider_two_bannar_title_color',
			[
				'label' => esc_html__('Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
                    '{{{WRAPPER}}} .banner-two .item .image .content h3'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_slider_two_bannar_title_typography',
				'selector' => '{{WRAPPER}} .banner-two .item .image .content h3 ',
			]
		);

        $this->add_control(
			'mistri_slider_two_bannar_button_text_color',
			[
				'label' => esc_html__('Button Text Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
                    '{{{WRAPPER}}} .banner-two .item .image .content > a'  => 'color: {{VALUE}}'
                ],
                'separator' => "before",
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_slider_two_bannar_button_text_typography',
				'selector' => '{{WRAPPER}} .banner-two .item .image .content > a',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_slider_two_bannar_bg_color',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .banner-two .swiper-slide.swiper-slide-active .item .content',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_slider_two_dot_control_head',
			[
				'label' => esc_html__( 'Slider Dot', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_slider_two_item_style_heading',
			[
				'label' => esc_html__( 'Slider Dot Style', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->start_controls_tabs(
			'mistri_slider_two_item_style_start_tab'
		);

		$this->start_controls_tab(
			'mistri_slider_two_item_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'mistri' ),
			]
		);

		$this->add_control(
			'mistri_slider_two_item_style_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .banner-two  .arry-btn button i'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_slider_two_item_style_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .banner-two  .arry-btn button'  => 'background-color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_slider_two_item_style_icon_border_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .banner-two  .arry-btn button'  => 'border-color: {{VALUE}}'
                ]
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'mistri_slider_two_item_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'mistri' ),
			]
		);

		$this->add_control(
			'mistri_slider_two_item_style_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .banner-two  .arry-btn button:hover i'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_slider_two_item_style_icon_bg_hover_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .banner-two  .arry-btn button:hover'  => 'background-color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_slider_two_item_style_icon_border_hover_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .banner-two  .arry-btn button:hover'  => 'border-color: {{VALUE}}'
                ]
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
        $mistri_slider_two_slider_list = $settings['mistri_slider_two_slider_list'];
        $mistri_slider_two_brand_list = $settings['mistri_slider_two_brand_list'];
        $mistri_slider_two_brand_showing = $settings['mistri_slider_two_brand_showing'];
        $mistri_slider_two_stroke_image = $settings['mistri_slider_two_stroke_image']['url'];
        $mistri_slider_two_stroke_showing = $settings['mistri_slider_two_stroke_showing'];
        $mistri_slider_two_section_one_image = $settings['mistri_slider_two_section_one_image']['url'];
        $mistri_slider_two_section_one_showing = $settings['mistri_slider_two_section_one_showing'];

        ?>
        <div class="banner-two">
            <?php if("yes" === $mistri_slider_two_section_one_showing): ?>
            <div class="bg-image d-none d-md-block" style="background:  linear-gradient(180deg, var(--primary-color) 0%, rgba(238, 51, 43, 0.8) 100%), url(<?php echo esc_url($mistri_slider_two_section_one_image); ?> );"></div>
            <?php endif; ?>
            <?php if("yes" === $mistri_slider_two_stroke_showing): ?>
            <div class="stroke-text d-none d-md-block">
                <img src="<?php echo esc_url($mistri_slider_two_stroke_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <div class="container-fluid p-0">
                <div class="swiper banner-slider-row">
                    <div class="swiper-wrapper">
                        <?php
                            foreach($mistri_slider_two_slider_list as $index => $single_item){
                               
                                $mistri_slider_two_slider_title_setting_key = $this->get_repeater_setting_key( 'mistri_slider_two_slider_title', 'mistri_slider_two_slider_list', $index );
                                $mistri_slider_two_slider_btn_text_setting_key = $this->get_repeater_setting_key( 'mistri_slider_two_slider_btn_text', 'mistri_slider_two_slider_list', $index );

                                $this->add_inline_editing_attributes($mistri_slider_two_slider_title_setting_key);
                                $this->add_inline_editing_attributes($mistri_slider_two_slider_btn_text_setting_key);

                                $title_one = $settings['mistri_slider_two_slider_list'][$index]['mistri_slider_two_slider_title'];
                                $button_text = $settings['mistri_slider_two_slider_list'][$index]['mistri_slider_two_slider_btn_text'];
                                $this->add_link_attributes( "link_{$index}", $single_item['mistri_slider_two_slider_btn_link'] );
                        ?>
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="image">
                                    <img src="<?php echo esc_url($single_item['mistri_slider_two_slider_image']['url']); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                    <div class="content">
                                        <h3><a <?php $this->print_render_attribute_string( $mistri_slider_two_slider_title_setting_key ); ?>  <?php echo $this->get_render_attribute_string( "link_{$index}" ); ?>><?php echo esc_html__($title_one, 'mistri'); ?></a></h3>
                                        <a <?php $this->print_render_attribute_string( $mistri_slider_two_slider_btn_text_setting_key ); ?> <?php echo $this->get_render_attribute_string( "link_{$index}" ); ?>><?php echo esc_html__($button_text, 'mistri'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="banner_two_brand">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="arry-btn">
                                <button class="arry-prev banner2-arry-prev"><i class="ti-angle-left"></i></button>
                                <button class="ms-3 active arry-next banner2-arry-next"><i
                                        class="ti-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <?php if("yes" === $mistri_slider_two_brand_showing): ?>
                            <div class="brand_items mt-5 mt-lg-0">
                                <?php foreach($mistri_slider_two_brand_list as $single_brand){ ?>
                                    <img class="ms-0 ms-xl-4" src="<?php echo esc_attr__($single_brand['mistri_slider_two_brand_image']['url'], 'mistri'); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                <?php } ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php 
	}
    protected function content_template() {
        ?>
        <div class="banner-two">
            <# if("yes" === settings.mistri_slider_two_section_one_showing){ #>
            <div class="bg-image d-none d-md-block" style="background:  linear-gradient(180deg, var(--primary-color) 0%, rgba(238, 51, 43, 0.8) 100%), url({{{settings.mistri_slider_two_section_one_image.url}}});"></div>
            <# } #>
            <# if("yes" === settings.mistri_slider_two_stroke_showing){ #>
            <div class="stroke-text d-none d-md-block">
                <img src="{{{settings.mistri_slider_two_stroke_image.url}}}" alt="">
            </div>
            <# } #>
            <div class="container-fluid p-0">
                <div class="swiper banner-slider-row">
                    <div class="swiper-wrapper">
                        <#
                        _.each( settings.mistri_slider_two_slider_list, function( single_item, index ) { 
                            var mistri_slider_two_slider_title_setting_key = view.getRepeaterSettingKey( 'mistri_slider_two_slider_title', 'mistri_slider_two_slider_list', index );
                            var mistri_slider_two_slider_btn_text_setting_key = view.getRepeaterSettingKey( 'mistri_slider_two_slider_btn_text', 'mistri_slider_two_slider_list', index );

                            view.addInlineEditingAttributes( mistri_slider_two_slider_title_setting_key );
                            view.addInlineEditingAttributes( mistri_slider_two_slider_btn_text_setting_key );
                        #>
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="image">
                                    <img src="{{{single_item.mistri_slider_two_slider_image.url}}}" alt="image">
                                    <div class="content">
                                        <h3 ><a href="{{{ single_item.mistri_slider_two_slider_btn_link.url }}}" {{{ view.getRenderAttributeString( mistri_slider_two_slider_title_setting_key ) }}}>{{{single_item.mistri_slider_two_slider_title}}}</a></h3>
                                        <a href="{{{ single_item.mistri_slider_two_slider_btn_link.url }}}" {{{ view.getRenderAttributeString( mistri_slider_two_slider_btn_text_setting_key ) }}}>{{{single_item.mistri_slider_two_slider_btn_text}}} <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <#  } ); #>
                    </div>
                </div>
            </div>
            <div class="banner_two_brand">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="arry-btn">
                                <button class="arry-prev banner2-arry-prev"><i class="ti-angle-left"></i></button>
                                <button class="ms-3 active arry-next banner2-arry-next"><i
                                        class="ti-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <# if("yes" === settings.mistri_slider_two_brand_showing){ #>
                            <div class="brand_items mt-5 mt-lg-0">
                                <#
                                _.each( settings.mistri_slider_two_brand_list, function( single_brand, index ) { 
                                #>
                                <img class="ms-0 ms-xl-5" src="{{{single_brand.mistri_slider_two_brand_image.url}}}" alt="image">
                                <# } );  #>
                            </div>
                            <# } #>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php 
    }
}
