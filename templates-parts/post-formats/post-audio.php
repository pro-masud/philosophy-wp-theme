<?php 
    $philosophy_audio_url = "";
    if(function_exists("the_field")){
        $philosophy_audio_url = get_field("source_file");
    }
?>
<article class="masonry__brick entry format-audio" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="<?php the_permalink(); ?>" class="entry__thumb-link">
            <?php the_post_thumbnail('philosophy-squer'); ?>
        </a>
        <div class="audio-wrap">
            <audio autoplay id="player" src="<?php  echo esc_url($philosophy_audio_url); ?>" width="100%" height="42"
                controls="controls"></audio>
        </div>
    </div>

    <?php  get_template_part("templates-parts/common/post/summary"); ?>

</article>