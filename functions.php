<?php

// Enfiler la feuille de style

    function ajouter_styles() {
        wp_enqueue_style('main-styles', // id de la feuille de style
            get_template_directory_uri() . '/style.css', // 
            array(),
            filemtime(get_template_directory() . '/style.css'));
    }
    add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

    add_theme_support( 'html5', 
                        array( 'search-form', 
                               'comment-form', 
                               'comment-list', 
                               'gallery', 
                               'caption' ) );

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array( 'height' => 150,
                                             'width'  => 150, ) );


// =========== Enregistrement des menus ===========

    function enregistrement_des_menus(){
        register_nav_menus( array(
            'Menu_entete' => 'Menu entête',
            'Menu_footer'  => 'Menu pied de page',
        ) );
    }
    add_action( 'after_setup_theme', 'enregistrement_des_menus', 0 );

?>