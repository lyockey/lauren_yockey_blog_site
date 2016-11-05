<?php get_header(); ?>


<!-- Begin Section Container -->
  <section class="row single-page">
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

                <h2 class="fp-title single-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content();
            }
        }?>
  <!--END LOOP -->

    </div>
  </section>
  <!--End Section Container -->

<?php get_footer(); ?>
