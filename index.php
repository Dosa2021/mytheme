get_header(); ?>
<main>
    <section class="content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php the_posts_pagination(); ?>
        <?php
            endwhile;
        elseif('404'):
        ?>
            <h2>お探しのページは見つけることができませんでした。</h2>
            URLが変更されたか、削除された可能性があります。<br>
            トップページ戻ってご確認ください。<br><br>
            <p><a href="<?php echo home_url('/'); ?>">トップページへ戻る</a></p>
        <?php
        endif;
        ?>
    </section><!--//class="content"-->
    <section class="sidebar">
        <?php get_sidebar(); ?>
    </section>
</main>
<?php
get_footer(); ?>
