<?php
class Mistri_Portfolio_Story_Two extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_story_two';
	}

	public function get_title() {
		return esc_html__( 'Mistri Portfolio Story Two', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-history';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'portfolio', 'section', 'story'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_portfolio_story_two_section_head',
			[
				'label' => esc_html__( 'Portfolio Story heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_sub_tilte',
			[
				'label' => esc_html__( 'Sub Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'our story', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_tilte',
			[
				'label' => esc_html__( 'Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
				'default' => esc_html__( 'Company history ', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_switcher',
			[
				'label' => esc_html__( 'Show Heading', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_items_heading',
			[
				'label' => esc_html__( 'Portfolio Item', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_items',
			[
				'label' => esc_html__( 'Number Of Items', 'mistri' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 3,
				'max' => 10,
				'step' => 1,
				'default' => 3,
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_portfolio_story_two_bg_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_portfolio_story_two_section_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .story.sub-bg',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_portfolio_story_two_style_head',
			[
				'label' => esc_html__( 'Portfolio Story Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_sub_title_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .story .section-header h5 '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_story_two_sub_title_fonts',
				'selector' => '{{WRAPPER}} .story .section-header h5',
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .story .section-header h2 '  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_story_two_title_fonts',
				'selector' => '{{WRAPPER}} .story .section-header h2',
                
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_items_style_head',
			[
				'label' => esc_html__( 'Portfolio Item', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_item_case_color',
			[
				'label' => esc_html__( 'Case Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ee332b ',
                'selectors' => [
                    '{{{WRAPPER}}} .story .item .title span'  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_story_two_case_fonts',
				'selector' => '{{WRAPPER}}  .story .item .title span',
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_item_title_color',
			[
				'label' => esc_html__( 'Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .story .item .title h3 a'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_story_two_item_title_fonts',
				'selector' => '{{WRAPPER}} .story .item .title h3',
			]
		);

        $this->add_control(
			'mistri_portfolio_story_two_item_desc_color',
			[
				'label' => esc_html__( 'Description Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .story .item .title p'  => 'color: {{VALUE}}'
                ],
                'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_story_two_desc_fonts',
				'selector' => '{{WRAPPER}} .story .item .title p',
			]
		);
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_portfolio_story_two_sub_tilte = $settings['mistri_portfolio_story_two_sub_tilte'];
        $mistri_portfolio_story_two_tilte = $settings['mistri_portfolio_story_two_tilte'];
        $mistri_portfolio_story_two_switcher = $settings['mistri_portfolio_story_two_switcher'];
        $mistri_portfolio_story_two_items = $settings['mistri_portfolio_story_two_items'];

        $this->add_inline_editing_attributes('mistri_portfolio_story_two_sub_tilte', 'basic');
        $this->add_inline_editing_attributes('mistri_portfolio_story_two_tilte', 'basic');

        $this->add_render_attribute(
            'mistri_portfolio_story_two_sub_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.3s',
                'data-wow-delay'    => '.3s',
            ]
        );
        $this->add_render_attribute(
            'mistri_portfolio_story_two_tilte',
            [
                'class'             => 'wow fadeInUp',
                'data-wow-duration' => '1.6s',
                'data-wow-delay'    => '.6s',
            ]
        );
        ?>
       <section class="story section-padding sub-bg">
            <div class="container">
                <?php if( 'yes' === $mistri_portfolio_story_two_switcher ): ?>
                <div class="section-header text-center position-relative">
                    <h5 <?php echo $this->get_render_attribute_string('mistri_portfolio_story_two_sub_tilte'); ?>><?php echo esc_html__($mistri_portfolio_story_two_sub_tilte, 'mistri'); ?></h5>
                    <h2 <?php echo $this->get_render_attribute_string('mistri_portfolio_story_two_tilte'); ?>><?php echo esc_html__($mistri_portfolio_story_two_tilte, 'mistri'); ?></h2>
                </div>
                <?php endif; ?>
                <div class="wrp">
                    <div class="line d-none d-lg-block"></div>
                    <?php
                        $args = array(
                            'post_type' => 'portfolio-post',
                            'posts_per_page'    => $mistri_portfolio_story_two_items,
                            'post_status'	=> 'publish',
                        );
                        $service_posts = new WP_Query($args);
                        if($service_posts->have_posts()){
                            $i = 1;
                            while($service_posts->have_posts()){
                                $service_posts->the_post();
                    ?>
                        <?php if($i %2 == 1): ?>
                            <div class="main-item pb-65">
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-6">
                                        <a href="<?php the_permalink(); ?>" class="image d-block">
                                            <?php the_post_thumbnail('full'); ?>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item">
                                            <div class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                                                <span class="pb-2">Case 0<?php echo esc_html__($i, 'mistri'); ?></span>
                                                <h3 class="text-capitalize"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <p class="pt-4"><?php echo wp_trim_words(get_the_content(), 25, null); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="main-item pb-65">
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-6">
                                        <div class="item">
                                            <div class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                                                <span class="left-span pb-2">Case 0<?php echo esc_html__($i, 'mistri'); ?></span>
                                                <h3 class="text-capitalize"><a href="<?php the_permalink(); ?>">start the first
                                                        destination</a></h3>
                                                <p class="pt-4"><?php echo wp_trim_words(get_the_content(), 25, null); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="<?php the_permalink(); ?>" class="image d-block">
                                            <?php the_post_thumbnail('full'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php  $i++; } wp_reset_query(); } ?>
                </div>
            </div>
        </section>
        <?php 
	}
}