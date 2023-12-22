<?php
class Mistri_Home_Service_Slider extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_home_service_slider';
	}

	public function get_title() {
		return esc_html__( 'Mistri Service Slider', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-instagram-comments';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'slider', 'service', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_service_slider_head',
			[
				'label' => esc_html__( 'Service Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_service_slider_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'WHAT WE DO ', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_service_slider_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Services That We Provide', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_service_slider_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing.', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'mistri_service_slider_item_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title #1', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_service_slider_item_list',
			[
				'label' => esc_html__( 'List Items', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mistri_service_slider_item_title' => esc_html__( 'Greate Technology', 'mistri' )
					],
					[
						'mistri_service_slider_item_title' => esc_html__( 'Delivery Ontime', 'mistri' ),
					],
					[
						'mistri_service_slider_item_title' => esc_html__( 'Certified Engineers', 'mistri' ),
					],
				],
				'title_field' => '{{{ mistri_service_slider_item_title }}}',
			]
		);

		$this->add_control(
			'mistri_service_slider_head_show',
			[
				'label' => esc_html__( 'Show Heading', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator'	=> 'before'
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_service_slider_customiztion_head',
			[
				'label' => esc_html__( 'Service Slider Customization', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'mistri_service_slider_number',
			[
				'label' => esc_html__( 'Number Of Service Post', 'mistri' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 6,
			]
		);


		$this->add_control(
			'mistri_service_slider_show_post_icon',
			[
				'label' => esc_html__( 'Show Icon', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'mistri_service_slider_show_post_title',
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
			'mistri_service_slider_show_slider',
			[
				'label' => esc_html__( 'Show Slider', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);


        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_service_slider_bg_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_service_slider_bg',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .service',
			]
		);


        $this->end_controls_section();

		$this->start_controls_section(
			'mistri_service_slider_style_head',
			[
				'label' => esc_html__( 'Service Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_service_slider_post_sub_title_color',
			[
				'label' => esc_html__('Sub Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .service .section-header h5' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_slider_post_sub_typography',
				'selector' => '{{WRAPPER}} .service .section-header h5',
			]
		);

        $this->add_control(
			'mistri_service_slider_post_title_color',
			[
				'label' => esc_html__('Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .service .section-header h2' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_slider_post_title_typography',
				'selector' => '{{WRAPPER}} .service .section-header h2',
			]
		);

        $this->add_control(
			'mistri_service_slider_post_desc_color',
			[
				'label' => esc_html__('Description Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}}  .service .content p' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_slider_post_desc_typography',
				'selector' => '{{WRAPPER}} .service .content p',
			]
		);

        $this->add_control(
			'mistri_service_slider_post_service_title_color',
			[
				'label' => esc_html__('Item Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}}  .about-three .content ul li' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_service_slider_post_service_title_typography',
				'selector' => '{{WRAPPER}} .about-three .content ul li',
			]
		);
        $this->add_control(
			'mistri_service_slider_post_service_icon_color',
			[
				'label' => esc_html__('Dots Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}}  .about-three .content ul li span' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->end_controls_section();


		$this->start_controls_section(
			'mistri_service_slider_post_style_head',
			[
				'label' => esc_html__( 'Service Sliders Style ', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_service_slider_post_style',
			[
				'label' => esc_html__( 'Service Slider', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_service_slider_post_tabs'
		);
            /* normal Backgournd*/ 
            $this->start_controls_tab(
                'mistri_service_slider_post_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

            $this->add_control(
                'mistri_service_slider_posts_title_color',
                [
                    'label' => esc_html__('Service Title Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service .item .content h3 a' => 'color: {{VALUE}}',
                    ],
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_service_slider_posts_title_typography',
                    'selector' => '{{WRAPPER}} .service .item .content h3',
                ]
            );

            $this->add_control(
                'mistri_service_slider_post_titles_bg_color',
                [
                    'label' => esc_html__('Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service .item .content' => 'background-color: {{VALUE}}',
                    ],
                ]
            );


            $this->add_control(
                'mistri_team_social_icon_color',
                [
                    'label' => esc_html__('Social Icon Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service .swiper-slide.swiper-slide-active .location_icon' => 'color: {{VALUE}}',
                    ],
                    'separator' => "before",
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_social_icon_typography',
                    'selector' => '{{WRAPPER}} .service .swiper-slide.swiper-slide-active .location_icon i',
                ]
            );

            $this->add_control(
                'mistri_team_social_background_color',
                [
                    'label' => esc_html__('Social Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}}  .service .swiper-slide.swiper-slide-active .location_icon' => 'background-color: {{VALUE}}',
                    ],
                ]
            );


            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_service_slider_post_hover',
                [
                    'label' => esc_html__( 'Hover', 'mistri' ),
                ]
            );

			$this->add_control(
                'mistri_service_slider_post_title_hover_color',
                [
                    'label' => esc_html__('Service Title Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service .item:hover .content h3 a' => 'color: {{VALUE}}',
                    ],
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_service_slider_post_title_hover_typography',
                    'selector' => '{{WRAPPER}} .service .item:hover .content h3',
                ]
            );

            $this->add_control(
                'mistri_service_slider_post_title_hover_bg_color',
                [
                    'label' => esc_html__('Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service .item:hover .content' => 'background-color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_control(
                'mistri_team_social_icon_hover_color',
                [
                    'label' => esc_html__('Social Icon Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service .item:hover .location_icon' => 'color: {{VALUE}}',
                    ],
                    'separator' => "before",
                ]
            );
    
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'mistri_team_social_icon_hover_typography',
                    'selector' => '{{WRAPPER}} .service .item:hover .location_icon i',
                ]
            );

            $this->add_control(
                'mistri_team_social_background_hover_color',
                [
                    'label' => esc_html__('Social Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}}  .service .item:hover .location_icon' => 'background-color: {{VALUE}}',
                    ],
                ]
            );

            $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$mistri_service_slider_sub_title = $settings['mistri_service_slider_sub_title'];
		$mistri_service_slider_title = $settings['mistri_service_slider_title'];
		$mistri_service_slider_desc = $settings['mistri_service_slider_desc'];
		$mistri_service_slider_head_show = $settings['mistri_service_slider_head_show'];
		$mistri_service_slider_item_list = $settings['mistri_service_slider_item_list'];
		$mistri_service_slider_number = $settings['mistri_service_slider_number'];
		$mistri_service_slider_show_post_icon = $settings['mistri_service_slider_show_post_icon'];
		$mistri_service_slider_show_post_title = $settings['mistri_service_slider_show_post_title'];
		$mistri_service_slider_show_slider = $settings['mistri_service_slider_show_slider'];

		$this->add_inline_editing_attributes('mistri_service_slider_sub_title', 'basic');
		$this->add_inline_editing_attributes('mistri_service_slider_title', 'basic');
		$this->add_inline_editing_attributes('mistri_service_slider_desc', 'basic');

        $this->add_render_attribute(
            'mistri_service_slider_sub_title',
            [
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay' => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_service_slider_title',
            [
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay' => '.6s',
            ]
        );
        $this->add_render_attribute(
            'mistri_service_slider_desc',
            [
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay' => '.6s',
            ]
        );
        ?>

        <section class="service page">
            <div class="container-fluid p-0">
                <div class="container about-three">
                    <div class="row g-5 mb-65 align-items-center">
						<?php if("yes" === $mistri_service_slider_head_show): ?>
                        <div class="col-xl-6">
                            <div class="section-header m-0">
                            	<h5 <?php echo $this->get_render_attribute_string( 'mistri_service_slider_sub_title' ); ?>><?php echo esc_html__( $mistri_service_slider_sub_title, 'mistri'); ?></h5>
                                <h2 <?php echo $this->get_render_attribute_string( 'mistri_service_slider_title' ); ?>><?php echo esc_html__( $mistri_service_slider_title, 'mistri'); ?></h2>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="content">
                                <p <?php echo $this->get_render_attribute_string( 'mistri_service_slider_desc' ); ?>><?php echo esc_html__( $mistri_service_slider_desc, 'mistri'); ?></p>
                                <ul class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">

									<?php foreach($mistri_service_slider_item_list as $index => $single_item){ 
										 $mistri_service_slider_item_title_setting_key = $this->get_repeater_setting_key( 'mistri_service_slider_item_title', 'mistri_service_slider_item_list', $index );
										 $this->add_inline_editing_attributes($mistri_service_slider_item_title_setting_key);
										 $list_title = $settings['mistri_service_slider_item_list'][$index]['mistri_service_slider_item_title'];
										?>
                                    	<li <?php $this->print_render_attribute_string( $mistri_service_slider_item_title_setting_key ); ?>><span></span> <?php echo esc_html__($list_title, 'mistri'); ?></li>
									<?php } ?>
                                </ul>
                            </div>
                        </div>
						<?php endif; ?>
                    </div>
                </div>
				<?php if("yes" === $mistri_service_slider_show_slider): ?>
                <div class="swiper service-slider">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'service-post',
                            'posts_per_page'    => $mistri_service_slider_number,
                            'post_status'	=> 'publish',
                        );
    
                        $service_posts = new WP_Query($args);
                        
                        if($service_posts->have_posts()){
                            while($service_posts->have_posts()){
                                $service_posts->the_post();
                            ?>
                            <div class="swiper-slide">
                                <div class="item">
									<?php if("yes" === $mistri_service_slider_show_post_icon): ?>
                                    <a href="<?php the_permalink(); ?>" class="location_icon"><i class="fa-solid fa-location-arrow"></i></a>
									<?php endif; ?>
                                    <a href="<?php the_permalink(); ?>" class="image d-block">
                                        <?php the_post_thumbnail('full'); ?>
                                    </a>
									<?php if("yes" === $mistri_service_slider_show_post_title): ?>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
									<?php endif; ?>
                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
				<?php endif; ?>
            </div>
        </section>
        <?php 
	}
}