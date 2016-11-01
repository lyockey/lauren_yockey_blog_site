<!DOCTYPE html>
<html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <!-- Links to our Style.css file -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />

    </head>
<body>
    <div class="container">
        <header class="row">
            <div class="twelve columns">
                <h1><?php bloginfo('name'); ?></h1>
                <p id="subhead"><?php bloginfo('description'); ?></p>
            </div>
        </header>
        <!-- END OF HEADER - BEGIN SECTION CONTENT -->
