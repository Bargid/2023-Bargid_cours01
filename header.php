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
        <h1><?php bloginfo("Name"); ?></h1>
        <h2><?php bloginfo("Description"); ?></h2>
        <h3><?php bloginfo("URL"); ?></h3>
    </header>