<?php
class Mistri_Service_One extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_service_one';
	}

	public function get_title() {
		return esc_html__( 'Mistri Service One', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-instagram-comments';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'one', 'service', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_service_one_head',
			[
				'label' => esc_html__( 'Service Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_service_one_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'OUR AWESOME SERVICES',
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_service_one_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => 'provides the best service for sustainable progress',
                'label_block'   => true,
			]
		);

		$this->add_control(
			'mistri_home_one_show_heading',
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
			'mistri_service_one_items_head',
			[
				'label' => esc_html__( 'Service Items', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_service_one_post_items',
			[
				'label' => esc_html__( 'Post Per Page', 'mistri' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 6,
			]
		);

		$this->add_control(
			'mistri_service_one_show_post_icon',
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
			'mistri_service_one_show_post_title',
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
			'mistri_service_one_show_slider',
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
			'mistri_service_one_shape_head',
			[
				'label' => esc_html__( 'Shape Image', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_service_one_shape_image',
			[
				'label' => esc_html__( 'Choose Shape Top Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_service_one_show_top_image',
			[
				'label' => esc_html__( 'Show Top Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'mistri_service_one_background_head',
			[
				'label' => esc_html__( 'Service Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_service_one_background_image',
			[
				'label' => esc_html__( 'Choose Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_service_one_show_bg_image',
			[
				'label' => esc_html__( 'Show Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'mistri_service_one_background',
			[
				'label' => esc_html__( 'Section Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_service_one_bg_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .service',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_service_one_style_head',
			[
				'label' => esc_html__( 'Service Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_service_one_style_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ee332b',
                'selectors' => [
                    '{{{WRAPPER}}} .service .section-header h5 '  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'service_style_sub_title_typography',
				'selector' => '{{WRAPPER}} .service .section-header h5',
			]
		);

		$this->add_control(
			'mistri_service_one_style_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
                'selectors' => [
                    '{{{WRAPPER}}} .service .section-header h2 '  => 'color: {{VALUE}}'
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'service_style_title_typography',
				'selector' => '{{WRAPPER}}  .service .section-header h2',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$mistri_service_one_sub_title = $settings['mistri_service_one_sub_title'];
		$mistri_service_one_title = $settings['mistri_service_one_title'];
		$mistri_home_one_show_heading = $settings['mistri_home_one_show_heading'];
		$mistri_service_one_post_items = $settings['mistri_service_one_post_items'];
		$mistri_service_one_show_post_icon = $settings['mistri_service_one_show_post_icon'];
		$mistri_service_one_show_post_title = $settings['mistri_service_one_show_post_title'];
		$mistri_service_one_show_slider = $settings['mistri_service_one_show_slider'];
		$mistri_service_one_show_top_image = $settings['mistri_service_one_show_top_image'];
		$mistri_service_one_show_bg_image = $settings['mistri_service_one_show_bg_image'];
		$mistri_service_one_shape_image = $settings['mistri_service_one_shape_image']['url'];
		$mistri_service_one_background_image = $settings['mistri_service_one_background_image']['url'];

		$this->add_inline_editing_attributes('mistri_service_one_sub_title', 'basic');
		$this->add_inline_editing_attributes('mistri_service_one_title', 'basic');

		 $this->add_render_attribute(
            'mistri_service_one_sub_title',
            [   
                'class' => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay' => '.3s',
            ]
        );
		 $this->add_render_attribute(
            'mistri_service_one_title',
            [   
                'class' => 'wow fadeInUp service_title',
                'data-wow-duration' => '1.6s',
                'data-wow-delay' => '.6s',
            ]
        );
        ?>
         <section class="service">
			<?php if("yes" === $mistri_service_one_show_top_image): ?>
            <div class="shape1">
                <img src="<?php echo esc_url($mistri_service_one_shape_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
			<?php endif; ?>
			<?php if("yes" === $mistri_service_one_show_bg_image): ?>
            <div class="service-bg bg-image"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo esc_url($mistri_service_one_background_image); ?>;)">
            </div>
			<?php endif; ?>
            <div class="container-fluid p-0">
				<?php if("yes" === $mistri_home_one_show_heading): ?>
                <div class="section-header text-center">
					<?php if($mistri_service_one_sub_title): ?>
                    <h5 <?php echo $this->get_render_attribute_string('mistri_service_one_sub_title'); ?> > <?php echo esc_html__($mistri_service_one_sub_title, 'mistri'); ?></h5>
					<?php endif; ?>
					<?php if($mistri_service_one_title): ?>
                    <h2 <?php echo $this->get_render_attribute_string('mistri_service_one_title'); ?> > <?php echo wp_kses_post($mistri_service_one_title); ?> </h2>
					<?php endif; ?>
                </div>
				<?php endif; ?>
				<?php if("yes" === $mistri_service_one_show_slider): ?>
                <div class="swiper service-slider">
                    <div class="swiper-wrapper">
					<?php
                        $args = array(
                            'post_type' => 'service-post',
                            'posts_per_page'    => $mistri_service_one_post_items,
                            'post_status'	=> 'publish',
                        );
    
                        $service_posts = new WP_Query($args);
                        
                        if($service_posts->have_posts()){
                            while($service_posts->have_posts()){
                                $service_posts->the_post();
                            ?>
                            <div class="swiper-slide">
                                <div class="item">
									<?php if("yes" === $mistri_service_one_show_post_icon): ?>
                                    <a href="<?php the_permalink(); ?>" class="location_icon"><i class="fa-solid fa-location-arrow"></i></a>
									<?php endif; ?>
                                    <a href="<?php the_permalink(); ?>" class="image d-block">
                                        <?php the_post_thumbnail('full'); ?>
                                    </a>
									<?php if("yes" === $mistri_service_one_show_post_title): ?>
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

    protected function content_template() {
        ?>
        <#
            view.addInlineEditingAttributes( 'mistri_service_one_sub_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_service_one_title', 'basic' );

            view.addRenderAttribute(
				'mistri_service_one_sub_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.3s',
					'data-wow-duration': '.3s',
				}
			);
            view.addRenderAttribute(
				'mistri_service_one_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.6s',
					'data-wow-duration': '.6s',
				}
			);
        #>
         <section class="service">
		 	<# if("yes" === settings.mistri_service_one_show_top_image){ #>
            <div class="shape1">
                <img src="{{{settings.mistri_service_one_shape_image.url}}}" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
			<# } #>
			<# if("yes" === settings.mistri_service_one_show_bg_image){ #>
            <div class="service-bg bg-image"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url({{{settings.mistri_service_one_background_image.url}}});">
            </div>
			<# } #>
            <div class="container-fluid p-0">
				<# if("yes" === settings.mistri_home_one_show_heading){ #>
                <div class="section-header text-center">
					<# if(settings.mistri_service_one_sub_title){ #>
                    <h5 {{{ view.getRenderAttributeString( 'mistri_service_one_sub_title' )}}}>{{{settings.mistri_service_one_sub_title}}}</h5>
					<# } #>
					<# if(settings.mistri_service_one_title){ #>
                    <h2 {{{ view.getRenderAttributeString( 'mistri_service_one_title' )}}}>{{{settings.mistri_service_one_title}}}</h2>
					<# } #>
                </div>
				<# } #>s
            </div>
        </section>
        <?php 
    }
}