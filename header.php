<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo get_bloginfo( 'name' );?>">
        <title><?php echo get_bloginfo( 'name' );?></title>
        <?php wp_head();?>
    </head>
    <body>
        <header>

            <nav class="navbar navbar-expand-md">
                <?php if ( get_theme_mod( 'site_logo' ) ): ?>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' )); ?>">
                        <img src="<?php echo esc_attr(get_theme_mod( 'site_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    </a>
                <?php else : ?>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                <?php endif; ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'navbarTop',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'add_li_class'    => 'nav-item',
                        'add_a_class'     => 'nav-link'
                    ));
                ?>
            </nav>

            <?php if ( get_theme_mod( 'twitter' ) ): ?>
                <a href="<?php echo get_theme_mod( 'twitter' ); ?>" target="_blank">
                    <i class="fab fa-twitter"></i></i>
                </a>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'instagram' ) ): ?>
                <a href="<?php echo get_theme_mod( 'instagram' ); ?>" target="_blank">
                    <i class="fab fa-instagram"></i></i>
                </a>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'facebook' ) ): ?>
                <a href="<?php echo get_theme_mod( 'facebook' ); ?>" target="_blank">
                    <i class="fab fa-facebook-f"></i></i>
                </a>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'behance' ) ): ?>
                <a href="<?php echo get_theme_mod( 'behance' ); ?>" target="_blank">
                    <i class="fab fa-behance"></i></i>
                </a>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'dribbble' ) ): ?>
                <a href="<?php echo get_theme_mod( 'dribbble' ); ?>" target="_blank">
                    <i class="fab fa-dribbble"></i></i>
                </a>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'youtube' ) ): ?>
                <a href="<?php echo get_theme_mod( 'youtube' ); ?>" target="_blank">
                    <i class="fab fa-youtube"></i></i>
                </a>
            <?php endif; ?>

        </header>

        <div id="siteContent">
