<?php

// Enfiler la feuille de style

    function ajouter_styles() {
        wp_enqueue_style('main-styles', // id de la feuille de style
            get_template_directory_uri() . '/style.css', // 
            array(),
            filemtime(get_template_directory() . '/style.css'));
         wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Bowlby+One+SC&family=Josefin+Sans:wght@700&family=Quicksand&family=Righteous&family=Staatliches&family=Tilt+Warp&display=swap',[], null );
    }
    add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

    add_theme_support( 'html5', 
                        array( 'search-form', 
                               'gallery', 
                               'caption' ) );

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array( 'height' => 150,
                                             'width'  => 150, ) );


// =========== Enregistrement des menus ===========

    function enregistrement_des_menus(){
        register_nav_menus( array(
            'Menu_entete' => 'Menu entête',
            'Menu_footer' => 'Menu pied de page',
        ) );
    }
    add_action( 'after_setup_theme', 'enregistrement_des_menus', 0 );

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */

function cidweb_modifie_requete_principal( $query ) {

    if ($query->is_home() // Si page d'accueil
        && $query->is_main_query() // si requete principal
        && ! is_admin() ) { // non tableau de bord

        $query->set( 'category_name', 'note-wp' ); // Filtre les articles de categorie "note4w4"
        $query->set( 'orderby', 'title' ); // Trie selon le titre
        $query->set( 'order', 'ASC' ); // Ordre ascendant
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );