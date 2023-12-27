<!-- 
    Template Name: About Us Page
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
                    <?php the_post_thumbnail("large"); ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">
                <?php the_content(); ?>
            </div> <!-- end s-content__main -->

            <div class="row block-1-2 block-tab-full">
                    <div class="col-block">
                        <h3 class="quarter-top-margin">Who We Are.</h3>
                        <p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>
                    </div>

                    <div class="col-block">
                        <h3 class="quarter-top-margin">Our Mission.</h3>
                        <p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>
                    </div>

                    <div class="col-block">
                        <h3 class="quarter-top-margin">Our Vision.</h3>
                        <p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>
                    </div>

                    <div class="col-block">
                        <h3 class="quarter-top-margin">Our Values.</h3>
                        <p>Lorem ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat qui sit ex occaecat et eu mollit nisi pariatur fugiat deserunt dolor veniam reprehenderit aliquip magna nisi consequat aliqua veniam in aute ullamco Duis laborum ad non pariatur sit.</p>
                    </div>

                </div>

        </article>

        <?php
    }
    wp_reset_query();

    ?>

</section> <!-- s-content -->

<?php get_footer(); ?>