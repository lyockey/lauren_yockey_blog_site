<?php get_header(); ?>

<!-- HEADER AREA -->
        <section class="row">
            <div class="twelve columns">
                <div class="banner">
                    <p>Web Interactivity</p>
                    <p> &amp; Engagement</p>
                </div>
            </div>
        <section class="row">
            <div class="twelve columns">
                <?php
                wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'nav-container' ) );
                ?>
            </div>
        </section>
<!-- INTRO COPY -->
        <section class="row">
            <div class="eight columns">
                <p id="introcopy">A collection of work from the Web Interactivity &amp; Engagement course <span id="bolder">as part of the University of Florida's WDOC program</span></p>
            </div>
        </section>
<!-- FEATURED POST -->
              <!-- Begin Loop -->
      <section class="row">
          <div class ="eight columns">
              <h2 id="fp-heading">Featured Post</h2>
              <div class="fp-container">
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
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="read-more-button">Read More</a>

                    <?php $i++; endwhile; ?>
                  <!-- End Loop -->
              </div>
        </div>
<!-- End Section Container -->
            <div class="four columns">
                <?php get_sidebar(); ?>
            </div>
        </section>

<?php get_footer(); ?>
