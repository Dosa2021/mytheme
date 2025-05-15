<?php
/* Template Name: contact */
get_header();
?>
<div class="contact">
    <h2><?php the_title(); ?></h2>
    <?php echo do_shortcode('[contact-form-7 id="0bcf742" title="お問い合わせ"]'); ?>
</div>
<?php get_footer(); ?>
<style>
    .contact form {
        background-image: url(<?php the_post_thumbnail_url(); ?>);
    }
</style>
