<?php
class Mistri_Team_Education_Details extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_team_education';
	}

	public function get_title() {
		return esc_html__( 'Mistri Team Education Details', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'team', 'section', 'education', 'details'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_team_detail_section_head',
			[
				'label' => esc_html__( 'Education Details', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_team_detail_title',
			[
				'label' => esc_html__( 'Details Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Education Background', 'mistri' ),
                'label_block'   => true,
			]
		);
        
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'mistri_team_detail_edu_title_one',
			[
				'label' => esc_html__( 'Title One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title One' , 'mistri' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'mistri_team_detail_edu_title_two',
			[
				'label' => esc_html__( 'Title Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title Two' , 'mistri' ),
				'label_block' => true,
                'separator' => 'before'
			]
		);

		$repeater->add_control(
			'mistri_team_detail_edu_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'List Content' , 'mistri' ),
				'show_label' => false,
                'separator' => 'before'
			]
		);

        $this->add_control(
			'mistri_team_detail_edu_list',
			[
				'label' => esc_html__( 'Degree List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
                'separator' => 'before',
				'default' => [
					[
						'mistri_team_detail_edu_title_one' => esc_html__( 'Bachelor\'s degree', 'mistri' ),
						'mistri_team_detail_edu_title_two' => esc_html__( ', 2010', 'mistri' ),
						'mistri_team_detail_edu_desc' => esc_html__( 'Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.', 'mistri' ),
                    ],
					[
						'mistri_team_detail_edu_title_one' => esc_html__( 'Master\'s degree in design', 'mistri' ),
						'mistri_team_detail_edu_title_two' => esc_html__( ', 2015', 'mistri' ),
						'mistri_team_detail_edu_desc' => esc_html__( 'Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.', 'mistri' ),
					]
				],
				'title_field' => '{{{ mistri_team_detail_edu_title_one }}}',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_detail_section_background_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_team_detail_bg_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .info-details.sub-bg',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_team_edu_heading_style',
			[
				'label' => esc_html__( 'Education Details', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_team_edu_details_title_color',
			[
				'label' => esc_html__( 'Details Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .info-details .title h3' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_edu_details_title_typography',
				'selector' => '{{WRAPPER}} .info-details .title h3',
			]
		);

        $this->add_control(
			'mistri_team_edu_details_border_color',
			[
				'label' => esc_html__( 'Details Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .info-details .title.bor-bottom' => 'border-color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'mistri_team_edu_title_one_color',
			[
				'label' => esc_html__( 'Title One Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ee332bfc',
				'selectors' => [
					'{{WRAPPER}} .info-details h4 span.one_title' => 'color: {{VALUE}}',
				],
                'separator'     => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_edu_title_one_typography',
				'selector' => '{{WRAPPER}} .info-details h4 span.one_title',
			]
		);

        $this->add_control(
			'mistri_team_edu_title_two_color',
			[
				'label' => esc_html__( 'Title Two Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .info-details h4 span.two_title' => 'color: {{VALUE}}',
				],
                'separator' =>      'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_edu_title_two_typography',
				'selector' => '{{WRAPPER}} .info-details h4 span.two_title',
			]
		);

        $this->add_control(
			'mistri_team_edu_desc_color',
			[
				'label' => esc_html__( 'Title Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .info-details p' => 'color: {{VALUE}}',
				],
                'separator' =>      'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_team_edu_desc_typography',
				'selector' => '{{WRAPPER}} .info-details p',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_team_detail_title = $settings['mistri_team_detail_title'];
        $mistri_team_detail_edu_list = $settings['mistri_team_detail_edu_list'];
        
        $this->add_inline_editing_attributes('mistri_team_detail_title', 'basic');
        ?>
		<section class="info-details sub-bg pt-65 pb-65">
            <div class="container">
                <div class="title pb-30 mb-30 bor-bottom">
                    <h3 <?php echo $this->get_render_attribute_string('mistri_team_detail_title'); ?>><?php echo esc_html__($mistri_team_detail_title, 'mistri'); ?></h3>
                </div>
                <?php 
                    foreach($mistri_team_detail_edu_list as $index => $single_item): 
                        $mistri_team_detail_edu_title_one_setting_key = $this->get_repeater_setting_key( 'mistri_team_detail_edu_title_one', 'mistri_team_detail_edu_list', $index );
                        $mistri_team_detail_edu_title_two_setting_key = $this->get_repeater_setting_key( 'mistri_team_detail_edu_title_two', 'mistri_team_detail_edu_list', $index );
                        $mistri_team_detail_edu_desc_setting_key = $this->get_repeater_setting_key( 'mistri_team_detail_edu_desc', 'mistri_team_detail_edu_list', $index );

                        $this->add_inline_editing_attributes($mistri_team_detail_edu_title_one_setting_key);
                        $this->add_inline_editing_attributes($mistri_team_detail_edu_title_two_setting_key);
                        $this->add_inline_editing_attributes($mistri_team_detail_edu_desc_setting_key);

                        $this->add_render_attribute(
                            $mistri_team_detail_edu_title_one_setting_key,
                            [
                                'class' => 'one_title text-capitalize mb-3',
                            ]
                        );
                        $this->add_render_attribute(
                            $mistri_team_detail_edu_title_two_setting_key,
                            [
                                'class' => 'two_title text-capitalize',
                            ]
                        );

                        $title_one = $settings['mistri_team_detail_edu_list'][$index]['mistri_team_detail_edu_title_one'];
                        $title_two = $settings['mistri_team_detail_edu_list'][$index]['mistri_team_detail_edu_title_two'];
                        $title_desc = $settings['mistri_team_detail_edu_list'][$index]['mistri_team_detail_edu_desc'];                    
                ?>
                <h4><span <?php $this->print_render_attribute_string( $mistri_team_detail_edu_title_one_setting_key ); ?>><?php echo esc_html__($title_one, 'mistri'); ?></span> <span <?php $this->print_render_attribute_string( $mistri_team_detail_edu_title_two_setting_key ); ?>><?php echo esc_html__($title_two, 'mistri'); ?></span></h4>
                <p <?php $this->print_render_attribute_string( $mistri_team_detail_edu_desc_setting_key ); ?>><?php echo esc_html__($title_desc, 'mistri'); ?></p>
                <?php endforeach; ?>
            </div>
        </section>
        <?php 
	}

    protected function content_template() {
        ?>
        <#
            view.addInlineEditingAttributes('mistri_team_detail_title','basic');
        #>
		<section class="info-details sub-bg pt-65 pb-65">
            <div class="container">
                <div class="title pb-30 mb-30 bor-bottom">
                    <h3 {{{view.getRenderAttributeString('mistri_team_detail_title')}}}>{{{settings.mistri_team_detail_title}}}</h3>
                </div>
                <#_.each( settings.mistri_team_detail_edu_list, function( single_item, index ){ 
                    var mistri_team_detail_edu_title_one_setting_key = view.getRepeaterSettingKey( 'mistri_team_detail_edu_title_one', 'mistri_team_detail_edu_list', index );    
                    var mistri_team_detail_edu_title_two_setting_key = view.getRepeaterSettingKey( 'mistri_team_detail_edu_title_two', 'mistri_team_detail_edu_list', index );    
                    var mistri_team_detail_edu_desc_setting_key = view.getRepeaterSettingKey( 'mistri_team_detail_edu_desc', 'mistri_team_detail_edu_list', index );   
                    
                    view.addRenderAttribute(
                        'mistri_team_detail_edu_title_one_setting_key',
                        {
                            'class': 'one_title text-capitalize mb-3',
                        }
                    );

                    view.addRenderAttribute(
                        'mistri_team_detail_edu_title_two_setting_key',
                        {
                            'class': 'two_title text-capitalize',
                        }
                    );
                #>
                <h4><span {{{ view.getRenderAttributeString( mistri_team_detail_edu_title_one_setting_key ) }}}>{{{single_item.mistri_team_detail_edu_title_one}}}</span><span {{{ view.getRenderAttributeString( mistri_team_detail_edu_title_two_setting_key ) }}}>{{{single_item.mistri_team_detail_edu_title_two_setting_key}}}</span></h4>
                <p {{{ view.getRenderAttributeString( mistri_team_detail_edu_desc_setting_key ) }}}>{{{single_item.mistri_team_detail_edu_desc}}}</p>
                <# }); #>
            </div>
        </section>
        <?php 
    }
}