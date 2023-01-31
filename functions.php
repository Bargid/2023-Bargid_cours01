<?php

// Enfiler la feuille de style

    function ajouter_styles() {
        wp_enqueue_style('main-styles', // id de la feuille de style
        get_template_directory_uri() . '/css/style.css', // 
        array(),
        filemtime(get_template_directory() . '/css/style.css'));
    }
    add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

?>