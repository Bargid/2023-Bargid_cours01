<?php
    // Modèle search.php pour afficher les resultats de recherches
?>

<?php get_header(); ?>
<main>
    <code>search.php</code>
    <section class="recherche">
        <?php 
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <article>
                        <?php // the_title('<h1>', '</h1>');
                        // the_permalink(); ?>
                        <h1><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></h1>
    
                        <p><?= wp_trim_words(get_the_excerpt(), 4); ?></p>
                    </article>
                    <hr>
               <?php endwhile;
            endif; ?>
    </section>
</main>
<?php get_footer(); ?>
