<?php
// Modèle index.php représente le modèle par défaut du thème
?>

<?php get_header(); ?>
<main class="erreur404">
    <h1>Erreur 404</h1>
    <p>Page Introuvable, Vous pouvez tenter une recherche.</p>
    <?= get_search_form(); ?>
</main>
<?php get_footer(); ?>
