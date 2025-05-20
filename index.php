<?php get_header(); ?>
<main>
    <h1>TATSUYA SUGAWARA</h1>
    <div class="pickup">
        <ul>
            <?php $the_query = new WP_Query( array( 'tag' => 'pick_up' ) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <p>サムネイルがないです</p>
                            <?php endif; ?>
                            <h2><?php the_title(); ?></h2>
                        </a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </ul>
    </div>
</main>
<?php get_footer(); ?>