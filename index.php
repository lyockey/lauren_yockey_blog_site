<?php get_header(); ?>

<!-- HEADER AREA -->
        <section class="row">
            <div class="twelve columns">
                <div class="banner">
                    <p>Web Interactivity</p>
                    <p> &amp; Engagement</p>
                </div>
            </div>

<!-- INTRO COPY -->
        <section class="row">
            <div class="eight columns">
                <p id="introcopy">A collection of work from the Web Interactivity &amp; Engagement course as part of the University of Florida's WDOC program</p>
            </div>
        </section>
<!-- FEATURED POST -->
              <!-- Begin Loop -->
      <section class="row">
          <div class ="eight columns">
              <h2>Featured Post</h2>
              <div class="fp-container">
                  <?php
                    $i = 1; while (have_posts() && $i < 2) : the_post();
                    ?>
                          <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('thumbnail');
                                }
                            ?>
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Read More</a>

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
