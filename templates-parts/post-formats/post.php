<article class="masonry__brick entry format-standard" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="<?php the_permalink(); ?>" class="entry__thumb-link">
            <?php the_post_thumbnail('philosophy-squer'); ?>
        </a>
    </div>

    <?php get_template_part("templates-parts/common/post/summary"); ?>

</article>