<?php
/*
Template name: Blog
*/
?>

<?php get_header(); ?>

<!-- Begin Section Container -->
<section class="row">
  <div class="eight columns">
      <!-- BEGIN LOOP -->
			<?php
			if ( have_posts() ) {
			    while ( have_posts() ) {
			        the_post();
			    } // end while
			} // end if
			?>
<!-- END LOOP -->
  </div>
  <div class="four columns">
      <?php get_sidebar(); ?>
  </div>
  </section>
<!-- End Section Container -->

<?php get_footer(); ?>