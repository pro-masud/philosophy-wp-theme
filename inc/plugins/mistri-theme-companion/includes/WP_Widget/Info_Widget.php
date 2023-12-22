<?php 
defined( 'ABSPATH' ) || exit;

class Official_Info_Widget extends WP_Widget {

    // Widget setup
    public function __construct() {
        parent::__construct(
            'official_info_widget',
            __('Official Info Widget', 'mistri'),
            array('description' => __('Displays official information.', 'mistri'))
        );
    }

    // Outputting widget content
    public function widget($args, $instance) {
        echo $args['before_widget'];
        // echo '<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.4s; animation-name: fadeInUp;">';
        echo '<div class="item g-4">';
        echo '<div class="title"><h4>' . esc_html($instance['section_title']) . '</h4></div>';
        echo '<ul>';
        echo '<li><a href="#0"><i class="fa-solid fa-location-dot pe-1 text-white"></i>' . esc_html($instance['address']) . '</a><a href="' . esc_url($instance['map_link']) . '" class="map-popup">' . __('View Map', 'mistri') . ' <i class="fa-solid fa-location-arrow"></i></a></li>';
        echo '<li><a href="tel:' . esc_attr($instance['phone_number']) . '"><i class="fa-solid fa-phone-volume pe-1 text-white"></i>' . esc_html($instance['phone_number']) . '</a></li>';
        echo '<li><a href="mailto:' . esc_attr($instance['email']) . '"><i class="fa-solid fa-envelope pe-1 text-white"></i>' . esc_html($instance['email']) . '</a></li>';
        echo '</ul></div>';
        echo $args['after_widget'];
    }

    // Widget form creation
    public function form($instance) {
        // Define form fields for widget settings in the admin panel
        $section_title = !empty($instance['section_title']) ? esc_attr($instance['section_title']) : '';
        $address = !empty($instance['address']) ? esc_attr($instance['address']) : '';
        $phone_number = !empty($instance['phone_number']) ? esc_attr($instance['phone_number']) : '';
        $email = !empty($instance['email']) ? esc_attr($instance['email']) : '';
        $map_link = !empty($instance['map_link']) ? esc_url($instance['map_link']) : '';
        ?>
        <!-- Section Title -->
        <p>
            <label for="<?php echo $this->get_field_id('section_title'); ?>"><?php _e('Section Title:', 'mistri'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('section_title'); ?>"
                   name="<?php echo $this->get_field_name('section_title'); ?>" type="text"
                   value="<?php echo $section_title; ?>">
        </p>

        <!-- Address -->
        <p>
            <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address:', 'mistri'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('address'); ?>"
                   name="<?php echo $this->get_field_name('address'); ?>" type="text"
                   value="<?php echo $address; ?>">
        </p>

        <!-- Phone Number -->
        <p>
            <label for="<?php echo $this->get_field_id('phone_number'); ?>"><?php _e('Phone Number:', 'mistri'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('phone_number'); ?>"
                   name="<?php echo $this->get_field_name('phone_number'); ?>" type="text"
                   value="<?php echo $phone_number; ?>">
        </p>

        <!-- Email -->
        <p>
            <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email:', 'mistri'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>"
                   name="<?php echo $this->get_field_name('email'); ?>" type="text"
                   value="<?php echo $email; ?>">
        </p>

        <!-- Map Link -->
        <p>
            <label for="<?php echo $this->get_field_id('map_link'); ?>"><?php _e('Map Link:', 'mistri'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('map_link'); ?>"
                   name="<?php echo $this->get_field_name('map_link'); ?>" type="text"
                   value="<?php echo $map_link; ?>">
        </p>
        <!-- Add more form fields as needed -->

        <?php
    }

    // Updating widget settings
    public function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['section_title'] = sanitize_text_field($new_instance['section_title']);
        $instance['address'] = sanitize_text_field($new_instance['address']);
        $instance['phone_number'] = sanitize_text_field($new_instance['phone_number']);
        $instance['email'] = sanitize_email($new_instance['email']);
        $instance['map_link'] = esc_url($new_instance['map_link']);
        // Update other settings as needed
        return $instance;
    }
}

// Registering the custom widget
function register_official_info_widget() {
    register_widget('Official_Info_Widget');
}
add_action('widgets_init', 'register_official_info_widget');
