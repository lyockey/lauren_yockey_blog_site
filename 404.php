<?php
/* Template: 404 page (Not Found) */

get_header(); ?>

    <section class="row 404-page">
        <div class="eight columns">
            <h2 class="page-heading">Not Found</h2>
                <h3 class="404-heading">This is somewhat embarrassing, isn't it?</h3>
                    <p>It looks like nothing was found at this location. Maybe try a search?</p>

                <h4 class="404-try-search">Try searching for what you need:</h4>
                <?php get_search_form(); ?>
        </div>
        <div class="four columns sidebar">
            <?php get_sidebar(); ?>
        </div>

    </section>

<?php get_footer(); ?>
