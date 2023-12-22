<?php
class Mistri_Exprience_Four extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_experience_four';
	}

	public function get_title() {
		return esc_html__( 'Mistri Experience Four', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-library-download';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'experience', 'section', 'four'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_experience_four_image_head',
			[
				'label' => esc_html__( 'Experience Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_experience_four_image_one',
			[
				'label' => esc_html__( 'Choose Exprience Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'mistri_experience_four_image_one_show',
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
			'mistri_experience_four_image_two',
			[
				'label' => esc_html__( 'Choose Exprience Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> 'before'
			]
		);

		$this->add_control(
			'mistri_experience_four_image_two_show',
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
			'mistri_experience_four_image_three',
			[
				'label' => esc_html__( 'Choose Exprience Image Three', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'before'	=> 'before'
			]
		);

		$this->add_control(
			'mistri_experience_four_image_three_show',
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
			'mistri_experience_four_image_routed',
			[
				'label' => esc_html__( 'Choose Routed Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_experience_four_image_routed_show',
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
			'mistri_experience_four_head',
			[
				'label' => esc_html__( 'Experience Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_experience_four_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'WORKING WITH EXCELLENT', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_experience_four_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Always Powering Your Business For Over 30 Years', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_experience_four_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
				'default' => esc_html__( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly', 'mistri' ),
			]
		);

		$this->add_control(
			'mistri_experience_four_head_show',
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
			'mistri_experience_four_progress_head',
			[
				'label' => esc_html__( 'Experience Progress Bar', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $progressrepayter = new \Elementor\Repeater();

        $progressrepayter->add_control(
			'mistri_experience_four_progress_title',
			[
				'label' => esc_html__( 'Progress Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Add Progress Bar', 'mistri' ),
			]
		);

        $progressrepayter->add_control(
			'mistri_experience_four_progress_percentage',
			[
				'label' => esc_html__( 'Progress Percentage', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '80', 'mistri' ),
			]
		);

        $progressrepayter->add_control(
			'mistri_experience_four_progress_duration_time',
			[
				'label' => esc_html__( 'Progress Duration Time', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '.8s', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_experience_four_progress_list',
			[
				'label' => esc_html__( 'Progress List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $progressrepayter->get_controls(),
				'default' => [
					[
						'mistri_experience_four_progress_title' => esc_html__( 'Power & Energy Sector', 'mistri' ),
						'mistri_experience_four_progress_percentage' => esc_html__( '80', 'mistri' ),
						'mistri_experience_four_progress_duration_time' => esc_html__( '.8s', 'mistri' ),
					],
					[
						'mistri_experience_four_progress_title' => esc_html__( 'Mechanical Engineering', 'mistri' ),
						'mistri_experience_four_progress_percentage' => esc_html__( '90', 'mistri' ),
						'mistri_experience_four_progress_duration_time' => esc_html__( '.95s', 'mistri' ),
					],
					[
						'mistri_experience_four_progress_title' => esc_html__( 'Gas & Oil Refining', 'mistri' ),
						'mistri_experience_four_progress_percentage' => esc_html__( '70', 'mistri' ),
						'mistri_experience_four_progress_duration_time' => esc_html__( '.70s', 'mistri' ),
					],
					[
						'mistri_experience_four_progress_title' => esc_html__( 'Construction Building', 'mistri' ),
						'mistri_experience_four_progress_percentage' => esc_html__( '95', 'mistri' ),
						'mistri_experience_four_progress_duration_time' => esc_html__( '.95s', 'mistri' ),
					],
				],
				'title_field' => '{{{ mistri_experience_four_progress_title }}}',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_four_section_shape_images_head',
			[
				'label' => esc_html__( 'Shape Image', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_experience_four_section_shape_image_one',
			[
				'label' => esc_html__( 'Choose Shape Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_experience_four_section_shape_image_one_show',
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
			'mistri_experience_four_section_bg_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_experience_four_section_bg',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .experience',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_four_style_head',
			[
				'label' => esc_html__( 'Experience Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_experience_four_style_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .experience .section-header h5' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_four_style_sub_title_typography',
				'selector' => '{{WRAPPER}} .experience .section-header h5',
			]
		);

        $this->add_control(
			'mistri_experience_four_style_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .experience .section-header h2' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_four_style_title_typography',
				'selector' => '{{WRAPPER}}  .experience .section-header h2',
			]
		);

        $this->add_control(
			'mistri_experience_four_style_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .experience .section-header p' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_four_style_desc_typography',
				'selector' => '{{WRAPPER}} .experience .section-header p',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_four_progress_bar_style_head',
			[
				'label' => esc_html__( 'Experience Progress Bar', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_experience_four_progress_title_color',
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
				'name' => 'mistri_experience_four_progress_title_typography',
				'selector' => '{{WRAPPER}}  .experience-progress-wrapper .experience-title',
			]
		);

		$this->add_control(
			'mistri_experience_four_progress_bar_number_color',
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
				'name' => 'mistri_experience_four_progress_bar_number_typography',
				'selector' => '{{WRAPPER}}  .experience-progress-wrapper span',
			]
		);

		$this->add_control(
			'mistri_experience_four_progress_bar_color',
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
			'mistri_experience_four_progress_bar_bg_color',
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

		$mistri_experience_four_image_one = $settings['mistri_experience_four_image_one']['url'];
		$mistri_experience_four_image_one_show = $settings['mistri_experience_four_image_one_show'];
		$mistri_experience_four_image_two = $settings['mistri_experience_four_image_two']['url'];
		$mistri_experience_four_image_two_show = $settings['mistri_experience_four_image_two_show'];
		$mistri_experience_four_image_three = $settings['mistri_experience_four_image_three']['url'];
		$mistri_experience_four_image_three_show = $settings['mistri_experience_four_image_three_show'];
		$mistri_experience_four_image_routed = $settings['mistri_experience_four_image_routed']['url'];
		$mistri_experience_four_image_routed_show = $settings['mistri_experience_four_image_routed_show'];
		$mistri_experience_four_section_shape_image_one = $settings['mistri_experience_four_section_shape_image_one']['url'];
		$mistri_experience_four_section_shape_image_one_show = $settings['mistri_experience_four_section_shape_image_one_show'];
		$mistri_experience_four_sub_title = $settings['mistri_experience_four_sub_title'];
		$mistri_experience_four_title = $settings['mistri_experience_four_title'];
		$mistri_experience_four_desc = $settings['mistri_experience_four_desc'];
		$mistri_experience_four_head_show = $settings['mistri_experience_four_head_show'];
		$mistri_experience_four_progress_list = $settings['mistri_experience_four_progress_list'];

		$this->add_inline_editing_attributes('mistri_experience_four_sub_title', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_four_title', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_four_desc', 'basic');

        $this->add_render_attribute(
            'mistri_experience_four_sub_title',
            [   
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay' => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_experience_four_title',
            [   
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay' => '.6s',
            ]
        );
        $this->add_render_attribute(
            'mistri_experience_four_desc',
            [   
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.9s',
                'data-wow-delay' => '.9s',
            ]
        );
        ?>
        <section class="experience section-padding">
			<?php if("yes" === $mistri_experience_four_section_shape_image_one_show): ?>
			<div class="soft-star scale-animation d-none d-lg-block">
                <img src="<?php echo esc_url($mistri_experience_four_section_shape_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
			<?php endif; ?>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="left-item">
                            <div class="row g-4">
                                <div class="col-6 wow fadeInLeft">
									<?php if("yes" === $mistri_experience_four_image_one_show): ?>
                                    <div class="image">
                                        <img src="<?php echo esc_url($mistri_experience_four_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                    </div>
									<?php endif; ?>
                                </div>
                                <div class="col-6">
									<?php if("yes" === $mistri_experience_four_image_two_show): ?>
                                    <div class="image wow fadeInRight mb-4" data-wow-duration="1.5s" data-wow-delay=".5s">
                                        <img src="<?php echo esc_url($mistri_experience_four_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                    </div>
									<?php endif; ?>
									<?php if("yes" === $mistri_experience_four_image_three_show): ?>
                                    <div class="image wow fadeInRight" data-wow-duration="1.7s" data-wow-delay=".7s">
                                        <img src="<?php echo esc_url($mistri_experience_four_image_three); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                                    </div>
									<?php endif; ?>
                                </div>
                            </div>
							<?php if("yes" === $mistri_experience_four_image_routed_show): ?>
							<div class="gear">
                                <img class="star-rotare" src="<?php echo esc_url($mistri_experience_four_image_routed); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                            </div>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-item">
							<?php if("yes" === $mistri_experience_four_head_show): ?>
                            <div class="section-header">
                                <h5  <?php echo $this->get_render_attribute_string('mistri_experience_four_sub_title'); ?> ><?php echo esc_html__($mistri_experience_four_sub_title, 'mistri'); ?></h5>
                                <h2  <?php echo $this->get_render_attribute_string('mistri_experience_four_title'); ?> ><?php echo esc_html__($mistri_experience_four_title, 'mistri'); ?></h2>
                                <p  <?php echo $this->get_render_attribute_string('mistri_experience_four_desc'); ?> ><?php echo esc_html__($mistri_experience_four_desc, 'mistri'); ?></p>
                            </div>
							<?php endif; ?>
                            <div class="experience-progress-wrapper">
                               <?php  foreach($mistri_experience_four_progress_list as $index => $single_progrss){
                                    $mistri_experience_four_progress_title_setting_key = $this->get_repeater_setting_key( 'mistri_experience_four_progress_title', 'mistri_experience_four_progress_list', $index );

                                    $this->add_inline_editing_attributes($mistri_experience_four_progress_title_setting_key);

                                    $this->add_render_attribute(
                                        $mistri_experience_four_progress_title_setting_key,
                                        [
                                            'class' => 'experience-title pb-2',
                                        ]
                                    );
									
                                    $progress_title = $settings['mistri_experience_four_progress_list'][$index]['mistri_experience_four_progress_title'];
                                ?>
                                <div class="experience-progress pb-4">
                                    <div
                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                        <h5 <?php $this->print_render_attribute_string( $mistri_experience_four_progress_title_setting_key ); ?>><?php echo esc_html__($progress_title, 'mistri'); ?></h5>
                                        <span class="exp" style="left:<?php echo esc_attr__($single_progrss['mistri_experience_four_progress_percentage'], 'mistri'); ?>%"><?php echo esc_html__($single_progrss['mistri_experience_four_progress_percentage'], 'mistri'); ?>%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="<?php echo esc_attr__($single_progrss['mistri_experience_four_progress_duration_time'], 'mistri'); ?>"
                                            role="progressbar" style="width: <?php echo esc_attr__($single_progrss['mistri_experience_four_progress_percentage'], 'mistri'); ?>%;" aria-valuenow="<?php echo esc_attr__($single_progrss['mistri_experience_four_progress_percentage'], 'mistri'); ?>" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
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
            view.addInlineEditingAttributes( 'mistri_experience_four_sub_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_four_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_four_desc', 'basic' );

			view.addRenderAttribute(
				'mistri_experience_four_sub_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.3s',
					'data-wow-delay': '.3s',
				}
			);
			view.addRenderAttribute(
				'mistri_experience_four_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.6s',
					'data-wow-delay': '.6s',
				}
			);
			view.addRenderAttribute(
				'mistri_experience_four_desc',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.9s',
					'data-wow-delay': '.9s',
				}
			);
		#>
        <section class="experience section-padding ">
			<# if("yes" === settings.mistri_experience_four_section_shape_image_one_show){ #>
			<div class="soft-star scale-animation d-none d-lg-block">
                <img src="{{{settings.mistri_experience_four_section_shape_image_one.url}}}" alt="">
            </div>
			<# } #>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="left-item">
                            <div class="row g-4">
                                <div class="col-6 wow fadeInLeft">
									<# if("yes" === settings.mistri_experience_four_image_one_show){ #>
                                    <div class="image">
                                        <img src="{{{settings.mistri_experience_four_image_one.url}}}" alt="image">
                                    </div>
									<# } #>
                                </div>
                                <div class="col-6">
									<# if("yes" === settings.mistri_experience_four_image_two_show){ #>
                                    <div class="image wow fadeInRight mb-4" data-wow-duration="1.5s"
                                        data-wow-delay=".5s">
                                        <img src="{{{settings.mistri_experience_four_image_two.url}}}" alt="image">
                                    </div>
									<# } #>
									<# if("yes" === settings.mistri_experience_four_image_three_show){ #>
                                    <div class="image wow fadeInRight" data-wow-duration="1.7s" data-wow-delay=".7s">
                                        <img src="{{{settings.mistri_experience_four_image_three.url}}}" alt="image">
                                    </div>
									<# } #>
                                </div>
                            </div>
							<# if("yes" === settings.mistri_experience_four_image_routed_show){ #>
							<div class="gear">
                                <img class="star-rotare" src="{{{settings.mistri_experience_four_image_routed.url}}}" alt="image">
                            </div>
							<# } #>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-item">
							<# if("yes" === settings.mistri_experience_four_head_show){ #>
                            <div class="section-header">
                                <h5  {{{ view.getRenderAttributeString( 'mistri_experience_four_sub_title' )}}} >{{{settings.mistri_experience_four_sub_title}}}</h5>
                                <h2  {{{ view.getRenderAttributeString( 'mistri_experience_four_title' )}}} >{{{settings.mistri_experience_four_title}}}</h2>
                                <p  {{{ view.getRenderAttributeString( 'mistri_experience_four_desc' )}}} >{{{settings.mistri_experience_four_desc}}}</p>
                            </div>
							<# } #>
                            <div class="experience-progress-wrapper">
							<#
								_.each( settings.mistri_experience_four_progress_list, function( single_progrss, index ) { 
									var mistri_experience_four_progress_title_setting_key = view.getRepeaterSettingKey( 'mistri_experience_four_progress_title', 'mistri_experience_four_progress_list', index );

									view.addInlineEditingAttributes( mistri_experience_four_progress_title_setting_key );
									view.addRenderAttribute(
										mistri_experience_four_progress_title_setting_key,
										{
											'class' : 'experience-title pb-2',
										}
									)
								#>
								<div class="experience-progress pb-4">
                                    <div
                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                        <h5 {{{ view.getRenderAttributeString( mistri_experience_four_progress_title_setting_key ) }}}>{{{single_progrss.mistri_experience_four_progress_title}}}</h5>
                                        <span class="exp" style="left:'{{{single_progrss.mistri_experience_four_progress_percentage}}}%'">{{{single_progrss.mistri_experience_four_progress_percentage}}}%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration=".8s"
                                            role="progressbar" style="width:'{{{single_progrss.mistri_experience_four_progress_percentage}}}';" aria-valuenow="'{{{single_progrss.mistri_experience_four_progress_percentage}}}%'" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
								<# }); #>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
    }
}