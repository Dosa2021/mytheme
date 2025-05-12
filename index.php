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
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Profile</a>
                </li>
            </ul>
        </header>
        <main>
            <h1>TATSUYA SUGAWARA</h1>
            <div class="pickup">
                <ul>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <li>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <p>サムネイルがないです</p>
                            <?php endif; ?>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <a href="#">続きを読む</a>
                        </li>
　                      <?php endwhile; else : ?>
　　                    <p>記事がありません。</p>
                    <?php endif; ?>
                </ul>
            </div>
        </main>
        <footer>
            <small>&copy; 2025 dosa</small>
        </footer>
    </body>
</html>