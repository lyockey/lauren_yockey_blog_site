<?php get_header(); ?>


<!-- Begin Section Container -->
    <section class="row">
        <div class="eight columns">

            <!-- BEGIN LOOP -->
            <?php if ( have_posts() ) {
                while( have_posts() ) {
                /*OUR DATA CONTEXT IS DEFINED*/
                the_post(); ?>

                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <p class="date">
                    <?php the_date(); ?>
                </p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>

            <?php
            } //end while
            pagination_wie();
        } ?>
  <!--END LOOP -->
    </div>

    <div class="four columns">
        <?php get_sidebar(); ?>
    </div>

  </section>
  <!--End Section Container -->

<?php get_footer(); ?>
