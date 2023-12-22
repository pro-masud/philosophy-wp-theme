<?php
class Mistri_Slider_One extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_slider_one';
	}

	public function get_title() {
		return esc_html__( 'Mistri Slider One', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'slider', 'one', 'home'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'mistri_slider_one_head',
			[
				'label' => esc_html__( 'Mistri Home Slider', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $sliderRepater = new \Elementor\Repeater();

        $sliderRepater->add_control(
			'mistri_slider_one_title_one',
			[
				'label' => esc_html__( 'Slider Title One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Add New Slider', 'mistri' ),
			]
		);

        $sliderRepater->add_control(
			'mistri_slider_one_title_two',
			[
				'label' => esc_html__( 'Slider Title Two', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'SO YOU CAN GO HIGHER', 'mistri' ),
			]
		);

        $sliderRepater->add_control(
			'mistri_slider_one_description',
			[
				'label' => esc_html__( 'Slider Description', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
				'default' => esc_html__( 'Rental of machines for earthworks, construction and industry.', 'mistri' ),
			]
		);

        $sliderRepater->add_control(
			'mistri_slider_one_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Discover our vehicle', 'mistri' ),
			]
		);

        $sliderRepater->add_control(
			'mistri_slider_one_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'mistri' ),
                'type' => \Elementor\Controls_Manager::URL,
                'label_block'   => true,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => false,
				],
			]
		);

        $sliderRepater->add_control(
			'mistri_slider_one_image',
			[
				'label' => esc_html__( 'Choose Slider Image', 'mistri' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_slider_one_list',
			[
				'label' => esc_html__( 'Slider List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $sliderRepater->get_controls(),
				'default' => [
					[
						'mistri_slider_one_title_one' => esc_html__( 'PROVIDING POWER', 'mistri' ),
					],
					[
						'mistri_slider_one_title_one' => esc_html__( 'PROVIDING POWER', 'mistri' ),
					],
					[
						'mistri_slider_one_title_one' => esc_html__( 'PROVIDING POWER', 'mistri' ),
					],
				],
				'title_field' => '{{{ mistri_slider_one_title_one }}}',
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'mistri_shape_head',
			[
				'label' => esc_html__( 'Mistr Shape Image', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_shape_one_image',
			[
				'label' => esc_html__( 'Choose Shape Image', 'mistri' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_shape_switcher',
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
			'mistri_section_background',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_section_background_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .banner',
			]
		);
        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_slider_style_head',
			[
				'label' => esc_html__( 'Home Slider Style', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_slider_title_one_heading',
			[
				'label' => esc_html__( 'Title One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

        $this->add_control(
			'mistri_slider_title_one_color',
			[
				'label' => esc_html__( 'Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner h2' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_slider_title_one_typography',
				'selector' => '{{WRAPPER}} .banner h2',
			]
		);

        $this->add_control(
			'mistri_slider_title_two_heading',
			[
				'label' => esc_html__( 'Title Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_slider_title_two_color',
			[
				'label' => esc_html__( 'Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner h1' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_slider_title_two_typography',
				'selector' => '{{WRAPPER}} .banner h1',
			]
		);


        $this->add_control(
			'mistri_slider_desc_head',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_slider_desc_color',
			[
				'label' => esc_html__( 'Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner .content p' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_slider_desc_typography',
				'selector' => '{{WRAPPER}} .banner .content p',
			]
		);

        $this->add_control(
			'mistri_slider_btn_head',
			[
				'label' => esc_html__( 'Button Text Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_slider_btn_text_color',
			[
				'label' => esc_html__( 'Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner .content a' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_slider_btn_text_typography',
				'selector' => '{{WRAPPER}} .banner .content a',
			]
		);

        $this->add_control(
			'mistri_slider_btn_border_color',
			[
				'label' => esc_html__( 'Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner .content a::before' => 'background-color: {{VALUE}}',
				],
			]
		);


        $this->add_control(
			'mistri_slider_bot_head',
			[
				'label' => esc_html__( 'Dot Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_slider_btn_dot_color',
			[
				'label' => esc_html__( 'Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dot .swiper-pagination-bullet::before' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'mistri_slider_dot_border_color',
			[
				'label' => esc_html__( 'Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dot .swiper-pagination-bullet' => 'border-color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'mistri_slider_bot_active_head',
			[
				'label' => esc_html__( 'Dot Active Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_slider_btn_dot_active_color',
			[
				'label' => esc_html__( 'Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .dot .swiper-pagination-bullet' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'mistri_slider_dot_active_border_color',
			[
				'label' => esc_html__( 'Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .dot .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'border-color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'mistri_slider_bot_bg_head',
			[
				'label' => esc_html__( 'Dot Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_slider_bot_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .banner .image .slider-info' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_shape_one_image = $settings['mistri_shape_one_image']['url'];
        $mistri_shape_switcher = $settings['mistri_shape_switcher'];
        ?>
        <section class="banner">
            <?php if("yes" ===  $mistri_shape_switcher): ?>
            <div class="shape1 d-none d-md-block float-bob-y">
                <img src="<?php echo esc_url($mistri_shape_one_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="content-wrp pt-65 pb-30">
                    <div class="swiper banner-slider">
                        <div class="swiper-wrapper">
                            <?php 
                            foreach($settings['mistri_slider_one_list'] as $index => $single_slider_item){
                                $mistri_slider_one_title_one_setting_key = $this->get_repeater_setting_key( 'mistri_slider_one_title_one', 'mistri_slider_one_list', $index );
                                $mistri_slider_one_title_two_setting_key = $this->get_repeater_setting_key( 'mistri_slider_one_title_two', 'mistri_slider_one_list', $index );
                                $mistri_slider_one_description_setting_key = $this->get_repeater_setting_key( 'mistri_slider_one_description', 'mistri_slider_one_list', $index );
                                $mistri_slider_one_btn_text_setting_key = $this->get_repeater_setting_key( 'mistri_slider_one_btn_text', 'mistri_slider_one_list', $index );

                                $this->add_inline_editing_attributes($mistri_slider_one_title_one_setting_key);
                                $this->add_inline_editing_attributes($mistri_slider_one_title_two_setting_key);
                                $this->add_inline_editing_attributes($mistri_slider_one_description_setting_key);
                                $this->add_inline_editing_attributes($mistri_slider_one_btn_text_setting_key);

                                $this->add_render_attribute(
                                    $mistri_slider_one_title_one_setting_key,
                                    [
                                        'data-delay' => '1s',
                                        'data-animation' => 'fadeInUp',
                                    ]
                                );
                                $this->add_render_attribute(
                                    $mistri_slider_one_title_two_setting_key,
                                    [
                                        'data-delay' => '1.3s',
                                        'data-animation' => 'fadeInUp',
                                    ]
                                );
                                $this->add_render_attribute(
                                    $mistri_slider_one_description_setting_key,
                                    [
                                        'data-delay' => '1.6s',
                                        'data-animation' => 'fadeInUp',
                                    ]
                                );
                                $this->add_render_attribute(
                                    $mistri_slider_one_btn_text_setting_key,
                                    [
                                        'data-delay' => '1.9s',
                                        'data-animation' => 'fadeInUp',
                                    ]
                                );

                                $title_one = $settings['mistri_slider_one_list'][$index]['mistri_slider_one_title_one'];
                                $title_two = $settings['mistri_slider_one_list'][$index]['mistri_slider_one_title_two'];
                                $description = $settings['mistri_slider_one_list'][$index]['mistri_slider_one_description'];
                                $btn_text = $settings['mistri_slider_one_list'][$index]['mistri_slider_one_btn_text'];

                               $this->add_link_attributes( "link_{$index}", $single_slider_item['mistri_slider_one_btn_url'] );     
                            ?>
                            <div class="swiper-slide">
                                <div class="row align-items-center">
                                    <div class="col-lg-8">
                                        <?php if($title_one): ?>
                                        <h2 <?php $this->print_render_attribute_string( $mistri_slider_one_title_one_setting_key ); ?> ><?php echo esc_html__($title_one , 'mistri'); ?></h2>
                                        <?php endif; ?>
                                        <?php if($title_two): ?>
                                        <h1 <?php $this->print_render_attribute_string( $mistri_slider_one_title_two_setting_key ); ?>><?php echo esc_html__($title_two , 'mistri'); ?></h1>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="content">
                                            <?php if($description): ?>
                                            <p <?php $this->print_render_attribute_string( $mistri_slider_one_description_setting_key ); ?> ><?php echo esc_html__( $description, 'mistri') ?></p>
                                            <?php endif; ?>
                                            <?php if($btn_text): ?>
                                            <a <?php $this->print_render_attribute_string( $mistri_slider_one_btn_text_setting_key ); ?> <?php echo $this->print_render_attribute_string( "link_{$index}" ) ?>  >  <?php echo esc_html__( $btn_text, 'mistri' ); ?> </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php if($settings['mistri_slider_one_list'] ): ?>
                <div class="image">
                    <div class="swiper banner-slider2">
                        <div class="swiper-wrapper">
                            <?php 
                                foreach($settings['mistri_slider_one_list'] as $single_slider_item){
                                    $mistri_slider_one_image =  $single_slider_item['mistri_slider_one_image']['url'];
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($mistri_slider_one_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="slider-info">
                        <div class="dot banner-dot"></div>
                        <div class="banner-pegi"></div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php 
	}
protected function content_template() {
    ?>
    <section class="banner">
        <# if( "yes" === settings.mistri_shape_switcher){ #>
        <div class="shape1 d-none d-md-block float-bob-y">
            <img src="{{{ settings.mistri_shape_one_image.url }}}" alt="">
        </div>
        <# } #>
        <div class="container">
            <div class="content-wrp pt-65 pb-30">
                <div class="swiper banner-slider">
                    <div class="swiper-wrapper">
                        <#
                        _.each( settings.mistri_slider_one_list, function( single_slider_item, index ) { 
                            // inline edition property and method 
                            var mistri_slider_one_title_one_setting_key = view.getRepeaterSettingKey( 'mistri_slider_one_title_one', 'about_service_list', index );
                            var mistri_slider_one_title_two_setting_key = view.getRepeaterSettingKey( 'mistri_slider_one_title_two', 'about_service_list', index );
                            var mistri_slider_one_description_setting_key = view.getRepeaterSettingKey( 'mistri_slider_one_description', 'about_service_list', index );
                            var mistri_slider_one_btn_text_setting_key = view.getRepeaterSettingKey( 'mistri_slider_one_btn_text', 'about_service_list', index );

                            view.addInlineEditingAttributes( mistri_slider_one_title_one_setting_key );
                            view.addInlineEditingAttributes( mistri_slider_one_title_two_setting_key );
                            view.addInlineEditingAttributes( mistri_slider_one_description_setting_key );
                            view.addInlineEditingAttributes( mistri_slider_one_btn_text_setting_key );

                            view.addRenderAttribute(
                                mistri_slider_one_title_one_setting_key,
                                {
                                    'data-delay': '1s',
                                    'data-animation': 'fadeInUp',
                                }
                            );
                            view.addRenderAttribute(
                                mistri_slider_one_title_two_setting_key,
                                {
                                    'data-delay': '1.3s',
                                    'data-animation': 'fadeInUp',
                                }
                            );
                            view.addRenderAttribute(
                                mistri_slider_one_description_setting_key,
                                {
                                    'data-delay': '1.6s',
                                    'data-animation': 'fadeInUp',
                                }
                            );
                            view.addRenderAttribute(
                                mistri_slider_one_btn_text_setting_key,
                                {
                                    'data-delay': '1.9s',
                                    'data-animation': 'fadeInUp',
                                }
                            );
                        #>
                            <div class="swiper-slide">
                                <div class="row align-items-center">
                                    <div class="col-lg-8">
                                        <# if(single_slider_item.mistri_slider_one_title_one){ #>
                                        <h2  {{{ view.getRenderAttributeString( mistri_slider_one_title_one_setting_key ) }}}>{{{single_slider_item.mistri_slider_one_title_one}}}</h2>
                                        <# } #>
                                        <# if(single_slider_item.mistri_slider_one_title_two){ #>
                                        <h1 {{{ view.getRenderAttributeString( mistri_slider_one_title_two_setting_key ) }}}>{{{single_slider_item.mistri_slider_one_title_two}}}</h1>
                                        <# } #>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="content">
                                            <# if( single_slider_item.mistri_slider_one_description){ #>
                                            <p  {{{ view.getRenderAttributeString( mistri_slider_one_description_setting_key ) }}}>{{{ single_slider_item.mistri_slider_one_description }}}</p>
                                            <# } #>
                                            <# if(single_slider_item.mistri_slider_one_btn_text){ #>
                                            <a href="{{{ single_slider_item.mistri_slider_one_btn_url.url }}}" {{{ view.getRenderAttributeString( mistri_slider_one_btn_text_setting_key ) }}}>{{{ single_slider_item.mistri_slider_one_btn_text }}}</a>
                                            <# } #>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <# } ); #>
                    </div>
                </div>
            </div>
            <# if(settings.mistri_slider_one_list){ #>
            <div class="image">
                <div class="swiper banner-slider2">
                    <div class="swiper-wrapper">
                        <# _.each( settings.mistri_slider_one_list, function( single_slider_item, index ) { #>
                            <div class="swiper-slide">
                                <img src="{{{ single_slider_item.mistri_slider_one_image.url }}}" alt="image">
                            </div>
                        <# } ); #>
                    </div>
                </div>
                <div class="slider-info">
                    <div class="dot banner-dot"></div>
                    <div class="banner-pegi"></div>
                </div>
            </div>
            <# } #>
        </div>
    </section>
<?php
    }
}
