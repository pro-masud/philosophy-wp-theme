<?php
class Mistri_Service_Post extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_service_post';
	}

	public function get_title() {
		return esc_html__( 'Mistri Service Post', 'mistri' );
	}

	public function get_icon() {
		return ' eicon-sitemap';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'service', 'section', 'posts'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_service_post_section_head',
			[
				'label' => esc_html__( 'Service Post Customization', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_service_post_number',
			[
				'label' => esc_html__( 'Number Of Service Post', 'mistri' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 10,
				'step' => 1,
				'default' => 6,
			]
		);

        $this->add_control(
			'mistri_service_post_section_background',
			[
				'label' => esc_html__( 'Service Post Background', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_service_post_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .page-service ',
			]
		);

        $this->end_controls_section();



		$this->start_controls_section(
			'mistri_service_post_style_head',
			[
				'label' => esc_html__( 'Service Port Style', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_service_post_tabs_head',
			[
				'label' => esc_html__( 'Post Title ', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_service_post_tabs_start'
		);
            /* normal Backgournd*/ 
            $this->start_controls_tab(
                'mistri_service_post_tabs_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

			$this->add_control(
				'mistri_service_post_title_color',
				[
					'label' => esc_html__( 'Post Title Color', 'mistri' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{{WRAPPER}}} .page-service .item h3 a'  => 'color: {{VALUE}}'
					]
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'mistri_service_post_title_fonts',
					'selector' => '{{WRAPPER}} .page-service .item h3',
				]
			);

            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_service_post_tabs_hover',
                [
                    'label' => esc_html__( 'Hover', 'mistri' ),
                ]
            );

			$this->add_control(
				'mistri_service_post_title_hover_color',
				[
					'label' => esc_html__( 'Post Title Color', 'mistri' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{{WRAPPER}}} .page-service .item h3 a:hover'  => 'color: {{VALUE}}'
					]
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'mistri_service_post_title_hover_fonts',
					'selector' => '{{WRAPPER}} .page-service .item:hover h3:hover',
				]
			);
            
            $this->end_controls_tab();

        $this->end_controls_tabs();

		$this->add_control(
			'mistri_service_post_btn_tabs_head',
			[
				'label' => esc_html__( 'Post Button ', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_service_post_btn_tabs_start'
		);
            /* normal Backgournd*/ 
            $this->start_controls_tab(
                'mistri_service_post_btn_tabs_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

			$this->add_control(
				'mistri_service_post_btn_text_color',
				[
					'label' => esc_html__( 'Button Color', 'mistri' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{{WRAPPER}}} .page-service .item .btn-three'  => 'color: {{VALUE}}',
						'{{{WRAPPER}}} .page-service .item .btn-three i'  => 'color: {{VALUE}}'
					]
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'mistri_service_post_btn_text_fonts',
					'selector' => '{{WRAPPER}} .page-service .item .btn-three',
				]
			);

			$this->add_control(
				'mistri_service_post_btn_border_color',
				[
					'label' => esc_html__( 'Button Border Color', 'mistri' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{{WRAPPER}}} .page-service .item .btn-three'  => 'border-color: {{VALUE}}',
					]
				]
			);


            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_service_post_btn_tabs_hover',
                [
                    'label' => esc_html__( 'Hover', 'mistri' ),
                ]
            );

			$this->add_control(
				'mistri_service_post_btn_text_hover_color',
				[
					'label' => esc_html__( 'Button Color', 'mistri' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{{WRAPPER}}} .page-service .item:hover .btn-three'  => 'color: {{VALUE}}',
						'{{{WRAPPER}}} .page-service .item:hover .btn-three i'  => 'color: {{VALUE}}'
					]
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'mistri_service_post_btn_text_hover_fonts',
					'selector' => '{{WRAPPER}} .page-service .item:hover .btn-three',
				]
			);

			$this->add_control(
				'mistri_service_post_btn_border_hover_color',
				[
					'label' => esc_html__( 'Button Border Color', 'mistri' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{{WRAPPER}}} .page-service .item:hover .btn-three'  => 'border-color: {{VALUE}}',
					]
				]
			);
            
            $this->end_controls_tab();

        $this->end_controls_tabs();


		$this->add_control(
			'mistri_service_post_box_tabs_head',
			[
				'label' => esc_html__( 'Post Box ', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_service_post_box_tabs_start'
		);
            /* normal Backgournd*/ 
            $this->start_controls_tab(
                'mistri_service_post_box_tabs_normal',
                [
                    'label' => esc_html__( 'Normal', 'mistri' ),
                ]
            );

			$this->add_control(
				'mistri_service_post_box_border_color',
				[
					'label' => esc_html__( 'Box Border Color', 'mistri' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{{WRAPPER}}} .page-service .item'  => 'border-color: {{VALUE}}',
					]
				]
			);

			$this->add_control(
				'mistri_service_post_box_bg_color',
				[
					'label' => esc_html__( 'Background Color', 'mistri' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{{WRAPPER}}} .page-service .item'  => 'background-color: {{VALUE}}',
					]
				]
			);

            $this->end_controls_tab();

            /* Hover Backgournd*/ 
            $this->start_controls_tab(
                'mistri_service_post_box_tabs_hover',
                [
                    'label' => esc_html__( 'Hover', 'mistri' ),
                ]
            );

			$this->add_control(
				'mistri_service_post_box_hover_border_color',
				[
					'label' => esc_html__( 'Box Border Color', 'mistri' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{{WRAPPER}}} .page-service .item:hover'  => 'border-color: {{VALUE}}',
					]
				]
			);

			$this->add_control(
				'mistri_service_post_box_hover_bg_color',
				[
					'label' => esc_html__( 'Background Color', 'mistri' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{{WRAPPER}}} .page-service .item:hover'  => 'background-color: {{VALUE}}',
					]
				]
			);
            
            $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_service_post_number = $settings['mistri_service_post_number'];

    ?>
        <section class="page-service section-padding">
            <div class="container">
                <div class="row g-4">
                    <?php 

                    $args = array(
                        'post_type' => 'service-post',
                        'posts_per_page'    => $mistri_service_post_number,
                        'post_status'	=> 'publish',
                    );

                    $service_posts = new WP_Query($args);
                    
                    if($service_posts->have_posts()){
                        while($service_posts->have_posts()){
                            $service_posts->the_post();

							$button_text = get_post_meta(get_the_ID(), 'mistri_service_btn_text', true);
							$mistri_post_animation_duration_time = get_post_meta(get_the_ID(), 'mistri_post_animation_duration_time', true);
							$mistri_post_animation_delay_time = get_post_meta(get_the_ID(), 'mistri_post_animation_delay_time', true);
                            ?>
                            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="<?php echo esc_attr__($mistri_post_animation_duration_time, 'mistri'); ?>" data-wow-delay="<?php echo esc_attr__($mistri_post_animation_delay_time, 'mistri'); ?>">
                                <div class="item">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <a href="<?php the_permalink(); ?>" class="image d-block">
										<?php the_post_thumbnail('medium'); ?>
                                        <div class="gaps-right d-none d-sm-block float-bob-x">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/gaps-primary.png" alt="">
                                        </div>
                                        <div class="gaps-left d-none d-sm-block float-bob-x">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/gaps-primary.png" alt="">
                                        </div>
                                    </a>
                                    <?php if($button_text): ?>
                                    <a class="btn-three" href="<?php the_permalink(); ?>"><?php echo esc_html__($button_text, 'mistri'); ?><i class="fa-solid fa-arrow-right"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                    <?php }} ?>
                </div>
            </div>
        </section>
        <?php 
	}
}