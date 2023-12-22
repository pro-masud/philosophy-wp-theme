<?php
class Mistri_Testimonial_Three  extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_testimonial_three';
	}

	public function get_title() {
		return esc_html__( 'Mistri Testimonial Three', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-testimonial';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'testimonial', 'section', 'slider', 'three'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_testimonial_three_head',
			[
				'label' => esc_html__( 'Testimonial Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_testimonial_three_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'PUBLIC TESTIMONIAL', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_testimonial_three_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'public feedback about mistri', 'mistri' ),
                'label_block'   => true,
			]
		);

		$this->add_control(
			'mistri_testimonial_three_head_show',
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
			'mistri_testimonial_three_slider_head',
			[
				'label' => esc_html__( 'Testimonial Slider', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $testimonial_slider = new \Elementor\Repeater();

        $testimonial_slider->add_control(
			'mistri_testimonial_three_slider_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Add New Testimonial', 'mistri' ),
                'label_block'   => true,
			]
		);

        $testimonial_slider->add_control(
			'mistri_testimonial_three_slider_description',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'posuere luctus orci. Donec vitae mattis quam, vitae tempor arcu. Aenean non odio porttitor, convallis erat sit amet, facilisis velit. Nulla ornare convallis malesuada. Phasellus molestie, ipsum ac fringilla.', 'mistri' )
			]
		);

        $testimonial_slider->add_control(
			'mistri_testimonial_three_slider_author_name',
			[
				'label' => esc_html__( 'Author Name', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Luke Ross', 'mistri' ),
                'label_block'   => true,
			]
		);

        $testimonial_slider->add_control(
			'mistri_testimonial_three_slider_author_job_title',
			[
				'label' => esc_html__( 'Author Job Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Senior engineer', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_testimonial_three_slider_list',
			[
				'label' => esc_html__( 'Testimonial List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $testimonial_slider->get_controls(),
				'default' => [
					[
						'mistri_testimonial_three_slider_title' => esc_html__( 'Power & Energy Sector ', 'mistri' ),
					],
					[
						'mistri_testimonial_three_slider_title' => esc_html__( 'Power & Energy Sector ', 'mistri' ),
					]
				],
				'title_field' => '{{{ mistri_testimonial_three_slider_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_testimonial_three_images_head',
			[
				'label' => esc_html__( 'Testimonial Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_testimonial_three_image_one',
			[
				'label' => esc_html__( 'Choose Testimonial Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_testimonial_three_image_one_show',
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
			'mistri_testimonial_three_image_two',
			[
				'label' => esc_html__( 'Choose Testimonial Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> 'before',
			]
		);

		$this->add_control(
			'mistri_testimonial_three_image_two_show',
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
			'mistri_testimonial_three_image_three',
			[
				'label' => esc_html__( 'Choose Testimonial image Three', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> 'before',
			]
		);

		$this->add_control(
			'mistri_testimonial_three_image_three_show',
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
			'mistri_testimonial_three_background_image',
			[
				'label' => esc_html__( 'Choose Testimonial Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> 'before'
			]
		);

		$this->add_control(
			'mistri_testimonial_three_background_image_show',
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
			'mistri_testimonial_three_shape_head',
			[
				'label' => esc_html__( 'Shape Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_testimonial_three_shape_image_one',
			[
				'label' => esc_html__( 'Choose Shape Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_testimonial_three_shape_image_one_show',
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
			'mistri_testimonial_three_shape_image_two',
			[
				'label' => esc_html__( 'Choose shape Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	 => 'before'
			]
		);

		$this->add_control(
			'mistri_testimonial_three_shape_image_two_show',
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
			'mistri_testimonial_three_section_background_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_testimonial_three_section_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .testimonial.sub-bg ',
			]
		);

        $this->end_controls_section();

		
		$this->start_controls_section(
			'mistri_testimonial_three_style_head',
			[
				'label' => esc_html__( 'Testimonial Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_testimonial_three_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .testimonial.testimonial-three.sub-bg .section-header h5 '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_three_sub_title_fonts',
				'selector' => '{{WRAPPER}} .testimonial.testimonial-three.sub-bg .section-header h5',
			]
		);


		$this->add_control(
			'mistri_testimonial_three_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-three.sub-bg .section-header h2' => 'color: {{VALUE}}',
				],
				'separator'	=> "before"
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_three_title_fonts',
				'selector' => '{{WRAPPER}} .testimonial.testimonial-three.sub-bg .section-header h2',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'mistri_testimonial_three_item_style_head',
			[
				'label' => esc_html__( 'Testimonail Items', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_testimonial_three_item_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-three.sub-bg .item h3' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_three_item_title_typography',
				'selector' => '{{WRAPPER}}  .testimonial.testimonial-three.sub-bg .item h3',
			]
		);


		$this->add_control(
			'mistri_testimonial_three_item_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-three.sub-bg .item p' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_three_item_desc_typography',
				'selector' => '{{WRAPPER}}  .testimonial.testimonial-three.sub-bg .item p',
			]
		);


		$this->add_control(
			'mistri_testimonial_three_item_author_name_color',
			[
				'label' => esc_html__( 'Author Name Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-three.sub-bg .item .author h4' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_three_item_author_name_typography',
				'selector' => '{{WRAPPER}}  .testimonial.testimonial-three.sub-bg .item .author h4',
			]
		);

		$this->add_control(
			'mistri_testimonial_three_item_author_job_title_color',
			[
				'label' => esc_html__( 'Author Job Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-three.sub-bg .item .author span' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_testimonial_three_item_author_job_typography',
				'selector' => '{{WRAPPER}}  .testimonial.testimonial-three.sub-bg .item .author span',
			]
		);

		$this->add_control(
			'mistri_testimonial_three_quote_color',
			[
				'label' => esc_html__( 'Quote Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-three .testimonial-three-image i' => 'color: {{VALUE}}',
				],
				'separator'		=> 'before',
			]
		);

		$this->add_control(
			'mistri_testimonial_three_quote_bg_color',
			[
				'label' => esc_html__( 'Quote Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial.testimonial-three .testimonial-three-image i' => 'background-color: {{VALUE}}',
				]
			]
		);

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_testimonial_three_sub_title = $settings['mistri_testimonial_three_sub_title'];
        $mistri_testimonial_three_title = $settings['mistri_testimonial_three_title'];
        $mistri_testimonial_three_head_show = $settings['mistri_testimonial_three_head_show'];
		
        $mistri_testimonial_three_slider_list = $settings['mistri_testimonial_three_slider_list'];
        
        $mistri_testimonial_three_image_one = $settings['mistri_testimonial_three_image_one']['url'];
        $mistri_testimonial_three_image_one_show = $settings['mistri_testimonial_three_image_one_show'];
        $mistri_testimonial_three_image_two = $settings['mistri_testimonial_three_image_two']['url'];
        $mistri_testimonial_three_image_two_show = $settings['mistri_testimonial_three_image_two_show'];
        $mistri_testimonial_three_image_three = $settings['mistri_testimonial_three_image_three']['url'];
        $mistri_testimonial_three_image_three_show = $settings['mistri_testimonial_three_image_three_show'];
        $mistri_testimonial_three_background_image = $settings['mistri_testimonial_three_background_image']['url'];
        $mistri_testimonial_three_background_image_show = $settings['mistri_testimonial_three_background_image_show'];
		
        $mistri_testimonial_three_shape_image_one = $settings['mistri_testimonial_three_shape_image_one']['url'];
        $mistri_testimonial_three_shape_image_one_show = $settings['mistri_testimonial_three_shape_image_one_show'];
        $mistri_testimonial_three_shape_image_two = $settings['mistri_testimonial_three_shape_image_two']['url'];
        $mistri_testimonial_three_shape_image_two_show = $settings['mistri_testimonial_three_shape_image_two_show'];

		$this->add_inline_editing_attributes('mistri_testimonial_three_sub_title', 'basic');
		$this->add_inline_editing_attributes('mistri_testimonial_three_title', 'basic');

		$this->add_render_attribute('mistri_testimonial_three_sub_title', [
			'class' => 'wow fadeInUp',
			'data-wow-duration' => '1.3s',
			'data-wow-delay' => '.3s',
		]);
		$this->add_render_attribute('mistri_testimonial_three_title', [
			'class' => 'wow fadeInUp',
			'data-wow-duration' => '1.6s',
			'data-wow-delay' => '.6s',
		]);
        ?>

        <section class="testimonial testimonial-three sub-bg section-padding">
			<?php if("yes" === $mistri_testimonial_three_image_one_show): ?>
			<div class="man wow bounceInRight d-none d-lg-block" data-wow-duration="1.3s" data-wow-delay=".7s">
                <img src="<?php echo esc_url($mistri_testimonial_three_image_one); ?>"  alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
			<?php endif; ?>
			<?php if("yes" === $mistri_testimonial_three_shape_image_one_show): ?>
            <div class="gaps-primary d-none d-sm-block float-bob-x">
                <img src="<?php echo esc_url( $mistri_testimonial_three_shape_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
			<?php endif; ?>
			<?php if("yes" === $mistri_testimonial_three_shape_image_two_show): ?>
            <div class="gaps-primary2 d-none d-sm-block float-bob-x">
                <img src="<?php echo esc_url( $mistri_testimonial_three_shape_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
			<?php endif; ?>
            <div class="container">
                <div class="row g-4 align-items-center justify-content-between">
                    <div class="col-lg-7">
						<?php if("yes" === $mistri_testimonial_three_head_show): ?>
                        <div class="section-header mb-5">
                            <h5 <?php echo $this->get_render_attribute_string('mistri_testimonial_three_sub_title'); ?> ><?php echo esc_html__($mistri_testimonial_three_sub_title, 'mistri'); ?></h5>
                            <h2 <?php echo $this->get_render_attribute_string('mistri_testimonial_three_title'); ?> ><?php echo esc_html__($mistri_testimonial_three_title, 'mistri'); ?></h2>
                        </div>
						<?php endif; ?>
						<div class="swiper arry-wrp testimonial-slider2">
							<div class="swiper-wrapper">
							<?php
								foreach($mistri_testimonial_three_slider_list as $index => $single_slider){
									$mistri_testimonial_three_slider_title_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_three_slider_title', 'mistri_testimonial_three_slider_list', $index );
									$mistri_testimonial_three_slider_description_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_three_slider_description', 'mistri_testimonial_three_slider_list', $index );
									$mistri_testimonial_three_slider_author_name_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_three_slider_author_name', 'mistri_testimonial_three_slider_list', $index );
									$mistri_testimonial_three_slider_author_job_title_setting_key = $this->get_repeater_setting_key( 'mistri_testimonial_three_slider_author_job_title', 'mistri_testimonial_three_slider_list', $index );
									
									$this->add_inline_editing_attributes($mistri_testimonial_three_slider_title_setting_key);
									$this->add_inline_editing_attributes($mistri_testimonial_three_slider_description_setting_key);
									$this->add_inline_editing_attributes($mistri_testimonial_three_slider_author_name_setting_key);
									$this->add_inline_editing_attributes($mistri_testimonial_three_slider_author_job_title_setting_key);

									$title = $settings['mistri_testimonial_three_slider_list'][$index]['mistri_testimonial_three_slider_title'];
									$description = $settings['mistri_testimonial_three_slider_list'][$index]['mistri_testimonial_three_slider_description'];
									$author_name = $settings['mistri_testimonial_three_slider_list'][$index]['mistri_testimonial_three_slider_author_name'];
									$job_title = $settings['mistri_testimonial_three_slider_list'][$index]['mistri_testimonial_three_slider_author_job_title'];
							?>
								<div class="swiper-slide">
									<div class="item">
										<h3 <?php $this->print_render_attribute_string( $mistri_testimonial_three_slider_title_setting_key ); ?>><?php echo esc_html__($title, 'mistri'); ?></h3>
										<p <?php $this->print_render_attribute_string( $mistri_testimonial_three_slider_description_setting_key ); ?>><?php echo esc_html__($description, 'mistri'); ?></p>
										<div class="author">
											<h4 <?php $this->print_render_attribute_string( $mistri_testimonial_three_slider_author_name_setting_key ); ?>><?php echo esc_html__($author_name, 'mistri'); ?></h4>
											<span <?php $this->print_render_attribute_string( $mistri_testimonial_three_slider_author_job_title_setting_key ); ?>><?php echo esc_html__($job_title, 'mistri'); ?></span>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
                    </div>
                    <div class="col-lg-5">
						<div class="testimonial-three-image d-none d-lg-block">
							<?php if("yes" === $mistri_testimonial_three_background_image_show): ?>
                            <img src="<?php echo esc_url($mistri_testimonial_three_background_image); ?>"  alt="<?php echo esc_attr__('image', 'mistri'); ?>">
							<?php endif; ?>
                            <?php if("yes" === $mistri_testimonial_three_image_two_show): ?>
							<div class="img1 scale-animation">
                                <img src="<?php echo esc_url($mistri_testimonial_three_image_two); ?>"  alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                            </div>
							<?php endif; ?>
							<?php if("yes" === $mistri_testimonial_three_image_three_show): ?>
                            <div class="img2 scale-animation">
                                <img src="<?php echo esc_url($mistri_testimonial_three_image_three); ?>"  alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                            </div>
							<?php endif; ?>
                            <i class="fa-solid wow bounceIn fa-quote-right"></i>
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
            view.addInlineEditingAttributes('mistri_testimonial_three_sub_title', 'basic');
            view.addInlineEditingAttributes('mistri_testimonial_three_title', 'basic');

            view.addRenderAttribute(
				'mistri_testimonial_three_sub_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.3s',
					'data-wow-duration': '.3s',
				}
			);
            view.addRenderAttribute(
				'mistri_testimonial_three_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.6s',
					'data-wow-duration': '.6s',
				}
			);
        #>
        <section class="testimonial testimonial-three sub-bg section-padding">
			<# if("yes" === settings.mistri_testimonial_three_image_one_show){ #>
			<div class="man wow bounceInRight d-none d-lg-block" data-wow-duration="1.3s" data-wow-delay=".7s">
				<img src="{{{settings.mistri_testimonial_three_image_one.url}}}" alt="image">
			</div>
			<# } #>
			<# if("yes" === settings.mistri_testimonial_three_shape_image_one_show){ #>
			<div class="gaps-primary d-none d-sm-block float-bob-x">
				<img src="{{{settings.mistri_testimonial_three_shape_image_one.url}}}" alt="image">
			</div>
			<# } #>
			<# if("yes" === settings.mistri_testimonial_three_shape_image_two_show){ #>
			<div class="gaps-primary2 d-none d-sm-block float-bob-x">
				<img src="{{{settings.mistri_testimonial_three_shape_image_two.url}}}" alt="image">
			</div>
			<# } #>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
						<# if("yes" === settings.mistri_testimonial_three_head_show){ #>
                        <div class="section-header mb-5">
                            <h5 {{{view.getRenderAttributeString('mistri_testimonial_three_sub_title')}}}>{{{settings.mistri_testimonial_three_sub_title}}}</h5>
                            <h2 {{{view.getRenderAttributeString('mistri_testimonial_three_title')}}}>{{{settings.mistri_testimonial_three_title}}}</h2>
                        </div>
						<# } #>
						<div class="swiper arry-wrp testimonial-slider2">
							<div class="swiper-wrapper">
								<#
									_.each( settings.mistri_home_testimonial_list, function( single_slider, index ) { 
										var mistri_testimonial_three_slider_title_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_three_slider_title', 'mistri_home_testimonial_list', index );
										var mistri_testimonial_three_slider_description_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_three_slider_description', 'mistri_home_testimonial_list', index );
										var mistri_testimonial_three_slider_author_name_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_three_slider_author_name', 'mistri_home_testimonial_list', index );
										var mistri_testimonial_three_slider_author_job_title_setting_key = view.getRepeaterSettingKey( 'mistri_testimonial_three_slider_author_job_title', 'mistri_home_testimonial_list', index );

										view.addInlineEditingAttributes( mistri_testimonial_three_slider_title_setting_key );
										view.addInlineEditingAttributes( mistri_testimonial_three_slider_description_setting_key );
										view.addInlineEditingAttributes( mistri_testimonial_three_slider_author_name_setting_key );
										view.addInlineEditingAttributes( mistri_testimonial_three_slider_author_job_title_setting_key );
								#>
								<div class="swiper-slide">
									<div class="item">
										<h3  {{{ view.getRenderAttributeString( mistri_testimonial_three_slider_title_setting_key ) }}}>{{{single_slider.mistri_testimonial_three_slider_title}}}</h3>
										<p  {{{ view.getRenderAttributeString( mistri_testimonial_three_slider_description_setting_key ) }}}>{{{single_slider.mistri_testimonial_three_slider_description}}}</p>
										<div class="author">
											<h4  {{{ view.getRenderAttributeString( mistri_testimonial_three_slider_author_name_setting_key ) }}}>{{{single_slider.mistri_testimonial_three_slider_author_name}}}</h4>
											<span  {{{ view.getRenderAttributeString( mistri_testimonial_three_slider_author_job_title_setting_key ) }}}>{{{single_slider.mistri_testimonial_three_slider_author_job_title}}}</span>
										</div>
									</div>
								</div>
								<# } ); #>
							</div>
                        </div>
                    </div>
                    <div class="col-lg-5">
						<div class="testimonial-three-image d-none d-lg-block">
							<# if("yes" === settings.mistri_testimonial_three_background_image_show){ #>
                            <img src="{{{settings.mistri_testimonial_three_background_image.url}}}" alt="image">
							<# } #>
							<# if("yes" === settings.mistri_testimonial_three_image_two_show){ #>
                            <div class="img1 scale-animation">
                                <img src="{{{settings.mistri_testimonial_three_image_two.url}}}" alt="image">
                            </div>
							<# } #>
							<# if("yes" === settings.mistri_testimonial_three_image_three_show){ #>
                            <div class="img2 scale-animation">
                                <img src="{{{settings.mistri_testimonial_three_image_three.url}}}" alt="image">
                            </div>
							<# } #>
                            <i class="fa-solid wow bounceIn fa-quote-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
    }
}
