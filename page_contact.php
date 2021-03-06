<?php
/*
Template name: Contact
*/
?>


<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns banner-container">
            <img src="http://laurenyockey.com/wie/wp-content/uploads/2016/11/contact_banner.png" alt="Contact" id="contact-banner"/>
        </div>
    </section>

    <section class="row">
        <div class="twelve columns form-container">
            <?php
            wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'nav-container' ) );
            ?>
        </div>
    </section>

    <section class="row">
        <div class="eight columns">
            <h2 class="page-heading contact">Contact</h2>
            <!-- BEGIN LOOP -->
            <?php if ( have_posts() ) {
                while( have_posts() ) {
                /*OUR DATA CONTEXT IS DEFINED*/
                the_post(); ?>
                <?php the_content();?>
            <?php
            } //end while
            pagination_wie();
        } ?>
  <!--END LOOP -->
        </div>

        <div class="four columns sidebar">
            <?php get_sidebar(); ?>
        </div>

    </section>
<!--End Section Container -->
<?php get_footer(); ?>
