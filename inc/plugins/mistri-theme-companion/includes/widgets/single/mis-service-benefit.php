<?php
class Mistri_Service_Benefit extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_service_benefit';
	}

	public function get_title() {
		return esc_html__( 'Mistri Service Benefit', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'service', 'section', 'benefit'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_service_benefit_section_head',
			[
				'label' => esc_html__( 'Benefit Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_service_benefit_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'SERVICE BENEFITS', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_service_benefit_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Benefit of Service', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_service_benefit_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Praesent eget mollis nulla, non lacinia urna. Donec sit amet neque auctor, ornare dui rutrum, condimentum justo. Duis dictum, ex accumsan eleifend eleifend, ex justo aliquam nunc, in ultrices ante quam eget massa. Sed scelerisque, odio eu tempor pulvinar, magna tortor finibus lorem, ut mattis tellus.', 'mistri' ),
                'label_block'   => true,
			]
		);

		$this->add_control(
			'mistri_service_benefit_head_show',
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
			'mistri_service_benefit_items_section_head',
			[
				'label' => esc_html__( 'Service Items', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_service_benefit_one_heading',
			[
				'label' => esc_html__( 'Service List One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

        $repater_one = new \Elementor\Repeater();

        $repater_one->add_control(
			'mistri_service_benefit_one_title',
			[
				'label' => esc_html__( 'Service title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Best Quality Support', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_service_benefit_one_list',
			[
				'label' => esc_html__( 'Service List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repater_one->get_controls(),
				'default' => [
					[
						'mistri_service_benefit_one_title' => esc_html__( 'Make strond your roof ', 'mistri' ),
                    ],
					[
						'mistri_service_benefit_one_title' => esc_html__( 'Door and Windows will good ', 'mistri' ),
                    ],
					[
						'mistri_service_benefit_one_title' => esc_html__( 'No any leakes in roof ', 'mistri' ),
                    ],
					[
						'mistri_service_benefit_one_title' => esc_html__( 'Maintain your home structure', 'mistri' ),
                    ],
				],
				'title_field' => '{{{ mistri_service_benefit_one_title }}}',
			]
		);


        $this->add_control(
			'mistri_service_benefit_two_heading',
			[
				'label' => esc_html__( 'Service List Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator'     => 'before',
			]
		);

        $repater_two = new \Elementor\Repeater();

        $repater_two->add_control(
			'mistri_service_benefit_two_title',
			[
				'label' => esc_html__( 'Service title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Best Quality Support', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_service_benefit_two_list',
			[
				'label' => esc_html__( 'Service List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repater_two->get_controls(),
				'default' => [
					[
						'mistri_service_benefit_two_title' => esc_html__( 'Door and Windows will good ', 'mistri' ),
                    ],
					[
						'mistri_service_benefit_two_title' => esc_html__( 'Make strond your roof', 'mistri' ),
                    ],
					[
						'mistri_service_benefit_two_title' => esc_html__( 'Maintain your home structure', 'mistri' ),
                    ],
					[
						'mistri_service_benefit_two_title' => esc_html__( 'No any leakes in roof', 'mistri' ),
                    ],
				],
				'title_field' => '{{{ mistri_service_benefit_two_title }}}',
			]
		);

        $this->add_control(
			'mistri_service_benefit_service_show',
			[
				'label' => esc_html__( 'Show Service List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_benefit_media_section_head',
			[
				'label' => esc_html__( 'Service Media', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_service_benefit_video_link',
			[
				'label' => esc_html__( 'YouTube Video Link', 'textdomain' ),
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
			'mistri_service_benefit_video_bg_image',
			[
				'label' => esc_html__( 'Choose Media Background Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);


        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_benefit_section_background_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_service_benefit_bg_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .page-about.sub-bg.sub-bg',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_benefit_heading_style',
			[
				'label' => esc_html__( 'Benefit Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_service_benefit_sub_title_color',
			[
				'label' => esc_html__('Sub Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .page-about.sub-bg .section-header h5' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_benefit_sub_typography',
				'selector' => '{{WRAPPER}} .page-about.sub-bg .section-header h5',
			]
		);

        $this->add_control(
			'mistri_service_benefit_title_color',
			[
				'label' => esc_html__('Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .page-about.sub-bg .section-header h2' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_benefit_title_typography',
				'selector' => '{{WRAPPER}} .page-about.sub-bg .section-header h2',
			]
		);

        $this->add_control(
			'mistri_service_benefit_desc_color',
			[
				'label' => esc_html__('Description Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}}  .page-about.sub-bg .section-header p' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_benefit_desc_typography',
				'selector' => '{{WRAPPER}} .page-about.sub-bg .section-header p',
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'mistri_benefit_service_item_heading',
			[
				'label' => esc_html__( 'Service Item', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_benefit_service_item_icon_color',
			[
				'label' => esc_html__('Service Icon Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ee332b',
                'selectors' => [
					'{{WRAPPER}} .page-about ul li i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mmistri_benefit_service_item_icon_typography',
				'selector' => '{{WRAPPER}} .page-about ul li i',
			]
		);


        $this->add_control(
			'mistri_benefit_service_item_title_color',
			[
				'label' => esc_html__('Service Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .page-about ul li' => 'color: {{VALUE}}',
				],
                'separator'     => 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mmistri_benefit_service_item_title_typography',
				'selector' => '{{WRAPPER}} .page-about ul li',
			]
		);
		$this->end_controls_section();

        $this->start_controls_section(
			'mistri_benefit_service_media_heading',
			[
				'label' => esc_html__( 'Service Media', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_benefit_service_icons_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .page-about  a.video-popup '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_control(
			'mistri_benefit_service_icons_bg_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .page-about  a.video-popup'  => 'background-color: {{VALUE}}'
                ]
			]
		);

        $this->add_control(
			'mistri_benefit_service_icons_border_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .page-about  .video-pulse::after, .page-about  .video-pulse::before'  => 'border-color: {{VALUE}}'
                ],
                
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_service_benefit_sub_title = $settings['mistri_service_benefit_sub_title'];
        $mistri_service_benefit_title = $settings['mistri_service_benefit_title'];
        $mistri_service_benefit_desc = $settings['mistri_service_benefit_desc'];
        $mistri_service_benefit_head_show = $settings['mistri_service_benefit_head_show'];
        
        $mistri_service_benefit_one_list = $settings['mistri_service_benefit_one_list'];
        $mistri_service_benefit_two_list = $settings['mistri_service_benefit_two_list'];
        $mistri_service_benefit_service_show = $settings['mistri_service_benefit_service_show'];

        $mistri_service_benefit_video_link = $settings['mistri_service_benefit_video_link']['url'];
        $mistri_service_benefit_video_bg_image = $settings['mistri_service_benefit_video_bg_image']['url'];

        $this->add_inline_editing_attributes('mistri_service_benefit_sub_title', 'basic');
		$this->add_inline_editing_attributes('mistri_service_benefit_title', 'basic');
		$this->add_inline_editing_attributes('mistri_service_benefit_head_show', 'basic');

        $this->add_render_attribute('mistri_service_benefit_sub_title', [
			'class' => 'wow fadeInUp',
			'data-wow-duration' => '1.3s',
			'data-wow-delay' => '.3s',
		]);
		$this->add_render_attribute('mistri_service_benefit_title', [
			'class' => 'wow fadeInUp',
			'data-wow-duration' => '1.6s',
			'data-wow-delay' => '.6s',
		]);
		$this->add_render_attribute('mistri_service_benefit_desc', [
			'class' => 'wow fadeInUp',
			'data-wow-duration' => '1.9s',
			'data-wow-delay' => '.9s',
		]);
        ?>
        <section class="page-about page-service-single sub-bg section-padding">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="right-item">
                            <?php if("yes" === $mistri_service_benefit_head_show): ?>
                                <?php if($mistri_service_benefit_sub_title || $mistri_service_benefit_title || $mistri_service_benefit_desc): ?>
                                    <div class="section-header mb-5">
                                        <h5 <?php echo $this->get_render_attribute_string('mistri_service_benefit_sub_title'); ?>><?php echo esc_html__($mistri_service_benefit_sub_title, 'mistri'); ?></h5>
                                        <h2 <?php echo $this->get_render_attribute_string('mistri_service_benefit_title'); ?> ><?php echo esc_html__($mistri_service_benefit_title, 'mistri'); ?></h2>
                                        <p <?php echo $this->get_render_attribute_string('mistri_service_benefit_desc'); ?> ><?php echo esc_html__($mistri_service_benefit_desc, 'mistri'); ?></p>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <div class="row g-4">
                                <?php if("yes" === $mistri_service_benefit_service_show): ?>
                                    <div class="col-sm-6 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".3s">
                                        <ul>
                                            <?php 
                                                foreach($mistri_service_benefit_one_list as $index => $single_item){
                                                    $mistri_service_benefit_one_title_setting_key = $this->get_repeater_setting_key( 'mistri_service_benefit_one_title', 'mistri_service_benefit_one_list', $index );
                                                    $this->add_inline_editing_attributes($mistri_service_benefit_one_title_setting_key);
                                                    $title = $settings['mistri_service_benefit_one_list'][$index]['mistri_service_benefit_one_title'];
                                            ?>
                                                <li <?php $this->print_render_attribute_string( $mistri_service_benefit_one_title_setting_key ); ?>><i class="fa-solid mb-4 me-2 fa-gear"></i> <?php echo esc_html__($title, 'mistri'); ?> </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                                        <ul>
                                            <?php 
                                                foreach($mistri_service_benefit_two_list as $index => $single_item){
                                                    $mistri_service_benefit_two_title_setting_key = $this->get_repeater_setting_key( 'mistri_service_benefit_two_title', 'mistri_service_benefit_two_list', $index );
                                                    $this->add_inline_editing_attributes($mistri_service_benefit_two_title_setting_key);
                                                    $title = $settings['mistri_service_benefit_two_list'][$index]['mistri_service_benefit_two_title'];
                                            ?>
                                                <li <?php $this->print_render_attribute_string( $mistri_service_benefit_two_title_setting_key ); ?>><i class="fa-solid mb-4 me-2 fa-gear"></i> <?php echo esc_html__($title, 'mistri'); ?> </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="image">
                            <?php if($mistri_service_benefit_video_bg_image || $mistri_service_benefit_video_link): ?>
                                <?php if($mistri_service_benefit_video_bg_image): ?>
                                    <img src="<?php echo esc_url($mistri_service_benefit_video_bg_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                <?php endif; ?>
                                <?php if($mistri_service_benefit_video_link): ?>
                                    <div class="video-btn-wrp d-none d-sm-block">
                                        <div class="video video-pulse">
                                            <a class="video-popup secondary-bg"
                                                href="<?php echo esc_url($mistri_service_benefit_video_link); ?>"><i class="fa-solid fa-play"></i></a>
                                        </div>
                                    </div>
                                <?php endif; ?>
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
            view.addInlineEditingAttributes('mistri_service_benefit_sub_title', 'basic');
            view.addInlineEditingAttributes('mistri_service_benefit_title', 'basic');
            view.addInlineEditingAttributes('mistri_service_benefit_desc', 'basic');

            view.addRenderAttribute(
				'mistri_service_benefit_sub_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.3s',
					'data-wow-duration': '.3s',
				}
			);
            view.addRenderAttribute(
				'mistri_service_benefit_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.6s',
					'data-wow-duration': '.6s',
				}
			);
            view.addRenderAttribute(
				'mistri_service_benefit_desc',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.9s',
					'data-wow-duration': '.9s',
				}
			);
        #>
        <section class="page-about page-service-single sub-bg section-padding">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="right-item">
                            <# if("yes" === settings.mistri_service_benefit_head_show){ #>
                                <# if(settings.mistri_service_benefit_sub_title || settings.mistri_service_benefit_title || settings.mistri_service_benefit_desc ){ #>
                                    <div class="section-header mb-5">
                                        <h5 {{{view.getRenderAttributeString('mistri_service_benefit_sub_title')}}}>{{{settings.mistri_service_benefit_sub_title}}}</h5>
                                        <h2 {{{view.getRenderAttributeString('mistri_service_benefit_title')}}}>{{{settings.mistri_service_benefit_title}}}</h2>
                                        <p {{{view.getRenderAttributeString('mistri_service_benefit_desc')}}}>{{{settings.mistri_service_benefit_desc}}}</p>
                                    </div>
                                <# } #>
                            <# } #>
                            <div class="row g-4">
                                <# if("yes" === settings.mistri_service_benefit_service_show){ #>
                                    <div class="col-sm-6 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".3s">
                                        <ul>
                                            <#
                                                _.each( settings.mistri_service_benefit_one_list, function( single_item, index ) {
                                                    var mistri_service_benefit_one_title_setting_key = view.getRepeaterSettingKey( 'mistri_service_benefit_one_title', 'mistri_service_benefit_one_list', index );
                                                    view.addInlineEditingAttributes( mistri_service_benefit_one_title_setting_key );
                                            #>
                                            <li {{{ view.getRenderAttributeString( mistri_service_benefit_one_title_setting_key )}}}><i class="fa-solid mb-4 me-2 fa-gear"></i>{{{single_item.mistri_service_benefit_one_title}}} </li>
                                            <# }); #>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                                        <ul>
                                        <#
                                            _.each( settings.mistri_service_benefit_two_list, function( single_item, index ) {
                                                var mistri_service_benefit_two_title_setting_key = view.getRepeaterSettingKey( 'mistri_service_benefit_two_title', 'mistri_service_benefit_two_list', index );
                                                view.addInlineEditingAttributes( mistri_service_benefit_two_title_setting_key );
                                        #>
                                        <li {{{ view.getRenderAttributeString( mistri_service_benefit_two_title_setting_key )}}}><i class="fa-solid mb-4 me-2 fa-gear"></i>{{{single_item.mistri_service_benefit_two_title}}} </li>
                                        <# }); #>
                                        </ul>
                                    </div>
                                <# } #>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="image">
                            <# if(settings.mistri_service_benefit_video_bg_image.url || settings.mistri_service_benefit_video_link.url){ #>
                                <# if(settings.mistri_service_benefit_video_bg_image.url){ #>
                                    <img src="{{{settings.mistri_service_benefit_video_bg_image.url}}}" alt="image">
                                <# } #>
                                <# if(settings.mistri_service_benefit_video_link.url){ #>
                                <div class="video-btn-wrp d-none d-sm-block">
                                    <div class="video video-pulse">
                                        <a class="video-popup secondary-bg" href="{{{settings.mistri_service_benefit_video_link.url}}}"><i class="fa-solid fa-play"></i></a>
                                    </div>
                                </div>
                            <# } } #>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
    }
}