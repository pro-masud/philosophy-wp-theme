<?php 
defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

class Custom_Post_Type{
    public function __construct(){
        add_action( 'init', [ $this, 'mistri_cpt_callback' ] );
    }

    /**
     * Register Post Type POST Hero Slider
     *
     * @return void
     **/
    public function mistri_cpt_callback() {
        $post_types = array(
            array(
                'singular_name'      => _x( 'Service Post', 'post type singular name', 'mistri' ),
                'labels'             => array(
                    'name'               => _x( 'Mistir Service', 'post type general name', 'mistri' ),
                    'singular_name'      => _x( 'Service Post', 'post type singular name', 'mistri' ),
                    'add_new'            => _x( 'Add New Post', 'service post', 'mistri' ),
                    'add_new_item'       => __( 'Add New Service Title', 'mistri' ),
                    'new_item'           => __( 'New Service Title', 'mistri' ),
                    'edit_item'          => __( 'Edit Service Title', 'mistri' ),
                    'view_item'          => __( 'View Service Title', 'mistri' ),
                    'all_items'          => __( 'All Service Posts', 'mistri' ),
                    'search_items'       => __( 'Search Service Posts', 'mistri' ),
                    'not_found'          => __( 'No service posts found.', 'mistri' ),
                    'not_found_in_trash' => __( 'No service posts found in Trash.', 'mistri' ),
                    'featured_image'     => __( 'Service Image', 'mistri' ),
                    'set_featured_image' => __( 'Upload Service Image', 'mistri' ),
                    'remove_featured_image' => __( 'Remove Service Image', 'mistri' ),
                ),
                'slug'               => 'service-post',
                'supports'           => array( 'title', 'editor', 'thumbnail' ),
            ),
            array(
                'singular_name'      => _x( 'Mistri Team Member', 'post type singular name', 'mistri' ),
                'labels'             => array(
                    'name'               => _x( 'Mistri Teams', 'post type general name', 'mistri' ),
                    'singular_name'      => _x( 'Mistri Team Member', 'post type singular name', 'mistri' ),
                    'add_new'            => _x( 'Add New Member', 'team member', 'mistri' ),
                    'add_new_item'       => __( 'Team Member Name', 'mistri' ),
                    'new_item'           => __( 'New Team Member', 'mistri' ),
                    'edit_item'          => __( 'Edit Team Member', 'mistri' ),
                    'view_item'          => __( 'View Team Member', 'mistri' ),
                    'all_items'          => __( 'All Team Members', 'mistri' ),
                    'search_items'       => __( 'Search Teams', 'mistri' ),
                    'not_found'          => __( 'No Teams found.', 'mistri' ),
                    'not_found_in_trash' => __( 'No Teams found in Trash.', 'mistri' ),
                    'featured_image'     => __( 'Member Image', 'mistri' ),
                    'set_featured_image' => __( 'Upload Member Image', 'mistri' ),
                    'remove_featured_image' => __( 'Remove Member Image', 'mistri' ),
                ),
                'slug'               => 'team-member',
                'supports'           => array( 'title', 'thumbnail', 'editor' ),
            ),
            array(
                'singular_name'      => _x( 'Portfolio Item', 'post type singular name', 'mistri' ),
                'labels'             => array(
                    'name'               => _x( 'Mistri Portfolios', 'post type general name', 'mistri' ),
                    'singular_name'      => _x( 'Portfolio Item', 'post type singular name', 'mistri' ),
                    'add_new'            => _x( 'Add New Portfolio', 'portfolio item', 'mistri' ),
                    'add_new_item'       => __( 'Add New Portfolio', 'mistri' ),
                    'new_item'           => __( 'New Portfolio Item', 'mistri' ),
                    'edit_item'          => __( 'Edit Portfolio Item', 'mistri' ),
                    'view_item'          => __( 'View Portfolio Item', 'mistri' ),
                    'all_items'          => __( 'All Portfolio Items', 'mistri' ),
                    'search_items'       => __( 'Search Portfolio Items', 'mistri' ),
                    'not_found'          => __( 'No portfolio items found.', 'mistri' ),
                    'not_found_in_trash' => __( 'No portfolio items found in Trash.', 'mistri' ),
                    'featured_image'     => __( 'Portfolio Image', 'mistri' ),
                    'set_featured_image' => __( 'Upload Portfolio Image', 'mistri' ),
                    'remove_featured_image' => __( 'Remove Portfolio Image', 'mistri' ),
                ),
                'slug'               => 'portfolio-post',
                'supports'           => array( 'title', 'editor', 'thumbnail', 'tags' ),
            ),
        );

        foreach ($post_types as $post_type) {
            $args = array(
                'labels'             => $post_type['labels'],
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => $post_type['slug'] ),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => $post_type['supports'],
                'show_in_rest'       => true,
            );

            // Register each custom post type
            register_post_type( $post_type['slug'], $args );
        }

        // Custom taxonomies registration
        register_taxonomy('portfolio-tag','portfolio-post',array(
            'hierarchical' => false,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'portfolio-tag' ),
        ));

        register_taxonomy('portfolio-cat','portfolio-post',array(
            'hierarchical' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'portfolio-cat' ),
        ));

    }
}

