<?php
/**
 * Template part for displaying single posts.
 *
 * @package Idelsa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="background: url(<?php the_field('imagen_portada'); ?>) no-repeat; background-size: cover;">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<!-- <div class="entry-meta">
			<?php idelsa_posted_on(); ?>
		</div>.entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'idelsa' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

