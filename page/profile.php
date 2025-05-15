<!-- Template Name: profile -->

<?php get_header(); ?>
<div class="profile">
    <h2><?php the_title(); ?></h2>
    <div class="introduction">
        <div class="image">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
            <?php else : ?>
                <p>サムネイルがないです</p>
            <?php endif; ?>
        </div>
        <div class="history">
            <div class="name">菅原竜也</div>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>