<?php 
// get wordpress theme version
define("VERSION", wp_get_theme()->get("Version"));

if ( ! isset( $content_width ) ) $content_width = 900;
function philosophy_after_setup_theme(){
    load_theme_textdomain("philosophy");
    add_theme_support("post-thumbnails");
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support("html5", ['search-form', 'comment-list']);
    add_theme_support("post-formats", ["image", "gallery", "quote", "audio", "video", "link"]);
    add_editor_style("/assets/css/editor-style.css");

    register_nav_menus([
        "top-menu"  => __("Top Menu", "philosophy")
    ]);

    add_image_size("philosophy-squer", 400, 400);
}

add_action("after_setup_theme", "philosophy_after_setup_theme");

// enqueue all files 
function enqueue_template_files(){

    wp_enqueue_style("awesome-css", get_theme_file_uri("/assets/css/font-awesome/css/font-awesome.min.css"), VERSION ); 
    wp_enqueue_style("fonts-css", get_theme_file_uri("/assets/css/fonts.css"), VERSION ); 
    wp_enqueue_style("base-css", get_theme_file_uri("/assets/css/base.css"), VERSION ); 
    wp_enqueue_style("vendor-css", get_theme_file_uri('/assets/css/vendor.css'), VERSION ); 
    wp_enqueue_style("main-template-css", get_theme_file_uri('/assets/css/main.css'), VERSION); 
    wp_enqueue_style("phhilosophy-css", get_stylesheet_uri(), VERSION); 

    wp_enqueue_script("modernizr-javascrip", get_theme_file_uri('/assets/js/modernizr.js'), ['jquery'], null, false);
    wp_enqueue_script("pace-javascrip", get_theme_file_uri('/assets/js/pace.min.js'), ['jquery'], null, false);

    wp_enqueue_script("jquery");
    wp_enqueue_script("plugins-javascrip", get_theme_file_uri() . "/assets/js/plugins.js", ['jquery'], VERSION, true);

    if ( is_singular() ){
        wp_enqueue_script( "comment-reply" );
    }
    wp_enqueue_script("main-javascrip", get_theme_file_uri() . "/assets/js/main.js", ['jquery'], VERSION, true);


}

add_action("wp_enqueue_scripts", "enqueue_template_files");



// TGM Plugin Activtion 
require_once(get_theme_file_path("inc/tgm.php"));
require_once(get_theme_file_path("inc/attactments.php"));
require_once(get_theme_file_path("inc/csf/cs-framework.php"));
require_once(get_theme_file_path("lib/metabox-options.php"));


    function philosophy_post_pagination(){
        global $wp_query;
        $link = paginate_links(
            [
                'current'   => max(1, get_query_var('paged')),
                'total'     => $wp_query->max_num_pages,
                'type'  => 'list'
            ]
        );

       if($link){
        $link = str_replace("page-numbers", "pgn__num", $link);
        $link = str_replace("<ul class='pgn__num'>", "<ul>", $link);
        $link = str_replace("prev pgn__num", "pgn__prev", $link);
        $link = str_replace("next pgn__num", "pgn__next", $link);

        echo wp_kses_post($link);
       }
    }

    function philosophy_widgets_register(){
        register_sidebar( array(
            'name'          => __( 'About Us Post Sidebar', 'philosophy' ),
            'id'            => 'about-us-sidebar',
            'description'   => __( 'Widgets in this area will be shown on the main sidebar.', 'philosophy' ),
            'before_widget' => '<div id="%1$s" class="col-block %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="quarter-top-margin">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Contact Us Google Maps', 'philosophy' ),
            'id'            => 'google-maps',
            'description'   => __( 'Widgets in this area will be shown on google maps', 'philosophy' ),
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ) );

        register_sidebar( array(
            'name'          => __( 'Contact Us Form', 'philosophy' ),
            'id'            => 'contact-us-7',
            'description'   => __( 'Widgets in this area will be shown on contact form', 'philosophy' ),
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="quarter-top-margin">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Info', 'philosophy' ),
            'id'            => 'footer-info',
            'description'   => __( 'Widgets in this area will be shown on footer', 'philosophy' ),
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ) );
    }

    add_action("widgets_init", "philosophy_widgets_register");

    // remove category Discription action
    remove_action("term_description", "wpautop");

    function custom_wp_title($title, $sep) {
        // Modify the title as needed
        $title .= ' - Philosophy';
        return $title;
    }
    add_filter('wp_title', 'custom_wp_title', 10, 2);



?>