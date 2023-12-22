<?php
class Mistri_Team_Three extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_team_three';
	}

	public function get_title() {
		return esc_html__( 'Mistri Team Three', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'team', 'section', 'three'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_team_three_section_head',
			[
				'label' => esc_html__( 'Team Customization', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_team_three_number',
			[
				'label' => esc_html__( 'Number Of Teams', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 10,
				'step' => 1,
				'default' => 6,
			]
		);

        $this->add_control(
			'mistri_team_three_show_title',
			[
				'label' => esc_html__( 'Show Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_team_three_show_job_title',
			[
				'label' => esc_html__( 'Show Job Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_team_three_show_icon',
			[
				'label' => esc_html__( 'Show Icon', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_three_section_bg_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_team_three_section_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .team-three',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_three_style_head',
			[
				'label' => esc_html__( 'Team Member Style', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_team_three_style',
			[
				'label' => esc_html__( 'Member Style', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_team_three_tabs'
		);
            /* normal Backgournd*/ 
            $this->start_controls_tab(
                'mistri_team_three_bg_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_team_three_memeber_name_color',
                [
                    'label' => esc_html__('Member Name Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-three .item h3 a' => 'color: {{VALUE}}',
                    ],
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_three_memeber_name_typography',
                    'selector' => '{{WRAPPER}} .team-three .item h3',
                ]
            );

            $this->add_control(
                'mistri_team_three_memeber_job_title_color',
                [
                    'label' => esc_html__('Member Job Title Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-three .item .content span' => 'color: {{VALUE}}',
                    ],
                    'separator' => "before"
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_three_job_title_typography',
                    'selector' => '{{WRAPPER}} .team-three .item .content span',
                ]
            );

            $this->add_control(
                'mistri_team_three_social_icon_color',
                [
                    'label' => esc_html__('Social Icon Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-three .item .team-info a' => 'color: {{VALUE}}',
                    ],
                    'separator' => "before",
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_three_social_icon_typography',
                    'selector' => '{{WRAPPER}} .team-three .item .team-info a',
                ]
            );

            $this->add_control(
                'mistri_team_three_box_border_color',
                [
                    'label' => esc_html__('Box Border Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-three .item' => 'border-color: {{VALUE}}',
                    ],
                    'separator' => "before",
                ]
            );

            $this->add_control(
                'mistri_team_three_box_bg_color',
                [
                    'label' => esc_html__('Box Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-three .item' => 'background-color: {{VALUE}}',
                    ],
                    'separator' => "before",
                ]
            );

            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_team_three_slider_bg_hover',
                [
                    'label' => esc_html__( 'Hover', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_team_three_memeber_name_hover_color',
                [
                    'label' => esc_html__('Member Name Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-three .item:hover h3 a' => 'color: {{VALUE}}',
                    ],
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_three_memeber_name_hover_typography',
                    'selector' => '{{WRAPPER}} .team-three .item:hover h3',
                ]
            );

            $this->add_control(
                'mistri_team_memeber_two_job_title_hover_color',
                [
                    'label' => esc_html__('Member Job Title Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-three .item:hover .content span' => 'color: {{VALUE}}',
                    ],
                    'separator' => "before"
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_three_job_title_hover_typography',
                    'selector' => '{{WRAPPER}} .team-three .item:hover .content span',
                ]
            );

            $this->add_control(
                'mistri_team_three_social_icon_hover_color',
                [
                    'label' => esc_html__('Social Icon Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-three .item:hover .team-info a' => 'color: {{VALUE}}',
                    ],
                    'separator' => "before",
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_three_social_hover_icon_typography',
                    'selector' => '{{WRAPPER}} .team-three .item:hover .team-info a',
                ]
            );

            $this->add_control(
                'mistri_team_three_box_border_hover_color',
                [
                    'label' => esc_html__('Box Border Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-three .item:hover' => 'border-color: {{VALUE}}',
                    ],
                    'separator' => "before",
                ]
            );

            $this->add_control(
                'mistri_team_three_box_bg_hover_color',
                [
                    'label' => esc_html__('Box Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-three .item:hover' => 'background-color: {{VALUE}}',
                    ],
                    'separator' => "before",
                ]
            );
            
            $this->end_controls_tab();

        $this->end_controls_tabs();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_team_three_number = $settings['mistri_team_three_number'];      
        $mistri_team_three_show_title = $settings['mistri_team_three_show_title'];      
        $mistri_team_three_show_job_title = $settings['mistri_team_three_show_job_title'];      
        $mistri_team_three_show_icon = $settings['mistri_team_three_show_icon'];      
        ?>
        <section class="team-three section-padding">
            <div class="container">
                <div class="row g-4">
                <?php
                    $args = array(
                        'post_type' => 'team-member',
                        'posts_per_page'    => $mistri_team_three_number,
                        'post_status'	=> 'publish',
                    );
                    $mistri_team_three = new WP_Query($args);

                    if($mistri_team_three->have_posts()){
                        $i = 0;
                        while($mistri_team_three->have_posts()){
                            $mistri_team_three->the_post();

                            $mistri_facebook_link = get_post_meta(get_the_ID(), 'mistri_facebook_link', true);
                            $mistri_twitter_link = get_post_meta(get_the_ID(), 'mistri_twitter_link', true);
                            $mistri_linkedin_link = get_post_meta(get_the_ID(), 'mistri_linkedin_link', true);
                            $mistri_team_member_job_title = get_post_meta(get_the_ID(), 'mistri_team_member_job_title', true);
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <?php if("yes" === $mistri_team_three_show_title): ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="image d-block">
                                 <?php the_post_thumbnail(); ?>
                            </a>
                            <div class="content">
                                <?php if("yes" === $mistri_team_three_show_job_title): ?>
                                <span><?php echo esc_html__($mistri_team_member_job_title, 'mistri'); ?></span>
                                <?php endif; ?>
                                <?php if("yes" === $mistri_team_three_show_icon): ?>
                                    <?php if($mistri_facebook_link || $mistri_twitter_link || $mistri_linkedin_link): ?>
                                        <div class="team-info">
                                            <?php if($mistri_facebook_link): ?>
                                                <a class="d-block" href="<?php echo esc_url($mistri_facebook_link); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                                            <?php endif; ?>
                                            <?php if($mistri_twitter_link): ?>
                                                <a class="d-block" href="<?php echo esc_url($mistri_twitter_link); ?>"><i class="fa-brands fa-twitter"></i></a>
                                            <?php endif; ?>
                                            <?php if($mistri_linkedin_link): ?>
                                                <a class="d-block" href="<?php echo esc_url($mistri_linkedin_link); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
        </section>
        <?php 
	}
}