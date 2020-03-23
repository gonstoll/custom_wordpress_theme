<?php get_header(); ?>

    <!-- POSTS -->
    <?php
        if ( have_posts() ) :

            while ( have_posts() ) : the_post();
                get_template_part('template-parts/content', get_post_format());
            endwhile;

        else : ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>No results for now.</h1>
                    </div>
                </div>
            </div>
        <?php endif;
    ?><!-- END POSTS -->

<?php get_footer(); ?>