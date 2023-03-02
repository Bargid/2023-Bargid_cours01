<?php
// Modèle index.php représente le modèle par défaut du thème
?>

<?php get_header(); ?>
<main class="site__main">
    <code>front-page.php</code>
    <section class="blocflex">
        <?php 
        if (have_posts()) :
            while (have_posts()) : the_post();
                // the_title('<h1>', '</h1>');
                // the_permalink(); ?>
                <?php get_template_part("template-parts/category", "note-wp"); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>
