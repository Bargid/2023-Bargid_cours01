<?php
// Modèle index.php représente le modèle par défaut du thème
?>

<?php get_header(); ?>
<main class="erreur404">
    <h1>Erreur 404</h1>
    <h3>Page Introuvable, Vous pouvez tenter une recherche.</h3>
    <?= get_search_form(); ?>

    <h3>Nos choix de cours</h3>
    <div class="cours-404"><?php
            $leMenu = "cours";
            if (in_category('cours')) {
                $leMenu = "cours";
            }
            wp_nav_menu(array(
            "menu"      => $leMenu,
            "container" => "nav"
        )); ?></div>

    <h3>Les notes de cours</h3>
    <div class="notes-404"><?php
            $leMenu = "note-wp";
            if (in_category('cours')) {
                $leMenu = "cours";
            }
            wp_nav_menu(array(
            "menu"      => $leMenu,
            "container" => "nav"
        )); ?></div>
</main>
<?php get_footer(); ?>
