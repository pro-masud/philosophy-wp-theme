<?php
class Mistri_Testimonial_Two  extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_testimonial_two';
	}

	public function get_title() {
		return esc_html__( 'Mistri Testimonial Two', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-testimonial';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'testimonial', 'section', 'slider', 'two'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_testimonial_two_head',
			[
				'label' => esc_html__( 'Testimonial Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_testimonial_two_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'PUBLIC TESTIMONIAL', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_testimonial_two_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'public feedback about mistri', 'mistri' ),
                'label_block'   => true,
			]
		);

		$this->add_control(
			'mistri_testimonial_two_head_show',
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
			'mistri_testimonial_images_head',
			[
				'label' => esc_html__( 'Testimonial Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_testimonial_image',
			[
				'label' => esc_html__( 'Choose Testimonial Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_testimonial_image_show',
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
			'mistri_testimonial_stroke_text_image',
			[
				'label' => esc_html__( 'Choose Testimonial Stroke Text Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> "before",
			]
		);

		$this->add_control(
			'mistri_testimonial_stroke_text_image_show',
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
			'mistri_testimonial_bg_image',
			[
				'label' => esc_html__( 'Choose Testimonial Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> "before",
			]
		);

		$this->add_control(
			'mistri_testimonial_bg_image_show',
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
			'mistri_testimonial_slider_head',
			[
				'label' => esc_html__( 'Testimonial Items', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $testimonial_slider = new \Elementor\Repeater();

        $testimonial_slider->add_control(
			'mistri_testimonial_slider_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Add New Testimonial', 'mistri' ),
                'label_block'   => true,
			]
		);

        $testimonial_slider->add_control(
			'mistri_testimonial_slider_description',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'posuere luctus orci. Dtwoc vitae mattis quam, vitae tempor arcu. Aenean non odio porttitor, convallis erat sit amet, facilisis velit. Nulla ornare convallis malesuada. Phasellus molestie, ipsum ac fringilla.', 'mistri' )
			]
		);

        $testimonial_slider->add_control(
			'mistri_testimonial_slider_author_name',
			[
				'label' => esc_html__( 'Author Name', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Luke Ross', 'mistri' ),
                'label_block'   => true,
			]
		);

        $testimonial_slider->add_control(
			'mistri_testimonial_slider_author_job_title',
			[
				'label' => esc_html__( 'Author Job Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Senior engineer', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_testimonial_two_slider_list',
			[
				'label' => esc_html__( 'Testimonial List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $testimonial_slider->get_controls(),
				'default' => [
					[
						'mistri_testimonial_slider_title' => esc_html__( 'Power & Energy Sector', 'mistri' ),
					],
					[
						'mistri_testimonial_slider_title' => esc_html__( 'Power & Energy Sector', 'mistri' ),
					],
					[
						'mistri_testimonial_slider_title' => esc_html__( 'Power & Energy Sector', 'mistri' ),
					],
				],
				'title_field' => '{{{ mistri_testimonial_slider_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_testimonial_shape_head',
			[
				'label' => esc_html__( 'Shape Image', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_testimonial_shape_image',
			[
				'label' => esc_html__( 'Choose Shape Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_testimonial_shape_image_show',
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
			'mistri_testimonial_section_background_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_testimonial_section_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .testimonial',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'mistri_testimonial_two_style_about_head',
			[
				'label' => esc_html__( 'About Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_testimonial_two_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .testimonial.testimonial-two .section-header h5 '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_two_sub_title_fonts',
				'selector' => '{{WRAPPER}} .testimonial.testimonial-two .section-header h5',
			]
		);


		$this->add_control(
			'mistri_testimonial_two_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-two .section-header h2' => 'color: {{VALUE}}',
				],
				'separator'	=> "before"
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_two_title_fonts',
				'selector' => '{{WRAPPER}} .testimonial.testimonial-two .section-header h2',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'mistri_testimonial_two_item_style_head',
			[
				'label' => esc_html__( 'Testimonail Items', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_testimonial_two_item_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-two .item h3' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_two_item_title_typography',
				'selector' => '{{WRAPPER}}  .testimonial.testimonial-two .item h3',
			]
		);


		$this->add_control(
			'mistri_testimonial_two_item_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-two .item p' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_two_item_desc_typography',
				'selector' => '{{WRAPPER}}  .testimonial.testimonial-two .item p',
			]
		);


		$this->add_control(
			'mistri_testimonial_two_item_author_name_color',
			[
				'label' => esc_html__( 'Author Name Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-two .item .author h4' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_two_item_author_name_typography',
				'selector' => '{{WRAPPER}}  .testimonial.testimonial-two .item .author h4',
			]
		);

		$this->add_control(
			'mistri_testimonial_two_item_author_job_title_color',
			[
				'label' => esc_html__( 'Author Job Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-two .item .author span' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_two_item_author_job_typography',
				'selector' => '{{WRAPPER}}  .testimonial.testimonial-two .item .author span',
			]
		);

		$this->add_control(
			'mistri_testimonial_two_quote_color',
			[
				'label' => esc_html__( 'Quote Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-two .women .wrp::before' => 'color: {{VALUE}}',
				],
				'separator'		=> 'before',
			]
		);

		$this->add_control(
			'mistri_testimonial_two_quote_bg_color',
			[
				'label' => esc_html__( 'Quote Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-two .women .wrp::before' => 'background-color: {{VALUE}}',
				]
			]
		);

		$this->add_control(
			'mistri_testimonial_two_slider_dot_color_head',
			[
				'label' => esc_html__( 'Dots Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'mistri_testimonial_two_slider_dot_normal_color',
			[
				'label' => esc_html__( 'Normal Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-two .dot.theme .swiper-pagination-bullet::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .testimonial.testimonial-two .dot.theme .swiper-pagination-bullet' => 'border-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'mistri_testimonial_two_slider_dot_active_color',
			[
				'label' => esc_html__( 'Active Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-two .dot.theme .swiper-pagination-bullet.swiper-pagination-bullet-active::before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .testimonial.testimonial-two .dot.theme .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'border-color: {{VALUE}}',
				],
			]
		);

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_testimonial_two_sub_title = $settings['mistri_testimonial_two_sub_title'];
        $mistri_testimonial_two_title = $settings['mistri_testimonial_two_title'];
        $mistri_testimonial_two_head_show = $settings['mistri_testimonial_two_head_show'];
        $mistri_testimonial_two_slider_list = $settings['mistri_testimonial_two_slider_list'];
		
        $mistri_testimonial_image = $settings['mistri_testimonial_image']['url'];
        $mistri_testimonial_image_show = $settings['mistri_testimonial_image_show'];
        $mistri_testimonial_stroke_text_image = $settings['mistri_testimonial_stroke_text_image']['url'];
        $mistri_testimonial_stroke_text_image_show = $settings['mistri_testimonial_stroke_text_image_show'];
        $mistri_testimonial_bg_image = $settings['mistri_testimonial_bg_image']['url'];
        $mistri_testimonial_bg_image_show = $settings['mistri_testimonial_bg_image_show'];
		
        $mistri_testimonial_shape_image = $settings['mistri_testimonial_shape_image']['url'];
        $mistri_testimonial_shape_image_show = $settings['mistri_testimonial_shape_image_show'];

		$this->add_inline_editing_attributes('mistri_testimonial_two_sub_title', 'basic');
		$this->add_inline_editing_attributes('mistri_testimonial_two_title', 'basic');

		$this->add_render_attribute('mistri_testimonial_two_sub_title', [
			'class' => 'wow fadeInUp',
			'data-wow-duration' => '1.3s',
			'data-wow-delay' => '.3s',
		]);
		$this->add_render_attribute('mistri_testimonial_two_title', [
			'class' => 'wow fadeInUp',
			'data-wow-duration' => '1.6s',
			'data-wow-delay' => '.6s',
		]);
        ?>
        <section class="testimonial testimonial-two sub-bg section-padding">
		<?php if("yes" ===  $mistri_testimonial_bg_image_show): ?>
            <div class="bg-image d-ntwo d-lg-block" style="background-image: url(<?php echo esc_attr__($mistri_testimonial_bg_image, 'mistri'); ?>);"></div>
		<?php endif; ?>
		<?php if("yes" ===  $mistri_testimonial_image_show): ?>
            <div class="women wow bounceInRight d-ntwo d-lg-block" data-wow-duration="1.3s" data-wow-delay=".7s">
                <div class="wrp">
                    <img src="<?php echo esc_url($mistri_testimonial_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                </div>
            </div>
		<?php endif; ?>
		<?php if("yes" ===  $mistri_testimonial_stroke_text_image_show): ?>
            <div class="stroke-text wow slideInRight d-ntwo d-lg-block" data-wow-duration=".3s" data-wow-delay=".3s">
                <img src="<?php echo esc_url($mistri_testimonial_stroke_text_image); ?>"  alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
			<?php endif; ?>
			<?php if("yes" ===  $mistri_testimonial_shape_image_show): ?>
            <div class="gaps-primary2 d-ntwo d-sm-block float-bob-x">
                <img src="<?php echo esc_url($mistri_testimonial_shape_image); ?>"  alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
			<?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
						<?php if("yes" ===  $mistri_testimonial_two_head_show): ?>
                        <div class="section-header mb-5">
                            <h5 <?php echo $this->get_render_attribute_string('mistri_testimonial_two_sub_title'); ?> ><?php echo esc_html__($mistri_testimonial_two_sub_title, 'mistri'); ?></h5>
                            <h2 <?php echo $this->get_render_attribute_string('mistri_testimonial_two_title'); ?> ><?php echo esc_html__($mistri_testimonial_two_title, 'mistri'); ?></h2>
                        </div>
						<?php endif; ?>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="swiper arry-wrp testimonial-slider2">
                                    <div class="swiper-wrapper">
                                    <?php
                                        foreach($mistri_testimonial_two_slider_list as $index => $single_slider){

                                            // inline editing method and property
											$mistri_testimonial_slider_title_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_slider_title', 'mistri_testimonial_two_slider_list', $index );
											$mistri_testimonial_slider_description_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_slider_description', 'mistri_testimonial_two_slider_list', $index );
											$mistri_testimonial_slider_author_name_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_slider_author_name', 'mistri_testimonial_two_slider_list', $index );
											$mistri_testimonial_slider_author_job_title_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_slider_author_job_title', 'mistri_testimonial_two_slider_list', $index );
											
											$this->add_inline_editing_attributes($mistri_testimonial_slider_title_setting_key);
											$this->add_inline_editing_attributes($mistri_testimonial_slider_description_setting_key);
											$this->add_inline_editing_attributes($mistri_testimonial_slider_author_name_setting_key);
											$this->add_inline_editing_attributes($mistri_testimonial_slider_author_job_title_setting_key);

											$title = $settings['mistri_testimonial_two_slider_list'][$index]['mistri_testimonial_slider_title'];
											$description = $settings['mistri_testimonial_two_slider_list'][$index]['mistri_testimonial_slider_description'];
											$author_name = $settings['mistri_testimonial_two_slider_list'][$index]['mistri_testimonial_slider_author_name'];
											$job_title = $settings['mistri_testimonial_two_slider_list'][$index]['mistri_testimonial_slider_author_job_title'];
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <h3 <?php $this->print_render_attribute_string( $mistri_testimonial_slider_title_setting_key ); ?>><?php echo esc_html__($title, 'mistri'); ?></h3>
                                                <p <?php $this->print_render_attribute_string( $mistri_testimonial_slider_description_setting_key ); ?>><?php echo esc_html__($description, 'mistri'); ?></p>
                                                <div class="author">
                                                    <h4 <?php $this->print_render_attribute_string( $mistri_testimonial_slider_author_name_setting_key ); ?>><?php echo esc_html__($author_name, 'mistri'); ?></h4>
                                                    <span <?php $this->print_render_attribute_string( $mistri_testimonial_slider_author_job_title_setting_key ); ?>><?php echo esc_html__($job_title, 'mistri'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="arry-btn">
                                        <div class="slider-info">
                                            <div class="dot theme testimonial-dot"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                    </div>
                </div>
            </div>
        </section>
        <?php 
	}

    protected function content_template() {
        ?>
        <#
            view.addInlineEditingAttributes('mistri_testimonial_two_sub_title', 'basic');
            view.addInlineEditingAttributes('mistri_testimonial_two_title', 'basic');

            view.addRenderAttribute(
				'mistri_testimonial_two_sub_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.3s',
					'data-wow-duration': '.3s',
				}
			);
            view.addRenderAttribute(
				'mistri_testimonial_two_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.6s',
					'data-wow-duration': '.6s',
				}
			);
        #>
        <section class="testimonial testimonial-two sub-bg section-padding">
			<# if("yes" === settings.mistri_testimonial_bg_image_show){ #>
            <div class="bg-image d-ntwo d-lg-block" style="background-image: url({{settings.mistri_testimonial_bg_image.url}});"></div>
			<# } #>
			<# if("yes" === settings.mistri_testimonial_image_show){ #>
            <div class="women wow bounceInRight d-ntwo d-lg-block" data-wow-duration="1.3s" data-wow-delay=".7s">
                <div class="wrp">
                    <img src="{{settings.mistri_testimonial_image.url}}" alt="">
                </div>
            </div>
			<# } #>
			<# if("yes" === settings.mistri_testimonial_stroke_text_image_show){ #>
            <div class="stroke-text wow slideInRight d-ntwo d-lg-block" data-wow-duration=".3s" data-wow-delay=".3s">
                <img src="{{settings.mistri_testimonial_stroke_text_image.url}}" alt="">
            </div>
			<# } #>
			<# if("yes" === settings.mistri_testimonial_shape_image_show){ #>
            <div class="gaps-primary2 d-ntwo d-sm-block float-bob-x">
                <img src="{{settings.mistri_testimonial_shape_image.url}}" alt="">
            </div>
			<# } #>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
						<# if("yes" === settings.mistri_testimonial_two_head_show){ #>
                        <div class="section-header mb-5">
                            <h5 {{{view.getRenderAttributeString('mistri_testimonial_two_sub_title')}}}>{{{settings.mistri_testimonial_two_sub_title}}}</h5>
                            <h2 {{{view.getRenderAttributeString('mistri_testimonial_two_title')}}}>{{{settings.mistri_testimonial_two_title}}}</h2>
                        </div>
						<# } #>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="swiper arry-wrp testimonial-slider2">
                                    <div class="swiper-wrapper">
                                        <#
										_.each( settings.$mistri_testimonial_two_slider_list, function( single_slider, index ) { 
											var mistri_testimonial_slider_title_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_slider_title', '$mistri_testimonial_two_slider_list', index );
											var mistri_testimonial_slider_description_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_slider_description', '$mistri_testimonial_two_slider_list', index );
											var mistri_testimonial_slider_author_name_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_slider_author_name', '$mistri_testimonial_two_slider_list', index );
											var mistri_testimonial_slider_author_job_title_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_slider_author_job_title', '$mistri_testimonial_two_slider_list', index );

											view.addInlineEditingAttributes( mistri_testimonial_slider_title_setting_key );
											view.addInlineEditingAttributes( mistri_testimonial_slider_description_setting_key );
											view.addInlineEditingAttributes( mistri_testimonial_slider_author_name_setting_key );
											view.addInlineEditingAttributes( mistri_testimonial_slider_author_job_title_setting_key );
                                        #>
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <h3  {{{ view.getRenderAttributeString( mistri_testimonial_slider_title_setting_key ) }}}>{{{single_slider.mistri_testimonial_slider_title}}}</h3>
                                                <p  {{{ view.getRenderAttributeString( mistri_testimonial_slider_description_setting_key ) }}}>{{{single_slider.mistri_testimonial_slider_description}}}</p>
                                                <div class="author">
                                                    <h4  {{{ view.getRenderAttributeString( mistri_testimonial_slider_author_name_setting_key ) }}}>{{{single_slider.mistri_testimonial_slider_author_name}}}</h4>
                                                    <span  {{{ view.getRenderAttributeString( mistri_testimonial_slider_author_job_title_setting_key ) }}}>{{{single_slider.mistri_testimonial_slider_author_job_title}}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <# } ); #>
                                    </div>
                                    <div class="arry-btn">
                                        <div class="slider-info">
                                            <div class="dot theme testimonial-dot"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                    </div>
                </div>
            </div>
        </section>
        <?php 
    }
}