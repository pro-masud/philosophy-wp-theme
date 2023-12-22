<?php
class Mistri_Testimonial_One  extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_testimonial_one';
	}

	public function get_title() {
		return esc_html__( 'Mistri Testimonial One', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-testimonial';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'testimonial', 'one', 'section', 'slider'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_testimonial_one_heading',
			[
				'label' => esc_html__( 'Testimonial Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_testimonial_one_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'PUBLIC TESTIMONIAL', 'mistri' ),
			]
		);

		$this->add_control(
			'mistri_testimonial_one_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'public feedback about mistri', 'mistri' ),
			]
		);

		$this->add_control(
			'mistri_testimonial_title_showing',
			[
				'label' => esc_html__('Show heading', 'mistri'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('Show', 'mistri'),
				'label_off' => esc_html__('Hide', 'mistri'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_testimonial_one_slider_head',
			[
				'label' => esc_html__( 'Testimonial Items', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $testimonial_items = new \Elementor\Repeater();

		$testimonial_items->add_control(
			'mistri_testimonial_one_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Add New Testimonial', 'mistri' ),
			]
		);

		$testimonial_items->add_control(
			'mistri_testimonial_one_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
				'default' => esc_html__( 'Posuere luctus orci. Donec vitae mattis quam, vitae tempor arcu. Aenean non odio porttitor, convallis erat sit amet, facilisis velit. Nulla ornare convallis malesuada. Phasellus', 'mistri' ),
			]
		);

		$testimonial_items->add_control(
			'mistri_testimonial_one_author',
			[
				'label' => esc_html__( 'Author Name', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Luke Ross', 'mistri' ),
			]
		);

		$testimonial_items->add_control(
			'mistri_testimonial_one_job_title',
			[
				'label' => esc_html__( 'Author Job Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Senior engineer', 'mistri' ),
			]
		);

		$testimonial_items->add_control(
			'mistri_testimonial_one_author_image',
			[
				'label' => esc_html__( 'Choose Author Image', 'mistri' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_home_testimonial_list',
			[
				'label' => esc_html__( 'Testimonial List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $testimonial_items->get_controls(),
				'default' => [
					[
						'mistri_testimonial_one_title' => esc_html__( 'Power & Energy Sector', 'mistri' ),
					],
					[
						'mistri_testimonial_one_title' => esc_html__( 'Power & Energy Sector', 'mistri' ),
					]
				],
				'title_field' => '{{{ mistri_testimonial_one_title }}}',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'mistri_testimonial_one_background_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .testimonial',
			]
		);

        $this->end_controls_section();


		$this->start_controls_section(
			'mistri_testimonial_one_style_head',
			[
				'label' => esc_html__( 'Testimonail Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_testimonial_one_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial .section-header h5' => 'color: {{VALUE}}',
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_one_sub_title_typography',
				'selector' => '{{WRAPPER}}  .testimonial .section-header h5',
			]
		);

		$this->add_control(
			'mistri_testimonial_one_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial .section-header h2' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_one_title_typography',
				'selector' => '{{WRAPPER}}  .testimonial .section-header h2',
			]
		);


        $this->end_controls_section();


		$this->start_controls_section(
			'mistri_testimonial_one_item_style_head',
			[
				'label' => esc_html__( 'Testimonail Items', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_testimonial_one_item_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial .item h3' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_one_item_title_typography',
				'selector' => '{{WRAPPER}}  .testimonial .item h3',
			]
		);


		$this->add_control(
			'mistri_testimonial_one_item_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial .item p' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_one_item_desc_typography',
				'selector' => '{{WRAPPER}}  .testimonial .item p',
			]
		);


		$this->add_control(
			'mistri_testimonial_one_item_author_name_color',
			[
				'label' => esc_html__( 'Author Name Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial .item .author h4' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_one_item_author_name_typography',
				'selector' => '{{WRAPPER}}  .testimonial .item .author h4',
			]
		);

		$this->add_control(
			'mistri_testimonial_one_item_author_job_title_color',
			[
				'label' => esc_html__( 'Author Job Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial .item .author span' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_one_item_author_job_typography',
				'selector' => '{{WRAPPER}}  .testimonial .item .author span',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'mistri_testimonial_one_item_dots_style_head',
			[
				'label' => esc_html__( 'Testimonail Dots', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_testimonial_one_dot_border_color',
			[
				'label' => esc_html__( 'Section Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial .testimonial-wrp.bor' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .testimonial .image::before' => 'background-color: {{VALUE}}',
				]
			]
		);

		$this->add_control(
			'mistri_testimonial_one_image_icon_color',
			[
				'label' => esc_html__( 'Quote Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial .image .fa-quote-right' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'mistri_testimonial_one_item_style_heading',
			[
				'label' => esc_html__( 'Slider Dot Style', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->start_controls_tabs(
			'mistri_testimonial_one_item_style_start_tab'
		);

		$this->start_controls_tab(
			'mistri_testimonial_one_item_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'mistri' ),
			]
		);

		$this->add_control(
			'mistri_testimonial_one_item_style_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .testimonial .arry-btn button i'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_testimonial_one_item_style_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .testimonial .arry-btn button'  => 'background-color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_testimonial_one_item_style_icon_border_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .testimonial .arry-btn button'  => 'border-color: {{VALUE}}'
                ]
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'mistri_testimonial_one_item_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'mistri' ),
			]
		);

		$this->add_control(
			'mistri_testimonial_one_item_style_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .testimonial .arry-btn button:hover i'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_testimonial_one_item_style_icon_bg_hover_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .testimonial .arry-btn button:hover'  => 'background-color: {{VALUE}}'
                ]
			]
		);

		$this->add_control(
			'mistri_testimonial_one_item_style_icon_border_hover_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .testimonial .arry-btn button:hover'  => 'border-color: {{VALUE}}'
                ]
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_testimonial_one_sub_title = $settings['mistri_testimonial_one_sub_title'];
        $mistri_testimonial_one_title = $settings['mistri_testimonial_one_title'];
        $mistri_testimonial_title_showing = $settings['mistri_testimonial_title_showing'];
        $mistri_home_testimonial_list = $settings['mistri_home_testimonial_list'];

		$this->add_inline_editing_attributes('mistri_testimonial_one_sub_title', 'basic');
		$this->add_inline_editing_attributes('mistri_testimonial_one_title', 'basic');

		$this->add_render_attribute('mistri_testimonial_one_sub_title', [
			'class' => 'wow fadeInUp',
			'data-wow-duration' => '1.3s',
			'data-wow-delay' => '.3s',
		]);
		$this->add_render_attribute('mistri_testimonial_one_title', [
			'class' => 'wow fadeInUp',
			'data-wow-duration' => '1.6s',
			'data-wow-delay' => '.6s',
		]);
        ?>
		 <section class="testimonial section-padding">
            <div class="container">
                <div class="testimonial-wrp bor wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 mb-5 mb-lg-0">
							<?php if("yes" === $mistri_testimonial_title_showing): ?>
                            <div class="section-header mb-5">
                                <h5 <?php echo $this->get_render_attribute_string('mistri_testimonial_one_sub_title'); ?>><?php echo esc_html__($mistri_testimonial_one_sub_title, 'mistri'); ?></h5>
                                <h2 <?php echo $this->get_render_attribute_string('mistri_testimonial_one_title'); ?>><?php echo esc_html__($mistri_testimonial_one_title, 'mistri'); ?></h2>
                            </div>
							<?php endif; ?>
                            <div class="row">
                                <div class="col-lg-10">
									<?php if($mistri_home_testimonial_list): ?>
                                    <div class="swiper arry-wrp testimonial-slider">
                                        <div class="swiper-wrapper">
											<?php 
												foreach($mistri_home_testimonial_list as $index => $single_testimonail){

												$mistri_testimonial_one_title_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_one_title', 'mistri_home_testimonial_list', $index );
												$mistri_testimonial_one_desc = $this->get_repeater_setting_key( 'mistri_testimonial_one_desc', 'mistri_home_testimonial_list', $index );
												$mistri_testimonial_one_author_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_one_author', 'mistri_home_testimonial_list', $index );
												$mistri_testimonial_one_job_title_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_one_job_title', 'mistri_home_testimonial_list', $index );
												
												$this->add_inline_editing_attributes($mistri_testimonial_one_title_setting_key);
												$this->add_inline_editing_attributes($mistri_testimonial_one_desc);
												$this->add_inline_editing_attributes($mistri_testimonial_one_author_setting_key);
												$this->add_inline_editing_attributes($mistri_testimonial_one_job_title_setting_key);

												$title = $settings['mistri_home_testimonial_list'][$index]['mistri_testimonial_one_title'];
												$description = $settings['mistri_home_testimonial_list'][$index]['mistri_testimonial_one_desc'];
												$author_name = $settings['mistri_home_testimonial_list'][$index]['mistri_testimonial_one_author'];
												$author_job_title = $settings['mistri_home_testimonial_list'][$index]['mistri_testimonial_one_job_title'];
											?>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <h3 <?php $this->print_render_attribute_string( $mistri_testimonial_one_title_setting_key ); ?>><?php echo esc_html__($title, 'mistri'); ?></h3>
                                                    <p <?php $this->print_render_attribute_string( $mistri_testimonial_one_desc ); ?>><?php echo esc_html__($description, 'mistri'); ?></p>
                                                    <div class="author">
                                                        <h4 <?php $this->print_render_attribute_string( $mistri_testimonial_one_author_setting_key ); ?>><?php echo esc_html__($author_name, 'mistri'); ?></h4>
                                                        <span <?php $this->print_render_attribute_string( $mistri_testimonial_one_job_title_setting_key ); ?>><?php echo esc_html__($author_job_title, 'mistri'); ?></span>
                                                    </div>
                                                </div>
                                            </div>
											<?php } ?>
                                        </div>
                                        <div class="arry-btn">
                                            <button class="arry-prev testimonial-arry-prev"><i
                                                    class="ti-angle-left"></i></button>
                                            <button class="ms-3 active arry-next testimonial-arry-next"><i
                                                    class="ti-angle-right"></i></button>
                                        </div>
                                    </div>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
							<?php if($mistri_home_testimonial_list): ?>
                            <div class="image">
                                <div class="swiper testimonial-slider">
                                    <div class="swiper-wrapper">
										<?php foreach($mistri_home_testimonial_list as $index => $single_testimonail){ ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo esc_url($single_testimonail['mistri_testimonial_one_author_image']['url']); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                        </div>
										<?php } ?>
                                    </div>
                                </div>
                                <span></span>
                                <i class="fa-solid fa-quote-right"></i>
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
		view.addInlineEditingAttributes( 'mistri_testimonial_one_sub_title', 'basic' );
		view.addInlineEditingAttributes( 'mistri_testimonial_one_title', 'basic' );

		view.addRenderAttribute(
			'mistri_testimonial_one_sub_title',
			{
				'class': 'wow fadeInUp',
				'data-wow-duration': '1.3s',
				'data-wow-duration': '.3s',
			}
		);
		view.addRenderAttribute(
			'mistri_testimonial_one_title',
			{
				'class': 'wow fadeInUp',
				'data-wow-duration': '1.6s',
				'data-wow-duration': '.6s',
			}
		);
		#>
		<section class="testimonial section-padding">
            <div class="container">
                <div class="testimonial-wrp bor wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 mb-5 mb-lg-0">
							<# if("yes" === settings.mistri_testimonial_title_showing){ #>
                            <div class="section-header mb-5">
                                <h5 {{{view.getRenderAttributeString( 'mistri_testimonial_one_sub_title' )}}}>{{{settings.mistri_testimonial_one_sub_title}}}</h5>
                                <h2 {{{view.getRenderAttributeString( 'mistri_testimonial_one_title' )}}}>{{{settings.mistri_testimonial_one_title}}}</h2>
                            </div>
							<# } #>
                            <div class="row">
                                <div class="col-lg-10">
									<# if(settings.mistri_home_testimonial_list){ #>
                                    <div class="swiper arry-wrp testimonial-slider">
                                        <div class="swiper-wrapper">
											<#
											_.each( settings.mistri_home_testimonial_list, function( single_testimonail, index ) { 
												var mistri_testimonial_one_title_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_one_title', 'mistri_home_testimonial_list', index );
												var mistri_testimonial_one_desc_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_one_desc', 'mistri_home_testimonial_list', index );
												var mistri_testimonial_one_author_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_one_author', 'mistri_home_testimonial_list', index );
												var mistri_testimonial_one_job_title_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_one_job_title', 'mistri_home_testimonial_list', index );

												view.addInlineEditingAttributes( mistri_testimonial_one_title_setting_key );
												view.addInlineEditingAttributes( mistri_testimonial_one_desc_setting_key );
												view.addInlineEditingAttributes( mistri_testimonial_one_author_setting_key );
												view.addInlineEditingAttributes( mistri_testimonial_one_job_title_setting_key );
											#>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <h3 {{{ view.getRenderAttributeString( mistri_testimonial_one_title_setting_key ) }}}>{{{single_testimonail.mistri_testimonial_one_title}}}</h3>
                                                    <p {{{ view.getRenderAttributeString( mistri_testimonial_one_desc_setting_key ) }}}>{{{single_testimonail.mistri_testimonial_one_desc}}}</p>
                                                    <div class="author">
                                                        <h4 {{{ view.getRenderAttributeString( mistri_testimonial_one_author_setting_key ) }}}>{{{single_testimonail.mistri_testimonial_one_author}}}</h4>
                                                        <span {{{ view.getRenderAttributeString( mistri_testimonial_one_job_title_setting_key ) }}}>{{{single_testimonail.mistri_testimonial_one_job_title}}}</span>
                                                    </div>
                                                </div>
                                            </div>
											<# } ); #>
                                        </div>
                                        <div class="arry-btn">
                                            <button class="arry-prev testimonial-arry-prev"><i
                                                    class="ti-angle-left"></i></button>
                                            <button class="ms-3 active arry-next testimonial-arry-next"><i
                                                    class="ti-angle-right"></i></button>
                                        </div>
                                    </div>
									<# } #>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
							<# if(settings.mistri_home_testimonial_list){ #>
                            <div class="image">
                                <div class="swiper testimonial-slider">
                                    <div class="swiper-wrapper">
										<#
											_.each( settings.mistri_home_testimonial_list, function( single_testimonail, index ) { 	
										#>
                                        <div class="swiper-slide">
                                            <img src="{{{single_testimonail.mistri_testimonial_one_author_image.url}}}" alt="image">
                                        </div>
										<# }); #>
                                    </div>
                                </div>
                                <span></span>
                                <i class="fa-solid fa-quote-right"></i>
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