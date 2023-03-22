<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body class="custom-background site <?= (is_front_page() ? 'no-aside' : ''); ?> ">
    <header class="site__entete">
        <section class="logomenu">
            <?php the_custom_logo(); ?>
            <h1 class="titre"><a href="<?php bloginfo("url"); ?>"><?php bloginfo("name"); ?></a></h1>
            <div class="menusearch">
                <input type="checkbox" id="chkBurger">
                <?php wp_nav_menu(array(
                'menu' => 'header',
                'container' => 'nav'
            )); ?>
            <?= get_search_form(); ?>
            <label for="chkBurger" class="burger"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32"></label>
            </div>
        </section>
        <h1 class="titre-mobile"><a href="<?php bloginfo("url"); ?>"><?php bloginfo("name"); ?></a></h1>
        <h2><?php bloginfo("description"); ?></h2>
    </header>

    <?php 
    if (!is_front_page()) {

        get_template_part("template-parts/aside");
    } ?>