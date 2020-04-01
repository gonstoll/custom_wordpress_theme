<?php

    // Enqueue assets
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {

        wp_enqueue_style(  'theme-info', get_stylesheet_directory_uri() . '/style.css' );
        wp_enqueue_style(  'theme-style', get_stylesheet_directory_uri() . '/dist/css/bundle.css' );
        wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/dist/js/bundle.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array( 'jquery' ),'',true );
        
    }

    // Add feature image support
    add_theme_support( 'post-thumbnails' );

    // Menus
    function register_menu() {
        register_nav_menu('primary',__( 'Primary' ));
        register_nav_menu('footer',__( 'Footer' ));
    }
    add_action( 'init', 'register_menu' );

    // Custom post types
    require get_template_directory() . '/inc/post-types.php';

    // Customizer addons
    require get_template_directory() . '/inc/customizer.php';

    // Add class to menu <li>
    function add_class_on_menu_li($classes, $item, $args) {
        if($args->add_li_class) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_class_on_menu_li', 1, 3);

    // Add class to menu <a>
    function add_class_on_menu_a( $atts, $item, $args ) {
        $class = $args->add_a_class;
        $atts['class'] = $class;
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_on_menu_a', 10, 3 );

    // Woocommerce
    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

?>