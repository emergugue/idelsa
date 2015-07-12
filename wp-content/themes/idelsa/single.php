<?php get_header(); ?>
<body>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		<figure>
			<?php the_post_thumbnail( "my-size" ); ?>
		</figure>
		<?php the_content(); ?>
		<footer>
			<span class="category"><?php the_category(); ?></span>
			<span class="autor"><?php the_author();; ?>, </span>
			<span class="fecha"><?php the_date(); ?></span>
		</footer>
	</article>
	<!-- post -->
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<h3>No se han encontrado entradas, vuelve luego.</h3>
	<!-- no posts found -->
<?php endif; ?>
<?php get_footer(); ?>