<?php get_header(); ?>
    <?php rewind_posts(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
        <header>
          <figure>
            <?php the_post_thumbnail( "my-size" ); ?>
          </figure>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
        </header>
        <?php dynamic_sidebar( "sidebar-left" ); ?>
        <?php the_excerpt(); ?>
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
