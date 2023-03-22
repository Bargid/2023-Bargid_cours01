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
</main>
<?php get_footer(); ?>
