<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <title> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div id="header">
            <?php the_custom_logo(); ?>
            <nav>
                <?php wp_nav_menu('main-menu'); ?>
            </nav>
        </div>
        <img src="<?php header_image(); ?>" alt="Header bild"> 
        <!-- visar sökväg -->
        <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?> 
    </header>
    <main>