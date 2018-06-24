<?php get_header(); ?>

<main class="leowp-archive">
	
	<section class="leowp-container">
		<div class="leowp-container__center">
			
			<header class="leowp-heading">
				<?php the_archive_title( '<h2 class="leowp-heading__title">', '</h2>' ); ?>
				<div class="leowp-heading__tagline"><?php the_archive_description(); ?></div>
			</header>

			<div class="leowp-loop leowp-grid">
				<?php if( have_posts() ): ?>
					<?php while( have_posts() ): ?>
						<?php the_post(); ?>
						<?php get_template_part( 'content/content-home' ); ?>
					<?php endwhile; ?>
				<?php else: ?>
					<?php get_template_part( 'content/content-none' ); ?>		
				<?php endif; ?>	
			</div>

		</div>
	</section>		

</main>

<?php get_footer(); ?>