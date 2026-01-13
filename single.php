<?php get_header(); ?>
<div class="single">
    <div class="image-box">
        <div class="shadow">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
            <?php else : ?>
                <p>サムネイルがないです</p>
            <?php endif; ?>
        </div>
    </div>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>