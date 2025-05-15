<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>MyTheme</title>
        <!-- reset.css destyle -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?4">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css">
        <script src="<?php echo get_template_directory_uri(); ?>/main.js" type="text/javascript" charset="utf-8"></script>
    </head>
    <body>
        <header class="pc-nav">
            <ul><li><a href="<?php echo home_url('/'); ?>" class="home">Home</a></li></ul>
            <?php
            $defaults = array(
                'container'            => false,
                'menu_class'           => 'menu',
                'link_before'          => '',
                'link_after'           => '',
                'theme_location'       => 'gloval-navigation',
            );
            wp_nav_menu( $defaults );
            ?>
        </header>
        <header class="sp-nav">
            <i id="open" class="fa-solid fa-bars"></i>
            <div class="overlay">
                <i id="close" class="fa-solid fa-xmark"></i>
                <ul><li><a href="<?php echo home_url('/'); ?>" class="home">Home</a></li></ul>
                <?php
                $defaults = array(
                    'container'            => false,
                    'menu_class'           => 'menu',
                    'link_before'          => '',
                    'link_after'           => '',
                    'theme_location'       => 'gloval-navigation',
                );
                wp_nav_menu( $defaults );
                ?>
            </div>
        </header>
