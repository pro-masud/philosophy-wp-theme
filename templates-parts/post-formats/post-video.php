<?php 
    $philosophy_audio_url = "";
    if(function_exists("the_field")){
        $philosophy_video_url = get_field("source_file");
    }
?>
<article class="masonry__brick entry format-video" data-aos="fade-up">

    <div class="entry__thumb video-image">
        <a href="<?php echo esc_url($philosophy_video_url); ?>?color=01aef0&title=0&byline=0&portrait=0" data-lity>
            <?php the_post_thumbnail('philosophy-squer'); ?>
        </a>
    </div>

    <?php get_template_part("templates-parts/common/post/summary"); ?>

</article>