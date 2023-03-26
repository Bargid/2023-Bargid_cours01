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
<p class="domaine">Domaine : <span class="domaine_span"><?php the_field('Domaine'); ?></span></p>
<p class="domaine">Enseignant : <span class="enseignant"><?php the_field('Enseignant'); ?></span></p>
<p class="domaine">Nombre d'étudiants : <span class="nombre_detudiants"><?php the_field('nombre_detudiants'); ?></span></p>
<p class="domaine">Site du cours : <a class="page_du_cours" href="https://www.cmaisonneuve.qc.ca/programme/integration-multimedia/#liste_des_cours_programme"><?php the_field('page_du_cours'); ?></a></p>
</main>
<?php get_footer(); ?>
