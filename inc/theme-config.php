<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = "twenty_option";

    $theme = wp_get_theme();

    $args = array(
        'opt_name'             => $opt_name,
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_type'            => 'menu',
        'allow_sub_menu'       => true,
        'menu_title'           => __( 'Theme Options', 'twentytwenty' ),
        'page_title'           => __( 'Theme Options', 'twentytwenty' ),
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-portfolio',
        'dev_mode'             => false,
        'customizer'           => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    Redux::setArgs( $opt_name, $args );  
    
    Redux::setSection( $opt_name, array(
        'title' => __( 'Color Settings', 'twentytwenty' ),
        'id'    => 'color',
        'icon'  => 'el el-brush'
    ) );
    

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Backgrounds', 'twentytwenty' ),
        'id'         => 'color-Backgrounds',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'twentytwenty' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'opt-color-description',
                'type'     => 'color',
                'output'   => array( '.site-description' ),
                'title'    => __( 'Site description Color', 'twentytwenty' ),
                'default'  => '#000000',
            ),
            array(
                'id'       => 'opt-background-body',
                'type'     => 'color_rgba',
                'title'    => __( 'Body Background Color', 'twentytwenty' ),
                'default'  => array(
                    'color' => '#7e33dd',
                ),
                'output'   => array( 'body' ),
                'mode'     => 'background',
            ),
            array(
                'id'       => 'opt-background-header',
                'type'     => 'color_rgba',
                'title'    => __( 'Header Background Color', 'twentytwenty' ),
                'default'  => array(
                    'color' => '#ffffff',
                ),
                'output'   => array( '#site-header' ),
                'mode'     => 'background',
            ),
            array(
                'id'       => 'opt-background-footer',
                'type'     => 'color_rgba',
                'title'    => __( 'Footer Background Color', 'twentytwenty' ),
                'default'  => array(
                    'color' => '#ffffff',
                ),
                'output'   => array( '#site-footer' ),
                'mode'     => 'background',
            ),
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Colors', 'twentytwenty' ),
        'id'         => 'color-Text',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'twentytwenty' ),
                'default'  => '#333333',
            ),
            array(
                'id'       => 'opt-color-description',
                'type'     => 'color',
                'output'   => array( '.site-description' ),
                'title'    => __( 'Site description Color', 'twentytwenty' ),
                'default'  => '#333333',
            ),
            array(
                'id'       => 'opt-color-entry-title',
                'type'     => 'color',
                'output'   => array( '.entry-title a' ),
                'title'    => __( 'Entry Title Color', 'twentytwenty' ),
                'default'  => '#333333',
            ),
            array(
                'id'       => 'opt-color-text',
                'type'     => 'color',
                'output'   => array( 'p' ),
                'title'    => __( 'Normal Text Color', 'twentytwenty' ),
                'default'  => '#333333',
            ),
            array(
                'id'       => 'opt-color-links',
                'type'     => 'color',
                'output'   => array( 'a' ),
                'title'    => __( 'Links Color', 'twentytwenty' ),
                'default'  => '#333333',
            ),
            array(
                'id'       => 'opt-color-h1',
                'type'     => 'color',
                'output'   => array( 'h1' ),
                'title'    => __( 'H1 Color', 'twentytwenty' ),
                'default'  => '#333333',
            ),
            array(
                'id'       => 'opt-color-h2',
                'type'     => 'color',
                'output'   => array( 'h2' ),
                'title'    => __( 'H2 Color', 'twentytwenty' ),
                'default'  => '#333333',
            ),
            array(
                'id'       => 'opt-color-h3',
                'type'     => 'color',
                'output'   => array( 'h3' ),
                'title'    => __( 'H3 Color', 'twentytwenty' ),
                'default'  => '#333333',
            ),
            array(
                'id'       => 'opt-color-h4',
                'type'     => 'color',
                'output'   => array( 'h4' ),
                'title'    => __( 'H4 Color', 'twentytwenty' ),
                'default'  => '#333333',
            ),
            array(
                'id'       => 'opt-color-h5',
                'type'     => 'color',
                'output'   => array( 'h5' ),
                'title'    => __( 'H2 Color', 'twentytwenty' ),
                'default'  => '#333333',
            ),
        ),
    ) );
