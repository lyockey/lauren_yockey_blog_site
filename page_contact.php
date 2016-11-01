<?php
/*
Template name: Contact
*/
?>


<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns">
            <img src="http://laurenyockey.com/wie/wp-content/uploads/2016/11/contact_banner.png" alt="Contact" id="contact-banner"/>
        </div>
    </section>

    <section class="row"
        <div class="twelve columns">
            <?php
            wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'nav-container' ) );
            ?>
        </div>
    </section>

    <section class="row">
        <div class="eight columns">
            <h2 class="page-heading">Contact</h2>
        </div>

        <div class="four columns">
            <?php get_sidebar(); ?>
        </div>

    </section>
  <!--End Section Container -->

<?php get_footer(); ?>
