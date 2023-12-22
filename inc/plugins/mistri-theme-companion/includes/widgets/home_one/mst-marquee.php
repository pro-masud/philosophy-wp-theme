<?php
class Mistri_Marquee extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_merquee';
	}

	public function get_title() {
		return esc_html__( 'Mistri Home Merquee', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-posts-carousel';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'home', 'merquee', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_merquee_slide_head',
			[
				'label' => esc_html__( 'Merquee Style', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_merquee_sliding_style',
			[
				'label' => esc_html__( 'Merquee Slide Style', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => esc_html__( 'Left Slide', 'mistri' ),
					'right' => esc_html__( 'Right Slide', 'mistri' ),
				]
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'mistri_merquee_head',
			[
				'label' => esc_html__( 'Merquee Items', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$merquee_texts = new \Elementor\Repeater();

        $merquee_texts->add_control(
			'mistri_home_merquee_one_title_one',
			[
				'label' => esc_html__( 'Merquee Title One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Add New Title', 'mistri' ),
			]
		);

        $merquee_texts->add_control(
			'mistri_home_merquee_one_title_two',
			[
				'label' => esc_html__( 'Merquee Title Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Add New Title', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_merquee_list',
			[
				'label' => esc_html__( 'Merquee List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $merquee_texts->get_controls(),
				'default'	=> [
					[
						'mistri_home_merquee_one_title_one' => esc_html__( 'Leader in', 'mistri' ),
						'mistri_home_merquee_one_title_two' => esc_html__( 'Refractory', 'mistri' ),
					],
					[
						'mistri_home_merquee_one_title_one' => esc_html__( 'Construction  &', 'mistri' ),
						'mistri_home_merquee_one_title_two' => esc_html__( 'Mechanical', 'mistri' ),
					],
					[
						'mistri_home_merquee_one_title_one' => esc_html__( 'Services', 'mistri' ),
						'mistri_home_merquee_one_title_two' => esc_html__( 'Mechanical', 'mistri' ),
					],
				],
				'title_field' => '{{{ mistri_home_merquee_one_title_one }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_merquee_section_bg_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_merquee_section_bg_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .marquee-wrapper',
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_merquee_style_head',
			[
				'label' => esc_html__( 'Merquee', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_trust_style_text_two_typegraphy',
				'selector' => '{{WRAPPER}} .marquee-wrapper.text-slider',
			]
		);

		$this->end_controls_section();

	
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		/**
         * Trust section all property
         * */ 
		$mistri_merquee_sliding_style = $settings['mistri_merquee_sliding_style'];
		$mistri_merquee_list = $settings['mistri_merquee_list'];
        ?>
		<?php if($mistri_merquee_list): ?>
       <div class="marquee-wrapper text-slider">
            <div class="marquee-inner to-<?php echo esc_attr__($mistri_merquee_sliding_style, 'mistri'); ?>">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item">
						<?php
							foreach($mistri_merquee_list as $single_merquee){
						?>
                        <span class="stroke-text"><?php echo esc_html__($single_merquee['mistri_home_merquee_one_title_one']); ?></span> <?php echo esc_html__($single_merquee['mistri_home_merquee_one_title_two']); ?>
						<?php } ?>
                    </li>
                </ul>
            </div>
        </div>
		<?php endif; ?>
        <?php 
	}

    protected function content_template() {
        ?>
		<# if(settings.mistri_merquee_list){ #>
        <div class="marquee-wrapper text-slider">
            <div class="marquee-inner to-{{{settings.$mistri_merquee_sliding_style}}}">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item">
						<# _.each( settings.mistri_merquee_list, function( single_merquee ) { #>
                        <span class="stroke-text">{{{single_merquee.mistri_home_merquee_one_title_one}}}</span> {{{single_merquee.mistri_home_merquee_one_title_two}}}
						<# }); #>
                    </li>
                </ul>
            </div>
        </div>
		<# } #>
        <?php 
    }
}