<?php get_header();?>

<div id="hero">
    <h1> Welcome To Global Book Store</h1>

</div>

<div class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
    <?php the_content(); ?>
    <?php endwhile;else :endif;?>
</div>


<?php get_footer();?>
