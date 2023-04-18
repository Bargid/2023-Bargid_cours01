<?php
// Modèle index.php représente le modèle par défaut du thème
?>

<?php get_header(); ?>
<main class="erreur404">
    <h1>Erreur 404</h1>
    <p>Page Introuvable, Vous pouvez tenter une recherche.</p>
    <?= get_search_form(); ?>

    <p class="cours-404">Nos choix de cours</p>
    <p>Les notes de cours</p>
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
