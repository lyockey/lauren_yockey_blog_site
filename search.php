<?php
/* Template Name: Search Page */
get_header(); ?>

<div class="row">
    <div class="eight columns search-page">

        <?php if( have_posts() ) :?>
            <h2 class="page-heading"><?php printf(
                __('Search Results for: %s'),
                '<span>' . get_search_query() . '</span>' );
            ?></h2>

            <?php
            while (have_posts()) : the_post(); ?>
                <h3 class="fp-title blog-post-headings"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content();
            endwhile;

         else : ?>
            <h1>Nothing Found</h1>
            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
        <?php endif; ?>

    </div>

    <div class="four columns sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
