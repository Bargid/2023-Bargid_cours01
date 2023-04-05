<?php
// Template footer.php
?>

<footer class="site__footer">

    <section class="footer-video"><?php dynamic_sidebar( 'Footer' ); ?></section>

    <div class="menu-footer"><?php wp_nav_menu(array(
        'menu' => 'header',
        'container' => 'nav'
    )); ?></div>
    <span class="github"><a href="https://github.com/Bargid/LouisRoby_WordPress">GitHub</a></span>
    <h5>Tous droits réservés ©</h5>
</footer>

<?php wp_footer(); ?>

</body>
</html>