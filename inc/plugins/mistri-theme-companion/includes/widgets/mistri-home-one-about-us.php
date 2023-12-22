<?php
class Mistri_Home_One_About_Us extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_home_one_about_us';
	}

	public function get_title() {
		return esc_html__( 'Mistri Home One About Us', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'about', 'home'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_home_one_about_us_left_head',
			[
				'label' => esc_html__( 'About Us Left', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_home_one_about_us_left_icons',
			[
				'label' => esc_html__( 'Get Icons', 'mistri' ),
                'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-play',
					'library' => 'fa-solid',
				],
			]
		);

        $this->add_control(
			'mistri_home_one_about_us_left_video_link',
			[
				'label' => esc_html__( 'YouTube Video Link', 'mistri' ),
                'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);

        $this->add_control(
			'mistri_home_one_about_us_left_since_text',
			[
				'label' => esc_html__( 'Since Text', 'mistri' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Since 1980',
                'label_block'   => true,
			]
		);

        $this->add_control(
			'mistri_home_one_about_us_left_image',
			[
				'label' => esc_html__( 'Choose Left Image', 'mistri' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'mistri_home_one_about_us_left_image_size',
				'default' => 'large',
			]
		);

        $this->add_control(
			'mistri_home_one_about_us_bg_heading',
			[
				'label' => esc_html__( 'About Us Left Background', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[   
				'name' => 'mistri_home_one_about_us_left_bg',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bg-image',
			]
		);

        $this->end_controls_section();


		
		// $this->start_controls_section(
		// 	'mistri_home_one_about_us_head',
		// 	[
		// 		'label' => esc_html__( 'Mistri About Us', 'mistri' ),
		// 		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		// 	]
		// );


        // $this->add_control(
		// 	'mistri_home_about_us_one_sub_tilte',
		// 	[
		// 		'label' => esc_html__( 'Slider Title One', 'mistri' ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
        //         'label_block'   => true,
		// 		'default' => esc_html__( 'ABOUT TO MISTRI', 'mistri' ),
		// 	]
		// );


		// $this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        /**
         * About us Left Sidebar property and method
         * */ 

         $mistri_home_one_about_us_left_video_link = $settings['mistri_home_one_about_us_left_video_link']['url'];



        $mistri_home_about_us_one_sub_tilte = $settings['mistri_home_about_us_one_sub_tilte'];

        $this->add_inline_editing_attributes('mistri_home_about_us_one_sub_tilte', 'basic');
        $this->add_render_attribute(
            'mistri_home_about_us_one_sub_tilte',
            [   
                'class' => 'wow fadeInUp',
                'data-delay' => '1s',
                'data-wow-duration' => 'fadeInUp',
                'data-wow-delay' => '.3s',
            ]
        );
        ?>
         <!-- About area start here -->
         <section class="about section-padding">
            <div class="shape1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/start1.png" alt="">
            </div>
            <div class="shape2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/start2.png" alt="">
            </div>
            <div class="about-wrp">
                <div class="bg-image inline d-none d-lg-block"></div>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="left-item">
                                <div class="video-btn-wrp">
                                    <div class="video video-pulse">
                                        <a class="video-popup secondary-bg"
                                            href="<?php echo esc_url( $mistri_home_one_about_us_left_video_link, 'mistri'); ?>">
                                            <?php \Elementor\Icons_Manager::render_icon( $settings['mistri_home_one_about_us_left_icons'], [ 'aria-hidden' => 'true' ] ); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="image wow bounceInLeft">
                                    <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'mistri_home_one_about_us_left_image_size', 'mistri_home_one_about_us_left_image' ); ?>
                                </div>
                                <h2 class="d-none d-xl-block">Since 1980</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-item">
                                <div class="section-header">
                                    <h5 <?php echo $this->get_render_attribute_string('mistri_home_about_us_one_sub_tilte'); ?>><?php echo esc_html__($mistri_home_about_us_one_sub_tilte, 'mistri'); ?></h5>
                                    <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">We take you
                                        to
                                        the next level industry solutions</h2>
                                    <p class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">We have
                                        facility to produce advance work various industrial applications based on
                                        specially developed technol-ogy. We
                                        are also ready to developement by according to users changing.</p>
                                </div>
                                <div class="content pb-65 bor-bottom">
                                    <div class="row g-4">
                                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.3s"
                                            data-wow-delay=".3s">
                                            <div class="info">
                                                <h3><span class="count">22.8</span> M+</h3>
                                                <p>Successful Training Completions</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.5s"
                                            data-wow-delay=".4s">
                                            <div class="info">
                                                <h3 class="count">1,379</h3>
                                                <p>Training & Assessment Programs</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.7s"
                                            data-wow-delay=".5s">
                                            <div class="info">
                                                <h3 class="count">1,105</h3>
                                                <p>Accredited <br> Organizations</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.9s"
                                            data-wow-delay=".6s">
                                            <div class="info">
                                                <h3 class="count">6,986</h3>
                                                <p>Points of Delivery for Training & Assessments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about_info pt-65 wow fadeInUp" data-wow-duration="1.9s"
                                    data-wow-delay=".9s">
                                    <div class="info">
                                        <i class="fa-solid fa-phone-volume ring-animation"></i>
                                        <div class="about_info_con">
                                            <span>call any time</span>
                                            <a href="tel:+912659302003">+91 2659 302 003</a>
                                        </div>
                                    </div>
                                    <span class="d-none d-sm-inline">Or</span>
                                    <a href="contact.html" class="btn-one"><span>Contact Us</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->
      
        <?php 
        
	}

    protected function content_template() {
        ?>

                <#

                    /**
                    * About us Left Sidebar property and method
                    * */ 
		            var mistri_home_one_about_us_left_icon = elementor.helpers.renderIcon( view, settings.mistri_home_one_about_us_left_icons, { 'aria-hidden': true }, 'i' , 'object' );

                    <!--  -->
                    if ( settings.mistri_home_one_about_us_left_image.url ) {
                        var mistri_home_one_about_us_left_image_size_link = {
                            id: settings.mistri_home_one_about_us_left_image.id,
                            url: settings.mistri_home_one_about_us_left_image.url,
                            size: settings.mistri_home_one_about_us_left_image_size_size,
                            dimension: settings.mistri_home_one_about_us_left_image_size_custom_dimension,
                            model: view.getEditModel()
                        };

                        var mistri_home_one_about_us_left_image_size_url = elementor.imagesManager.getImageUrl( mistri_home_one_about_us_left_image_size_link );

                        if ( ! mistri_home_one_about_us_left_image_size_url ) {
                            return;
                        }
                    }

                    view.addInlineEditingAttributes( 'mistri_home_about_us_one_sub_tilte', 'basic' );
                    view.addRenderAttribute(
                        'mistri_home_about_us_one_sub_tilte',
                        {
                            'class': 'wow fadeInUp',
                            'data-wow-duration': '1.3s',
                            'data-wow-delay': '.3s',
                        }
                    );
                #>
         <!-- About area start here -->
        <section class="about section-padding">
            <div class="shape1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/start1.png" alt="">
            </div>
            <div class="shape2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/start2.png" alt="">
            </div>
            <div class="about-wrp">
                <div class="bg-image inline d-none d-lg-block"></div>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="left-item">
                                <div class="video-btn-wrp">
                                    <div class="video video-pulse">
                                        <a class="video-popup secondary-bg"
                                            href="{{{settings.mistri_home_one_about_us_left_video_link.url}}}">
                                            {{{mistri_home_one_about_us_left_icon.value}}}
                                        </a>
                                    </div>
                                </div>
                                <div class="image wow bounceInLeft">
                                    <img src="{{mistri_home_one_about_us_left_image_size_url}}" alt="image">
                                </div>
                                <h2 class="d-none d-xl-block">Since 1980</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-item">
                                <div class="section-header">
                                    <h5 {{{ view.getRenderAttributeString( 'mistri_home_about_us_one_sub_tilte' )}}}>{{{settings.mistri_home_about_us_one_sub_tilte}}}</h5>
                                    <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">We take you
                                        to
                                        the next level industry solutions</h2>
                                    <p class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">We have
                                        facility to produce advance work various industrial applications based on
                                        specially developed technol-ogy. We
                                        are also ready to developement by according to users changing.</p>
                                </div>
                                <div class="content pb-65 bor-bottom">
                                    <div class="row g-4">
                                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.3s"
                                            data-wow-delay=".3s">
                                            <div class="info">
                                                <h3><span class="count">22.8</span> M+</h3>
                                                <p>Successful Training Completions</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.5s"
                                            data-wow-delay=".4s">
                                            <div class="info">
                                                <h3 class="count">1,379</h3>
                                                <p>Training & Assessment Programs</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.7s"
                                            data-wow-delay=".5s">
                                            <div class="info">
                                                <h3 class="count">1,105</h3>
                                                <p>Accredited <br> Organizations</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.9s"
                                            data-wow-delay=".6s">
                                            <div class="info">
                                                <h3 class="count">6,986</h3>
                                                <p>Points of Delivery for Training & Assessments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about_info pt-65 wow fadeInUp" data-wow-duration="1.9s"
                                    data-wow-delay=".9s">
                                    <div class="info">
                                        <i class="fa-solid fa-phone-volume ring-animation"></i>
                                        <div class="about_info_con">
                                            <span>call any time</span>
                                            <a href="tel:+912659302003">+91 2659 302 003</a>
                                        </div>
                                    </div>
                                    <span class="d-none d-sm-inline">Or</span>
                                    <a href="contact.html" class="btn-one"><span>Contact Us</span> <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->
    
        <?php 
    }

}
