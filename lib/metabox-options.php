<?php if ( ! defined( 'ABSPATH' ) ) { die; } 

define('CS_ACTIVE_FRAMEWORK', false);
define('CS_ACTIVE_METABOX', true);
define('CS_ACTIVE_TAXONOMY', false);
define('CS_ACTIVE_SHORTCODE', false);
define('CS_ACTIVE_CUSTOMIZE', false);


function philosophy_csf_metabox(){
  CSFramework_Metabox::instance(array()); 
}

add_action('init', 'philosophy_csf_metabox');

function extra_metabox_fields_codestar_framework($options){
  $options[] = array(
    'id' => 'page-metabox',
    'title' => 'First Section',
    'post_type' => 'page',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => [
      [
        'name' => 'home-page-one',
        'title' => 'Page Settings',
        'icon' => 'fa fa-image',
        'fields' => [
          array(
            'id'    => 'home-page-two',
            'type'  => 'text',
            'title' => __('First Option', 'philosophy'),
            'desc'  => __('First Option on Page', 'philosophy'),
            'default' => __('Enter Your Title', 'philosophy'),
            'help'  => __('Enter help URL', 'philosophy'),
            'class' => 'pro-masud',
          ),
          array(
            'id'    => 'home-page-three',
            'type'  => 'textarea',
            'title' => __('Secondary Option', 'philosophy'),
            'desc'  => __('First Content on Page', 'philosophy'),
            'default' => __('Enter Your Description', 'philosophy'),
            'help'  => __('Enter help URL', 'philosophy'),
            'class' => 'pro-masud',
          ),
        ]
      ]
    ]
  );

  return $options;
}


add_filter('cs_metabox_options', 'extra_metabox_fields_codestar_framework');
