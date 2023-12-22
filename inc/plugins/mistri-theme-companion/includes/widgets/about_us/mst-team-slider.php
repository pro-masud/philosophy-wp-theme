<?php
class Mistri_Team_Slider extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_team_slider';
	}

	public function get_title() {
		return esc_html__( 'Mistri Team Slider', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'team', 'section', 'slider'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_team_section_head',
			[
				'label' => esc_html__( 'Team Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_team_sub_tilte',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'OUR PROFESSIONALS ', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_team_tilte',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Our Dedicated Team', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_team_section_head_show',
			[
				'label' => esc_html__( 'Show Heading', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_team_divider',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
			'mistri_team_number',
			[
				'label' => esc_html__( 'Number Of Team', 'mistri' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 10,
				'step' => 1,
				'default' => 5,
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_section_bg_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_team_section_bg_image_head',
			[
				'label' => esc_html__( 'Choose Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_team_section_bg_image_head_show',
			[
				'label' => esc_html__( 'Show Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_team_section_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .team-two',
                'separator' => 'before'
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_team_style_head',
			[
				'label' => esc_html__( 'Team Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_team_sub_title_color',
			[
				'label' => esc_html__('Sub Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .team-two.team-slide-area  .section-header h5' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_sub_typography',
				'selector' => '{{WRAPPER}} .team-two.team-slide-area  .section-header h5',
			]
		);

        $this->add_control(
			'mistri_teams_title_color',
			[
				'label' => esc_html__('Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
					'{{WRAPPER}} .team-two.team-slide-area .section-header h2' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_title_typography',
				'selector' => '{{WRAPPER}} .team-two.team-slide-area  .section-header h2',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_slider_style_head',
			[
				'label' => esc_html__( 'Team Slider', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_team_slider_style',
			[
				'label' => esc_html__( 'Team Slider Style', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_team_slider_tabs'
		);
            /* normal Backgournd*/ 
            $this->start_controls_tab(
                'mistri_team_slider_bg_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_team_memeber_name_color',
                [
                    'label' => esc_html__('Member Name Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-two.team-slide-area .team-slider .item .content h3 a' => 'color: {{VALUE}}',
                    ],
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_memeber_name_typography',
                    'selector' => '{{WRAPPER}} .team-two.team-slide-area .team-slider .item .content h3',
                ]
            );

            $this->add_control(
                'mistri_team_memeber_job_title_color',
                [
                    'label' => esc_html__('Member Job Title Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-two.team-slide-area .team-slider .item .content span' => 'color: {{VALUE}}',
                    ],
                    'separator' => "before"
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_job_title_typography',
                    'selector' => '{{WRAPPER}} .team-two.team-slide-area .team-slider .item .content span',
                ]
            );

            $this->add_control(
                'mistri_team_memeber_background_color',
                [
                    'label' => esc_html__('Member Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-two.team-slide-area .swiper-slide.swiper-slide-active .content ' => 'background-color: {{VALUE}}',
                    ],
                ]
            );


            $this->add_control(
                'mistri_team_social_icon_color',
                [
                    'label' => esc_html__('Social Icon Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-two .item .team-info a' => 'color: {{VALUE}}',
                    ],
                    'separator' => "before",
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_social_icon_typography',
                    'selector' => '{{WRAPPER}} .team-two .item .team-info a',
                ]
            );

            $this->add_control(
                'mistri_team_social_background_color',
                [
                    'label' => esc_html__('Social Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-two .item .team-info' => 'background-color: {{VALUE}}',
                    ],
                ]
            );


            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_team_slider_bg_hover',
                [
                    'label' => esc_html__( 'Hover', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_team_memeber_name_hover_color',
                [
                    'label' => esc_html__('Member Name Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-two .item:hover .content h3 a' => 'color: {{VALUE}}',
                    ],
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_memeber_name_hover_typography',
                    'selector' => '{{WRAPPER}} .team-two .item:hover .content h3',
                ]
            );

            $this->add_control(
                'mistri_team_memeber_job_title_hover_color',
                [
                    'label' => esc_html__('Member Job Title Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-two .item:hover .content span' => 'color: {{VALUE}}',
                    ],
                    'separator' => "before"
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_job_title_hover_typography',
                    'selector' => '{{WRAPPER}} .team-two .item:hover .content span',
                ]
            );

            $this->add_control(
                'mistri_team_memeber_hover_background_color',
                [
                    'label' => esc_html__('Member Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-two .item:hover .content ' => 'background-color: {{VALUE}}',
                    ],
                ]
            );


            $this->add_control(
                'mistri_team_social_icon_hover_color',
                [
                    'label' => esc_html__('Social Icon Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-two .item:hover .team-info a' => 'color: {{VALUE}}',
                    ],
                    'separator' => "before",
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_social_hover_icon_typography',
                    'selector' => '{{WRAPPER}} .team-two .item:hover .team-info a',
                ]
            );

            $this->add_control(
                'mistri_team_social_hover_background_color',
                [
                    'label' => esc_html__('Social Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-two .item:hover .team-info' => 'background-color: {{VALUE}}',
                    ],
                ]
            );
            
            $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_team_sub_tilte = $settings['mistri_team_sub_tilte'];
        $mistri_team_tilte = $settings['mistri_team_tilte'];
        $mistri_team_section_head_show = $settings['mistri_team_section_head_show'];
        $mistri_team_number = $settings['mistri_team_number'];
        $mistri_team_section_bg_image_head = $settings['mistri_team_section_bg_image_head']['url'];
        $mistri_team_section_bg_image_head_show = $settings['mistri_team_section_bg_image_head_show'];
 
        $this->add_inline_editing_attributes('mistri_team_sub_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_team_tilte', 'basic');

        $this->add_render_attribute(
            'mistri_team_sub_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay'    => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_team_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay'    => '.6s',
            ]
        );
       
        ?>
         <section class="team-two team-slide-area secondary-bg section-padding">
            <?php if("yes" === $mistri_team_section_bg_image_head_show){ ?>
            <div class="map">
                <img src="<?php echo esc_url($mistri_team_section_bg_image_head); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php } ?>
            <div class="container">
                <?php if("yes" === $mistri_team_section_head_show){ ?>
                <div class="section-header text-center position-relative">
                    <h5 <?php echo __($this->get_render_attribute_string('mistri_team_sub_tilte'),'mistri'); ?>><?php echo esc_html__($mistri_team_sub_tilte, 'mistri'); ?></h5>
                    <h2 <?php echo __($this->get_render_attribute_string('mistri_team_tilte'),'mistri'); ?>><?php echo esc_html__($mistri_team_tilte, 'mistri'); ?></h2>
                </div>
                <?php } ?>
                <div class="wrp">
                    <div class="swiper team-slider">
                        <div class="swiper-wrapper">
                        <?php 
                        $args = array(
                            'post_type' => 'team-member',
                            'posts_per_page'    => $mistri_team_number,
                            'post_status'	=> 'publish',
                        );

                        $mistri_team = new WP_Query($args);
                        
                        if($mistri_team->have_posts()){
                            while($mistri_team->have_posts()){
                                $mistri_team->the_post();

                                $mistri_facebook_link = get_post_meta(get_the_ID(), 'mistri_facebook_link', true);
                                $mistri_twitter_link = get_post_meta(get_the_ID(), 'mistri_twitter_link', true);
                                $mistri_linkedin_link = get_post_meta(get_the_ID(), 'mistri_linkedin_link', true);
                                $mistri_team_member_job_title = get_post_meta(get_the_ID(), 'mistri_team_member_job_title', true);
                        ?>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="<?php the_permalink(); ?>" class="image d-block">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                    <?php if( $mistri_facebook_link || $mistri_twitter_link || $mistri_linkedin_link): ?>
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
                                    <div class="content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <span><?php echo esc_html__($mistri_team_member_job_title, 'mistri'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php } wp_reset_query(); } ?>
                        </div>
                    </div>
                    <button class="arry-prev d-none d-lg-block product-arry-prev"><i class="ti-angle-left"></i></button>
                    <button class="arry-next d-none d-lg-block product-arry-next"><i
                            class="ti-angle-right"></i></button>
                </div>
            </div>
        </section>
        <?php 
	}

}