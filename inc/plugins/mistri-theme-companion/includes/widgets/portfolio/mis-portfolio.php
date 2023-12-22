<?php
class Mistri_Portfolio extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_portfolio';
	}

	public function get_title() {
		return esc_html__( 'Mistri Portfolio', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-youtube';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'portfolio', 'section',];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'mistri_portfolio_switcher_head',
			[
				'label' => esc_html__( 'Portfolio Heading', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'mistri_portfolio_switcher',
			[
				'label' => esc_html__( 'Show Tags', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_portfolio_post_per_page',
			[
				'label' => esc_html__( 'Port Per Page', 'mistri' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 6,
				'max' => 100,
				'step' => 1,
				'default' => 6,
			]
		);

        $this->add_control(
			'mistri_portfolio_show_title',
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
			'mistri_portfolio_show_cats',
			[
				'label' => esc_html__( 'Show Category', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'mistri_portfolio_show_icon',
			[
				'label' => esc_html__( 'Show Icon', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_portfolio_background_head',
			[
				'label' => esc_html__( 'Section Background', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_portfolio_bg_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .page-portfolio.team-one',
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'mistri_portfolio_style_head',
			[
				'label' => esc_html__( 'Portfolio Style', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_portfolio_tags_color',
			[
				'label' => esc_html__('Portfolio Tag Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .page-portfolio ul li' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'mistri_portfolio_active_tags_color',
			[
				'label' => esc_html__('Portfolio Active Tag Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .page-portfolio ul li.active' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_sub_typography',
				'selector' => '{{WRAPPER}} .page-portfolio ul li',
			]
		);

        $this->add_control(
			'mistri_portfolio_title_color',
			[
				'label' => esc_html__('Portfolio Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .team-one .item .content h3 a' => 'color: {{VALUE}}',
				],
                'separator'     => 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_title_typography',
				'selector' => '{{WRAPPER}} .team-one .item .content h3',
			]
		);


        $this->add_control(
			'mistri_portfolio_cats_color',
			[
				'label' => esc_html__('Portfolio Category Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .team-one .item .content span' => 'color: {{VALUE}}',
				],
                'separator'     => 'before'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_cats_typography',
				'selector' => '{{WRAPPER}} .team-one .item .content span',
			]
		);

        $this->add_control(
			'mistri_portfolio_icon_color',
			[
				'label' => esc_html__('Portfolio Icon Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .team-one .item .share .share-btn' => 'color: {{VALUE}}',
				],
                'separator'     => 'before'
			]
		);

        $this->add_control(
			'mistri_portfolio_icon_bg_color',
			[
				'label' => esc_html__('Portfolio Icon Background Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .team-one .item .share .share-btn' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_portfolio_icon_typography',
				'selector' => '{{WRAPPER}} .team-one .item .share i',
			]
		);

        $this->add_control(
			'mistri_portfolio_image_bg_head',
			[
				'label' => esc_html__( 'Image Overlay Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_portfolio_image_bg_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .team-one .item .image::before',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_portfolio_switcher = $settings['mistri_portfolio_switcher'];
        $mistri_portfolio_post_per_page = $settings['mistri_portfolio_post_per_page'];
        $mistri_portfolio_show_title = $settings['mistri_portfolio_show_title'];
        $mistri_portfolio_show_cats = $settings['mistri_portfolio_show_cats'];
        $mistri_portfolio_show_icon = $settings['mistri_portfolio_show_icon'];
        ?>
       
        <section class="page-portfolio team-one section-padding pb-0">
            <div class="container">
                <?php if("yes" === $mistri_portfolio_switcher):  ?>
                <ul class="portfolio-list mb-65">
                    <li class="active" data-filter="*">All</li>
                    <?php
                         $tags = get_terms([
                            'hide_empty'    => true,
                            'taxonomy'      => 'portfolio-tag'
                        ]);
                        foreach($tags as $tag):
                    ?>
                    <li data-filter=".<?php echo esc_attr__(strtolower(str_replace(' ', '_', $tag->name)), 'mistri'); ?>"><?php echo esc_html__($tag->name, 'mistri'); ?></li>
                    <?php  endforeach; ?>
                </ul>
                <?php endif; ?>
                <div class="row g-0 portfolio-items">
                    <?php 
                        $args = array(
                            'post_type' => 'portfolio-post',
                            'posts_per_page'    => $mistri_portfolio_post_per_page,
                            'post_status'	=> 'publish',
                        );
        
                        $portfolio_post = new WP_Query($args);
                        while($portfolio_post->have_posts()){
                            $portfolio_post -> the_post();

                            $portfolio_tags = $this->get_portfolio_tags(get_the_ID());
                            $categorie = $this->get_portfolio_cats(get_the_ID());
                    ?>
                    <div class="col-lg-4 col-md-6 <?php echo esc_attr__($portfolio_tags, 'mistri'); ?>">
                        <div class="item">
                            <?php if("yes" === $mistri_portfolio_show_icon): ?>
                            <div class="share">
                                <i class="fa-solid share-btn fa-location-arrow"></i>
                            </div>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="image d-block">
                                <?php the_post_thumbnail('full'); ?>
                            </a>
                            <div class="content">
                                <?php if("yes" === $mistri_portfolio_show_cats): ?>
                                <span class="text-capitalize pb-2"><?php echo esc_html__($categorie, 'mistri'); ?></span>
                                <?php endif; ?>
                                <?php if("yes" === $mistri_portfolio_show_title): ?>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php } wp_reset_query(); ?>
                </div>
            </div>
        </section>
    <?php
	}

    private function get_portfolio_tags($post_id){
        if($post_id){
            $tags = get_the_terms($post_id, 'portfolio-tag');
            $_tags = [];

           if(is_array($tags)){
            foreach($tags as $tag){
                $_tags[$tag->term_id] = $tag->slug;
            }

            return join(' ', $_tags);
           }
        }
    }

    private function get_portfolio_cats($cat_id){
        if($cat_id){
            $categories = get_the_terms($cat_id, 'portfolio-tag');
            $_cat = '';

            if(is_array($categories)){
                foreach($categories as $category){
                    $_cat = $category->name;
                }
    
                return $_cat;
            }
        }
    }


}