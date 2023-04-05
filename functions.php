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
    
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');


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

/**
 * Permet de modifier les titres du menu "cours"
 * @param $title : titre du choix menu
 * @param $item : le choix global
 * @param $args : Object qui représente la structure de menu
 */

 function perso_menu_item_title($title, $item, $args) {
    // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
    if($args->menu == 'cours') {
    // Modifier la longueur du titre en fonction de vos besoins
    $sigle = substr($title, 4, 3);
    $title = substr($title, 7);
    $title = "<code class='cours__sigle'>" . $sigle . "</code><span class='cours__titre'> " . wp_trim_words($title, 2, ' ... ') . "</span>";
    }

    if($args->menu == 'note-wp') {
        // Modifier la longueur du titre en fonction de vos besoins
        $sigle = substr($title, 0, 2);
        $title = substr($title, 3);
        $title = "<code class='cours__sigle'>" . $sigle . "</code><span class='cours__titre'>  " . wp_trim_words($title, 2, ' ... ') . "</span>";
    }
    if($args->menu == 'note-wp') {
        if (substr($title,0,1) == '0') {
            $title= substr($title,1);
        }
    }

    return $title;
}
add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);

// ==================================================================

function ajouter_description_class_menu( $items, $args ) {
    // Vérifier si le menu correspondant est celui que vous souhaitez modifier
    if ( 'evenement' === $args->menu ) {
        foreach ( $items as $item ) {
            // Récupérer le titre, la description et la classe personnalisée
            $titre = $item->title;
            $description = $item->description;

            // Ajouter la description et la classe personnalisée à l'élément de menu
            $item->title .= '<span>' . $description . '</span>';
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'ajouter_description_class_menu', 10, 2 );

// Enregistrer le sidebar
function enregistrer_sidebar() {
    register_sidebar( array(
        'name' => __( 'Footer', "Bargid's Website"  ),
        'id' => 'Footer',
        'description' => __( 'Un widget area pour afficher des widgets dans le pied de page.', "Bargid's Website" ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'enregistrer_sidebar' );