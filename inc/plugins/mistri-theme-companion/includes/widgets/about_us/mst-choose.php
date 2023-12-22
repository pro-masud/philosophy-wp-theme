<?php
class Mistri_Choose extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_choose';
	}

	public function get_title() {
		return esc_html__( 'Mistri Choose', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'choose', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_choose_section_head',
			[
				'label' => esc_html__( 'Choose heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_choose_sub_tilte',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'CORE FEATURES', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_choose_tilte',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Why Choose Us', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_choose_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
				'default' => esc_html__( 'We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing.', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_choose_section_head_show',
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
			'mistri_choose_items_head',
			[
				'label' => esc_html__( 'Choose Items', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'mistri_choose_item_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Why Choose Us', 'mistri' ),
			]
		);

        $repeater->add_control(
			'mistri_choose_item_image',
			[
				'label' => esc_html__( 'Choose Item Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_choose_items',
			[
				'label' => esc_html__( 'Choose Item List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mistri_choose_item_title' => esc_html__( 'Expert Teams', 'mistri' ),
					],
					[
						'mistri_choose_item_title' => esc_html__( 'Commit to Clients', 'mistri' ),
					],
					[
						'mistri_choose_item_title' => esc_html__( 'Maintenance & Renovation', 'mistri' ),
					],
					[
						'mistri_choose_item_title' => esc_html__( 'Eco Power Technologies', 'mistri' ),
					],
				],
				'title_field' => '{{{ mistri_choose_item_title }}}',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_choose_shpae_image_head',
			[
				'label' => esc_html__( 'Shape Image', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_choose_shape_image',
			[
				'label' => esc_html__( 'Choose Shape Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_choose_shpae_image_head_show',
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
			'mistri_choose_bg_image_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_choose_bg_image',
			[
				'label' => esc_html__( 'Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_choose_bg_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .choose.bg-image',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_choose_style_head',
			[
				'label' => esc_html__( 'Choose Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_choose_sub_title_color',
			[
				'label' => esc_html__('Sub Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .choose .section-header h5' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_choose_sub_typography',
				'selector' => '{{WRAPPER}} .choose .section-header h5',
			]
		);

        $this->add_control(
			'mistri_choose_title_color',
			[
				'label' => esc_html__('Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .choose .section-header h2' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_choose_title_typography',
				'selector' => '{{WRAPPER}} .choose .section-header h2',
			]
		);

        $this->add_control(
			'mistri_choose_desc_color',
			[
				'label' => esc_html__('Description Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}}  .choose p' => 'color: {{VALUE}}',
				],
                'separator' => "before"
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_choose_desc_typography',
				'selector' => '{{WRAPPER}} .choose p',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_choose_item_style_head',
			[
				'label' => esc_html__( 'Choose Items', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_choose_item_title_color',
			[
				'label' => esc_html__('Item Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .choose .item h4' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_choose_item_title_typography',
				'selector' => '{{WRAPPER}} .choose .item h4',
			]
		);

        $this->add_control(
			'mistri_choose_item_box_border_color',
			[
				'label' => esc_html__('Item Box Border Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .choose .item' => 'border-color: {{VALUE}}',
				],
                'separator'    => 'before'
			]
		);

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_choose_sub_tilte = $settings['mistri_choose_sub_tilte'];
        $mistri_choose_tilte = $settings['mistri_choose_tilte'];
        $mistri_choose_desc = $settings['mistri_choose_desc'];
        $mistri_choose_section_head_show = $settings['mistri_choose_section_head_show'];

        $mistri_choose_items = $settings['mistri_choose_items'];
        $mistri_choose_shape_image = $settings['mistri_choose_shape_image']['url'];
        $mistri_choose_shpae_image_head_show = $settings['mistri_choose_shpae_image_head_show'];
        $mistri_choose_bg_image = $settings['mistri_choose_bg_image']['url'];

        $this->add_inline_editing_attributes('mistri_choose_sub_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_choose_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_choose_desc', 'basic');

        $this->add_render_attribute(
            'mistri_choose_sub_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay'    => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_choose_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay'    => '.6s',
            ]
        );
        $this->add_render_attribute(
            'mistri_choose_desc',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.9s',
                'data-wow-delay'    => '.9s',
            ]
        );
        ?>
        <section class="choose bg-image section-padding" style="background-image: url(<?php echo esc_url($mistri_choose_bg_image); ?>);">
            <?php if("yes" === $mistri_choose_shpae_image_head_show): ?>
            <div class="shape d-none d-xl-block float-bob-x">
                <img src="<?php echo esc_url($mistri_choose_shape_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="row mb-5 mb-lg-0 ">
                    <?php if("yes" === $mistri_choose_section_head_show): ?>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <h5  <?php echo $this->get_render_attribute_string('mistri_choose_sub_tilte'); ?>><?php echo esc_html__($mistri_choose_sub_tilte, 'mistri'); ?></h5>
                            <h2 <?php echo $this->get_render_attribute_string('mistri_choose_tilte'); ?>><?php echo esc_html__($mistri_choose_tilte, 'mistri'); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p <?php echo $this->get_render_attribute_string('mistri_choose_desc'); ?>><?php echo esc_textarea($mistri_choose_desc); ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="row g-4">
                <?php foreach($mistri_choose_items as $index => $single_item){ 

                     $mistri_choose_item_title_setting_key = $this->get_repeater_setting_key( 'mistri_choose_item_title', 'mistri_choose_items', $index );
                     $this->add_inline_editing_attributes($mistri_choose_item_title_setting_key);

                     $title = $settings['mistri_choose_items'][$index]['mistri_choose_item_title'];
                    ?>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="item">
                            <img src="<?php echo esc_url($single_item['mistri_choose_item_image']['url']); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
                            <h4 <?php $this->print_render_attribute_string( $mistri_choose_item_title_setting_key ); ?>><?php echo esc_html__($title , 'mistri'); ?></h4>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>
        <?php 
	}

    protected function content_template() {
        ?>
        <#
            view.addInlineEditingAttributes( 'mistri_choose_sub_tilte', 'basic' );
            view.addInlineEditingAttributes( 'mistri_choose_tilte', 'basic' );
            view.addInlineEditingAttributes( 'mistri_choose_desc', 'basic' );

            view.addRenderAttribute(
                'mistri_choose_sub_tilte',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.3s',
                    'data-wow-delay': '.3s',
                }
            );
            view.addRenderAttribute(
                'mistri_choose_tilte',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.6s',
                    'data-wow-delay': '.6s',
                }
            );
            view.addRenderAttribute(
                'mistri_choose_desc',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.9s',
                    'data-wow-delay': '.9s',
                }
            );
        #>
        <section class="choose bg-image section-padding" style="background-image:url('{{settings.mistri_choose_bg_image.url}}')">
            <# if("yes" === settings.mistri_choose_shpae_image_head_show){ #>    
            <div class="shape d-none d-xl-block float-bob-x">
                <img src="{{{settings.mistri_choose_shape_image.url}}}" alt="image">
            </div>
            <# } #>
            <div class="container">
                <div class="row mb-5 mb-lg-0 ">
                    <# if("yes" === settings.mistri_choose_section_head_show){ #>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <h5 {{{ view.getRenderAttributeString( 'mistri_choose_sub_tilte' )}}}>{{{settings.mistri_choose_sub_tilte}}}</h5>
                            <h2 {{{ view.getRenderAttributeString( 'mistri_choose_tilte' )}}}>{{{settings.mistri_choose_tilte}}}</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p {{{ view.getRenderAttributeString( 'mistri_choose_desc' )}}}>{{{settings.mistri_choose_desc}}}</p>
                    </div>
                    <# } #>
                </div>
                <div class="row g-4">
                    <#
                        _.each( settings.mistri_choose_items, function( single_item, index ) {

                            var mistri_choose_item_title_setting_key = view.getRepeaterSettingKey( 'mistri_choose_item_title', 'mistri_choose_items', index );
                            view.addInlineEditingAttributes( mistri_choose_item_title_setting_key );
                    #>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="item">
                            <img src="{{{single_item.mistri_choose_item_image.url}}}" alt="icon">
                            <h4 {{{ view.getRenderAttributeString( 'mistri_choose_item_title_setting_key' )}}}>{{{single_item.mistri_choose_item_title}}}</h4>
                        </div>
                    </div>
                    <#
                        });
                    #>
                </div>
            </div>
        </section>
        <?php 
    }
}