<?php get_header(); ?>
<div class="single">
    <h2><?php the_title(); ?></h2>
    <section>
        <a href="<?php echo home_url('/'); ?>" class="">Home</a>
        &nbsp;-&nbsp;
        <a href="<?php echo home_url('/blog'); ?>">Blog</a>
        &nbsp;-&nbsp;
        <?php the_title(); ?>
    </section>
    <div class="image-box">
        <div class="shadow">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
            <?php else : ?>
                <p>サムネイルがないです</p>
            <?php endif; ?>
        </div>
    </div>
    <div class="content">
        <?php the_content(); ?>
    </div>
</div>
<?php get_footer(); ?>