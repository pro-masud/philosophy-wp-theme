<?php 
// admin bar not showing attactments options
define("ATTACHMENTS_SETTINGS_SCREEN", false);
add_filter("attachments_default_instance", "__return_false");

function philosophy_attachments($attachments){
    $post_id = null;
    
    $post_id = isset($_REQUEST['post']) ? $_REQUEST['post'] : ' ';

    if(get_post_format($post_id) !="gallery"){
        return;
    }

    $fields = [
        [
            'name'  => 'Title',
            'type'  => 'text',
            'label' => __('Title', 'philosophy')
        ],
    ];

    $args = [
        'label' => __('Gallery Image','philosophy'),
        'post_type' => ['post'],
        'filetype'  => ['image'],
        'note'  => 'Add New Gallery',
        'button_text'   => __("Gallery Images", "philosophy"),
        'fields'    => $fields,
    ];

    $attachments->register('gallery', $args);
   
}

add_action("attachments_register", "philosophy_attachments");