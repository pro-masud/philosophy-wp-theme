 <div class="comments-wrap">
    <div id="comments" class="row">
        <div class="col-full">
            <?php
            if (have_comments()) :
            ?>
                <h3 class="h2"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></h3>
                <ol class="commentlist">
                    <?php
                    wp_list_comments(array(
                        'style'      => 'ol',
                        'short_ping' => true,
                        'avatar_size' => 50,
                    ));
                    ?>
                </ol>
            <?php endif; ?>

            <!-- respond
            ================================================== -->
            <div class="respond">

                <h3 class="h2"><?php comment_form_title('Add Comment', 'Leave a Reply to %s'); ?></h3>

                <form name="commentForm" id="commentForm" method="post" action="<?php echo esc_url(site_url('/wp-comments-post.php')); ?>">
                    <?php
                    comment_form(array(
                        'comment_field' => '<div class="message form-field"><textarea name="comment" id="comment" class="full-width" placeholder="Your Message"></textarea></div>',
                        'fields' => array(
                            'author' => '<div class="form-field"><input name="author" type="text" id="author" class="full-width" placeholder="Your Name" value="' . esc_attr($commenter['comment_author']) . '"></div>',
                            'email' => '<div class="form-field"><input name="email" type="text" id="email" class="full-width" placeholder="Your Email" value="' . esc_attr($commenter['comment_author_email']) . '"></div>',
                            'url' => '<div class="form-field"><input name="url" type="text" id="url" class="full-width" placeholder="Website" value="' . esc_attr($commenter['comment_author_url']) . '"></div>',
                        ),
                        'comment_notes_before' => '',
                        'comment_notes_after' => '',
                        'title_reply' => '',
                        'class_submit' => 'submit btn--primary btn--large full-width',
                        'label_submit' => 'Submit',
                    ));
                    ?>
                </form> <!-- end form -->

            </div> <!-- end respond -->

        </div> <!-- end col-full -->

    </div> <!-- end row comments -->
</div> <!-- end comments-wrap -->

















<!-- 

<div class="comments-wrap">

    <div id="comments" class="row">
        <div class="col-full">

            <h3 class="h2"> -->
                <?php
                // $philosophy_comments_number = get_comments_number();
                // if ($philosophy_comments_number <= 1) {
                //     echo $philosophy_comments_number . " " . __("Comment", "philosophy");
                // } else {
                //     echo $philosophy_comments_number . " " . __("Comments", "philosophy");
                // }
                ?>
            <!-- </h3>

            <ol class="commentlist"> -->
                <?php // wp_list_comments(); ?>
            <!-- </ol>

            <div class="comments-pagination"> -->
                <?php
                // the_comments_pagination(
                //     array(
                //         'screen_reader_text' => __('Pagination', 'philosophy'),
                //         'prev_text' => __('Previous Comments', 'philosophy'),
                //         'next_text' => __('Next Comments', 'philosophy'),
                //     )
                // );
                ?>
            <!-- </div>

            <div class="respond">

                <h3 class="h2"> -->
                    <?php  //_e('Add Comment', ); ?>
                <!-- </h3> -->

                <?php

               // comment_form();
                ?>
<!-- 
            </div>

        </div> 

    </div> 
</div> -->