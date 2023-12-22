<?php
class Mistri_Team_Details extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_team_details';
	}

	public function get_title() {
		return esc_html__( 'Mistri Team Details', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'team', 'section', 'details', 'detail'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_team_detail_section_head',
			[
				'label' => esc_html__( 'Team Membar Info', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_team_member_name',
			[
				'label' => esc_html__( 'Membar Name', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Sana P. Lesh', 'mistri' ),
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_team_member_job_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Senior Engineer', 'mistri' ),
                'label_block'   => true,
                'separator'     => 'before'
			]
		);

        $this->add_control(
			'mistri_team_member_desc_title',
			[
				'label' => esc_html__( 'Description Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'About Me', 'mistri' ),
                'label_block'   => true,
			]
		);
        $this->add_control(
			'mistri_team_member_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque.', 'mistri' ),
	
			]
		);

        $this->add_control(
			'mistri_team_member_image',
			[
				'label' => esc_html__( 'Choose Member Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_member_progress_head',
			[
				'label' => esc_html__( 'Member Progress Bar', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $about_progress = new \Elementor\Repeater();

        $about_progress->add_control(
			'mistri_team_member_progress_one_title',
			[
				'label' => esc_html__( 'Progress Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Add Progress Title ', 'mistri' ),
			]
		);

        $about_progress->add_control(
			'mistri_team_member_progress_one_percentage',
			[
				'label' => esc_html__( 'Progress Percentage', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '80', 'mistri' ),
			]
		);

        $about_progress->add_control(
			'mistri_team_member_progress_one_duration_time',
			[
				'label' => esc_html__( 'Progress Duration Time', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '.8s', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_team_member_progress_one_list',
			[
				'label' => esc_html__( 'Progress Bar Left List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $about_progress->get_controls(),
				'default' => [
					[
						'mistri_team_member_progress_one_title' => esc_html__( 'Interior Design', 'mistri' ),
						'mistri_team_member_progress_one_percentage' => esc_html__( '80', 'mistri' ),
						'mistri_team_member_progress_one_duration_time' => esc_html__( '.8s', 'mistri' ),
					],
					[
						'mistri_team_member_progress_one_title' => esc_html__( 'Maching Learning', 'mistri' ),
						'mistri_team_member_progress_one_percentage' => esc_html__( '98', 'mistri' ),
						'mistri_team_member_progress_one_duration_time' => esc_html__( '.98s', 'mistri' ),
					]
				],
				'title_field' => '{{{ mistri_team_member_progress_one_title }}}',
			]
		);


        $about_progress = new \Elementor\Repeater();

        $about_progress->add_control(
			'mistri_team_member_progress_two_title',
			[
				'label' => esc_html__( 'Progress Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Add Progress Title ', 'mistri' ),
               
			]
		);

        $about_progress->add_control(
			'mistri_team_member_progress_two_percentage',
			[
				'label' => esc_html__( 'Progress Percentage', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '80', 'mistri' ),
			]
		);

        $about_progress->add_control(
			'mistri_team_member_progress_two_duration_time',
			[
				'label' => esc_html__( 'Progress Duration Time', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '.8s', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_team_member_progress_two_list',
			[
				'label' => esc_html__( 'Progress Bar Right List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $about_progress->get_controls(),
                'separator' => 'before',
				'default' => [
					[
						'mistri_team_member_progress_two_title' => esc_html__( 'Consultant', 'mistri' ),
						'mistri_team_member_progress_two_percentage' => esc_html__( '80', 'mistri' ),
						'mistri_team_member_progress_two_duration_time' => esc_html__( '.8s', 'mistri' ),
					],
					[
						'mistri_team_member_progress_two_title' => esc_html__( 'Visual Concept', 'mistri' ),
						'mistri_team_member_progress_two_percentage' => esc_html__( '98', 'mistri' ),
						'mistri_team_member_progress_two_duration_time' => esc_html__( '.98s', 'mistri' ),
					]
				],
				'title_field' => '{{{ mistri_team_member_progress_two_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_social_medai_head',
			[
				'label' => esc_html__( 'Member Social Links', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_team_facebook_link',
			[
				'label' => esc_html__( 'Facebook Profile Link', 'textdomain' ),
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

        $this->add_control(
			'mistri_team_twitter_link',
			[
				'label' => esc_html__( 'Twitter Profile Link', 'textdomain' ),
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

        $this->add_control(
			'mistri_team_linkedin_link',
			[
				'label' => esc_html__( 'Linkedin Profile Link', 'textdomain' ),
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
        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_section_background_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_team_section_bg_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .team-single',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_member_heading_style',
			[
				'label' => esc_html__( 'Member Info', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_team_member_name_title_color',
			[
				'label' => esc_html__( 'Member Name Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-single .team_single_info .title h3' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_member_name_typography',
				'selector' => '{{WRAPPER}} .team-single .team_single_info .title h3',
			]
		);

        $this->add_control(
			'mistri_team_member_job_title_color',
			[
				'label' => esc_html__( 'Member Job Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#f03027 ',
				'selectors' => [
					'{{WRAPPER}} .team-single .team_single_info .title span' => 'color: {{VALUE}}',
				],
                'separator' => 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_member_job_title_typography',
				'selector' => '{{WRAPPER}} .team-single .team_single_info .title span',
			]
		);

		$this->add_control(
			'mistri_team_member_border_color',
			[
				'label' => esc_html__( 'Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-single .team_single_info .title.bor-bottom' => 'border-color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'mistri_team_member_desc_title_color',
			[
				'label' => esc_html__( 'Description Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-single .team_single_info .info h4' => 'color: {{VALUE}}',
				],
                'separator' => 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_member_desc_title_typography',
				'selector' => '{{WRAPPER}} .team-single .team_single_info .info h4',
			]
		);

        $this->add_control(
			'mistri_team_member_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-single .team_single_info .info p' => 'color: {{VALUE}}',
				],
                'separator' => 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_member_desc_typography',
				'selector' => '{{WRAPPER}} .team-single .team_single_info .info p',
			]
		);

		

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_member_progress_bar_style_head',
			[
				'label' => esc_html__( 'Member Progress Bar', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_team_member_progress_title_color',
			[
				'label' => esc_html__( 'Progress Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-single .info .skills .experience-progress-wrapper .experience-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_member_progress_title_typography',
				'selector' => '{{WRAPPER}}  .team-single .info .skills .experience-progress-wrapper .experience-title',
			]
		);

		$this->add_control(
			'mistri_team_member_progress_bar_number_color',
			[
				'label' => esc_html__( 'Progress Number Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .team-single .info .skills .experience-progress-wrapper span' => 'color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_member_progress_bar_number_typography',
				'selector' => '{{WRAPPER}}  .team-single .info .skills .experience-progress-wrapper span',
			]
		);

		$this->add_control(
			'mistri_team_member_progress_bar_color',
			[
				'label' => esc_html__( 'Progress Bar Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .team-single .info .skills .experience-progress-wrapper .progress .progress-bar' => 'background-color: {{VALUE}}',
				],
				'separator'	=> 'before'
			]
		);

		$this->add_control(
			'mistri_team_member_progress_bar_bg_color',
			[
				'label' => esc_html__( 'Progress Bar Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-single .info .skills .experience-progress-wrapper .progress' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_team_member_name = $settings['mistri_team_member_name'];
        $mistri_team_member_job_title = $settings['mistri_team_member_job_title'];
        $mistri_team_member_desc_title = $settings['mistri_team_member_desc_title'];
        $mistri_team_member_desc = $settings['mistri_team_member_desc'];
        $mistri_team_member_image = $settings['mistri_team_member_image']['url'];

        $mistri_team_member_progress_one_list = $settings['mistri_team_member_progress_one_list'];
        $mistri_team_member_progress_two_list = $settings['mistri_team_member_progress_two_list'];

        $mistri_team_facebook_link = $settings['mistri_team_facebook_link']['url'];
        $mistri_team_twitter_link = $settings['mistri_team_twitter_link']['url'];
        $mistri_team_linkedin_link = $settings['mistri_team_linkedin_link']['url'];


        $this->add_inline_editing_attributes('mistri_team_member_name','basic');
        $this->add_inline_editing_attributes('mistri_team_member_job_title','basic');
        $this->add_inline_editing_attributes('mistri_team_member_desc_title','basic');
        $this->add_inline_editing_attributes('mistri_team_member_desc','basic');

        $this->add_render_attribute(
            'mistri_team_member_job_title',
            [
                'class' => 'mt-1',
            ]
        );
        $this->add_render_attribute(
            'mistri_team_member_desc',
            [
                'class' => 'pb-3',
            ]
        );
        ?>
        <section class="team-single section-padding pb-65">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="image">
                            <?php if($mistri_team_member_image): ?>
                                <img src="<?php echo esc_url($mistri_team_member_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                            <?php endif; ?>
                            <?php if($mistri_team_facebook_link || $mistri_team_twitter_link || $mistri_team_linkedin_link ): ?>
                                <div class="team-info">
                                    <?php if($mistri_team_facebook_link): ?>
                                        <a class="d-block" href="<?php echo esc_url($mistri_team_facebook_link); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                                    <?php endif; ?>
                                    <?php if($mistri_team_twitter_link): ?>
                                        <a class="d-block" href="<?php echo esc_url($mistri_team_twitter_link); ?>"><i class="fa-brands fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if($mistri_team_linkedin_link): ?>
                                        <a class="d-block" href="<?php echo esc_url($mistri_team_linkedin_link); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="team_single_info">
                            <div class="title pb-30 mb-30 bor-bottom">
                                <h3 <?php echo $this->get_render_attribute_string('mistri_team_member_name'); ?>><?php echo esc_html__($mistri_team_member_name, 'mistri'); ?></h3>
                                <span <?php echo $this->get_render_attribute_string('mistri_team_member_job_title'); ?>><?php echo esc_html__($mistri_team_member_job_title, 'mistri'); ?></span>
                            </div>
                            <div class="info">
                                <h4 <?php echo $this->get_render_attribute_string('mistri_team_member_desc_title'); ?>><?php echo esc_html__($mistri_team_member_desc_title, 'mistri'); ?></h4>
                                <p <?php echo $this->get_render_attribute_string('mistri_team_member_desc'); ?>><?php echo esc_html__($mistri_team_member_desc, 'mistri'); ?></p>
                                <div class="skills mt-65">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="experience-progress-wrapper">
                                                 <?php  foreach($mistri_team_member_progress_one_list as $index => $single_progrss){
                                                    $mistri_team_member_progress_one_title_setting_key = $this->get_repeater_setting_key( 'mistri_team_member_progress_one_title', 'mistri_team_member_progress_one_list', $index );

                                                    $this->add_inline_editing_attributes($mistri_team_member_progress_one_title_setting_key);
                                                    $this->add_render_attribute(
                                                        $mistri_team_member_progress_one_title_setting_key,
                                                        [
                                                            'class' => 'experience-title pb-2',
                                                        ]
                                                    );

                                                    $progress_title = $settings['mistri_team_member_progress_one_list'][$index]['mistri_team_member_progress_one_title'];
                                                ?>
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                                        <h5 <?php $this->print_render_attribute_string( $mistri_team_member_progress_one_title_setting_key ); ?>><?php echo esc_html__($progress_title, 'mistri'); ?></h5>
                                                        <span class="exp" style="left:<?php echo esc_attr__($single_progrss['mistri_team_member_progress_one_percentage'], 'mistri'); ?>%"><?php echo esc_html__($single_progrss['mistri_team_member_progress_one_percentage'], 'mistri'); ?>%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft" data-wow-duration="<?php echo esc_attr__($single_progrss['mistri_team_member_progress_one_duration_time'], 'mistri'); ?>"
                                                            role="progressbar" style="width: <?php echo esc_attr__($single_progrss['mistri_team_member_progress_one_percentage'], 'mistri'); ?>%;" aria-valuenow="<?php echo esc_attr__($single_progrss['mistri_team_member_progress_one_percentage'], 'mistri'); ?>" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="experience-progress-wrapper">
                                                <?php  foreach($mistri_team_member_progress_two_list as $index => $single_progrss){
                                                    $mistri_team_member_progress_two_title_setting_key = $this->get_repeater_setting_key( 'mistri_team_member_progress_two_title', 'mistri_team_member_progress_two_list', $index );

                                                    $this->add_inline_editing_attributes($mistri_team_member_progress_two_title_setting_key);
                                                    $this->add_render_attribute(
                                                        $mistri_team_member_progress_two_title_setting_key,
                                                        [
                                                            'class' => 'experience-title pb-2',
                                                        ]
                                                    );

                                                    $progress_title = $settings['mistri_team_member_progress_two_list'][$index]['mistri_team_member_progress_two_title'];
                                                ?>
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                                        <h5 <?php $this->print_render_attribute_string( $mistri_team_member_progress_two_title_setting_key ); ?>><?php echo esc_html__($progress_title, 'mistri'); ?></h5>
                                                        <span class="exp" style="left:<?php echo esc_attr__($single_progrss['mistri_team_member_progress_two_percentage'], 'mistri'); ?>%"><?php echo esc_html__($single_progrss['mistri_team_member_progress_two_percentage'], 'mistri'); ?>%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft" data-wow-duration="<?php echo esc_attr__($single_progrss['mistri_team_member_progress_two_duration_time'], 'mistri'); ?>"
                                                            role="progressbar" style="width: <?php echo esc_attr__($single_progrss['mistri_team_member_progress_two_percentage'], 'mistri'); ?>%;" aria-valuenow="<?php echo esc_attr__($single_progrss['mistri_team_member_progress_two_percentage'], 'mistri'); ?>" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            view.addInlineEditingAttributes('mistri_team_member_name', 'basic');
            view.addInlineEditingAttributes('mistri_team_member_job_title', 'basic');
            view.addInlineEditingAttributes('mistri_team_member_desc_title', 'basic');
            view.addInlineEditingAttributes('mistri_team_member_desc', 'basic');

            view.addRenderAttribute(
				'mistri_team_member_job_title',
				{
					'class': 'primary-color mt-1',
				}
			);

            view.addRenderAttribute(
				'mistri_team_member_desc',
				{
					'class': 'pb-3',
				}
			);
        #>
        <section class="team-single section-padding pb-65">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="image">
                            <# if(settings.mistri_team_member_image.url){ #>
                                <img src="{{{settings.mistri_team_member_image.url}}}" alt="image">
                            <# } #>
                            <# if(  settings.mistri_team_facebook_link.url || settings.mistri_team_twitter_link.url || settings.mistri_team_linkedin_link.url){ #>
                                <div class="team-info">
                                    <# if(settings.mistri_team_facebook_link.url){ #>
                                        <a class="d-block" href="{{{settings.mistri_team_facebook_link.url}}}"><i class="fa-brands fa-facebook-f"></i></a>
                                    <# } #>
                                    <# if(settings.mistri_team_twitter_link.url){ #>
                                        <a class="d-block" href="{{{settings.mistri_team_twitter_link.url}}}"><i class="fa-brands fa-twitter"></i></a>
                                    <# } #>
                                    <# if(settings.mistri_team_linkedin_link.url){ #>
                                        <a class="d-block" href="{{{settings.mistri_team_linkedin_link.url}}}"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <# } #>
                                </div>
                            <# } #>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="team_single_info">
                            <div class="title pb-30 mb-30 bor-bottom">
                                <h3 {{{ view.getRenderAttributeString( 'mistri_team_member_name' )}}}>{{{settings.mistri_team_member_name}}}</h3>
                                <span {{{ view.getRenderAttributeString( 'mistri_team_member_job_title' )}}}>{{{settings.mistri_team_member_job_title}}}</span>
                            </div>
                            <div class="info">
                                <h4 {{{ view.getRenderAttributeString( 'mistri_team_member_desc_title' )}}}>{{{settings.mistri_team_member_desc_title}}}</h4>
                                <p {{{ view.getRenderAttributeString( 'mistri_team_member_desc' )}}}>{{{settings.mistri_team_member_desc}}}</p>
                                <div class="skills mt-65">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="experience-progress-wrapper">
                                            <#
                                                _.each( settings.mistri_team_member_progress_one_list, function( single_progrss, index ) { 
                                                    var mistri_team_member_progress_one_title_setting_key = view.getRepeaterSettingKey( 'mistri_team_member_progress_one_title', 'mistri_team_member_progress_one_list', index );

                                                    view.addInlineEditingAttributes( mistri_team_member_progress_one_title_setting_key );
                                                    view.addRenderAttribute(
                                                        'mistri_team_member_progress_one_title_setting_key',
                                                        {
                                                            'class': 'experience-title pb-2',
                                                        }
                                                    );
                                                #>
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                                        <h5 {{{ view.getRenderAttributeString( mistri_team_member_progress_one_title_setting_key ) }}}>{{{single_progrss.mistri_team_member_progress_one_title}}}</h5>
                                                        <span class="exp" style="left:{{{single_progrss.mistri_team_member_progress_one_percentage}}}">{{{single_progrss.mistri_team_member_progress_one_percentage}}}%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft" data-wow-duration="{{{single_progrss.mistri_team_member_progress_one_duration_time}}}"
                                                            role="progressbar" style="width:{{{single_progrss.mistri_team_member_progress_one_percentage}}}" aria-valuenow="{{{single_progrss.mistri_team_member_progress_one_percentage}}}" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            <# }); #>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="experience-progress-wrapper">
                                                <#
                                                    _.each( settings.mistri_team_member_progress_two_list, function( single_progrss, index ) { 
                                                        var mistri_team_member_progress_two_title_setting_key = view.getRepeaterSettingKey( 'mistri_team_member_progress_two_title', 'mistri_team_member_progress_two_list', index );

                                                        view.addInlineEditingAttributes( mistri_team_member_progress_two_title_setting_key );
                                                        view.addRenderAttribute(
                                                            'mistri_team_member_progress_two_title_setting_key',
                                                            {
                                                                'class': 'experience-title pb-2',
                                                            }
                                                        );
                                                    #>
                                                    <div class="experience-progress pb-4">
                                                        <div
                                                            class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                                            <h5 {{{ view.getRenderAttributeString( mistri_team_member_progress_two_title_setting_key ) }}}>{{{single_progrss.mistri_team_member_progress_two_title}}}</h5>
                                                            <span class="exp" style="left:{{{single_progrss.mistri_team_member_progress_two_percentage}}}">{{{single_progrss.mistri_team_member_progress_two_percentage}}}%</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow slideInLeft" data-wow-duration="{{{single_progrss.mistri_team_member_progress_two_duration_time}}}"
                                                                role="progressbar" style="width:{{{single_progrss.mistri_team_member_progress_two_percentage}}}" aria-valuenow="{{{single_progrss.mistri_team_member_progress_two_percentage}}}" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                <# }); #>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php 
    }

}