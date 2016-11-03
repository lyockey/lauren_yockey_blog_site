<?php get_header(); ?>

<!-- HEADER AREA -->
        <section class="row">
            <div class="twelve columns">
                <div class="banner">
                    <p id="banner-overlay">Web Interactivity</p>
                    <p> &amp; Engagement</p>
                </div>
            </div>
            <div class="twelve columns">
                <?php
                wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'nav-container' ) );
                ?>
            </div>
        </section>
<!-- INTRO COPY -->
        <section class="row">
            <div class="twelve columns">
                <p id="introcopy">A collection of work from the Web Interactivity &amp; Engagement course<br/><span id="bolder">as part of the University of Florida's WDOC program</span></p>
            </div>
        </section>
<!-- FEATURED POST -->
        <section class="row">
            <div class ="eight columns">
                <h2 class="fp-heading">Featured Post</h2>
                <div class="page-container">
                    <!-- Begin Loop -->
                    <?php
                    $i = 1; while (have_posts() && $i < 2) : the_post();
                    ?>
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('thumbnail');
                            }
                        ?>
                        <h3 id="fp-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <p class="date"><?php the_date(); ?></p>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="read-more-button">Read More</a>
                    <?php $i++; endwhile; ?>
                    <!-- End Loop -->
                </div>
            </div>
        <!-- End Section Container -->
            <div class="four columns sidebar">
                <?php get_sidebar(); ?>
            </div>
        </section>

<?php get_footer(); ?>
