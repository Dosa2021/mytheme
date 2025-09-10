<?php get_header(); ?>
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
                    <a href="<?php the_permalink(); ?>">続きを読む</a>
                </li>
                    <?php endwhile; else : ?>
                    <p>記事がありません。</p>
            <?php endif; ?>
        </ul>
    </div>
</main>
<?php get_footer(); ?>