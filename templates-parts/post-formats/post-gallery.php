<article <?php post_class('masonry__brick entry format-gallery'); ?> id="post-<?php the_ID() ?>" data-aos="fade-up">
    <?php if (class_exists('Attachments')):
        $attechments = new Attachments("gallery");
        if ($attechments->exist()):
            ?>
            <div class="entry__thumb slider">
                <div class="slider__slides">
                    <?php while($attechment = $attechments-> get()): ?>
                    <div class="slider__slide">
                        <?php echo wp_kses_post($attechments->image('philosophy-squer')); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>

        <?php
        endif;
    endif;
    ?>

    <?php get_template_part("templates-parts/common/post/summary"); ?>

</article>