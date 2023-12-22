<?php 
defined( 'ABSPATH' ) || exit;

class Mistri_Recent_Posts_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'mistri_recent_posts_widget',
            'Mistri Recent Posts Widget',
            array(
                'description' => __('Displays recent posts with images.', 'mistri')
            )
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];

        // Output the widget title if provided
        $title = apply_filters('widget_title', $instance['title']);
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        $recent_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => $instance['number_of_posts']
        ));

        if ($recent_posts->have_posts()) {
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
                ?>
                <div class="recent-post p-0 bor-bottom pb-4 mb-4 sub-bg">
                    <div class="img">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail');
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/blog/default-thumbnail.jpg" alt="' . __('No Image', 'mistri') . '">';
                        }
                        ?>
                    </div>
                    <div class="con">
                        <span><?php the_time('d/m/Y'); ?></span>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    </div>
                </div>
                <?php
            }
        }
        wp_reset_postdata();

        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Recent Posts', 'mistri');
        $number_of_posts = !empty($instance['number_of_posts']) ? $instance['number_of_posts'] : 5;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'mistri'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number_of_posts'); ?>"><?php _e('Number of Posts:', 'mistri'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('number_of_posts'); ?>" name="<?php echo $this->get_field_name('number_of_posts'); ?>" type="number" value="<?php echo esc_attr($number_of_posts); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = !empty($new_instance['title']) ? strip_tags($new_instance['title']) : __('Recent Posts', 'mistri');
        $instance['number_of_posts'] = !empty($new_instance['number_of_posts']) ? strip_tags($new_instance['number_of_posts']) : 5;
        return $instance;
    }
}

function mistri_register_recent_posts_widget() {
    register_widget('Mistri_Recent_Posts_Widget');
}
add_action('widgets_init', 'mistri_register_recent_posts_widget');
