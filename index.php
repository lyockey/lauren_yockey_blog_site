<?php get_header(); ?>

        <section class="row">
            <div class="twelve columns">
                <?php if ( has_post_thumbnail() ) { ?>
					<div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
				<?php } ?>
            </div>
        <section class="row">
            <div class="seven columns"
                <p id="introcopy">A collection of work from the Web Interactivity &amp; Engagement course as part of the University of Florida's WDOC program</p>
            </div>
        </section>

<?php get_footer(); ?>
