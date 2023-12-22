<?php
defined( 'ABSPATH' ) || exit;

use Elementor\Widget_Base;

    class Mistri_Products extends Widget_Base {

        public function get_name() {
            return 'mistri-woocommerce-product';
        }

        public function get_title() {
            return __('Mistri Products', 'mistri');
        }

        public function get_icon() {
            return 'eicon-products';
        }

        public function get_categories() {
            return ['basic'];
        }
        
        private function get_product_categories_options() {
            $options = [];
            $product_categories = get_terms('product_cat', [
                'hide_empty' => false,
            ]);
        
            if (!empty($product_categories) && !is_wp_error($product_categories)) {
                foreach ($product_categories as $category) {
                    $options[$category->slug] = $category->name;
                }
            }
        
            return $options;
        }
        

        protected function _register_controls() {
            $this->start_controls_section(
                'section_content',
                [
                    'label' => __('Product Settings', 'mistri'),
                ]
            );

            $this->add_control(
                'section_title',
                [
                    'label' => __('Section Title', 'mistri'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __('Popular products', 'mistri'),
                    'label_block' => true,
                ]
            );
        
            $this->add_control(
                'section_subtitle',
                [
                    'label' => __('Section Subtitle', 'mistri'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __('Industrial products', 'mistri'),
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'products_to_show',
                [
                    'label' => __('Number of Products', 'mistri'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => 4,
                ]
            );

            $this->add_control(
                'product_category',
                [
                    'label' => __('Product Category', 'mistri'),
                    'type' => \Elementor\Controls_Manager::SELECT2,
                    'options' => $this->get_product_categories_options(),
                    'multiple' => true,
                    'placeholder' => __('Select product category', 'mistri'),
                ]
            );
            
            
            $this->add_control(
                'sorting_order',
                [
                    'label' => __('Sorting Order', 'mistri'),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'options' => [
                        'ASC' => __('Ascending', 'mistri'),
                        'DESC' => __('Descending', 'mistri'),
                    ],
                    'default' => 'ASC', // Set default sorting order
                ]
            );
        
            $this->add_control(
                'show_price',
                [
                    'label' => __('Show Product Price', 'mistri'),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );
        
            $this->add_control(
                'show_add_to_cart',
                [
                    'label' => __('Show Add to Cart Button', 'mistri'),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );

            $this->add_control(
                'section_padding',
                [
                    'label' => __('Section Padding', 'mistri'),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', 'em', '%'],
                    'selectors' => [
                        '{{WRAPPER}} .section-padding' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
        
            $this->add_control(
                'title_font_size',
                [
                    'label' => __('Title Font Size', 'mistri'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => 16,
                    'selectors' => [
                        '{{WRAPPER}} .section-header h5' => 'font-size: {{VALUE}}px;',
                    ],
                ]
            );
        
            $this->add_control(
                'title_text_color',
                [
                    'label' => __('Title Text Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .section-header h5' => 'color: {{VALUE}};',
                    ],
                ]
            );
        
            $this->add_control(
                'subtitle_font_size',
                [
                    'label' => __('Subtitle Font Size', 'mistri'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => 40,
                    'selectors' => [
                        '{{WRAPPER}} .section-header h2' => 'font-size: {{VALUE}}px;',
                    ],
                ]
            );
        
            $this->add_control(
                'subtitle_text_color',
                [
                    'label' => __('Subtitle Text Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .section-header h2' => 'color: {{VALUE}};',
                    ],
                ]
            );
        
            $this->add_control(
                'section_bg_color',
                [
                    'label' => __('Section Background Color', 'mistri'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#ffffff',
                    'selectors' => [
                        '{{WRAPPER}} .product.secondary-bg' => 'background-color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'show_bg_image',
                [
                    'label' => __('Show Background Image', 'mistri'),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __('Show', 'mistri'),
                    'label_off' => __('Hide', 'mistri'),
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );
            
            $this->add_control(
                'section_bg_image',
                [
                    'label' => __('Background Image', 'mistri'),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => '', // Set default URL if needed
                    ],
                    'label_block' => true,
                    'condition' => [
                        'show_bg_image' => 'yes', // Control will be visible when 'show_bg_image' is set to 'yes'
                    ],
                ]
            );            
        
            $this->end_controls_section();
        }
        

        protected function render() {
            $settings = $this->get_settings_for_display();
            $section_bg_image = isset($settings['section_bg_image']['url']) ? esc_url($settings['section_bg_image']['url']) : '';
            $section_title = isset($settings['section_title']) ? esc_html($settings['section_title']) : '';
            $section_subtitle = isset($settings['section_subtitle']) ? esc_html($settings['section_subtitle']) : '';
            $show_bg_image = isset($settings['show_bg_image']) ? $settings['show_bg_image'] : 'yes';

            $products_to_show = isset($settings['products_to_show']) ? absint($settings['products_to_show']) : 4;
            $show_price = isset($settings['show_price']) ? filter_var($settings['show_price'], FILTER_VALIDATE_BOOLEAN) : true;
            $show_add_to_cart = isset($settings['show_add_to_cart']) ? filter_var($settings['show_add_to_cart'], FILTER_VALIDATE_BOOLEAN) : true;
        
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => $products_to_show,
                'orderby'        => 'title', // Default orderby value
                'order'          => $this->get_settings('sorting_order'), // Use the user-selected sorting order
                'tax_query'      => array(),
            );

            // Check if a specific category is selected by the user
            $product_category = $this->get_settings('product_category');
            if (!empty($product_category)) {
                $args['tax_query'][] = array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => $product_category,
                );
            }

        
            $products = new WP_Query($args);
        
            if ($products->have_posts()) {
                echo '<!-- Product area start here -->
                    <section class="product secondary-bg section-padding">';
                        if ($show_bg_image === 'yes' && !empty($section_bg_image)) {
                            echo '<div class="map">
                                        <img src="' . esc_url($section_bg_image) . '" alt="'. esc_attr($section_subtitle) .'">
                                    </div>';
                        }
                       echo '<div class="container">
                            <div class="section-header text-center position-relative">
                            <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">' . esc_html($section_title) . '</h5>
                            <h2 class="text-white wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">' . esc_html($section_subtitle) . '</h2>
                            </div>
                            <div class="swiper product-slider">
                                <div class="swiper-wrapper">';
        
                                while ($products->have_posts()) {
                                    $products->the_post();
                                    global $product;
                                    $product = wc_get_product(get_the_ID());
                                
                                    echo '<div class="swiper-slide">
                                        <div class="item">';
                                    echo '<a href="' . esc_url(get_permalink()) . '">' . get_the_post_thumbnail(get_the_ID(), 'medium') . '</a>';
                                    echo '<div class="content">
                                            <h4><a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a></h4>';
                                
                                    if ($product->is_type('simple')) {
                                        // For simple products
                                        if ($show_price) {
                                            echo '<span class="price">' . $product->get_price_html() . '</span>';
                                        }
                                        if ($show_add_to_cart) {
                                            woocommerce_template_loop_add_to_cart(['class' => 'mistri-button']);
                                        }
                                    } elseif ($product->is_type('variable')) {
                                        // For variable products
                                        // Display variations selector and add to cart button
                                        // woocommerce_template_single_add_to_cart();
                                        echo '<button class="button mistri-button add_to_cart_button">' . esc_html__( 'Choose Option', 'mistri' ) . '</button>';
                                    } else {
                                        // Handle other product types as needed
                                    }
                                
                                    echo '</div></div></div>';
                                }
                                
        
                echo '</div>
                        <button class="arry-prev product-arry-prev"><i class="ti-angle-left"></i></button>
                        <button class="arry-next product-arry-next"><i class="ti-angle-right"></i></button>
                    </div>
                </div>
            </section>
            <!-- Product area end here -->';
            ?>
            <script>
            // Product slider area start here ***
            var swiper = new Swiper(".product-slider", {
                loop: "true",
                spaceBetween: 30,
                speed: 500,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".product-arry-next",
                    prevEl: ".product-arry-prev",
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 4,
                    },
                    992: {
                        slidesPerView: 3,
                    },
                    575: {
                        slidesPerView: 2,
                    },
                },
            });
            </script>
            <?php 
            }
        
            wp_reset_postdata();
        }
        
    }
