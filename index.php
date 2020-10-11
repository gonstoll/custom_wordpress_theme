<?php get_header();?>

    <div class="site">

        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content' );

                endwhile;
            endif;
        ?>

    </div>

<?php get_footer();?>
