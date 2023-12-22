<?php 
class Mistri_Chat_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'mistri_chat_widget',
            __('Mistri Chat Widget', 'text_domain'),
            array(
                'description' => __('Widget to display chat information', 'text_domain'),
            )
        );
    }

    public function widget($args, $instance) {
        $template_directory_uri = get_template_directory_uri();
        echo $args['before_widget']; ?>

        <div class="chat">
            <div class="row g-0 align-items-center">
                <div class="col-lg-2">
                    <div class="chat_icon">
                        <img src="<?php echo $instance['chat_icon']; ?>" alt="icon">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2><?php echo $instance['consultation_text']; ?></h2>
                </div>
                <div class="col-lg-4">
                    <ul>
                        <li class="info">
                            <img src="<?php echo $instance['info_image1']; ?>" alt="image">
                            <img class="info_image" src="<?php echo $instance['info_image2']; ?>" alt="image">
                        </li>
                        <li><a href="tel:<?php echo $instance['phone_number']; ?>"><?php echo $instance['phone_number']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php echo $args['after_widget'];
    }

    public function form($instance) {
        $chat_icon = !empty($instance['chat_icon']) ? $instance['chat_icon'] : '';
        $consultation_text = !empty($instance['consultation_text']) ? $instance['consultation_text'] : '';
        $info_image1 = !empty($instance['info_image1']) ? $instance['info_image1'] : '';
        $info_image2 = !empty($instance['info_image2']) ? $instance['info_image2'] : '';
        $phone_number = !empty($instance['phone_number']) ? $instance['phone_number'] : '';

        // Widget form fields
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('chat_icon'); ?>"><?php _e('Chat Icon URL:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('chat_icon'); ?>" name="<?php echo $this->get_field_name('chat_icon'); ?>" type="text" value="<?php echo esc_attr($chat_icon); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('consultation_text'); ?>"><?php _e('Consultation Text:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('consultation_text'); ?>" name="<?php echo $this->get_field_name('consultation_text'); ?>" type="text" value="<?php echo esc_attr($consultation_text); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('info_image1'); ?>"><?php _e('Info Image 1 URL:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('info_image1'); ?>" name="<?php echo $this->get_field_name('info_image1'); ?>" type="text" value="<?php echo esc_attr($info_image1); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('info_image2'); ?>"><?php _e('Info Image 2 URL:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('info_image2'); ?>" name="<?php echo $this->get_field_name('info_image2'); ?>" type="text" value="<?php echo esc_attr($info_image2); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('phone_number'); ?>"><?php _e('Phone Number:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('phone_number'); ?>" name="<?php echo $this->get_field_name('phone_number'); ?>" type="text" value="<?php echo esc_attr($phone_number); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['chat_icon'] = !empty($new_instance['chat_icon']) ? strip_tags($new_instance['chat_icon']) : '';
        $instance['consultation_text'] = !empty($new_instance['consultation_text']) ? strip_tags($new_instance['consultation_text']) : '';
        $instance['info_image1'] = !empty($new_instance['info_image1']) ? strip_tags($new_instance['info_image1']) : '';
        $instance['info_image2'] = !empty($new_instance['info_image2']) ? strip_tags($new_instance['info_image2']) : '';
        $instance['phone_number'] = !empty($new_instance['phone_number']) ? strip_tags($new_instance['phone_number']) : '';

        return $instance;
    }
}

function register_mistri_chat_widget() {
    register_widget('Mistri_Chat_Widget');
}
add_action('widgets_init', 'register_mistri_chat_widget');
