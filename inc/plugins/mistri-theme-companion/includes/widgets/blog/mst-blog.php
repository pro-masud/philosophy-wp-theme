<?php 
defined( 'ABSPATH' ) || exit;

use Elementor\Widget_Base;

class Mistri_Blog_Section_Widget extends Widget_Base {
    public function get_name() {
        return 'mistri-blog-section-widget';
    }

    public function get_title() {
        return esc_html__('Mistri Blog', 'mistri');
    }

    public function get_icon() {
        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return ['general'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_content',
            [
                'label' => esc_html__('Blog Heading', 'mistri'),
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Section Title', 'mistri'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Latest News From Blog', 'mistri'),
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'section_sub_title',
            [
                'label' => esc_html__('Section Sub Title', 'mistri'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Latest Blog', 'mistri'),
                'label_block'   => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'blog_posts_head',
            [
                'label' => esc_html__('Blog Posts', 'mistri'),
            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label' => esc_html__('Number of Posts', 'mistri'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 3,
            ]
        ); 
        
        $this->add_control(
            'post_order',
            [
                'label' => esc_html__('Post Order', 'mistri'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'DESC' => esc_html__('Descending', 'mistri'),
                    'ASC' => esc_html__('Ascending', 'mistri'),
                ],
                'default' => 'DESC',
            ]
        );
        
        $this->add_control(
            'post_orderby',
            [
                'label' => esc_html__('Post Order By', 'mistri'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'date' => esc_html__('Date', 'mistri'),
                    'title' => esc_html__('Title', 'mistri'),
                    'rand' => esc_html__('Random', 'mistri'),
                ],
                'default' => 'date',
            ]
        );

        $this->add_control(
            'show_post_meta',
            [
                'label' => esc_html__('Show Post Meta', 'mistri'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => esc_html__('Show', 'mistri'),
                'label_off' => esc_html__('Hide', 'mistri'),
            ]
        );
        
        $this->add_control(
            'show_author',
            [
                'label' => esc_html__('Show Author', 'mistri'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => esc_html__('Show', 'mistri'),
                'label_off' => esc_html__('Hide', 'mistri'),
            ]
        );
        
        $this->add_control(
            'show_post_date',
            [
                'label' => esc_html__('Show Post Date', 'mistri'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => esc_html__('Show', 'mistri'),
                'label_off' => esc_html__('Hide', 'mistri'),
            ]
        );

        $this->add_control(
            'show_animated_shape',
            [
                'label' => esc_html__('Show Animated Shape', 'mistri'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => esc_html__('Show', 'mistri'),
                'label_off' => esc_html__('Hide', 'mistri'),
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
			'mistri_blog_style_head',
			[
				'label' => esc_html__('Blog Heading', 'mistri'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_blog_style_sub_title_color',
			[
				'label' => esc_html__('Sub Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .blog.sub-bg .section-header h5'  => 'color: {{VALUE}}'
                ],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_blog_style_sub_title_typography',
				'selector' => '{{WRAPPER}} .blog.sub-bg .section-header h5',
			]
		);


        $this->add_control(
			'mistri_blog_style_title_color',
			[
				'label' => esc_html__('Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .blog.sub-bg .section-header h2'  => 'color: {{VALUE}}'
                ]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_blog_style_title_typography',
				'selector' => '{{WRAPPER}} .blog.sub-bg .section-header h2',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_blog_posts_style',
			[
				'label' => esc_html__('Blog Post', 'mistri'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_blog_posts_title_style',
			[
				'label' => esc_html__( 'Blog Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->start_controls_tabs(
			'mistri_blog_one_item_style_start_tab'
		);

		$this->start_controls_tab(
			'mistri_blog_one_item_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_blog_post_title_color',
			[
				'label' => esc_html__('Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .blog .item .content h3 a'  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_blog_post_title_typography',
				'selector' => '{{WRAPPER}} .blog .item .content h3 a',
			]
		);
		
		$this->end_controls_tab();

		$this->start_controls_tab(
			'mistri_blog_one_item_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'mistri' ),
			]
		);

        $this->add_control(
			'mistri_blog_post_hover_title_color',
			[
				'label' => esc_html__('Hover Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .blog .item .content h3 a:hover'  => 'color: {{VALUE}}'
                ]
				
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_blog_post_hover_title_typography',
				'selector' => '{{WRAPPER}} .blog.sub-bg.pro .item .content h3',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        // Get user input values from dynamic controls
        $posts_per_page = $settings['posts_per_page'];
        // $post_category = $settings['post_category'];
        $post_order = $settings['post_order'];
        $post_orderby = $settings['post_orderby'];


        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $posts_per_page,
            // 'cat' => implode(', ', $post_category ), // Category ID
            'order' => $post_order,
            'orderby' => $post_orderby,
        );


        $recent_posts = new WP_Query($args);

        if ($recent_posts->have_posts()) {
            $show_animated_shape = $settings['show_animated_shape'];

            echo '<section class="blog section-padding sub-bg pro">';
            
            if ($show_animated_shape === 'yes') {
                echo '<div class="shape1 d-none d-lg-block float-bob-y">';
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/shape/shape1.png" alt="">';
                echo '</div>';
                echo '<div class="shape2 d-none d-lg-block float-bob-y">';
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/shape/shape2.png" alt="">';
                echo '</div>';
            }

               echo  '<div class="container">
                    <div class="section-header text-center">
                        <h5>' . esc_html__($settings['section_sub_title']) . '</h5>
                        <h2>' . esc_html__($settings['section_title']) . '</h2>
                    </div>
                    <div class="row g-4">';
            
                    while ($recent_posts->have_posts()) {
                        $recent_posts->the_post();
                        $excerpt = wp_trim_words(get_the_excerpt(), 20, ''); // Get and limit the excerpt to 20 words
                
                            echo '<div class="col-md-6 col-xl-4">
                                <div class="item">
                                    <div class="content">
                                        <h3><a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a></h3>
                                        <p>' . esc_html__($excerpt) . '</p>
                                    </div>
                                    <a href="' . esc_url(get_permalink()) . '" class="btn-two"><span>News Details</span> <i class="fa-solid fa-arrow-right"></i></a>
                                    <div class="info">';
                    
                            if ($settings['show_post_meta'] === 'yes') {
                                $info_output = '';
                    
                                if ($settings['show_author'] === 'yes') {
                                    $info_output .= '<strong>' . esc_html__('By: ', 'mistri') . '</strong> <a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . get_the_author() . '</a>';
                                }
                    
                                if ($settings['show_author'] === 'yes' && $settings['show_post_date'] === 'yes') {
                                    $info_output .= '<span class="px-1">|</span>';
                                }
                    
                                if ($settings['show_post_date'] === 'yes') {
                                    $info_output .= '<span>' . get_the_date('d M Y') . '</span>';
                                }
                    
                                echo $info_output;
                            }
                    
                            echo '</div>
                                </div>
                            </div>';
                        }
        
            echo '</div>
                </div>
            </section>';
        }
        
    }
}