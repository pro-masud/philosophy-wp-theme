<!DOCTYPE html>
<html class="no-js" <?php echo language_attributes(); ?>>
<head>


    <!--- basic page needs
    ================================================== -->
    <meta <?php bloginfo('charset'); ?>>
    <title>Philosophy</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>

    <?php get_header(); ?>

    <!-- s-content
    ================================================== -->
    <section class="s-content">
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>
                <?php

                    while(have_posts()){
                        the_post();
                        get_template_part("templates-parts/post-formats/post", get_post_format());
                    }
                    wp_reset_query();
                
                ?>
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                   <?php philosophy_post_pagination(); ?>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->


   <?php get_footer(); ?>