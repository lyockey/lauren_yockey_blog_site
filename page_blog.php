<?php
/*
Template name: Blog Posts
*/
?>

<?php get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

<!-- Begin Section Container -->
<section class="row">
    <div class="twelve columns">
        <img src="http://laurenyockey.com/wie/wp-content/uploads/2016/11/blog_banner.png" alt="Contact" id="blog-banner" />
    </div>
</section>
<section class="row">
    <div class="twelve columns">
        <?php
            wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'nav-container' ) );
        ?>
    </div>
</section>
<section class="row">
    <div class="eight columns">
        <h2 class="page-heading">Blog Posts</h2>
    <!-- BEGIN LOOP -->
    <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <p class="date"><?php the_date(); ?></p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more-button">Read More</a>
            <?php endwhile; ?>
        <!-- Navigation -->
        <div class="navigation">
            <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
        </div>
        <?php endif;
        wp_reset_query(); ?>
    <!-- END LOOP -->
    </div>
    <div class="four columns">
        <?php get_sidebar(); ?>
    </div>
</section>
<!-- End Section Container -->

<?php get_footer(); ?>
