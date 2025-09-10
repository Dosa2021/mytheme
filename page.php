<?php get_header(); ?>
<div class="page">
    <h2><?php the_title(); ?></h2>
    <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>
    <?php else : ?>
        <p>サムネイルがないです</p>
    <?php endif; ?>
    <p><?php the_content(); ?></p>
</div>
<?php get_footer(); ?>