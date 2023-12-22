<?php
class Mistri_About_Us_Two extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_about_us_two';
	}

	public function get_title() {
		return esc_html__( 'Mistri About Us Two', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'about', 'us', 'two', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_about_us_two_head',
			[
				'label' => esc_html__( 'About Us Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_about_us_two_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'ABOUT TO MISTRI', 'mistri' ),
               'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_about_us_two_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'We Provide the Guaranteed Quality in Construction', 'mistri' ),
               'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_about_us_two_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional click. It involves the process of planning, designing, and erecting structures that serve as homes.', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_about_us_two_heading_show',
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
			'mistri_about_us_two_left_image_head',
			[
				'label' => esc_html__( 'About Us Image', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_about_us_two_right_image',
			[
				'label' => esc_html__( 'Choose About Us Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_two_progress_head',
			[
				'label' => esc_html__( 'About Us Progress Bar', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $about_progress = new \Elementor\Repeater();

        $about_progress->add_control(
			'mistri_about_us_two_progress_title',
			[
				'label' => esc_html__( 'Progress Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Add Progress Title ', 'mistri' ),
			]
		);

        $about_progress->add_control(
			'mistri_about_us_two_progress_percentage',
			[
				'label' => esc_html__( 'Progress Percentage', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '80', 'mistri' ),
			]
		);

        $about_progress->add_control(
			'mistri_about_us_two_progress_duration_time',
			[
				'label' => esc_html__( 'Progress Duration Time', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '.8s', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_about_us_two_progress_list',
			[
				'label' => esc_html__( 'Progress List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $about_progress->get_controls(),
				'default' => [
					[
						'mistri_about_us_two_progress_title' => esc_html__( 'Power & Energy Sector', 'mistri' ),
						'mistri_about_us_two_progress_percentage' => esc_html__( '80', 'mistri' ),
						'mistri_about_us_two_progress_duration_time' => esc_html__( '.8s', 'mistri' ),
					],
					[
						'mistri_about_us_two_progress_title' => esc_html__( 'Mechanical Engineering', 'mistri' ),
						'mistri_about_us_two_progress_percentage' => esc_html__( '90', 'mistri' ),
						'mistri_about_us_two_progress_duration_time' => esc_html__( '.9s', 'mistri' ),
					],
					[
						'mistri_about_us_two_progress_title' => esc_html__( 'Power & Energy Sector', 'mistri' ),
						'mistri_about_us_two_progress_percentage' => esc_html__( '80', 'mistri' ),
						'mistri_about_us_two_progress_duration_time' => esc_html__( '.8s', 'mistri' ),
					],
				],
				'title_field' => '{{{ mistri_about_us_two_progress_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_two_shape_image_head',
			[
				'label' => esc_html__( 'Shape Image', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_about_us_two_shape_image_one',
			[
				'label' => esc_html__( 'Choose Shape Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_about_us_two_shape_image_one_show',
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
			'mistri_about_us_two_shape_image_two',
			[
				'label' => esc_html__( 'Choose Shape Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator' => "before",
			]
		);

        $this->add_control(
			'mistri_about_us_two_shape_image_two_show',
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
            'mistri_about_us_two_background_head',
			[
                'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_about_us_two_bg',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .about-two',
			]
		);
            
        $this->end_controls_section();
        
        $this->start_controls_section(
			'mistri_about_us_two_style_head',
			[
				'label' => esc_html__( 'About Us Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_about_us_two_sub_title_color',
			[
				'label' => esc_html__('Sub Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about-two .section-header h5' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_two_sub_typography',
				'selector' => '{{WRAPPER}} .about-two .section-header h5',
			]
		);

        $this->add_control(
			'mistri_about_us_two_title_color',
			[
				'label' => esc_html__('Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about-two .section-header h2' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_two_title_typography',
				'selector' => '{{WRAPPER}} .about-two .section-header h2',
			]
		);

        $this->add_control(
			'mistri_about_us_two_desc_color',
			[
				'label' => esc_html__('Description Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about-two .section-header p' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_two_desc_typography',
				'selector' => '{{WRAPPER}} .about-two .section-header p',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_about_us_two_progress_bar_style_head',
			[
				'label' => esc_html__( 'About Us Progress Bar', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_about_us_two_progress_title_color',
			[
				'label' => esc_html__( 'Progress Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .experience-progress-wrapper .experience-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_two_progress_title_typography',
				'selector' => '{{WRAPPER}}  .experience-progress-wrapper .experience-title',
			]
		);

		$this->add_control(
			'mistri_about_us_two_progress_bar_number_color',
			[
				'label' => esc_html__( 'Progress Number Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .experience-progress-wrapper span' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_about_us_two_progress_bar_number_typography',
				'selector' => '{{WRAPPER}}  .experience-progress-wrapper span',
			]
		);

		$this->add_control(
			'mistri_about_us_two_progress_bar_color',
			[
				'label' => esc_html__( 'Progress Bar Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .experience-progress-wrapper .progress .progress-bar' => 'background-color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_control(
			'mistri_about_us_two_progress_bar_bg_color',
			[
				'label' => esc_html__( 'Progress Bar Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .experience-progress-wrapper .progress' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_about_us_two_sub_title = $settings['mistri_about_us_two_sub_title'];
        $mistri_about_us_two_title = $settings['mistri_about_us_two_title'];
        $mistri_about_us_two_desc = $settings['mistri_about_us_two_desc'];
        $mistri_about_us_two_heading_show = $settings['mistri_about_us_two_heading_show'];
        $mistri_about_us_two_progress_list = $settings['mistri_about_us_two_progress_list'];
        $mistri_about_us_two_right_image = $settings['mistri_about_us_two_right_image']['url'];
        
        $mistri_about_us_two_shape_image_one = $settings['mistri_about_us_two_shape_image_one']['url'];
        $mistri_about_us_two_shape_image_one_show = $settings['mistri_about_us_two_shape_image_one_show'];
        $mistri_about_us_two_shape_image_two = $settings['mistri_about_us_two_shape_image_two']['url'];
        $mistri_about_us_two_shape_image_two_show = $settings['mistri_about_us_two_shape_image_two_show'];

        $this->add_inline_editing_attributes('mistri_about_us_two_sub_title', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_two_title', 'basic');
        $this->add_inline_editing_attributes('mistri_about_us_two_desc', 'basic');

        $this->add_render_attribute(
            'mistri_about_us_two_sub_title',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay'    => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_about_us_two_title',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay'    => '.6s',
            ]
        );
        $this->add_render_attribute(
            'mistri_about_us_two_desc',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.9s',
                'data-wow-delay'    => '.9s',
            ]
        );
        ?>
         <section class="about-two section-padding">
            <?php if("yes" === $mistri_about_us_two_shape_image_two_show): ?>
            <div class="drawing-compass scale-animation d-none d-lg-block">
                <img src="<?php echo esc_url($mistri_about_us_two_shape_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <?php if("yes" === $mistri_about_us_two_shape_image_one_show): ?>
            <div class="compass d-none d-lg-block">
                <img src="<?php echo esc_url($mistri_about_us_two_shape_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="left-item">
                            <?php if("yes" === $mistri_about_us_two_heading_show): ?>
                            <div class="section-header mb-5">
                                <h5 <?php echo $this->get_render_attribute_string( 'mistri_about_us_two_sub_title' ); ?>><?php echo esc_html__($mistri_about_us_two_sub_title, 'mistri'); ?></h5>
                                <h2 <?php echo $this->get_render_attribute_string( 'mistri_about_us_two_title' ); ?>><?php echo esc_html__($mistri_about_us_two_title, 'mistri'); ?></h2>
                                <p <?php echo $this->get_render_attribute_string( 'mistri_about_us_two_desc' ); ?>><?php echo esc_html__($mistri_about_us_two_desc, 'mistri'); ?></p>
                            </div>
                            <?php endif; ?>
                            <div class="experience-progress-wrapper">
                            <?php  foreach($mistri_about_us_two_progress_list as $index => $single_progrss){
                                    $mistri_about_us_two_progress_title_setting_key = $this->get_repeater_setting_key( 'mistri_about_us_two_progress_title', 'mistri_about_us_two_progress_list', $index );

                                    $this->add_inline_editing_attributes($mistri_about_us_two_progress_title_setting_key);
                                    $this->add_render_attribute(
                                        $mistri_about_us_two_progress_title_setting_key,
                                        [
                                            'class' => 'experience-title pb-2',
                                        ]
                                    );

                                    $progress_title = $settings['mistri_about_us_two_progress_list'][$index]['mistri_about_us_two_progress_title'];
                                ?>
                                <div class="experience-progress pb-4">
                                    <div
                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                        <h5 <?php $this->print_render_attribute_string( $mistri_about_us_two_progress_title_setting_key ); ?>><?php echo esc_html__($progress_title, 'mistri'); ?></h5>
                                        <span class="exp" style="left:<?php echo esc_attr__($single_progrss['mistri_about_us_two_progress_percentage'], 'mistri'); ?>%"><?php echo esc_html__($single_progrss['mistri_about_us_two_progress_percentage'], 'mistri'); ?>%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="<?php echo esc_attr__($single_progrss['mistri_about_us_two_progress_duration_time'], 'mistri'); ?>"
                                            role="progressbar" style="width: <?php echo esc_attr__($single_progrss['mistri_about_us_two_progress_percentage'], 'mistri'); ?>%;" aria-valuenow="<?php echo esc_attr__($single_progrss['mistri_about_us_two_progress_percentage'], 'mistri'); ?>" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="image">
                            <img src="<?php echo esc_url($mistri_about_us_two_right_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
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
            view.addInlineEditingAttributes( 'mistri_about_us_two_sub_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_two_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_about_us_two_desc', 'basic' );

			view.addRenderAttribute(
				'mistri_about_us_two_sub_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.3s',
					'data-wow-delay': '.3s',
				}
			);
			view.addRenderAttribute(
				'mistri_about_us_two_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.6s',
					'data-wow-delay': '.6s',
				}
			);
			view.addRenderAttribute(
				'mistri_about_us_two_desc',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.9s',
					'data-wow-delay': '.9s',
				}
			);
        #>
         <section class="about-two section-padding">
            <# if("yes" === settings.mistri_about_us_two_shape_image_two_show){ #>
            <div class="drawing-compass scale-animation d-none d-lg-block">
                <img src="{{{settings.mistri_about_us_two_shape_image_two.url}}}" alt="image">
            </div>
            <# } #>
            <# if("yes" === settings.mistri_about_us_two_shape_image_one_show){ #>
            <div class="compass d-none d-lg-block">
                <img src="{{{settings.mistri_about_us_two_shape_image_one.url}}}" alt="image">
            </div>
            <# } #>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="left-item">
                            <# if("yes" === settings.mistri_about_us_two_heading_show){ #>
                            <div class="section-header mb-5">
                                <h5 {{{ view.getRenderAttributeString( 'mistri_about_us_two_sub_title' )}}}>{{{settings.mistri_about_us_two_sub_title}}}</h5>
                                <h2 {{{ view.getRenderAttributeString( 'mistri_about_us_two_title' )}}}>{{{settings.mistri_about_us_two_title}}}</h2>
                                <p {{{ view.getRenderAttributeString( 'mistri_about_us_two_desc' )}}}>{{{settings.mistri_about_us_two_desc}}}</p>
                            </div>
                            <# } #>
                            <div class="experience-progress-wrapper">
                                <#
                                _.each( settings.mistri_about_us_two_progress_list, function( single_progrss, index ) { 
                                    var mistri_about_us_two_progress_title_setting_key = view.getRepeaterSettingKey( 'mistri_about_us_two_progress_title', 'mistri_about_us_two_progress_list', index );

                                    view.addInlineEditingAttributes( mistri_about_us_two_progress_title_setting_key );
                                    view.addRenderAttribute(
                                        'mistri_about_us_two_progress_title_setting_key',
                                        {
                                            'class': 'experience-title pb-2',
                                        }
                                    );
                                #>
                                <div class="experience-progress pb-4">
                                    <div
                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                        <h5 {{{ view.getRenderAttributeString( mistri_about_us_two_progress_title_setting_key ) }}}>{{{single_progrss.mistri_about_us_two_progress_title}}}</h5>
                                        <span class="exp" style="left:{{{single_progrss.mistri_about_us_two_progress_percentage}}}">{{{single_progrss.mistri_about_us_two_progress_percentage}}}%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="{{{single_progrss.mistri_about_us_two_progress_duration_time}}}"
                                            role="progressbar" style="width:{{{single_progrss.mistri_about_us_two_progress_percentage}}}" aria-valuenow="{{{single_progrss.mistri_about_us_two_progress_percentage}}}" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <# }); #>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="image">
                            <img src="{{{settings.mistri_about_us_two_right_image.url}}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php 
    }
}