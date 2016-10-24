<?php get_header(); ?>


<!-- Begin Section Container -->
  <section class="row">
    <div class="twelve columns">

  <!-- BEGIN LOOP -->
      <?php
      if ( have_posts() ) {
          while( have_posts() ) {
            /*OUR DATA CONTEXT IS DEFINED*/
            the_post();
            if ( has_post_thumbnail() ) { ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php } ?>

                <h2><?php the_title(); ?></h2>
                <?php the_content();
            }
        }?>
  <!--END LOOP -->

    </div>
  </section>
  <!--End Section Container -->

<?php get_footer(); ?>
