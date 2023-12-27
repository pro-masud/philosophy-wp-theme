<!-- 
    Template Name: Contact Us Page
 -->
<?php get_header(); ?>
<!-- s-content
    ================================================== -->
<section class="s-content s-content--narrow s-content--no-padding-bottom">

    <?php while (have_posts()) {
        the_post();
        $id = get_post_field('post_author');
        ?>
        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php the_title(); ?>
                </h1>
            </div> <!-- end s-content__header -->

            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <?php if (is_active_sidebar('google-maps')) {
                        dynamic_sidebar('google-maps');
                    }
                    ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <?php the_post_thumbnail("large"); ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">
                <?php the_content(); ?>
            </div> <!-- end s-content__main -->

            <div class="row block-1-2 block-tab-full">
                <?php if (is_active_sidebar('about-us-sidebar')) {
                    dynamic_sidebar('about-us-sidebar');
                }
                ?>

            </div>

            <form name="cForm" id="cForm" method="post" class="contact-form-page">
                <?php if (is_active_sidebar('contact-us-7')) {
                    dynamic_sidebar('contact-us-7');
                }
                ?>
            </form>
            

        </article>

        <?php
    }
    wp_reset_query();

    ?>

</section> <!-- s-content -->

<?php get_footer(); ?>