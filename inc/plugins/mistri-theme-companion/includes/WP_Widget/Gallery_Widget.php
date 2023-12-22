<?php 

// Add a custom widget for the gallery
class Custom_Gallery_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        $widget_ops = array(
            'classname' => 'custom_gallery_widget',
            'description' => __('Displays a Mistri Footer gallery.', 'mistri')
        );
        parent::__construct( 'custom_gallery_widget', __('Mistri Footer Gallery', 'mistri'), $widget_ops );
    }

    // Output the widget content
    public function widget( $args, $instance ) {
        echo $args['before_widget']; // Output the widget container
        $title = apply_filters( 'widget_title', $instance['title'] ); // Get widget title from settings
        ?>
        <div class="item gallery">
            <div class="title">
                <h4><?php echo esc_html( $title ); ?></h4>
            </div>
            <div class="row g-2">
                <!-- Gallery HTML -->
                <!-- Display uploaded images -->
                <?php
                $images = ! empty( $instance['images'] ) ? explode( ',', $instance['images'] ) : array();

                foreach ( $images as $image_id ) {
                    $image_url = wp_get_attachment_url( $image_id );
                    if ( $image_url ) {
                        ?>
                        <div class="col-4">
                            <a href="#" class="footer-popup image d-block">
                                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo __('Image', 'mistri'); ?>">
                                <div class="icon">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                }
                ?>
                <!-- End of displayed images -->
            </div>
        </div>
        <?php
        echo $args['after_widget']; // Output the widget container's closing tag
    }

    // Output the widget form in the admin
    public function form( $instance ) {
        // Retrieve previously saved settings or set default values
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __('Mistri Footer Gallery', 'mistri');
        $images = ! empty( $instance['images'] ) ? $instance['images'] : '';

        // Widget form fields
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e('Title:', 'mistri'); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'images' ) ); ?>"><?php _e('Images:', 'mistri'); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'images' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'images' ) ); ?>" type="text" value="<?php echo esc_attr( $images ); ?>">
            <small><?php _e('Enter comma-separated image IDs', 'mistri'); ?></small>
        </p>
        <?php
    }

    // Update the widget settings
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['images'] = ( ! empty( $new_instance['images'] ) ) ? sanitize_text_field( $new_instance['images'] ) : '';

        return $instance;
    }
}

// Register the custom widget
function register_custom_gallery_widget() {
    register_widget( 'Custom_Gallery_Widget' );
}
add_action( 'widgets_init', 'register_custom_gallery_widget' );
