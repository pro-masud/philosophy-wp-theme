<?php
$feturepost = new WP_Query(
    array(
        'meta_key' => 'feature',
        'meta_value' => '1',
        'posts_per_page' => 3,
    )
);


// feture post data 
$feture_post_data = [];
while ($feturepost->have_posts()) {
    $feturepost->the_post();
    $categorys = get_the_category();
    $category = $categorys[mt_rand(0, count($categorys)-1)];
    $feture_post_data[] = [
        'title' => get_the_title(),
        'feture_image' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
        'permalink' => get_permalink(),
        'post_date' => get_the_date('F j, Y'),
        'author' => get_the_author_meta('display_name'),
        'author_url'    => get_author_posts_url(get_the_author_meta("ID")),
        'avatar' => get_avatar_url(get_the_author_meta('ID')),
        'cat'   => $category->name,
        'catlink'   => get_category_link($category)
    ];
}
if ($feturepost->post_count > 1):
    ?>

    <div class="pageheader-content row">
        <div class="col-full">

            <div class="featured">

                <div class="featured__column featured__column--big">
                    <div class="entry"
                        style="background-image:url('<?php echo esc_url($feture_post_data[0]['feture_image']); ?>');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="<?php esc_url($feture_post_data[0]['catlink']); ?>"><?php echo esc_html($feture_post_data[0]['cat']); ?></a></span>

                            <h1><a href="<?php echo esc_url($feture_post_data[0]['permalink']); ?>" title="<?php echo esc_attr($feture_post_data[0]['title']); ?>"><?php echo esc_html($feture_post_data[0]['title']); ?></a>
                            </h1>

                            <div class="entry__info">
                                <a href="<?php echo esc_url($feture_post_data[0]['author_url']); ?>" class="entry__profile-pic">
                                    <img class="avatar"
                                        src="<?php echo esc_url($feture_post_data[0]['avatar']);  ?> "
                                        alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="<?php echo esc_url($feture_post_data[0]['author_url']);  ?>"><?php echo esc_html(ucwords($feture_post_data[0]['author'])); ?></a></li>
                                    <li><?php echo esc_html($feture_post_data[0]['post_date']); ?></li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->
                </div> <!-- end featured__big -->

                <div class="featured__column featured__column--small">
                    <?php for($i = 1; $i<3; $i++): ?>
                        <div class="entry"
                            style="background-image:url('<?php echo esc_url($feture_post_data[$i]['feture_image']); ?>');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="<?php esc_url($feture_post_data[$i]['catlink']); ?>"><?php echo esc_html($feture_post_data[$i]['cat']); ?></a></span>

                                <h1><a href="<?php esc_url($feture_post_data[$i]['permalink']); ?>" title="<?php echo esc_attr($feture_post_data[$i]['title']); ?>"><?php echo esc_html($feture_post_data[$i]['title']); ?></a></h1>
                                <div class="entry__info">
                                    <a href="<?php echo esc_url($feture_post_data[$i]['author_url']); ?>" class="entry__profile-pic">
                                        <img class="avatar"
                                            src="<?php echo esc_url($feture_post_data[$i]['avatar']);  ?> "
                                            alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="<?php echo esc_url($feture_post_data[$i]['author_url']); ?>"><?php echo esc_html(ucwords($feture_post_data[$i]['author'])); ?></a></li>
                                        <li><?php echo esc_html($feture_post_data[$i]['post_date']); ?></li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->
                    <?php endfor; ?>

                </div> <!-- end featured__small -->
            </div> <!-- end featured -->

        </div> <!-- end col-full -->
    </div> <!-- end pageheader-content row -->
<?php endif; ?>