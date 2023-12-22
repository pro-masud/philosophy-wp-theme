<?php
class Mistri_Project_One extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_project_one';
	}

	public function get_title() {
		return esc_html__( 'Mistri Project One', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-section';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'project', 'one', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_project_one_head',
			[
				'label' => esc_html__( 'Project Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_project_one_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'CASE STUDY',
                'label_block'   => true,
			]
		);

		$this->add_control(
			'mistri_project_one_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Successfully completed projects for our clients',
                'label_block'   => true,
			]
		);

		$this->add_control(
			'mistri_project_one_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy.',
                'label_block'   => true,
			]
		);

		$this->add_control(
			'mistri_project_one_showing',
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
			'mistri_project_one_slider_head',
			[
				'label' => esc_html__( 'Project Slider', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$project_slider = new \Elementor\Repeater();

		$project_slider->add_control(
			'mistri_project_one_slider_title',
			[
				'label' => esc_html__( 'Slider Title', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Road map Engineering',
                'label_block'   => true,
			]
		);

		$project_slider->add_control(
			'mistri_project_one_slider_desc',
			[
				'label' => esc_html__( 'Slider Description', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Industrial gases are everywhere. They are an integral part of modern manufacturing processes and play an essential role in',
                'label_block'   => true,
			]
		);

		$project_slider->add_control(
			'mistri_project_one_slider_image',
			[
				'label' => esc_html__( 'Choose Slider Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_project_one_items_list',
			[
				'label' => esc_html__( 'Project Slider List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $project_slider->get_controls(),
				'default' => [
					[
						'mistri_project_one_slider_title' => esc_html__( 'Road map Engineering', 'mistri' ),
					],
					[
						'mistri_project_one_slider_title' => esc_html__( 'Road map Engineering', 'mistri' ),
					],
					[
						'mistri_project_one_slider_title' => esc_html__( 'Road map Engineering', 'mistri' ),
					],
					[
						'mistri_project_one_slider_title' => esc_html__( 'Road map Engineering', 'mistri' ),
					],
					[
						'mistri_project_one_slider_title' => esc_html__( 'Road map Engineering', 'mistri' ),
					]
				],
				'title_field' => '{{{ mistri_project_one_slider_title }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_project_one_shape_head',
			[
				'label' => esc_html__( 'Shape Image', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_project_one_shape_image',
			[
				'label' => esc_html__( 'Choose Shape Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_project_one_shape_showing',
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
			'mistri_project_one_bg_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_project_one_bg_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .project',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_project_one_style_head',
			[
				'label' => esc_html__( 'Project Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_project_one_style_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .section-header h5'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_project_one_style_sub_title_fonts',
				'selector' => '{{WRAPPER}} .project .section-header h5',
			]
		);

		$this->add_control(
			'mistri_project_one_style_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .section-header h2 '  => 'color: {{VALUE}}'
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_project_one_style_title_fonts',
				'selector' => '{{WRAPPER}} .project .section-header h2 ',
			]
		);

		$this->add_control(
			'mistri_project_one_style_description_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .section-header p '  => 'color: {{VALUE}}'
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_project_one_style_description_fonts',
				'selector' => '{{WRAPPER}} .project .section-header p',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_project_one_slider_style_head',
			[
				'label' => esc_html__( 'Slider Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_project_one_slider_style_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .item h3'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_project_one_slider_style_title_fonts',
				'selector' => '{{WRAPPER}} .project .item h3',
			]
		);

		$this->add_control(
			'mistri_project_one_slider_style_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .item p'  => 'color: {{VALUE}}'
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_project_one_slider_style_desc_fonts',
				'selector' => '{{WRAPPER}} .project .item p',
			]
		);


		$this->add_control(
			'mistri_project_one_slider_style_icon_color_head',
			[
				'label' => esc_html__( 'Slider Dot Style', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->start_controls_tabs(
			'mistri_project_one_slider_style_start_tab'
		);

		$this->start_controls_tab(
			'mistri_project_one_slider_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'mistri' ),
			]
		);

		$this->add_control(
			'mistri_project_one_slider_style_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .arry-btn button i'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_project_one_slider_style_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .arry-btn button'  => 'background-color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_project_one_slider_style_icon_border_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .arry-btn button'  => 'border-color: {{VALUE}}'
                ]
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'mistri_project_one_slider_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'mistri' ),
			]
		);

		$this->add_control(
			'mistri_project_one_slider_style_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .arry-btn button:hover i'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_project_one_slider_style_icon_bg_hover_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .arry-btn button:hover'  => 'background-color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_project_one_slider_style_icon_border_hover_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .project .arry-btn button:hover'  => 'border-color: {{VALUE}}'
                ]
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();

		$mistri_project_one_sub_title = $settings['mistri_project_one_sub_title'];
		$mistri_project_one_title = $settings['mistri_project_one_title'];
		$mistri_project_one_desc = $settings['mistri_project_one_desc'];
		$mistri_project_one_showing = $settings['mistri_project_one_showing'];
		$mistri_project_one_items_list = $settings['mistri_project_one_items_list'];
		$mistri_project_one_shape_image = $settings['mistri_project_one_shape_image']['url'];
		$mistri_project_one_shape_showing = $settings['mistri_project_one_shape_showing'];

		$this->add_inline_editing_attributes('mistri_project_one_sub_title', 'basic');
		$this->add_inline_editing_attributes('mistri_project_one_title', 'basic');
		$this->add_inline_editing_attributes('mistri_project_one_desc', 'basic');

        $this->add_render_attribute(
            'mistri_project_one_sub_title',
            [   
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay' => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_project_one_title',
            [   
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay' => '.6s',
            ]
        );
        $this->add_render_attribute(
            'mistri_project_one_desc',
            [   
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.9s',
                'data-wow-delay' => '.9s',
            ]
        );
        ?>
		<section class="project section-padding">
            <div class="project-wrp">
				<?php if("yes" === $mistri_project_one_shape_showing): ?>
                <div class="shape1 d-none d-md-block float-bob-y">
                    <img src="<?php echo esc_url($mistri_project_one_shape_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                </div>
				<?php endif; ?>
                <div class="swiper have-bg project-slider d-none d-lg-block">
                    <div class="swiper-wrapper">
					<?php   foreach($mistri_project_one_items_list as $index => $single_project_item){ ?>
                        <div class="swiper-slide">
                            <div class="project-image bg-image" style="background-image: url(<?php echo esc_url($single_project_item['mistri_project_one_slider_image']['url']); ?>);">
							</div>
                        </div>
					<?php } ?>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 bor-right py-lg-5">
							<?php if("yes" === $mistri_project_one_showing): ?>
                            <div class="section-header">
                                <h5 <?php echo $this->get_render_attribute_string('mistri_project_one_sub_title'); ?> > <?php echo esc_html__($mistri_project_one_sub_title, 'mistri'); ?></h5>
                                <h2 <?php echo $this->get_render_attribute_string('mistri_project_one_title'); ?> > <?php echo esc_html__($mistri_project_one_title, 'mistri'); ?></h2>
                                <p <?php echo $this->get_render_attribute_string('mistri_project_one_desc'); ?>> <?php echo esc_html__($mistri_project_one_desc, 'mistri'); ?></p>
                            </div>
							<?php endif; ?>
                            <div class="arry-btn mb-4 d-block d-lg-none">
                                <button class="arry-prev project-arry-prev"><i class="ti-angle-left"></i></button>
                                <button class="ms-3 active arry-next project-arry-next"><i
                                        class="ti-angle-right"></i></button>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-4">
                                    <div class="wrp">
                                        <div class="pegi-number pt-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
									<?php if($mistri_project_one_items_list): ?>
                                    <div class="swiper project-slider2">
                                        <div class="swiper-wrapper">
										<?php  foreach($mistri_project_one_items_list as $index => $single_project_item){ 
											$mistri_project_one_slider_title_setting_key = $this->get_repeater_setting_key( 'mistri_project_one_slider_title', 'mistri_project_one_items_list', $index );
											$mistri_project_one_slider_desc_setting_key = $this->get_repeater_setting_key( 'mistri_project_one_slider_desc', 'mistri_project_one_items_list', $index );
											
											$this->add_inline_editing_attributes($mistri_project_one_slider_title_setting_key);
											$this->add_inline_editing_attributes($mistri_project_one_slider_desc_setting_key);

											$title = $settings['mistri_project_one_items_list'][$index]['mistri_project_one_slider_title'];
											$description = $settings['mistri_project_one_items_list'][$index]['mistri_project_one_slider_desc'];
											?>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <h3 <?php $this->print_render_attribute_string( $mistri_project_one_slider_title_setting_key ); ?>><?php echo esc_html__($title, 'mistri'); ?></h3>
                                                    <p <?php $this->print_render_attribute_string( $mistri_project_one_slider_desc_setting_key ); ?>><?php echo esc_html__($description, 'mistri'); ?> </p>
                                                </div>
                                            </div>
										<?php } ?>
                                        </div>
                                    </div>
									<?php endif; ?>
                                </div>
                            </div>
                            <div class="arry-btn mt-65 d-none d-lg-block">
                                <button class="arry-prev project-arry-prev"><i class="ti-angle-left"></i></button>
                                <button class="ms-3 active arry-next project-arry-next"><i
                                        class="ti-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-6">
							<?php if($mistri_project_one_items_list): ?>
                            <div class="swiper project-slider mt-5 d-block d-lg-none">
                                <div class="swiper-wrapper">
									<?php  foreach($mistri_project_one_items_list as $index => $single_project_item){ ?>
										<div class="swiper-slide">
											<div class="image">
												<img src="<?php echo esc_url($single_project_item['mistri_project_one_slider_image']['url']); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
											</div>
										</div>
									<?php } ?>
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
            view.addInlineEditingAttributes( 'mistri_project_one_sub_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_project_one_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_project_one_desc', 'basic' );

			view.addRenderAttribute(
				'mistri_project_one_sub_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.3s',
					'data-wow-delay': '.3s',
				}
			);
			view.addRenderAttribute(
				'mistri_project_one_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.6s',
					'data-wow-delay': '.6s',
				}
			);
			view.addRenderAttribute(
				'mistri_project_one_desc',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.9s',
					'data-wow-delay': '.9s',
				}
			);
		#>
		<section class="project section-padding">
            <div class="project-wrp">
				<# if("yes" === settings.mistri_project_one_shape_showing){ #>
                <div class="shape1 d-none d-md-block float-bob-y">
                    <img src="{{{settings.mistri_project_one_shape_image.url}}}" alt="image">
                </div>
				<# } #>
                <div class="swiper have-bg project-slider d-none d-lg-block">
                    <div class="swiper-wrapper">
						<#
							_.each( settings.mistri_project_one_items_list, function( single_project_item, index ) { 
						#>
                        <div class="swiper-slide">
                            <div class="project-image bg-image" style="background-image: url({{{single_project_item.mistri_project_one_slider_image.url}}});"></div>
                        </div>
						<#  }); #>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 bor-right py-lg-5">
							<# if("yes" === settings.mistri_project_one_showing){ #>
                            <div class="section-header">
                                <h5 {{{ view.getRenderAttributeString( 'mistri_project_one_sub_title' )}}}>{{{settings.mistri_project_one_sub_title}}}</h5>
                                <h2 {{{ view.getRenderAttributeString( 'mistri_project_one_title' )}}}>{{{settings.mistri_project_one_title}}}</h2>
                                <p {{{ view.getRenderAttributeString( 'mistri_project_one_desc' )}}}>{{{settings.mistri_project_one_desc}}}</p>
                            </div>
							<# } #>
                            <div class="arry-btn mb-4 d-block d-lg-none">
                                <button class="arry-prev project-arry-prev"><i class="ti-angle-left"></i></button>
                                <button class="ms-3 active arry-next project-arry-next"><i
                                        class="ti-angle-right"></i></button>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-4">
                                    <div class="wrp">
                                        <div class="pegi-number pt-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
									<# if(settings.mistri_project_one_items_list){ #>
                                    <div class="swiper project-slider2">
                                        <div class="swiper-wrapper">
											<#
											_.each( settings.mistri_project_one_items_list, function( single_project_item, index ) { 
												var mistri_project_one_slider_title_setting_key = view.getRepeaterSettingKey( 'mistri_project_one_slider_title', 'mistri_project_one_items_list', index );
												var mistri_project_one_slider_desc_setting_key = view.getRepeaterSettingKey( 'mistri_project_one_slider_desc', 'mistri_project_one_items_list', index );

												view.addInlineEditingAttributes( mistri_project_one_slider_title_setting_key );
												view.addInlineEditingAttributes( mistri_project_one_slider_desc_setting_key );
											#>
												<div class="swiper-slide">
													<div class="item">
														<h3 {{{ view.getRenderAttributeString( 'mistri_project_one_slider_title_setting_key' )}}} >{{{single_project_item.mistri_project_one_slider_title}}}</h3>
														<p  {{{ view.getRenderAttributeString( 'mistri_project_one_slider_desc_setting_key' )}}}>{{{single_project_item.mistri_project_one_slider_desc}}}</p>
													</div>
												</div>
											<# }); #>
                                        </div>
                                    </div>
									<# } #>
                                </div>
                            </div>
                            <div class="arry-btn mt-65 d-none d-lg-block">
                                <button class="arry-prev project-arry-prev"><i class="ti-angle-left"></i></button>
                                <button class="ms-3 active arry-next project-arry-next"><i
                                        class="ti-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-6">
							<# if(settings.mistri_project_one_items_list){ #>
                            <div class="swiper project-slider mt-5 d-block d-lg-none">
                                <div class="swiper-wrapper">
									<#
										_.each( settings.mistri_project_one_items_list, function( single_project_item, index ) { 
									#>
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="{{{single_project_item.mistri_project_one_slider_image.url}}}" alt="image">
                                        </div>
                                    </div>
									<#  }); #>
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