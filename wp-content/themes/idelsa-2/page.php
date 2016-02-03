<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Idelsa
 */

get_header(); ?>

			<div class="ctn_main-content col-md-9">
				<div class="main-content">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php endwhile; // End of the loop. ?>
				</div>
				
			</div><!-- /main-content -->

<?php get_footer(); ?>
