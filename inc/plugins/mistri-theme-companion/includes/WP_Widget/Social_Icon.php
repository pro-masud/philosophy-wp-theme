<?php 
defined( 'ABSPATH' ) || exit; 

class Mistri_Social_Icons_Widget extends WP_Widget {

    // Constructor function
    public function __construct() {
        parent::__construct(
            'mistri_social_icons_widget',
            __('Mistri Social Icons', 'mistri'),
            array(
                'description' => __('Displays social icons from theme options', 'mistri')
            )
        );
    }

    // Widget output function
    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        $offcanvas_social_icons = mistri_get_option('offcanvas_social_icons');

        if ( !empty($offcanvas_social_icons)) {
            echo '<div class="social-icon mt-sm-0">';
            foreach ($offcanvas_social_icons as $key => $value) {
                if ($value != '') {
                    $icon_class = ($key == 'vimeo') ? 'fa fa-vimeo-square' : (($key == 'rss') ? 'fa-solid fa-' . esc_attr($key) : 'fa-brands fa-' . esc_attr($key));
                    echo '<a class="' . esc_attr($key) . ' social-icon" href="' . esc_url($value) . '" title="' . ucwords(esc_attr($key)) . '" target="_blank"><i class="' . $icon_class . '"></i></a>';
                }
            }
            echo '</div>';
        }

        echo $args['after_widget'];
    }

    // Backend form for widget settings
    public function form( $instance ) {
        // Optional: Define any backend settings for the widget if needed
    }

    // Update function for widget settings
    public function update( $new_instance, $old_instance ) {
        // Optional: Update and save widget settings if needed
    }
}

// Register Mistri Social Icons widget
function register_mistri_social_icons_widget() {
    register_widget('Mistri_Social_Icons_Widget');
}
add_action('widgets_init', 'register_mistri_social_icons_widget');
