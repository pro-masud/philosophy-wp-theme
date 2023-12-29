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
                <ul class="s-content__header-meta">
                    <li class="date">
                        <?php the_date('F j, Y'); ?>
                    </li>
                    <li class="cat">
                        In
                        <?php
                        // echo get_the_category_list(" "); 
                        // OR
                        the_category(" ");

                        ?>
                    </li>
                </ul>
            </div> <!-- end s-content__header -->

            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <?php the_post_thumbnail("large"); ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">
                <?php 
                    the_content();
                    wp_link_pages( $args );
                ?>
                <p class="s-content__tags">
                    <span>Post Tags</span>

                    <span class="s-content__tag-list">
                        <?php
                        // echo get_the_tag_list(" "); 
                        // OR
                        the_tags(" ", " ", " ");
                        ?>
                    </span>
                </p> <!-- end s-content__tags -->

                <div class="s-content__author">
                    <?php echo get_avatar(get_the_author_meta("ID")); ?>

                    <div class="s-content__author-about">
                        <h4 class="s-content__author-name">
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author("ID")));  ?>">
                                <?php echo get_the_author_meta('first_name', $id) . ' ' . get_the_author_meta('last_name', $id); ?>
                            </a>
                        </h4>

                        <p>
                            <?php echo get_the_author_meta('user_description', $id) ?>
                        </p>
                        <?php
                        $philosophy_fb = get_field("facebook_profile", "user_" . get_the_author_meta("ID"));
                        $philosophy_tw = get_field("twitter_profile", "user_" . get_the_author_meta("ID"));
                        $philosophy_insta = get_field("instagram_profile", "user_" . get_the_author_meta("ID"));
                        $philosophy_gg = get_field("google_profile", "user_" . get_the_author_meta("ID"));

                        ?>
                        <?php if ($philosophy_fb || $philosophy_tw || $philosophy_insta || $philosophy_gg): ?>
                            <ul class="s-content__author-social">
                                <?php if ($philosophy_fb): ?>
                                    <li><a href="<?php echo esc_url($philosophy_fb); ?>">Facebook</a></li>
                                <?php endif; ?>
                                <?php if ($philosophy_tw): ?>
                                    <li><a href="<?php echo esc_url($philosophy_tw); ?>">Twitter</a></li>
                                <?php endif; ?>
                                <?php if ($philosophy_insta): ?>
                                    <li><a href="<?php echo esc_url($philosophy_insta); ?>">GooglePlus</a></li>
                                <?php endif; ?>
                                <?php if ($philosophy_gg): ?>
                                    <li><a href="<?php echo esc_url($philosophy_gg); ?>">Instagram</a></li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="s-content__pagenav">
                    <div class="s-content__nav">
                        <div class="s-content__prev">
                            <?php
                            $philosophy_prev_post = get_previous_post();
                            if ($philosophy_prev_post):
                                ?>
                                <a href="<?php echo get_the_permalink($philosophy_prev_post); ?>" rel="prev">
                                    <span>
                                        <?php _e('Previous Post', 'philosophy'); ?>
                                    </span>
                                    <?php echo get_the_title($philosophy_prev_post); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="s-content__next">
                        <?php
                            $philosophy_next_post = get_next_post();
                            if ($philosophy_next_post):
                                ?>
                                <a href="<?php echo get_the_permalink($philosophy_next_post); ?>" rel="prev">
                                    <span>
                                        <?php _e('Next Post', 'philosophy'); ?>
                                    </span>
                                    <?php echo get_the_title($philosophy_next_post); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div> <!-- end s-content__pagenav -->

            </div> <!-- end s-content__main -->

        </article>

        <?php
    }
    wp_reset_query();

    ?>
    <!-- comments
        ================================================== -->
   <?php 
    if(!post_password_required()){
        comments_template();
    }
   ?>

</section> <!-- s-content -->

<?php get_footer(); ?>