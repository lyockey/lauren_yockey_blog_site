<?php get_header(); ?>


<!-- Begin Section Container -->
  <section class="row">
    <div class="eight columns">

  <!-- BEGIN LOOP -->
      <?php if ( have_posts() ) {
          while( have_posts() ) {
            /*OUR DATA CONTEXT IS DEFINED*/
            the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <?php the_content();
          }
        }?>
  <!--END LOOP -->

    </div>

    <div class="four columns">
        <?php get_sidebar(); ?>
    </div>

  </section>
  <!--End Section Container -->

<?php get_footer(); ?>
