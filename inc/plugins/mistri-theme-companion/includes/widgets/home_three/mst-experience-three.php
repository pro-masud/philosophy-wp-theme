<?php
class Mistri_Exprience_Three extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_experience_three';
	}

	public function get_title() {
		return esc_html__( 'Mistri Experience Three', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-library-download';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'experience', 'three', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_experience_three_head',
			[
				'label' => esc_html__( 'Expeience Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_experience_three_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'ABOUT TO MISTRI ', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_three_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'We Are Here to Increase Your Knowledge With Experience', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_three_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing.', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'mistri_experience_three_item_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title #1', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_three_item_list',
			[
				'label' => esc_html__( 'List Items', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mistri_experience_three_item_title' => esc_html__( 'Greate Technology', 'mistri' )
					],
					[
						'mistri_experience_three_item_title' => esc_html__( 'Delivery Ontime', 'mistri' ),
					],
					[
						'mistri_experience_three_item_title' => esc_html__( 'Certified Engineers', 'mistri' ),
					],
				],
				'title_field' => '{{{ mistri_experience_three_item_title }}}',
			]
		);

		$this->add_control(
			'mistri_experience_three_heading_show',
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
			'mistri_experience_three_images_head',
			[
				'label' => esc_html__( 'Expeience Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_experience_three_stroke_text',
			[
				'label' => esc_html__( 'Stroke Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Since 1980', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_three_stroke_text_show',
			[
				'label' => esc_html__( 'Show Text', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'mistri_experience_three_stroke_bg_image',
			[
				'label' => esc_html__( 'Choose Stroke Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'		=> 'before'
			]
		);

		$this->add_control(
			'mistri_experience_three_stroke_bg_image_show',
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
			'mistri_experience_three_shape_image_one',
			[
				'label' => esc_html__( 'Choose Shape Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> "before"
			]
		);

		$this->add_control(
			'mistri_experience_three_shape_image_one_show',
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
			'mistri_experience_three_shape_image_two',
			[
				'label' => esc_html__( 'Choose Shape Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> "before"
			]
		);

		$this->add_control(
			'mistri_experience_three_shape_image_two_show',
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
			'mistri_experience_three_counter_head',
			[
				'label' => esc_html__( 'Expeience Counters', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'mistri_experience_three_counter_one_heading',
			[
				'label' => esc_html__( 'Counter One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'mistri_experience_three_counter_one_number',
			[
				'label' => esc_html__( 'Counter Number', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '25', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_three_counter_one_symbol',
			[
				'label' => esc_html__( 'Counter Symbol', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_three_counter_one_title',
			[
				'label' => esc_html__( 'Counter Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Years Experience', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_three_counter_three_head',
			[
				'label' => esc_html__( 'Counter three', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'mistri_experience_three_counter_two_number',
			[
				'label' => esc_html__( 'Counter Number', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '69', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_three_counter_two_symbol',
			[
				'label' => esc_html__( 'Counter Symbol', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_three_counter_two_title',
			[
				'label' => esc_html__( 'Counter Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Industries Served', 'mistri' ),
				'label_block'	=> true,
			]

		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_three_icon_head',
			[
				'label' => esc_html__( 'Expeience Media', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_experience_three_icons',
			[
				'label' => esc_html__( 'Expeience Icon', 'mistri' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-play',
					'library' => 'fa-solid',
				],
			]
		);

		$this->add_control(
			'mistri_experience_three_youtube_video_link',
			[
				'label' => esc_html__( 'YouTube Video Link', 'mistri' ),
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
			'mistri_experience_three_icon_bg_image',
			[
				'label' => esc_html__( 'Icon Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_three_section_shape_images_head',
			[
				'label' => esc_html__( 'Shape Images', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_experience_three_section_shape_image_one',
			[
				'label' => esc_html__( 'Choose Shape Image One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_experience_three_section_shape_image_one_show',
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
			'mistri_experience_three_section_shape_image_two',
			[
				'label' => esc_html__( 'Choose Shape Image Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> 'before'
			]
		);

		$this->add_control(
			'mistri_experience_three_section_shape_image_two_show',
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
			'mistri_experience_three_section_shape_img_animation',
			[
				'label' => esc_html__( 'Animation Style', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'one',
				'options' => [
					'' => esc_html__( 'Select Now', 'mistri' ),
					'one' => esc_html__( 'Animation One', 'mistri' ),
					'two' => esc_html__( 'Animation Two', 'mistri' ),
				],
			]
		);

        $this->end_controls_section();	

		$this->start_controls_section(
			'mistri_experience_three_section_background_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_experience_three_section_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .experience-two.experience-three.experience-three.experience-three',
			]
		);

        $this->end_controls_section();	

		$this->start_controls_section(
			'mistri_experience_three_style_head',
			[
				'label' => esc_html__( 'Experience Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_experience_three_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .experience-two.experience-three.experience-three.experience-three .section-header h5 '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_three_sub_title_fonts',
				'selector' => '{{WRAPPER}}  .experience-two.experience-three.experience-three.experience-three .section-header h5',
			]
		);

        $this->add_control(
			'mistri_experience_three_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .experience-two.experience-three.experience-three.experience-three .section-header h2 '  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_three_title_fonts',
				'selector' => '{{WRAPPER}}  .experience-two.experience-three.experience-three.experience-three .section-header h2',
                
			]
		);

        $this->add_control(
			'mistri_experience_three_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .experience-two.experience-three.experience-three.experience-three .content p'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_three_desc_fonts',
				'selector' => '{{WRAPPER}} .experience-two.experience-three.experience-three.experience-three .content p',
			]
		);

        $this->add_control(
			'mistri_experience_three_item_title_color',
			[
				'label' => esc_html__( 'List Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}}  .about-three .content ul li'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_three_item_title_fonts',
				'selector' => '{{WRAPPER}} .about-three .content ul li',
			]
		);

		$this->add_control(
			'mistri_experience_three_item_dot_color',
			[
				'label' => esc_html__( 'List Dot Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .about-three .content ul li span'  => 'background-color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_three_style_stroke_text_head',
			[
				'label' => esc_html__( 'Experience Stroke', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_experience_three_style_stroke_text_color',
			[
				'label' => esc_html__( 'Text Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .experience-two.experience-three.experience-three.experience-three .image .stroke-text h2' => '-webkit-text-stroke-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_two_style_counter_head',
			[
				'label' => esc_html__( 'Experience Counters', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_experience_two_style_counter_number_color',
			[
				'label' => esc_html__( 'Counter Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .experience-two.experience-three .item h2 ' => 'color: {{VALUE}}',
					'{{WRAPPER}}  .experience-two.experience-three .item h2 span' => 'color: {{VALUE}}',
				],
				'separator'		=> 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_two_style_counter_number_typography',
				'selector' => '{{WRAPPER}} .experience-two.experience-three .item h2',
			]
		);

		$this->add_control(
			'mistri_experience_two_style_counter_title_color',
			[
				'label' => esc_html__( 'Counter Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .experience-two.experience-three .item .content > span' => 'color: {{VALUE}}',
				],
				'separator'		=> 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_two_style_counter_title_typography',
				'selector' => '{{WRAPPER}} .experience-two.experience-three .item .content > span',
			]
		);

		$this->add_control(
			'mistri_experience_two_border_color',
			[
				'label' => esc_html__( 'Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .experience-two.experience-three .item' => 'border-color: {{VALUE}}',
					'{{WRAPPER}}  .experience-two.experience-three .item .bor-bottom' => 'border-color: {{VALUE}}',
				],
				'separator'		=> 'before'
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistrimistri_experience_three_style_media_head',
			[
				'label' => esc_html__( 'Experience Media', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistrimistri_experience_three_style_icons_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .experience-two.experience-three.experience-three  a.video-popup '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_control(
			'mistrimistri_experience_three_style_icons_bg_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .experience-two.experience-three.experience-three  a.video-popup'  => 'background-color: {{VALUE}}'
                ]
			]
		);

        $this->add_control(
			'mistrimistri_experience_three_style_icons_border_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .experience-two.experience-three.experience-three  .video-pulse::after,  .experience-two.experience-three.experience-three .video-pulse::before'  => 'border-color: {{VALUE}}'
                ],
                
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$mistri_experience_three_sub_title = $settings['mistri_experience_three_sub_title'];
		$mistri_experience_three_title = $settings['mistri_experience_three_title'];
		$mistri_experience_three_desc = $settings['mistri_experience_three_desc'];
		$mistri_experience_three_item_list = $settings['mistri_experience_three_item_list'];
		$mistri_experience_three_heading_show = $settings['mistri_experience_three_heading_show'];

		$mistri_experience_three_stroke_text = $settings['mistri_experience_three_stroke_text'];
		$mistri_experience_three_stroke_text_show = $settings['mistri_experience_three_stroke_text_show'];
		$mistri_experience_three_stroke_bg_image = $settings['mistri_experience_three_stroke_bg_image']['url'];
		$mistri_experience_three_stroke_bg_image_show = $settings['mistri_experience_three_stroke_bg_image_show'];
		$mistri_experience_three_shape_image_one = $settings['mistri_experience_three_shape_image_one']['url'];
		$mistri_experience_three_shape_image_one_show = $settings['mistri_experience_three_shape_image_one_show'];
		$mistri_experience_three_shape_image_two = $settings['mistri_experience_three_shape_image_two']['url'];
		$mistri_experience_three_shape_image_two_show = $settings['mistri_experience_three_shape_image_two_show'];

		$mistri_experience_three_counter_one_number = $settings['mistri_experience_three_counter_one_number'];
		$mistri_experience_three_counter_one_symbol = $settings['mistri_experience_three_counter_one_symbol'];
		$mistri_experience_three_counter_one_title = $settings['mistri_experience_three_counter_one_title'];
		$mistri_experience_three_counter_two_number = $settings['mistri_experience_three_counter_two_number'];
		$mistri_experience_three_counter_two_symbol = $settings['mistri_experience_three_counter_two_symbol'];
		$mistri_experience_three_counter_two_title = $settings['mistri_experience_three_counter_two_title'];
		
		$mistri_experience_three_icons = $settings['mistri_experience_three_icons'];
		$mistri_experience_three_youtube_video_link = $settings['mistri_experience_three_youtube_video_link']['url'];
		$mistri_experience_three_icon_bg_image = $settings['mistri_experience_three_icon_bg_image']['url'];
		
		$mistri_experience_three_section_shape_image_one = $settings['mistri_experience_three_section_shape_image_one']['url'];
		$mistri_experience_three_section_shape_image_one_show = $settings['mistri_experience_three_section_shape_image_one_show'];
		$mistri_experience_three_section_shape_image_two = $settings['mistri_experience_three_section_shape_image_two']['url'];
		$mistri_experience_three_section_shape_image_two_show = $settings['mistri_experience_three_section_shape_image_two_show'];
		$mistri_experience_three_section_shape_img_animation = $settings['mistri_experience_three_section_shape_img_animation'];

		// inline editing method and property
		$this->add_inline_editing_attributes('mistri_experience_three_sub_title', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_three_title', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_three_desc', 'basic');

		$this->add_inline_editing_attributes('mistri_experience_three_stroke_text', 'basic');

		$this->add_inline_editing_attributes('mistri_experience_three_counter_one_number', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_three_counter_one_title', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_three_counter_two_number', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_three_counter_two_title', 'basic');

		$this->add_render_attribute(
				'mistri_experience_three_sub_title',
				[
					'class' => 'wow fadeInUp',
					'data-wow-duration' => '1.3s',
					'data-wow-delay' => '.3s',
				]
			);
		$this->add_render_attribute(
				'mistri_experience_three_title',
				[
					'class' => 'wow fadeInUp',
					'data-wow-duration' => '1.6s',
					'data-wow-delay' => '.6s',
				]
			);
		$this->add_render_attribute(
				'mistri_experience_three_desc',
				[
					'class' => 'wow fadeInUp',
					'data-wow-duration' => '1.6s',
					'data-wow-delay' => '.6s',
				]
			);
		$this->add_render_attribute(
				'mistri_experience_three_counter_one_number',
				[
					'class' => 'count',
				]
			);
		$this->add_render_attribute(
				'mistri_experience_three_counter_two_number',
				[
					'class' => 'count',
				]
			);
        ?>
		<section class="experience-two section-margin mb-0 experience-three section-padding">
			<?php if($mistri_experience_three_section_shape_img_animation == 'one'): ?>
				<?php if("yes" === $mistri_experience_three_section_shape_image_one_show ): ?>
				<div class="shape1 d-none d-lg-block float-bob-y">
					<img decoding="async" src="<?php echo esc_url($mistri_experience_three_section_shape_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
				</div>
				<?php endif; ?>
				<?php if("yes" === $mistri_experience_three_section_shape_image_two_show): ?>
				<div class="shape2 d-none d-lg-block float-bob-y">
					<img decoding="async" src="<?php echo esc_url($mistri_experience_three_section_shape_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
				</div>
				<?php endif; ?>
				<?php elseif($mistri_experience_three_section_shape_img_animation == 'two'): ?>
				<?php if("yes" === $mistri_experience_three_section_shape_image_one_show): ?>
				<div class="soft-star scale-animation d-none d-lg-block">
					<img src="<?php echo esc_url($mistri_experience_three_section_shape_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
				</div>
				<?php endif; ?>
				<?php if("yes" === $mistri_experience_three_section_shape_image_two_show): ?>
				<div class="star star-rotare d-none d-lg-block">
					<img src="<?php echo esc_url($mistri_experience_three_section_shape_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
				</div>
				<?php endif; ?>
			<?php endif; ?>
            <div class="container">
                <div class="about-three pb-65">
                    <div class="row g-5 align-items-center">
						<?php if("yes" === $mistri_experience_three_heading_show): ?>
                        <div class="col-xl-6">
                            <div class="section-header m-0">
                                <h5 <?php echo $this->get_render_attribute_string( 'mistri_experience_three_sub_title' ); ?>><?php echo esc_html__( $mistri_experience_three_sub_title, 'mistri'); ?></h5>
                                <h2 <?php echo $this->get_render_attribute_string( 'mistri_experience_three_title' ); ?>><?php echo esc_html__( $mistri_experience_three_title, 'mistri'); ?></h2>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="content">
                                <p <?php echo $this->get_render_attribute_string( 'mistri_experience_three_desc' ); ?>><?php echo esc_html__( $mistri_experience_three_desc, 'mistri'); ?></p>
                                <ul class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">

									<?php foreach($mistri_experience_three_item_list as $index => $single_item){ 
										 $mistri_experience_three_item_title_setting_key = $this->get_repeater_setting_key( 'mistri_experience_three_item_title', 'mistri_experience_three_item_list', $index );
										 $this->add_inline_editing_attributes($mistri_experience_three_item_title_setting_key);
										 $list_title = $settings['mistri_experience_three_item_list'][$index]['mistri_experience_three_item_title'];
										?>
                                    	<li <?php $this->print_render_attribute_string( $mistri_experience_three_item_title_setting_key ); ?>><span></span> <?php echo esc_html__($list_title, 'mistri'); ?></li>
									<?php } ?>
                                </ul>
                            </div>
                        </div>
						<?php endif; ?>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-9 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="image">
							<?php if("yes" === $mistri_experience_three_stroke_bg_image_show): ?>
                            <img src="<?php echo esc_url($mistri_experience_three_stroke_bg_image); ?>" alt="image">
							<?php endif; ?>
							<?php if("yes" === $mistri_experience_three_stroke_text_show): ?>
                            <div class="stroke-text">
                                <h2 <?php echo $this->get_render_attribute_string( 'mistri_experience_three_stroke_text' ); ?>><?php echo esc_html__( $mistri_experience_three_stroke_text, 'mistri'); ?></h2>
                            </div>
							<?php endif; ?>
							<?php if("yes" === $mistri_experience_three_shape_image_one_show): ?>
                            <div class="left-gap d-none d-sm-block float-bob-x"><img
                                    src="<?php echo esc_url($mistri_experience_three_shape_image_one); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
							</div>
							<?php endif; ?>
							<?php if("yes" === $mistri_experience_three_shape_image_two_show): ?>
                            <div class="right-gap d-none d-sm-block float-bob-x"><img
                                    src="<?php echo esc_url($mistri_experience_three_shape_image_two); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                            </div>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="item">
							<div class="content bor-bottom pb-30">
								<h2><span <?php echo $this->get_render_attribute_string( 'mistri_experience_three_counter_one_number' ); ?>><?php echo esc_html__($mistri_experience_three_counter_one_number, 'mistri'); ?></span><?php echo esc_html__($mistri_experience_three_counter_one_symbol, 'mistri'); ?></h2>
								<span <?php echo $this->get_render_attribute_string( 'mistri_experience_three_counter_one_title' ); ?>><?php echo esc_html__($mistri_experience_three_counter_one_title, 'mistri'); ?></span>
							</div>
                            <div class="content pt-30">
							<h2><span <?php echo $this->get_render_attribute_string( 'mistri_experience_three_counter_two_number' ); ?>><?php echo esc_html__($mistri_experience_three_counter_two_number, 'mistri'); ?></span><?php echo esc_html__($mistri_experience_three_counter_two_symbol, 'mistri'); ?></h2>
								<span <?php echo $this->get_render_attribute_string( 'mistri_experience_three_counter_two_title' ); ?>><?php echo esc_html__($mistri_experience_three_counter_two_title, 'mistri'); ?></span>
                            </div>
                        </div>
                        <div class="experience_video overlay50">
							<img src="<?php echo esc_url($mistri_experience_three_icon_bg_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
							<div class="video-btn-wrp">
								<div class="video video-pulse">
									<a class="video-popup secondary-bg" href="<?php echo esc_url($mistri_experience_three_youtube_video_link); ?>"> <?php \Elementor\Icons_Manager::render_icon( $mistri_experience_three_icons, [ 'aria-hidden' => 'true' ] ); ?></a>
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
            view.addInlineEditingAttributes( 'mistri_experience_three_sub_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_three_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_three_desc', 'basic' );

            view.addInlineEditingAttributes( 'mistri_experience_three_stroke_text', 'basic' );

            view.addInlineEditingAttributes( 'mistri_experience_three_counter_one_number', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_three_counter_one_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_three_counter_two_number', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_three_counter_two_title', 'basic' );

			var videoIcons = elementor.helpers.renderIcon( view, settings.mistri_experience_three_icons, { 'aria-hidden': true }, 'i' , 'object' );

			view.addRenderAttribute(
				'mistri_experience_three_sub_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.3s',
					'data-wow-delay': '.3s',
				}
			);
			view.addRenderAttribute(
				'mistri_experience_three_title',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.6s',
					'data-wow-delay': '.6s',
				}
			);
			view.addRenderAttribute(
				'mistri_experience_three_desc',
				{
					'class': 'wow fadeInUp',
					'data-wow-duration': '1.6s',
					'data-wow-delay': '.6s',
				}
			);
			view.addRenderAttribute(
				'mistri_experience_three_counter_one_number',
				{
					'class': 'count',
				}
			);
			view.addRenderAttribute(
				'mistri_experience_three_counter_two_number',
				{
					'class': 'count',
				}
			);
		#>
		<section class="experience-two section-margin mb-0 experience-three section-padding">
			<#	if( settings.mistri_experience_three_section_shape_img_animation == 'one'){ #>
				<#	if("yes" === settings.mistri_experience_three_section_shape_image_one_show){ #>
				<div class="shape1 d-none d-lg-block float-bob-y">
					<img decoding="async" src="{{{settings.mistri_experience_three_section_shape_image_one.url}}}" alt="image">
				</div>
				<# } #>
				<#	if("yes" === settings.mistri_experience_three_section_shape_image_two_show){ #>
				<div class="shape2 d-none d-lg-block float-bob-y">
					<img decoding="async" src="{{{settings.mistri_experience_three_section_shape_image_two.url}}}" alt="image">
				</div>
				<# } #>
			<#	}else if( settings.mistri_experience_three_section_shape_img_animation == 'two'){	#>
				<#	if("yes" === settings.mistri_experience_three_section_shape_image_one_show){ #>
				<div class="soft-star scale-animation d-none d-lg-block">
					<img src="{{{settings.mistri_experience_three_section_shape_image_one.url}}}" alt="image">
				</div>
				<# } #>
				<#	if("yes" === settings.mistri_experience_three_section_shape_image_two_show){ #>
				<div class="star star-rotare d-none d-lg-block">
					<img src="{{{settings.mistri_experience_three_section_shape_image_two.url}}}" alt="image">
				</div>
				<# } #>
			<# } #>
            <div class="container">
                <div class="about-three pb-65">
                    <div class="row g-5 align-items-center">
						<# if("yes" === settings.mistri_experience_three_heading_show){ #>
                        <div class="col-xl-6">
                            <div class="section-header m-0">
                                <h5 {{{ view.getRenderAttributeString( 'mistri_experience_three_sub_title' )}}}>{{{settings.mistri_experience_three_sub_title}}}</h5>
                                <h2 {{{ view.getRenderAttributeString( 'mistri_experience_three_title' )}}}>{{{settings.mistri_experience_three_title}}}</h2>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="content">
                                <p {{{ view.getRenderAttributeString( 'mistri_experience_three_desc' )}}}>{{{settings.mistri_experience_three_desc}}}</p>
                                <ul class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">
									<#
										_.each( settings.mistri_experience_three_item_list, function( single_item, index ) { 
										var mistri_experience_three_item_title_setting_key = view.getRepeaterSettingKey( 'mistri_experience_three_item_title', 'mistri_experience_three_item_list', index );
										view.addInlineEditingAttributes( mistri_experience_three_item_title_setting_key );
									#>
                                    	<li {{{ view.getRenderAttributeString( mistri_experience_three_item_title_setting_key ) }}}><span></span> {{{single_item.mistri_experience_three_item_title}}}</li>
									<# }); #>
                                </ul>
                            </div>
                        </div>
						<# } #>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-9 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="image">
							<# if("yes" === settings.mistri_experience_three_stroke_bg_image_show){ #>
                            <img src="{{{settings.mistri_experience_three_stroke_bg_image.url}}}" alt="image">
							<# } #>
							<# if("yes" === settings.mistri_experience_three_stroke_text_show){ #>
                            <div class="stroke-text">
                                <h2 {{{ view.getRenderAttributeString( 'mistri_experience_three_stroke_text' )}}}>{{{settings.mistri_experience_three_stroke_text}}}</h2>
                            </div>
							<# } #>
							<# if("yes" === settings.mistri_experience_three_shape_image_one_show){ #>
                            <div class="left-gap d-none d-sm-block float-bob-x"><img
                                    src="{{{settings.mistri_experience_three_shape_image_one.url}}}" alt="image">
							</div>
							<# } #>
							<# if("yes" === settings.mistri_experience_three_shape_image_two_show){ #>
                            <div class="right-gap d-none d-sm-block float-bob-x"><img
                                    src="{{{settings.mistri_experience_three_shape_image_two.url}}}" alt="image">
                            </div>
							<# } #>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="item">
                            <div class="content bor-bottom pb-30">
								<h2><span {{{ view.getRenderAttributeString( 'mistri_experience_three_counter_one_number' )}}}>{{{settings.mistri_experience_three_counter_one_number}}}</span>{{{settings.mistri_experience_three_counter_one_symbol}}}</h2>
								<span>{{{settings.mistri_experience_three_counter_one_title}}}</span>
                            </div>
                            <div class="content pt-30">
								<h2><span {{{ view.getRenderAttributeString( 'mistri_experience_three_counter_two_number' )}}}>{{{settings.mistri_experience_three_counter_two_number}}}</span>{{{settings.mistri_experience_three_counter_two_symbol}}}</h2>
								<span>{{{settings.mistri_experience_three_counter_two_title}}}</span>
                            </div>
                        </div>
                        <div class="experience_video overlay50">
							<img src="{{{settings.mistri_experience_three_icon_bg_image.url}}}" alt="image">
							<div class="video-btn-wrp">
								<div class="video video-pulse">
									<a class="video-popup secondary-bg" href="{{{settings.mistri_experience_three_youtube_video_link.url}}}">{{{videoIcons.value}}}</a>
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