<?php
class Mistri_Stroy_One extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_story_one';
	}

	public function get_title() {
		return esc_html__( 'Mistri Story One', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-history';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'story', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_story_one_section_head',
			[
				'label' => esc_html__( 'Story Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_story_one_sub_tilte',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'our story', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_story_one_tilte',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Company history ', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_portfolio_story_one_switcher',
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
			'mistri_story_one_items_head',
			[
				'label' => esc_html__( 'Story Item', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'mistri_story_one_item_year',
			[
				'label' => esc_html__( 'Years', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( '1999-2002', 'mistri' ),
			]
		);

        $repeater->add_control(
			'mistri_story_one_item_title',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'start the company story', 'mistri' ),
			]
		);

        $repeater->add_control(
			'mistri_story_one_item_desc',
			[
				'label' => esc_html__( 'Description', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
				'default' => esc_html__( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly', 'mistri' ),
			]
		);

        $repeater->add_control(
			'mistri_story_one_item_image',
			[
				'label' => esc_html__( 'Choose Story Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_story_one_item_list',
			[
				'label' => esc_html__( 'Story Item List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mistri_story_one_item_title' => esc_html__( 'start the company story', 'mistri' ),
                    ],
					[
						'mistri_story_one_item_title' => esc_html__( 'start the first destination', 'mistri' ),
                    ],
					[
						'mistri_story_one_item_title' => esc_html__( '#1 Worlds Award winning company', 'mistri' ),
                    ],
				],
				'title_field' => '{{{ mistri_story_one_item_title }}}',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_story_one_bg_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'mistri_story_one_background_image',
			[
				'label' => esc_html__( 'Choose Story Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_story_one_bg_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .story.secondary-bg',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_story_one_style_head',
			[
				'label' => esc_html__( 'Story Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_story_one_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .story.secondary-bg .section-header h5 '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_story_one_sub_title_fonts',
				'selector' => '{{WRAPPER}} .story.secondary-bg .section-header h5',
			]
		);

        $this->add_control(
			'mistri_story_one_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{{WRAPPER}}} .story.secondary-bg .section-header h2 '  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_story_one_title_fonts',
				'selector' => '{{WRAPPER}} .story.secondary-bg .section-header h2',
                
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_story_one_items_style_head',
			[
				'label' => esc_html__( 'Story Item', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_story_one_item_case_color',
			[
				'label' => esc_html__( 'Case Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ee332b',
                'selectors' => [
                    '{{{WRAPPER}}} .story.secondary-bg .item .title span'  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_story_one_case_fonts',
				'selector' => '{{WRAPPER}}  .story.secondary-bg .item .title span',
			]
		);

        $this->add_control(
			'mistri_story_one_item_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
                    '{{{WRAPPER}}} .story.secondary-bg .item .title h3'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_story_one_item_title_fonts',
				'selector' => '{{WRAPPER}} .story.secondary-bg .item .title h3',
			]
		);

        $this->add_control(
			'mistri_story_one_item_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
                    '{{{WRAPPER}}} .story.secondary-bg .item .title p'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_story_one_desc_fonts',
				'selector' => '{{WRAPPER}} .story.secondary-bg .item .title p',
			]
		);
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_story_one_sub_tilte = $settings['mistri_story_one_sub_tilte'];
        $mistri_story_one_tilte = $settings['mistri_story_one_tilte'];
        $mistri_portfolio_story_one_switcher = $settings['mistri_portfolio_story_one_switcher'];
        $mistri_story_one_item_list = $settings['mistri_story_one_item_list'];
        $mistri_story_one_background_image = $settings['mistri_story_one_background_image']['url'];

        $this->add_inline_editing_attributes('mistri_story_one_sub_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_story_one_tilte', 'basic');

        $this->add_render_attribute(
            'mistri_story_one_sub_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay'    => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_story_one_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay'    => '.6s',
            ]
        );
        ?>
      <section class="story section-padding secondary-bg">
            <?php if($mistri_story_one_background_image): ?>
            <div class="map">
                <img src="<?php echo esc_url($mistri_story_one_background_image); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
            </div>
            <?php endif; ?>
            <div class="container">
                <?php if("yes" === $mistri_portfolio_story_one_switcher): ?>
                <div class="section-header text-center position-relative">
                    <h5 <?php echo $this->get_render_attribute_string('mistri_story_one_sub_tilte'); ?>><?php echo esc_html__($mistri_story_one_sub_tilte, 'mistri'); ?></h5>
                    <h2 <?php echo $this->get_render_attribute_string('mistri_story_one_tilte'); ?>><?php echo esc_html__($mistri_story_one_tilte, 'mistri'); ?></h2>
                </div>
                <?php endif; ?>
                <div class="wrp">
                    <div class="line d-none d-lg-block"></div>
                    <?php 
                        $i = 1;
                        foreach($mistri_story_one_item_list as $index => $single_item){ 
                            $mistri_story_one_item_year_setting_key = $this->get_repeater_setting_key( 'mistri_story_one_item_year', 'mistri_story_one_item_list', $index );
                            $mistri_story_one_item_title_setting_key = $this->get_repeater_setting_key( 'mistri_story_one_item_title', 'mistri_story_one_item_list', $index );
                            $mistri_story_one_item_desc_setting_key = $this->get_repeater_setting_key( 'mistri_story_one_item_desc', 'mistri_story_one_item_list', $index );

                            $this->add_inline_editing_attributes($mistri_story_one_item_year_setting_key);
                            $this->add_inline_editing_attributes($mistri_story_one_item_title_setting_key);
                            $this->add_inline_editing_attributes($mistri_story_one_item_desc_setting_key);

                            if($i%2==1){
                               $spanAlign = ' ';
                            }else{
                                 $spanAlign = 'left-span';
                            }

                            $this->add_render_attribute(
                                $mistri_story_one_item_year_setting_key,
                                [
                                    'class' => ['pb-2', $spanAlign],
                                ]
                            );
                            $this->add_render_attribute(
                                $mistri_story_one_item_title_setting_key,
                                [
                                    'class' => 'text-capitalize',
                                ]
                            );
                            $this->add_render_attribute(
                                $mistri_story_one_item_desc_setting_key,
                                [
                                    'class' => 'pt-4',
                                ]
                            );

                            $years = $settings['mistri_story_one_item_list'][$index]['mistri_story_one_item_year'];
                            $title = $settings['mistri_story_one_item_list'][$index]['mistri_story_one_item_title'];
                            $description = $settings['mistri_story_one_item_list'][$index]['mistri_story_one_item_desc'];
                    
                    if( $i % 2 == 1){ 
                ?>
                        <div class="main-item pb-65">
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-6">
                                    <div class="image">
                                        <img src="<?php echo esc_url( $single_item['mistri_story_one_item_image']['url']); ?>" alt="<?php echo esc_attr__('image', 'mistir'); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item">
                                        <div class="title">
                                            <span <?php echo $this->get_render_attribute_string($mistri_story_one_item_year_setting_key); ?>><?php echo esc_html__($years, 'mistri'); ?></span>
                                            <h3 <?php echo $this->get_render_attribute_string($mistri_story_one_item_title_setting_key); ?>><?php echo esc_html__($title, 'mistri'); ?></h3>
                                            <p <?php echo $this->get_render_attribute_string($mistri_story_one_item_desc_setting_key); ?>"><?php echo esc_html__($description, 'mistri'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="main-item pb-65">
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-6">
                                    <div class="item">
                                        <div class="title">
                                            <span <?php echo $this->get_render_attribute_string($mistri_story_one_item_year_setting_key); ?>><?php echo esc_html__($years, 'mistri'); ?></span>
                                            <h3 <?php echo $this->get_render_attribute_string($mistri_story_one_item_title_setting_key); ?>><?php echo esc_html__($title, 'mistri'); ?></h3>
                                            <p <?php echo $this->get_render_attribute_string($mistri_story_one_item_desc_setting_key); ?>"><?php echo esc_html__($description, 'mistri'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image">
                                        <img src="<?php echo esc_url( $single_item['mistri_story_one_item_image']['url']); ?>" alt="<?php echo esc_attr__('image', 'mistir'); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    <?php $i++; } ?>
                </div>
            </div>
        </section>
        <?php 
	}

    protected function content_template() {
        ?>
        <#
           var  mistri_story_one_background_image = settings.mistri_story_one_background_image.url;
            view.addInlineEditingAttributes( 'mistri_story_one_sub_tilte', 'basic' );
            view.addInlineEditingAttributes( 'mistri_story_one_tilte', 'basic' );

            view.addRenderAttribute(
                'mistri_story_one_sub_tilte',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.3s',
                    'data-wow-delay': '.3s',
                }
            );
            view.addRenderAttribute(
                'mistri_story_one_tilte',
                {
                    'class': 'wow fadeInUp',
                    'data-wow-duration': '1.6s',
                    'data-wow-delay': '.6s',
                }
            );
        #>
        <section class="story section-padding secondary-bg">
            <#  if(mistri_story_one_background_image){ #>
            <div class="map">
                <img src="{{{mistri_story_one_background_image}}}" alt="image">
            </div>
            <# }  #>
            <div class="container">
                <# if("yes" === settings.mistri_portfolio_story_one_switcher){ #>
                <div class="section-header text-center position-relative">
                    <h5  {{{ view.getRenderAttributeString( 'mistri_story_one_sub_tilte' )}}}>{{{settings.mistri_story_one_sub_tilte}}}</h5>
                    <h2  {{{ view.getRenderAttributeString( 'mistri_story_one_tilte' )}}}>{{{settings.mistri_story_one_tilte}}}</h2>
                </div>
                <# } #>
                <div class="wrp">
                    <div class="line d-none d-lg-block"></div>
                    <#
                        var i = 1;
                        _.each( settings.mistri_story_one_item_list, function( single_item, index ) {
                        var mistri_story_one_item_year_setting_key = view.getRepeaterSettingKey( 'mistri_story_one_item_year', 'mistri_story_one_item_list', index );
                        var mistri_story_one_item_title_setting_key = view.getRepeaterSettingKey( 'mistri_story_one_item_title', 'mistri_story_one_item_list', index );
                        var mistri_story_one_item_desc_setting_key = view.getRepeaterSettingKey( 'mistri_story_one_item_desc', 'mistri_story_one_item_list', index );

                        let spanAlign; 
                        if( i%2 == 1){
                            spanAlign = ' ';
                        }else{
                            spanAlign = 'left-span';
                        }

                        view.addInlineEditingAttributes( mistri_story_one_item_year_setting_key );
                        view.addInlineEditingAttributes( mistri_story_one_item_title_setting_key );
                        view.addInlineEditingAttributes( mistri_story_one_item_desc_setting_key );

                        view.addRenderAttribute(
                            'mistri_story_one_item_year_setting_key',
                            {
                                'class': ['pb-2', spanAlign]
                            }
                        );
                        view.addRenderAttribute(
                            'mistri_story_one_item_title_setting_key',
                            {
                                'class': 'text-capitalize'
                            }
                        );
                        view.addRenderAttribute(
                            'mistri_story_one_item_desc_setting_key',
                            {
                                'class': 'pt-4'
                            }
                        );
                     if(i % 2 == 1 ){
                    #>
                    <div class="main-item pb-65">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6">
                                <div class="image">
                                    <img src="{{{single_item.mistri_story_one_item_image.url}}}" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <div class="title">
                                        <span  {{{ view.getRenderAttributeString( 'mistri_story_one_item_year_setting_key' )}}}>{{{single_item.mistri_story_one_item_year}}}</span>
                                        <h3 {{{ view.getRenderAttributeString( 'mistri_story_one_item_title_setting_key' )}}}>{{{single_item.mistri_story_one_item_title}}}</h3>
                                        <p {{{ view.getRenderAttributeString( 'mistri_story_one_item_desc_setting_key' )}}}>{{{single_item.mistri_story_one_item_desc}}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <# } else { #>
                        <div class="main-item pb-65">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6">
                                <div class="item">
                                    <div class="title">
                                        <span  {{{ view.getRenderAttributeString( 'mistri_story_one_item_year_setting_key' )}}}>{{{single_item.mistri_story_one_item_year}}}</span>
                                        <h3 {{{ view.getRenderAttributeString( 'mistri_story_one_item_title_setting_key' )}}}>{{{single_item.mistri_story_one_item_title}}}</h3>
                                        <p {{{ view.getRenderAttributeString( 'mistri_story_one_item_desc_setting_key' )}}}>{{{single_item.mistri_story_one_item_desc}}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image">
                                    <img src="{{{single_item.mistri_story_one_item_image.url}}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <#  } i++; }); #>
                </div>
            </div>
        </section>
        <?php 
    }
}