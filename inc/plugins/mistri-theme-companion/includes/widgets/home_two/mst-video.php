<?php
class Mistri_Video_Area extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_video_area';
	}

	public function get_title() {
		return esc_html__( 'Mistri Video Area', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-youtube';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'video', 'area', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_video_area_head',
			[
				'label' => esc_html__( 'Video Area', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_video_area_title',
			[
				'label' => esc_html__( 'Video Area Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Strong & Beautiful, Everyone Loves Got An Incredible Project Right Now.', 'mistri' ),
				'label_block'	=> true,
			]
		);
		$this->add_control(
			'mistri_video_area_title_show',
			[
				'label' => esc_html__( 'Show Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'textdomain' ),
				'label_off' => esc_html__( 'Hide', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'mistri_video_area_youtube_video_link',
			[
				'label' => esc_html__( 'YouTube Video Link', 'mistri' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://www.youtube.com/watch?v=13qOE2N_AKs',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
				'separator'	=> "before"
			]
		);
		$this->add_control(
			'mistri_video_area_show',
			[
				'label' => esc_html__( 'Show Video', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'textdomain' ),
				'label_off' => esc_html__( 'Hide', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_video_area_background_head',
			[
				'label' => esc_html__( 'Video Area Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_video_area_background_image',
			[
				'label' => esc_html__( 'Choose Background Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_video_area_style_head',
			[
				'label' => esc_html__( 'Video Title Info', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_video_area_title_color',
			[
				'label' => esc_html__( 'Job Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .video-area h2' => 'color: {{VALUE}}',
				],
				'separator'		=> 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_video_area_title_typography',
				'selector' => '{{WRAPPER}} .video-area h2',
			]
		);



		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$mistri_video_area_title = $settings['mistri_video_area_title'];
		$mistri_video_area_title_show = $settings['mistri_video_area_title_show'];
		$mistri_video_area_youtube_video_link = $settings['mistri_video_area_youtube_video_link']['url'];
		$mistri_video_area_show = $settings['mistri_video_area_show'];
		$mistri_video_area_background_image = $settings['mistri_video_area_background_image']['url'];

		// inline editing method and property
		$this->add_inline_editing_attributes('mistri_video_area_title', 'basic');

		$this->add_render_attribute(
			'mistri_video_area_title',
			[
				'class'	=> 'pt-65 wow fadeInDown',
				'ata-wow-duration'	=> '1.9s',
				'data-wow-delay'	=> '.3s',
			]
		);
        ?>
		<section class="video-area bg-image section-padding" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(<?php echo esc_attr__($mistri_video_area_background_image, 'mistri'); ?>);">
            <div class="container">
				<?php if("yes" === $mistri_video_area_show){ ?>
                <a class="video-popup wow bounceIn" href="<?php echo esc_url($mistri_video_area_youtube_video_link); ?>"><i class="fa-solid fa-play"></i></a>
				<?php } ?>
				<?php if("yes" === $mistri_video_area_title_show){ ?>
                <h2 <?php echo $this->get_render_attribute_string('mistri_video_area_title'); ?>><?php echo esc_html__($mistri_video_area_title, 'mistri'); ?></h2>
				<?php } ?>
            </div>
        </section>
        <?php 
	}

    protected function content_template() {
        ?>
		<#
			// inline editing method and property
			view.addInlineEditingAttributes('mistri_video_area_title', 'basic');

			view.addRenderAttribute(
				'mistri_video_area_title',
				{
					'class': 'pt-65 wow fadeInDown',
					'data-wow-duration': '1.9s',
					'data-wow-delay': '.3s',
				}
			)
		#>
		<section class="video-area bg-image section-padding" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url({{{settings.mistri_video_area_background_image.url}}});">
            <div class="container">
				<# if(settings.mistri_video_area_show){ #>
                <a class="video-popup wow bounceIn" href="{{{settings.mistri_video_area_youtube_video_link.url}}}"><i class="fa-solid fa-play"></i></a>
				<# } #>
				<# if(settings.mistri_video_area_title_show){ #>
                <h2 {{{view.getRenderAttributeString('mistri_video_area_title')}}}>{{{settings.mistri_video_area_title}}}</h2>
				<# } #>
            </div>
        </section>
        <?php 
    }
}