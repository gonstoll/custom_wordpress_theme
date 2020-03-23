<?php

    //Logo
    function site_logo( $wp_customize ){
        //Settings
        $wp_customize->add_setting( 'site_logo' );//Setting for logo uploader

        //Controls
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'site_logo',
                array(
                    'label'      => 'Upload a logo',
                    'section'    => 'title_tagline',
                    'settings'   => 'site_logo'
                )
            )
        );
    }
    add_action('customize_register', 'site_logo');

    //Social media
    function social_media( $wp_customize ){
        //Settings
        $wp_customize->add_setting( 'twitter', array( 'default' => '' ) );
        $wp_customize->add_setting( 'instagram', array( 'default' => '' ) );
        $wp_customize->add_setting( 'facebook', array( 'default' => '' ) );
        $wp_customize->add_setting( 'behance', array( 'default' => '' ) );
        $wp_customize->add_setting( 'dribbble', array( 'default' => '' ) );
        $wp_customize->add_setting( 'youtube', array( 'default' => '' ) );

        //Sections
        $wp_customize->add_section(
            'social-media',
            array(
                'title' => __( 'Social Media', '_s' ),
                'priority' => 30,
                'description' => __( 'Enter the URL to your accounts for each social media for the icon to appear in the header.', '_s' )
            )
        );

        //Controls
        //Twitter
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'twitter',
                array(
                    'label' => __( 'Twitter', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'twitter'
                )
            )
        );
        //Instragram
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'instagram',
                array(
                    'label' => __( 'Instagram', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'instagram'
                )
            )
        );
        //Facebook
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'facebook',
                array(
                    'label' => __( 'Facebook', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'facebook'
                )
            )
        );
        //Behance
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'behance',
                array(
                    'label' => __( 'Behance', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'behance'
                )
            )
        );
        //Dribbble
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'dribbble',
                array(
                    'label' => __( 'Dribbble', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'dribbble'
                )
            )
        );
        //Youtube
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'youtube',
                array(
                    'label' => __( 'YouTube', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'youtube'
                )
            )
        );
        
    }
    add_action('customize_register', 'social_media');

?>