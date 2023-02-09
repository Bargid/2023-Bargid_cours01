<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><?php bloginfo("name"); ?></h1>
        <h2><?php bloginfo("description"); ?></h2>
        <h3><?php bloginfo("url"); ?></h3>

        <h1><a href="<?php bloginfo("url"); ?>"><?php bloginfo("name"); ?></a></h1>
    </header>