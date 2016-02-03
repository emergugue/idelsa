<?php
/**
 * The template for displaying all single posts.
 *
 * @package Idelsa
 */

get_header(); ?>

			<div class="ctn_main-content col-md-9">
				<div class="main-content">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php endwhile; // End of the loop. ?>
				</div>
				
			</div><!-- /main-content -->

<?php get_footer(); ?>
