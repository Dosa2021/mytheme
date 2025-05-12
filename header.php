<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>MyTheme</title>
        <!-- reset.css destyle -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
    </head>
    <body>
        <header>
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
