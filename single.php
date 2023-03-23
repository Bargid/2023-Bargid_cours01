<?php
// Modèle index.php représente le modèle par défaut du thème
?>

<?php get_header(); ?>
<main class="site__main">
    <code>single.php</code>
<?php 
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
            // the_excerpt();
            // echo wp_trim_words(get_the_excerpt(), 4);
        endwhile;
    endif;
?>
<p class="domaine"><?php the_field('Domaine'); ?></p>
<p class="enseignant"><?php the_field('Enseignant'); ?></p>
</main>
<?php get_footer(); ?>
