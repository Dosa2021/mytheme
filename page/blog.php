<?php
/* Template Name: blog */
get_header();
?>
<div class="blog">
    <h2><?php the_title(); ?></h2>
    <ul>
        <?php $the_query = new WP_Query( array( 'post_type' => 'post' ) ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                            <p>サムネイルがないです</p>
                        <?php endif; ?>
                        <div class="date"><?php the_date(); ?></div>
                        <h3><?php the_title(); ?></h3>
                    </a>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </ul>
</div>
<?php get_footer(); ?>